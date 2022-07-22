<?php
    $routes_array = array(
        'dashboard' => array(
            'link' => './components/dashboard.php',
            'name' => 'Dashboard',
            'icon' => 'icon-grid menu-icon',
            'isList' => true
        ),


        'contacts' => array(
            'link' => './components/contact-list.php',
            'name' => 'Contact',
            'icon' => 'mdi mdi-account-card-details menu-icon',
            'isList' => true
        ),

        'Add Contact' => array(
            'link' => './components/contact-form.php',
            'name' => 'addcontact',
            'icon' => 'mdi mdi mdi-account-plus',
            'isList' => true
        )
    );
    $component = $routes_array['dashboard'];
    if(isset($_GET['route'])) {
        $component = $routes_array[$_GET['route']];
    }

?>