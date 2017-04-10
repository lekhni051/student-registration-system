<?php

session_start();
if(!$_SESSION['admin_name'])

{
header('location: admin_login.php');

}

?>



<?php
include('db.php');
$edit_record = @$_GET['edit'];

$query = "select * from `u_reg` where `u_id` = '$edit_record' ";

$run = mysql_query($query);
while($row= @mysql_fetch_array($run))
{

$edited_id = $row['u_id'];
$s_name = $row[1];
$s_father = $row[2];
$s_school = $row[3];
$s_roll = $row[4];
$s_class = $row[5];


}





?>


<html>
   <head>
<title>Updating student's record</title>
   </head>
<body>
<form method="post" action = "edit.php?edit_form=<?php echo $edited_id; ?>">
<table width='500' border='5' align='center'>
<tr> 
<th bgcolor='pink' colspan='2' style='color:brown;'>
Updating Form
</th>
</tr>

<tr>
<td align='right' style='color:brown;'>Student's Name:</td>
<td><input type='text' name='user_name1' value='<?php if(isset($s_name)) { echo $s_name; } ?>'>

</tr>

<tr>
<td align='right' style='color:brown;'>Father's Name:</td>
<td><input type='text' name='father_name1' value='<?php if(isset($s_father)) {  echo $s_father; }?>'>
</tr>

<tr>
<td align='right' style='color:brown;'>School's Name:</td>
<td><input type='text' name='school_name1' value='<?php if(isset($s_school)) { echo $s_school; } ?>'>

</tr>

<tr>
<td align='right' style='color:brown;'>Roll No:</td>
<td><input type='text' name='roll_no1' value='<?php if(isset($s_roll)) { echo $s_roll; } ?>'>

</tr>
<tr>

<td align='right' style='color:brown;'>Class:</td>
<td>
<select name='student_class1' >
<option value='<?php if(isset($s_class)) { echo $s_class; } ?>'>
<?php if(isset($s_class)) {  echo $s_class; } ?>
</option>
<option value='10th'>10th</option>
<option value='9th'>9th</option>
<option value='8th'>8th</option>
<option value='7th'>7th</option>
</select>

</td>
</tr>

<tr>
<td align='center' colspan='6'>
<input type='submit' name='update' value='Update'>

</td>
</tr>
</table>
</form>
</body>
</html>


<?php   

include('db.php');

if(isset($_POST['update'])) 
{

 $edit_id1 = @$_GET['edit_form'];
 $student_name1 = $_POST['user_name1'];
$student_father1 = $_POST['father_name1'];
$student_school1 = $_POST['school_name1'];
$student_roll1 = $_POST['roll_no1'];
$student_class1 = $_POST['student_class1'];



$query = "update `u_reg` set `user_name` = '$student_name1' , `father_name` = '$student_father1' , `school_name` = '$student_school1' , `roll_no` = '$student_roll1' , `student_class` = '$student_class1' where `u_id` = '$edit_id1'";

if( $query_run = mysql_query($query))
{
header("Location: view.php?updated=Data has been updated...");/*we can use here script window.open*/


}/*
if(mysql_query($query))
{

echo "<script>window.open('view.php?updated=record has been edited successfully!.....','_self')</script>";

}
*/


}

?>