<?php

ob_start('ob_gzhandler');
define('DIR_WEB', dirname(__FILE__));
define('DIR_MODUP', dirname(__FILE__).'/lib/php');
define('DIR_SYS', DIR_MODUP.'/system');
define('DIR_CTRL', DIR_MODUP.'/controller');
define('DIR_TMPL', DIR_MODUP.'/template');
define('DIR_VIEW', DIR_MODUP.'/view');
define('DIR_PLUGINS', DIR_MODUP.'/plugins');

require_once DIR_MODUP.'/app.php';

$app = new App();

?>
