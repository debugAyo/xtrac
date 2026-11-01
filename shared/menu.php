<?php
/**
 * xTrac menu configuration: per-role sidebar definitions.
 * Markup matches the original securedpage.php sidebars exactly.
 *
 * Item format: array('list' => <POST list value>, 'icon' => <fa icon class>)
 * Group format: array('label' => ..., 'icon' => ..., 'items' => array(...))
 * A group with 'single' => true renders as a direct button, not a dropdown.
 */

function xtrac_menu($role)
{
    $addAsset = array(
        array('list' => 'Add Item',                  'icon' => 'fa-cloud'),
        array('list' => 'Software Association',      'icon' => 'fa-file-video-o'),
        array('list' => 'Parts Association',          'icon' => 'fa-file-video-o'),
        array('list' => 'Invoice Association',        'icon' => 'fa-globe'),
        array('list' => 'Contract Association',       'icon' => 'fa-file-video-o'),
    );
    $assetListing = array(
        array('list' => 'View All Assets',            'icon' => 'fa-cloud'),
        array('list' => 'View Assets by Category',    'icon' => 'fa-file-video-o'),
        array('list' => 'View Assets by Dependency',  'icon' => 'fa-file-video-o'),
    );
    $incident = array(
        array('list' => 'Supports Management',        'icon' => 'fa-cloud'),
        array('list' => 'Ticket Management',          'icon' => 'fa-cloud'),
        array('list' => 'Tickets Listing',            'icon' => 'fa-file-video-o'),
        array('list' => 'Create New Ticket',          'icon' => 'fa-globe'),
        array('list' => 'Ticket Tracking',            'icon' => 'fa-file-video-o'),
        array('list' => 'Compliance Management',      'icon' => 'fa-globe'),
    );
    $events = array(
        array('list' => 'View Recent',                'icon' => 'fa-cloud'),
        array('list' => 'View All',                   'icon' => 'fa-file-video-o'),
    );
    $depreciation = array(
        array('list' => 'Depreciation Summary',       'icon' => 'fa-cloud'),
        array('list' => 'Depreciation Calculator',    'icon' => 'fa-file-video-o'),
    );
    $barcode = array(
        'label' => 'Barcode Generation', 'icon' => 'fa-barcode',
        'single' => true, 'list' => 'Barcode Generation',
    );
    $tracking = array(
        'label' => 'Asset Tracking', 'icon' => 'fa-mixcloud',
        'single' => true, 'list' => 'Asset Tracking',
    );
    $logout = array(
        'label' => 'Logout', 'icon' => 'fa-sign-out',
        'single' => true, 'list' => 'Logout', 'action' => 'logout.php',
    );

    if ($role === 'store') {
        return array(
            array('label' => 'Dashboard', 'icon' => 'fa-sitemap', 'items' => array(
                array('list' => 'Procurement Trends',  'icon' => 'fa-cloud'),
                array('list' => 'Assets Status Chart', 'icon' => 'fa-file-video-o'),
                array('list' => 'Technical Analysis',  'icon' => 'fa-cloud'),
                array('list' => 'Budget Dashboard',    'icon' => 'fa-file-video-o'),
                array('list' => 'Gap Analysis',        'icon' => 'fa-globe'),
            )),
            array('label' => 'Add New Asset', 'icon' => 'fa-group', 'items' => $addAsset),
            array('label' => 'Requests', 'icon' => 'fa-group', 'items' => array(
                array('list' => 'Requisition Form',    'icon' => 'fa-cloud'),
                array('list' => 'Requisitions',        'icon' => 'fa-file-video-o'),
                array('list' => 'Requisition Status',  'icon' => 'fa-file-video-o'),
                array('list' => 'Requisition Tracking','icon' => 'fa-globe'),
            )),
            array('label' => 'Inventory', 'icon' => 'fa-group', 'items' => array(
                array('list' => 'Inventory Issuing',   'icon' => 'fa-cloud'),
                array('list' => 'Issued Inventory',    'icon' => 'fa-file-video-o'),
            )),
            $tracking,
            array('label' => 'Asset Listing', 'icon' => 'fa-group', 'items' => $assetListing),
            array('label' => 'Store Check', 'icon' => 'fa-sitemap', 'items' => array(
                array('list' => 'Shelf Management',    'icon' => 'fa-cloud'),
                array('list' => 'Disposal Management', 'icon' => 'fa-file-video-o'),
                array('list' => 'New Arrivals',        'icon' => 'fa-cloud'),
            )),
            array('label' => 'Incident Management', 'icon' => 'fa-support', 'items' => $incident),
            $logout,
        );
    }

    if ($role === 'admin' || $role === 'staff') {
        return array(
            array('label' => 'Dashboard', 'icon' => 'fa-sitemap', 'items' => array(
                array('list' => 'Procurement Trends',  'icon' => 'fa-cloud'),
                array('list' => 'Status Chart',        'icon' => 'fa-file-video-o'),
                array('list' => 'Financial Analysis',  'icon' => 'fa-globe'),
                array('list' => 'Technical Report',    'icon' => 'fa-cloud'),
                array('list' => 'Phased Budgeting',    'icon' => 'fa-file-video-o'),
                array('list' => 'Status Reporting',    'icon' => 'fa-globe'),
            )),
            $barcode,
            array('label' => 'Add New Asset', 'icon' => 'fa-group', 'items' => $addAsset),
            $tracking,
            array('label' => 'Asset Listing', 'icon' => 'fa-group', 'items' => $assetListing),
            array('label' => 'Depreciation Management', 'icon' => 'fa-sitemap', 'items' => $depreciation),
            array('label' => 'Budget Management', 'icon' => 'fa-sitemap', 'items' => array(
                array('list' => 'Budget Listing',                'icon' => 'fa-cloud'),
                array('list' => 'Operational Expenses',          'icon' => 'fa-file-video-o'),
                array('list' => 'Software and Licensing Budget', 'icon' => 'fa-globe'),
                array('list' => 'Hardware Budget',               'icon' => 'fa-cloud'),
                array('list' => 'Special Projects',              'icon' => 'fa-file-video-o'),
            )),
            array('label' => 'Incident Management', 'icon' => 'fa-support', 'items' => $incident),
            array('label' => 'Settings', 'icon' => 'fa-cog fa-spin', 'items' => array(
                array('list' => 'Network Settings',              'icon' => 'fa-cloud'),
                array('list' => 'Department Settings',           'icon' => 'fa-cloud'),
                array('list' => 'Privilege Settings',            'icon' => 'fa-cloud'),
                array('list' => 'Users Settings',                'icon' => 'fa-cloud'),
                array('list' => 'Assets Category Settings',      'icon' => 'fa-file-video-o'),
                array('list' => 'Supports Category Settings',    'icon' => 'fa-globe'),
                array('list' => 'Financial Account Settings',    'icon' => 'fa-file-video-o'),
            )),
            array('label' => 'Events Logging', 'icon' => 'fa-group', 'items' => $events),
            $logout,
        );
    }

    // Default: super admin (users_prof)
    return array(
        array('label' => 'Dashboard', 'icon' => 'fa-sitemap', 'items' => array(
            array('list' => 'Procurement Trends',   'icon' => 'fa-cloud'),
            array('list' => 'Assets Status Chart',  'icon' => 'fa-file-video-o'),
            array('list' => 'Technical Analysis',   'icon' => 'fa-cloud'),
            array('list' => 'Budget Dashboard',     'icon' => 'fa-file-video-o'),
            array('list' => 'Gap Analysis',         'icon' => 'fa-globe'),
        )),
        array('label' => 'Settings', 'icon' => 'fa-cog fa-spin', 'items' => array(
            array('list' => 'Network Settings',           'icon' => 'fa-cloud'),
            array('list' => 'Department Settings',        'icon' => 'fa-cloud'),
            array('list' => 'Privilege Settings',         'icon' => 'fa-cloud'),
            array('list' => 'Users Settings',             'icon' => 'fa-cloud'),
            array('list' => 'Supports Category Settings', 'icon' => 'fa-globe'),
            array('list' => 'Financial Account Settings', 'icon' => 'fa-file-video-o'),
        )),
        $barcode,
        array('label' => 'Add New Asset', 'icon' => 'fa-group', 'items' => $addAsset),
        $tracking,
        array('label' => 'Asset Listing', 'icon' => 'fa-group', 'items' => $assetListing),
        array('label' => 'Depreciation Management', 'icon' => 'fa-sitemap', 'items' => $depreciation),
        array('label' => 'Budget Management', 'icon' => 'fa-sitemap', 'items' => array(
            array('list' => 'Budget Listing',                'icon' => 'fa-cloud'),
            array('list' => 'Operational Expenses',          'icon' => 'fa-file-video-o'),
            array('list' => 'Software and Licensing Budget', 'icon' => 'fa-globe'),
            array('list' => 'Hardware Budget',               'icon' => 'fa-cloud'),
            array('list' => 'Special Projects',              'icon' => 'fa-file-video-o'),
        )),
        array('label' => 'Incident Management', 'icon' => 'fa-support', 'items' => $incident),
        array('label' => 'Events Logging', 'icon' => 'fa-group', 'items' => $events),
        $logout,
    );
}

