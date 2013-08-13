<center>
<?php
include "../config.php";
$ip=$_SERVER['REMOTE_ADDR'];
echo "Your IP address is: " . $ip;
echo <<<EOF
<hr width=95% noshade>
<a href="$site4">IPv4 Only</a> - 
<a href="$site">IPv4/IPv6</a> -
<a href="$site6">IPv6 Only</a>
EOF;
?>
</center>
