<?php
	if(isset($_POST['btn_approve'])){
		$hidden_id = $_POST['approve_id'];
		$remarks = $_POST['txt_remarks'];

		$s = mysqli_query($con,"SELECT * from tblfilessubmitted where id = '".$hidden_id."' ");
		$rows = mysqli_fetch_array($s);

		$n = mysqli_query($con,"INSERT into tblnotification (facultyid,notification,datetimenotif,status) values ('".$rows['facultyid']."','File ".$rows['filename']." is already approved',NOW(),0) ");
		
		$q = mysqli_query($con,"UPDATE tblfilessubmitted set status = 'Approved', remarks = '".$remarks."' where id = '".$hidden_id."' ");
		
		if($q == true){
			$_SESSION['approve'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
		}
	}

	if(isset($_POST['btn_reject'])){
		$hidden_id = $_POST['reject_id'];

		$s = mysqli_query($con,"SELECT * from tblfilessubmitted where id = '".$hidden_id."' ");
		$row = mysqli_fetch_array($s);

		$n = mysqli_query($con,"INSERT into tblnotification (facultyid,notification,datetimenotif,status) values ('".$row['facultyid']."','File ".$row['filename']." is rejected',NOW(),0) ");

		$q = mysqli_query($con,"UPDATE tblfilessubmitted set status = 'Rejected' where id = '".$hidden_id."'  ");
		if($q == true){
			$_SESSION['reject'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
		}
	}
?>



