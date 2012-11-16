<?php


ob_start('ob_gzhandler');
//{{{ defining constants
define('DIR_WEB', dirname(__FILE__));
define('DIR_MODUP', dirname(__FILE__).'/lib/php');
define('DIR_SYS', DIR_MODUP.'/system');
define('DIR_CTRL', DIR_MODUP.'/controller');
define('DIR_TMPL', DIR_MODUP.'/template');
define('DIR_VIEW', DIR_MODUP.'/view');
define('DIR_PLUGINS', DIR_MODUP.'/plugins');

//}}}
//{{{ disecting the URI
$ru = &$_SERVER['REQUEST_URI'];
$qmp = strpos($ru, '?');
list($path, $params) = $qmp === FALSE
    ? array($ru, NULL)
    : array(substr($ru, 0, $qmp), substr($ru, $qmp + 1));
$parts = explode('/', $path);
$i = 0;
foreach ($parts as $part)
{
    if (strlen($part) && $part !== '..' && $part !== '.')
    {
        define('URI_PART_'.$i++, $part);
    }
}
define('URI_PARAM', isset($params) ? '' : $params);
define('URI_PARTS', $i);
define('URI_PATH', $path);
define('URI_REQUEST', $_SERVER['REQUEST_URI']);

//}}}
//{{{ routing and other init
session_start();
require_once DIR_SYS.'/Config.php';
include DIR_SYS.'/router.php';
include DIR_SYS.'/config.routes.php';

$settings = Config::getInstance();

if ($ctrl = Router::controller()) 
{
    include $ctrl;
}
else 
{
    header('HTTP/1.1 404 Not Found');
}

//}}}

?>
