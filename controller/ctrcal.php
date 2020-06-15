<?php
    include('../model/formclass.php');
    $totclks  = $_POST['totclks'];
    $totimprs = $_POST['totimprs'];

    $ctrcal = new formdata();

    $ctrcal->ctrcalculation($totclks,$totimprs);
?>


                        