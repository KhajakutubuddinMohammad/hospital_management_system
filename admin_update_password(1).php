<?php

$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['update_password']))
{
	  
	  $admin_name=$_POST['card_name'];
	  $admin_email=$_POST['card_email'];
	  $admin_password=$_POST['card_password'];
	  $query="update admin_table set admin_password='$admin_password' where admin_name='$admin_name' and admin_email='$admin_email' ";
	  //$query2="update doctors_register_table set doc_password='$doc_password' where doc_name='$doc_name' and doc_email='$doc_email' ";
	  $result=mysqli_query($con,$query);
	  $num=mysqli_affected_rows($con);
	  //$result2=mysqli_query($con,$query2);
	  if($num > 0)
	  {
	  	        echo "<script>alert('Password Updated successfully')</script>";
				echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
		 
	  }
	  else
	  {
	  	        echo "<script>alert('Password not set')</script>";
				echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
	  }
}

?>