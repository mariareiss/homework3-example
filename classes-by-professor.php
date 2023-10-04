<?php
require_once("util-db.php");
require_once("model-classes-by-professor.php");

$pageTitle = "Classes by Professor";
include "view-header.php";
$Classes = selectClassesByProfessor($_GET['id']);
include "view-classes-by-professor.php";
include "view-footer.php";
?>
