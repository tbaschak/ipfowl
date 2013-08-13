<?php
include "../config.php";
$ip=$_SERVER['REMOTE_ADDR'];
echo "Your IP address is: " . $ip;
echo <<<EOF
<hr width=95% noshade>
<a href="$4site">IPv4 Only</a> - 
<a href="$site">IPv4/IPv6</a> -
<a href="$6site">IPv6 Only</a>
EOF;
?>
