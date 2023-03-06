<?php
require_once 'classes/Application.php';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $job_id = $_POST['job_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];   
   
    $application = new Application( $job_id, $name, $email, $phone);
    if ( $application->save() ) {
        echo '<h2>Application Submitted!</h2>';
    } else {
        echo '<h2>Application Failed.</h2>';
    }
} else {
    echo '<h2>Invalid Request.</h2>';
}
?> 



