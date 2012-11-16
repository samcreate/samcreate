<?php


$settings->setPage("Portfolio item");
$class = "portfolio item";

$campaign = Campaign::first();

include DIR_VIEW.'/portfolio_item.php';

?>
