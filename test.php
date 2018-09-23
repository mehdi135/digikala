<?php

$name=[5,2,1,3];
$params=serialize($name);
$n=sizeof($name);
//print_r($n);
//print_r($name);
//print ($params);

?>
<!doctype html>
<html lang="en">
<head>
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
</head>
<body>

<?php
$name=$_POST['parent'];
echo $name;
?>


</body>
</html>