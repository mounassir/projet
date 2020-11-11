<?php

    $con=mysqli_connect('localhost','root','','safivert');

    // Check connection
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>