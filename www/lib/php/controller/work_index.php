<?php


$settings->setPage("Portfolio");

$class = "portfolio";

$campaigns = Campaign::find("all");

include DIR_VIEW.'/work_index.php';

?>
