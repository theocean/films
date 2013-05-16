<?php
define('IN_MEDIA',true);
include("includes/config.php");
include_once('includes/open_db.php');

$query = $mysql->query("SELECT * FROM categories ORDER BY order_id");
$items = $mysql->fetch_array($query);
if(0<$mysql->num_rows($query)) echo "abc";
//echo  $mysql->num_rows($query);

if($config_vars['site_on']=='on')
    echo "site online";
else echo "site offline";


include_once('includes/close_db.php');
?>