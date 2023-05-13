<html>
<head>   
<link href="kalender.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'satu.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html>  