/**
 * Render the sidebar HTML for a role. $appcode is echoed into hidden fields.
 */
function xtrac_render_menu($role, $appcode)
{
    $menu = xtrac_menu($role);
    $btn = 'class="w3-text-green w3-white w3-hover-text-black" style="border:0px solid; padding: 6px 8px; cursor:pointer"';
    $top = 'class="button list-group-item w3-black w3-text-grey w3-hover-text-light-green" style="border:0px solid; padding: 6px 8px; cursor:pointer; font-size:font-size:20px;letter-spacing:0.6px"';

    echo '<div class="w3-row-padding">' . "\n";
    echo '<div class="w3-quarter w3-padding-large w3-black">' . "\n";
    echo '<h4 class="w3-border-bottom w3-border-grey w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-briefcase w3-text-light-grey w3-hover-text-light-green"></i> MANAGEMENT</h4>' . "\n";
    echo '<div class="left list-group">' . "\n";

    foreach ($menu as $group) {
        $icon = '<i class="fa ' . htmlspecialchars($group['icon']) . ' w3-text-light-green" aria-hidden="true" style="font-size:20px;"></i> ';
        $label = htmlspecialchars($group['label']);

        if (!empty($group['single'])) {
            $action = isset($group['action']) ? $group['action'] : '';
            echo '<form method="post" action="' . htmlspecialchars($action) . '">'
                . '<input type="hidden" name="appcode" value="' . htmlspecialchars($appcode) . '">'
                . '<button type="submit" ' . $top . ' name="list" value="' . htmlspecialchars($group['list']) . '">'
                . $icon . $label . '</button></form>' . "\n";
            continue;
        }

        echo '<div class="dropdown" style="width:100%;">' . "\n";
        echo '<button type="submit" name="submit" ' . $top . '>' . $icon . $label . '</button>' . "\n";
        echo '<div class="dropdown-content">' . "\n";
        echo '<div class="w3-padding-medium w3-white">' . "\n";
        foreach ($group['items'] as $item) {
            $iicon = '<i class="fa ' . htmlspecialchars($item['icon']) . '" style="font-size:font-size:20px"></i> ';
            $ilabel = htmlspecialchars($item['list']);
            echo '<form action="" method="post">'
                . '<input type="hidden" name="list" value="' . htmlspecialchars($item['list']) . '">'
                . '<input type="hidden" name="appcode" value="' . htmlspecialchars($appcode) . '">'
                . '<button type="submit" name="submit" ' . $btn . '>' . $iicon . $ilabel . '</button></form>' . "\n";
        }
        echo '</div>' . "\n";
        echo '</div>' . "\n";
        echo '</div>' . "\n";
    }

    echo '</div>' . "\n";
    echo '</div>' . "\n";
}
