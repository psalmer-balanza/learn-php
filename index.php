<!DOCTYPE html>
<html>
<body>
 
<?php
include('includes/db.php');
$stmt = $db->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->get_result();
$ctr = 0;
while ($row = $result->fetch_assoc()) {
    $ctr++;
    echo "Username " . $ctr . ":" . $row["username"] . "<br>";
    echo "Password " . $ctr . ":" . $row["password"] . "<br>";
    echo "Role " . $ctr . ":" . $row["role"] . "<br>";
    echo "<hr>";    
}
$stmt->close();
$db->close();
echo "Ello world";
?>

</body>
</html>