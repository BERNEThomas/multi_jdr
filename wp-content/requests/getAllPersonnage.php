<?php
    global $wpdb;
    $resultats = $wpdb->get_results("SELECT * FROM Personnage");
    