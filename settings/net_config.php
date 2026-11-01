<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $interface = escapeshellarg(trim($_POST['interface']));
    $ip = escapeshellarg(trim($_POST['ip']));
    $netmask = escapeshellarg(trim($_POST['netmask']));
    $gateway = escapeshellarg(trim($_POST['gateway']));
    $dnsServers = explode(',', trim($_POST['dns']));

    // Function to set static IP
    function setStaticIP($interface, $ip, $netmask, $gateway) {
        $command = "netsh interface ip set address name=$interface static $ip $netmask $gateway";
        return shell_exec($command);
    }

    // Function to set DNS servers
    function setDNS($interface, $dnsServers) {
        foreach ($dnsServers as $dns) {
            $command = "netsh interface ip set dns name=$interface static " . escapeshellarg(trim($dns));
            shell_exec($command);
        }
    }

    // Apply configurations
    $output = setStaticIP($interface, $ip, $netmask, $gateway);
    setDNS($interface, $dnsServers);

    // Display output
    echo "<h2>Configuration Result:</h2>";
    echo "<pre>$output</pre>";
    echo "<p>Network Configurations successfully updated.</p>";
} else {
    echo "<p>No data submitted. Please fill out the form.</p>";
}
?>
