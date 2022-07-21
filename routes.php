<?php
    $routes_array = array(
        'dashboard' => array(
            'link' => './components/dashboard.php',
            'name' => 'Dashboard',
            'icon' => 'icon-grid menu-icon'
        ),


        'contacts' => array(
            'link' => './components/contact-list.php',
            'name' => 'Contact',
            'icon' => 'mdi mdi-account-card-details menu-icon'
        )
    );
    $component = $routes_array['dashboard'];
    if(isset($_GET['route'])) {
        $component = $routes_array[$_GET['route']];
    }

?>