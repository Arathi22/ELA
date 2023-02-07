<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

ob_start();//object oriented started
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "airline"); //database name//change
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc




//========== site details described here ========================
define('SITE_TITLE', 'sovereign.com');//change
define('SITE_TAG_LINE', 'give your tag line of your project here');

//contact ifnormation
define('SITE_CONTACT', 'your number');
//email information
define('SITE_EMAIL_INFO', 'your mail id');
//url information
define('BASE_URL', 'http://localhost/project/');//demo folder name//change
// included main class
require_once 'app/Main.php';

/**
 * @param $class
 */
function __autoload($class) {
    require_once 'app/' . $class.'.php';
}