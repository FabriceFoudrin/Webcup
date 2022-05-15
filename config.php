<?php
    // Blockonmics API stuff
   // $apikey = "ZMcFNHVXK0N9r52RGqJYhgt4crUIIFmGDTkeVyHN5mo";
    $url = "https://www.blockonomics.co/api/";
    
    $options = array( 
        'http' => array(
            'header'  => 'Authorization: Bearer '.$apikey,
            'method'  => 'POST',
            'content' => '',
            'ignore_errors' => true
        )   
    );

    // Connection info
    $conn = mysqli_connect("localhost", "root", "", "webcup"); // enter your info
?>