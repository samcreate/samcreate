<?php


$settings->setPage("Portfolio item");

$class = "portfolio item";

$campaign = Campaign::find_by_slug(URI_PART_1);

include DIR_VIEW.'/work_item.php';

?>
