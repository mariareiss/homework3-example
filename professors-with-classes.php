<?php
require_once("util-db.php");
require_once("model-professors-with-classes.php");

$pageTitle = "Professors with Classes";
include "view-header.php";
$professors = selectProfessors();
include "view-professors-with-classes.php";
include "view-footer.php";
?>
