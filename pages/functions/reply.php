<?php

	if(isset($_POST['btn_reply'])){
 	$hidden_id = $_POST['hidden_id'];
 	$hidden_subj = $_POST['hidden_subj'];
 	$txt_msg = $_POST['txt_repmsg'];

 	$q = mysqli_query($con,"SELECT * from tblfaculty where id = '".$_SESSION['userid']."' ");
 	$row = mysqli_fetch_array($q);

 	if($_SESSION['role'] == "Administrator")
 	{
 		$name = 'Administrator';
 	}
 	else{
 		$name = $row['lname'].', '.$row['fname'];
 	}
 	
 		$s = mysqli_query($con,"INSERT into tblsent (message_date,subject,message,sendto,senderid,sender_name) values (NOW(),'".$hidden_subj."','".$txt_msg."','".$hidden_id."','".$_SESSION['userid']."','".$name."')");
 		$i = mysqli_query($con,"INSERT into tblinbox (message_date,subject,message,sendto,senderid,sender_name) values (NOW(),'".$hidden_subj."','".$txt_msg."','".$hidden_id."','".$_SESSION['userid']."','".$name."')");
 		
 		if($i == true){
 			$_SESSION['sent'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
 		}
 	
 	}

?>