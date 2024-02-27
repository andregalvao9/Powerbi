php
<?php
$chave_1="TQurL2r5mR6quMi94Ka1JTQOMPqRjAlw";
$hashChave_2= sha1("NvzGSw6LzUDHojLcJps3cIuYxbUI5U6A");
$utc_tz = new DateTimeZone('UTC');
$now_dt = new DateTime("now",$utc_tz);
$token = hash_hmac('sha1',$now_dt->format("YmdHi").$chave_1,$hashChave_2);

echo $token;
?>
2
