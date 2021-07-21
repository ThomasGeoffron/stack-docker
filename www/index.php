<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/framework.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php


$redis = new Redis();
$redis->connect('redis', 6379);
echo "<p>connection to server succefully</p><br>";

echo "<p>server is running:" .$redis->ping() . "</p><br>";

//echo "hello world";

$redis->set("user", "Sam le bg");

echo "<p>".$redis->get('user') ."</p>";
?>
</body>
</html>
