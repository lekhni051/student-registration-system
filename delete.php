<?php
 include('db.php');
 
 $delete_record = $_GET['del'];
 
 $query = " delete from `u_reg` where `u_id` = '$delete_record' ";
 
 if(mysql_query($query))
 {
 echo "<script>window.open('view.php?deleted=record has been deleted successfully!....','_self')</script>";
 }

?>