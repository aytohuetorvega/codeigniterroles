<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;



// From the blog-post

$connectstr_dbhost = 'db';
$connectstr_dbname = 'iesferna_roles_codeigniter';
$connectstr_dbusername = 'root';
$connectstr_dbpassword = 'root';
foreach ($_SERVER as $key => $value)
{
    if (strpos($key, "MYSQLCONNSTR_") !== 0)
    {
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);

    
}

define('DB_NAME', $connectstr_dbname);
define('DB_USER', $connectstr_dbusername);
define('DB_PASSWORD', $connectstr_dbpassword);
define('DB_HOST', $connectstr_dbhost);



$dbConnection = $dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);





$db['default']['hostname'] = $connectstr_dbhost;
$db['default']['username'] = $connectstr_dbusername;
$db['default']['password'] = $connectstr_dbpassword;
$db['default']['database'] = 'iesferna_roles_codeigniter';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */
