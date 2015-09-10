<?php
define('MODULE_DIR', dirname(__FILE__)."/modules/");
//define('MODULE_DIR', ROOT_DIR."modules/");
require_once "./../Core/router.php";

echo "load home/view.php <br />";
router('home', 'view');

echo "View not found <br />";
router('home', '21212s');

//echo "module and view not found <br />";
//router('contacts', 'form');
?>