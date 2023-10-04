<?php
require_once("util-db.php");
require_once("model-professors.php");

$pageTitle = "Professors";
include "view-header.php";
$professors = selectProfessors();
include "view-professors.php";
include "view-footer.php";
?>
