<?php
echo "Hello World!";
$db = new SQLite3("C:\Users\Aoi\Desktop\DB.sqlite");
$sql = "SELECT * FROM unti";
$result = $db->query($sql);
while($row = $result->fetchArray()){
echo "\n{$row['aaa']}";
}
?>