<?php

include "vars.inc.php";

function do_query($sql)
{

    /*
     *  usually our old legacy app is doing some crazy mysqli_connection here
     *

    $connection = mysqli_connect($host, $db, $user, $password);
    if (!mysqli_error()) {
       // show some dirty error message
    }
    return mysqli_query($connection, $sql);

     *  for the sake of simplicity, we keep this part out and pretend to return a db result
     */

    // this is our mocked SQL result
    return array(
        array(
            'title' => 'Home',
            'url' => '/',
        ),
        array(
            'title' => 'Page Two',
            'url' => '/page2.php',
        ),
        array(
            'title' => 'Page Three',
            'url' => '/page3.php',
        ),
    );
}

