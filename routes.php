<?php
    $routes_array = array(
        'dashboard' => array(
            'link' => './components/dashboard.php',
            'name' => 'Dashboard',
            'icon' => 'icon-grid menu-icon',
            'isList' => true
        ),

        //contacts to be add over here
        'contacts' => array(
            'link' => './components/contact-list.php',
            'name' => 'Contact',
            'icon' => 'mdi mdi-account-card-details menu-icon',
            'isList' => true
        ),

        //campaigns
        'campaigns' => array(
            'link' => './components/campaign-list.php',
            'name' => 'Campaigns',
            'icon' => 'mdi mdi-sale menu-icon',
            'isList' => true
        ),
        'create-campaign' => array(
            'link' => './components/create-campaign.php',
            'name' => 'Create Campaign',
            'icon' => 'mdi mdi-sale menu-icon',
            'isList' => false
        )
    );
    $component = $routes_array['dashboard'];
    if(isset($_GET['route'])) {
        $component = $routes_array[$_GET['route']];
    }

?>