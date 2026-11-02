<?php
/**
 * Network interface configuration.
 *
 * SECURITY: shell_exec("netsh ...") can reconfigure the host network
 * and was reachable to any authenticated user. Execution is now gated
 * behind the XTRAC_NET_CONFIG_ENABLED flag (set it to "1" in the
 * environment to opt in). By default the page only shows the commands
 * that would run (dry run).
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $interface = trim($_POST['interface']);
    $ip = trim($_POST['ip']);
    $netmask = trim($_POST['netmask']);
    $gateway = trim($_POST['gateway']);
    $dnsServers = array_filter(array_map('trim', explode(',', $_POST['dns'])));
    $dryRun = (getenv('XTRAC_NET_CONFIG_ENABLED') !== '1');

    // Validate inputs (no shell metacharacters in any field).
    $valid = '/^[A-Za-z0-9 ._-]+$/';
    $fields = array('interface' => $interface, 'ip' => $ip, 'netmask' => $netmask, 'gateway' => $gateway);
    $errors = array();
    foreach ($fields as $name => $value) {
        if ($value === '' || !preg_match($valid, $value)) {
            $errors[] = htmlspecialchars($name) . ' contains invalid characters';
        }
    }
    foreach ($dnsServers as $dns) {
        if (!preg_match($valid, $dns)) {
            $errors[] = 'DNS entry contains invalid characters';
        }
    }

    if ($errors) {
        echo '<h2>Configuration Error:</h2>';
        echo '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
        exit();
    }

    $commands = array();
    $commands[] = "netsh interface ip set address name=$interface static $ip $netmask $gateway";
    foreach ($dnsServers as $dns) {
        $commands[] = "netsh interface ip set dns name=$interface static $dns";
    }

    if ($dryRun) {
        echo '<h2>Dry Run (execution disabled)</h2>';
        echo '<p>Set <code>XTRAC_NET_CONFIG_ENABLED=1</code> in the environment to apply.</p>';
        echo '<pre>' . htmlspecialchars(implode("\n", $commands)) . '</pre>';
    } else {
        $output = '';
        foreach ($commands as $command) {
            $output .= shell_exec($command) . "\n";
        }
        echo '<h2>Configuration Result:</h2>';
        echo '<pre>' . htmlspecialchars($output) . '</pre>';
        echo '<p>Network Configurations successfully updated.</p>';
    }
} else {
    echo '<p>No data submitted. Please fill out the form.</p>';
}
?>
