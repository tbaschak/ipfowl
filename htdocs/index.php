<?php
$ip=$_SERVER['REMOTE_ADDR'];
echo "<br> Your IP address : " . $ip;
echo "<br> Your hostname : " . GetHostByName($ip);
?>
