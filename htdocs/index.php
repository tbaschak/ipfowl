<center>
<?php
include "../config.php";
$ip=$_SERVER['REMOTE_ADDR'];
echo "Your IP address is: " . $ip;
echo <<<EOF
<hr width=95% noshade>
<a href="$proto$site4">IPv4 Only</a> - 
<a href="$proto$site">IPv4/IPv6</a> -
<a href="$proto$site6">IPv6 Only</a>
EOF;
?>
</center>
