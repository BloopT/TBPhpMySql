<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$db = "db";
try {
    $db = new PDO('mysql:host=172.21.0.2;port=3306;dbname=my_database', 'root', 'admin');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?> 
</body>
</html>