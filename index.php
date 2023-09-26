<?php
require_once "CustomValidator.php";

$a = new ValidClass;
//echo $a->valid(["5", 3, 4.6]);
echo $a->valid(70);

?>