<?php include_once('conn.php')?>

<p><?php echo $connectionStatus ?></p>

<p>Latest Refresh: <?php echo 

$latest->fetch_array()[0]

?></p>

<p>Errors: <?php

    if ($error) {
        echo $error;
    } else {
        echo "None";
    }

?></p>