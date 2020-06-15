<?php
    include('../model/formclass.php');
    $rev  = $_POST['rev'];
    $cost = $_POST['cost'];

    $roi = new formdata();

    $roi->roicalculation($rev,$cost);
?>
