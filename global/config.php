<?php
define('SQL_DSN', 'mysql:dbname=tutoriel;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

$module = empty($module) ? !empty($_GET['module']) ? $_GET['module']: 'index': $module;
define('CHEMIN_VUE', 'modules/'.$module.'/vues');
define('CHEMIN_MODELE', 'modules/');
define('CHEMIN_LIB', 'libs/');

