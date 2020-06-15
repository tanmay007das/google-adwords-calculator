<?php
    include('../model/formclass.php');
    $spnd  =    $_POST['spend'];
    $totclks = $_POST['totalclk'];

    $cpccal = new formdata();

    $cpccal->cpccalculation($spnd,$totclks);
?>
