<?php
echo "Hello World!";

// Check connection
try {
  $db = new PDO("mysql:host=db;dbname=TestDB", "root", "root");
  echo "Connection succes";

} catch (Exception $e) {
  echo "Connection failed";
}

$sql = 'SELECT * FROM videorapport';
  print "<pre>";
    foreach ($db->query($sql) as $row) {
        print $row['firstName'] . "\t";
        print $row['lastName'] . "\t";
        print $row['name'] . "\n";
    }
    print "</pre>";
?>
