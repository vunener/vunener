<?php include 'menu.inc'; 

$query = "SELECT code, name, lecturer FROM modules";
$result = $conn->query($query);
while($data = $result->fetch (PDO:: database)){
?>
<tr>
    <td><?php echo $data['code'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['lecturer']; ?></td>
</tr>
<?php
}
?>
<iframe src="task4.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
