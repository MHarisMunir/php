<?php
include "namespaceconstants.php";
include "subnamespace1.php";
include "subnamespace2.php";

echo myconstants_new\MYFILE;
echo "<br>";
echo subnamespace\sb1\MYFILE;
echo "<br>";
echo subnamespace\sb2\MYFILE;
?>