<?php


$redis = new Redis();
$redis->connect('redis', 6379);
echo "<p>connection to server succefully</p><br>";

echo "<p>server is running:" .$redis->ping() . "</p><br>";

//echo "hello world";

$redis->set("user", "Sam le bg");

echo "<p>".$redis->get('user') ."</p>";