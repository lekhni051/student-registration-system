<?php

session_start();
if(@$_SESSION['admin_name'])

{
header('location: view.php');

}

?>




<head>
 <title>
 Admin login
 </title>
 </head>
 <body>
 
 <form action='admin_login.php' method='post'>
 <table width='400' align='center' border='5' bgcolor='pink'>
 <tr>
 <td colspan = '5'  align='center' bgcolor='grey' style='color:pink;' >
 <h2>Admin Login</h2></td>
 </tr>
 
 <tr>
 <th align='right'>Admin Name:</th>
 <td><input type = 'text' name='admin_name'></td>
 </tr>
 
 
 <tr>
 <th align='right'>Admin Password:</th>
 <td><input type = 'password' name='admin_pass'></td>
 </tr>
 
 <tr>
 <td colspan='6' align='center'><input type ='submit' name='login' value='login'></td>
 </tr>
 </table>
 
 </form>
 <center><font color='dark-pink' size='4' align='center'><?php echo @$_GET['error']; ?></font></center>
 </body>
 </html>
 
 
 
 
 <?php
 include('db.php');
 
 if(isset($_POST['login']))
 {
 $admin_name= @$_SESSION['admin_name'] = $_POST['admin_name'];    /*here session set up */

 $admin_pass = $_POST['admin_pass'];
 
 $query = " select * from `login` where `user_name` = '$admin_name' AND `user_password` = '$admin_pass'";
 
 $run=mysql_query($query);
 
 if(mysql_num_rows($run) > 0)
 
 {
 echo "<script>window.open('view.php?logged=logged in succesfully!..','_self')</script>"; 
 
 }
 
 else
 
 {
 echo "<script>alert('password/username is incorrect!')</script>"; 

 }
 
 
 }
 ?>