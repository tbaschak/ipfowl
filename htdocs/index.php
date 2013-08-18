<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <title>IP Fowl</title>
</head>

<body>
  <a href="https://github.com/tbaschak/ipfowl"><img style=
  "position: absolute; top: 0; right: 0; border: 0;" src=
  "https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"
  alt="Fork me on GitHub"></a>

  <table align="center">
    <tr>
      <td><img src="images/chicken.png" align="left"></td>

      <td>
<?php
include "../config.php";
$ip=$_SERVER['REMOTE_ADDR'];
echo "Your IP address is<br>\n" . $ip;
echo <<<EOF
<hr width=95% noshade>
<a href="$proto$site4">IPv4 Only</a> - 
<a href="$proto$site">IPv4/IPv6</a> -
<a href="$proto$site6">IPv6 Only</a>
EOF;
?>
      </td>
    </tr>
  </table>
</body>
</html>

