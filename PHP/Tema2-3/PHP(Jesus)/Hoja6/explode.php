<?php
$datos = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = 
explode(":", $datos);
echo $user; 
echo $pass;  