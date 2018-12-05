

<?php
$q = ($_GET['q']);
echo $q;
$con = mysqli_connect('localhost','pulkit','pulkit','new');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM doctors WHERE speciality = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {

    echo "<option value=".$row['doctor_id'].">" . $row['name'] . "</option>" ;
}
mysqli_close($con);
?>
</body>
</html> 