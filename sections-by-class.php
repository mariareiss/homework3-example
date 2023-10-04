<?php
require_once("util-db.php");
require_once("model-sections-by-class.php");

$pageTitle = "sections by class";
include "view-header.php";
$sections = selectSectionsByClass($_POST['sid']);
include "view-sections-by-class.php";
include "view-footer.php";
?>
