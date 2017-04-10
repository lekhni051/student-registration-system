<?php

session_start();
if(!$_SESSION['admin_name'])

{
header('location: admin_login.php?error=you are not an administrator!..<br> please log in !');

}

?>




<html>
   <head>
<title>Viewing the Records</title>
   </head>
<body>
<a href='user_registration.php'>Insert New Record</a>
<br>
<b>Welcome:</b><font color='red' size='3'><?php echo $_SESSION['admin_name']; ?>


</font>
<br>
<a href='logout.php'>logout</a>


<center><font color='dark-pink' size='5' align='center'><?php echo @$_GET['deleted']; ?></font></center>
<center><font color='dark-pink' size='5' align='center'><?php echo @$_GET['updated']; ?></font></center>
<center><font color='dark-pink' size='5' align='center'><?php echo @$_GET['logged']; ?></font></center>

<table align='center' width='1000' border='4'>
<tr>
<th align='center' bgcolor='pink' colspan='8'><h1>Viewing all the records</h1></th>
</tr>

<tr align ='center'>
<th>Serial No</th>
<th>Student's Name</th>
<th>Father's Name</th>

<th>Roll No</th>

<th>Delete</th>
<th>Edit</th>
<th>Details</th>


</tr>



<?php
include('db.php');

$query = "select * from `u_reg` order by `u_id` DESC";

$run = mysql_query($query);
$i = 1;
while($row =mysql_fetch_array($run))
{
$u_id = $row['u_id'];
$u_name = $row[1];
$u_father = $row[2];
$u_roll = $row[4];

?>
<tr align='center'>

<td><?php echo $i; $i++; ?></td>
<td><?php echo $u_name; ?></td>
<td><?php echo $u_father; ?></td>
<td><?php echo $u_roll; ?></td>
<td><a href='delete.php?del=<?php echo $u_id; ?>'>Delete</a></td>
<td><a href='edit.php?edit=<?php echo $u_id ; ?>'>Edit</a></td>
<td><a href='view.php?details=<?php echo $u_id;  ?>'>Details</a></td>

</tr>
<?php } ?>
</table>

<?php

$record_details = @$_GET['details'];

$query1 = " select * from `u_reg` where `u_id` = '$record_details'";

$run1 = mysql_query($query1);

while($row1 = mysql_fetch_array($run1))
{

$name = $row1[1];
$father = $row1[2];
$school = $row1[3];
$roll = $row1[4];
$class = $row1[5];



?>
<br><br><br>
<table align='center' border='4' bgcolor='grey' width='800'>

<tr>
<td align = 'center' bgcolor='pink' colspan = '6'><b><h3>Your details here</h3></b></td>
</tr>
<tr align='center' style='color:pink;'>
<td><?php echo $name ; ?></td>
<td><?php echo $father ; ?></td>
<td><?php echo $school ; ?></td>
<td><?php echo $roll ; ?></td>
<td><?php echo $class ; ?></td>
</tr>

<?php } ?>


</table>

<br><br>
<form action='view.php' method='get'>
Search a Record:
<input type='text' name='search' placeholder='search here by roll no or name' size='25'>
<input type='submit' name='submit' value='Find Now'>
</form>

<?php

if(isset($_GET['submit']))
{
$search_record = $_GET['search'];

$query2 = "select * from `u_reg` where `user_name`='$search_record ' OR `roll_no` = '$search_record ' ";

$run2 = mysql_query($query2);


while($row2= mysql_fetch_assoc($run2))
{
$name123 = $row2['user_name'];
$father123 = $row2['father_name'];
$school123 = $row2['school_name'];
$roll123 = $row2['roll_no'];
$class123 = $row2['student_class'];


?>
<table width='800' bgcolor='pink' style='color:black;' align='center' border='2'>

<tr align='center'>
<td><?php echo $name123; ?></td>
<td><?php echo $father123; ?></td>

<td><?php echo $school123; ?></td>

<td><?php echo $roll123; ?></td>
<td><?php echo $class123; ?></td>


</tr>



</table>

<?php }} ?>
</body>
</html>