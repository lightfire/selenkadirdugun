<?php

/*// Get Branch Name.
$branch = isset($_GET['branch']) ? $_GET['branch'] : basename(realpath(__DIR__.'/..'));*/

// This Branch Name is Valid?
/*if ( !is_null($branch) )
{*/
    // Notifications.
    $messages = array();

    // Pull Last Changes.
    $messages[] = shell_exec("git pull origin master");

    // Write To All Notifications.
    foreach($messages as $message) echo nl2br($message);
//}