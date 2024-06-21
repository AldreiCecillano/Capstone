<?php
	
	//SEMESTER

	if(isset($_POST['btn_savesem'])){
		$hidden_id = $_POST['hidden_idsem'];
		$txt_edit_sem = $_POST['txt_edit_sem'];

		$q = mysqli_query($con,"SELECT * from tblsemester where semester = '".$txt_edit_sem."' and id != '".$hidden_id."' ");
		$ct = mysqli_num_rows($q);

		if($ct == 0){
			$u = mysqli_query($con,"UPDATE tblsemester set semester = '".$txt_edit_sem."' where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}
 		}
		else{
			$_SESSION['duplicate'] = 1;
	        header ("location: ".$_SERVER['REQUEST_URI']);
	        exit;
		}
	}

	//SCHOOL YEAR

	if(isset($_POST['btn_savesy'])){
		$hidden_id = $_POST['hidden_idsy'];
		$txt_edit_sy = $_POST['txt_edit_sy'];

		$q = mysqli_query($con,"SELECT * from tblschoolyear where schoolyear = '".$txt_edit_sy."' and id != '".$hidden_id."' ");
		$ct = mysqli_num_rows($q);

		if($ct == 0){
			$u = mysqli_query($con,"UPDATE tblschoolyear set schoolyear = '".$txt_edit_sy."' where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}
 		}
		else{
			$_SESSION['duplicate'] = 1;
	        header ("location: ".$_SERVER['REQUEST_URI']);
	        exit;
		}
	}


	//FACULTY

	if(isset($_POST['btn_savefac'])){
		$hidden_id = $_POST['hidden_idfac'];
		$txt_edit_facid = $_POST['txt_edit_facid'];
		$txt_edit_lname = $_POST['txt_edit_lname'];
		$txt_edit_fname = $_POST['txt_edit_fname'];
		$txt_edit_mname = $_POST['txt_edit_mname'];
		$txt_edit_address = $_POST['txt_edit_address'];
		$txt_edit_contact = $_POST['txt_edit_contact'];
		$txt_edit_uname = $_POST['txt_edit_uname'];
		$txt_edit_pass = $_POST['txt_edit_pass'];

		//$q = mysqli_query($con,"SELECT * from tblschoolyear where schoolyear = '".$txt_edit_sy."' ");
		//$ct = mysqli_num_rows($q);

		//if($ct == 0){
			$u = mysqli_query($con,"UPDATE tblfaculty set facultyid = '".$txt_edit_facid."'
														,lname = '".$txt_edit_lname."'
														,fname = '".$txt_edit_fname."'
														,mname = '".$txt_edit_mname."'
														,address = '".$txt_edit_address."'
														,contact = '".$txt_edit_contact."'
														,username = '".$txt_edit_uname."'
														,password = '".$txt_edit_pass."'
									where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}
 		//}
		//else{
		//	$_SESSION['duplicate'] = 1;
	    //    header ("location: ".$_SERVER['REQUEST_URI']);
	    //    exit;
		//}
	}


	//FILE CATEGORY

	if(isset($_POST['btn_savefilecat'])){
		$hidden_id = $_POST['hidden_idfilecat'];
		$txt_edit_cname = $_POST['txt_edit_cname'];
		$txt_edit_desc = $_POST['txt_edit_desc'];
		$txt_edit_dline = $_POST['txt_edit_dline'];

		$q = mysqli_query($con,"SELECT * from tblfilecategory where categoryname = '".$txt_edit_cname."' and deadline = '".$txt_edit_dline."' and id != '".$hidden_id."' ");
		$ct = mysqli_num_rows($q);

		if($ct == 0){
			$u = mysqli_query($con,"UPDATE tblfilecategory set categoryname = '".$txt_edit_cname."',description = '".$txt_edit_desc."',deadline = '".$txt_edit_dline."' where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}
 		}
		else{
			$_SESSION['duplicate'] = 1;
	        header ("location: ".$_SERVER['REQUEST_URI']);
	        exit;
		}
	}	


	//DOWNLOADABLE

	if(isset($_POST['btn_savedownload'])){
		$hidden_id = $_POST['hidden_iddownload'];

	    $txt_edit_file = basename($_FILES['txt_edit_file']['name']);
	    $temp = $_FILES['txt_edit_file']['tmp_name'];
	    $filetype = $_FILES['txt_edit_file']['type'];
	    $size = $_FILES['txt_edit_file']['size'];

		$txt_edit_desc = $_POST['txt_edit_desc'];

		if($txt_edit_file == ""){

			$q = mysqli_query($con,"SELECT * from tbldownloadable where id = '".$hidden_id."' ");
			$row = mysqli_fetch_array($q);

			$filename = $row['downloadablefile'];
			
			$u = mysqli_query($con,"UPDATE tbldownloadable set downloadablefile = '".$filename."',description = '".$txt_edit_desc."' where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}

		}
		else{

			$q = mysqli_query($con,"SELECT * from tbldownloadable where downloadablefile = '".$txt_edit_file."' and id != '".$hidden_id."' ");
			$ct = mysqli_num_rows($q);

			if($ct == 0){
				if ($txt_edit_file!="" && ($filetype=="application/pdf" || $filetype=="application/octetstream" 
                            || $filetype=="application/msword" || $filetype=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            || $filetype=="application/vnd.ms-excel" || $filetype=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                            || $filetype=="application/vnd.ms-powerpoint" || $filetype=="application/vnd.openxmlformats-officedocument.presentationml.presentation"))
		        {
		            if(move_uploaded_file($temp, realpath(dirname(getcwd())).'/downloadable/files/'.$txt_edit_file))
		            {
						$u = mysqli_query($con,"UPDATE tbldownloadable set downloadablefile = '".$txt_edit_file."',description = '".$txt_edit_desc."' where id = '".$hidden_id."' ");
						if($u == true){
				 			$_SESSION['edit'] = 1;
				            header ("location: ".$_SERVER['REQUEST_URI']);
				            exit;
			 			}
			 		}
			 	}
			 	else{
		            $_SESSION['invalid'] = 1;
		            header ("location: ".$_SERVER['REQUEST_URI']);
		            exit;
		        }
	 		}
			else{
				$_SESSION['duplicate'] = 1;
		        header ("location: ".$_SERVER['REQUEST_URI']);
		        exit;
			}

		}
	}	


	//ACTIVITY

	if(isset($_POST['btn_saveact'])){
		$hidden_id = $_POST['hidden_idact'];
		$txt_edit_aname = $_POST['txt_edit_aname'];
		$txt_edit_desc = $_POST['txt_edit_desc'];
		$txt_edit_actdate = $_POST['txt_edit_actdate'];

		$q = mysqli_query($con,"SELECT * from tblactivities where activityname = '".$txt_edit_aname."' and activity_date = '".$txt_edit_actdate."' and id != '".$hidden_id."' ");
		$ct = mysqli_num_rows($q);

		if($ct == 0){
			$u = mysqli_query($con,"UPDATE tblactivities set activityname = '".$txt_edit_aname."',description = '".$txt_edit_desc."',activity_date = '".$txt_edit_actdate."' where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}
 		}
		else{
			$_SESSION['duplicate'] = 1;
	        header ("location: ".$_SERVER['REQUEST_URI']);
	        exit;
		}
	}


	//FILE UPLOAD

	if(isset($_POST['btn_edit_upload'])){
		$hidden_id = $_POST['hidden_iddownload'];

	    $txt_edit_file = basename($_FILES['txt_edit_file']['name']);
	    $temp = $_FILES['txt_edit_file']['tmp_name'];
	    $filetype = $_FILES['txt_edit_file']['type'];
	    $size = $_FILES['txt_edit_file']['size'];

		$edit_ddl_cat = $_POST['edit_ddl_cat'];
		$txt_edit_desc = $_POST['txt_edit_desc'];
		$edit_ddl_sem = $_POST['edit_ddl_sem'];
		$edit_ddl_sy = $_POST['edit_ddl_sy'];

		if($txt_edit_file == ""){

			$q = mysqli_query($con,"SELECT * from tblfilessubmitted where id = '".$hidden_id."' ");
			$row = mysqli_fetch_array($q);

			$filename = $row['filename'];
			
			$u = mysqli_query($con,"UPDATE tblfilessubmitted set filename = '".$filename."',categoryid = '".$edit_ddl_cat."', description = '".$txt_edit_desc."',semesterid = '".$edit_ddl_sem."',schoolyearid = '".$edit_ddl_sy."', dateupdated = NOW() where id = '".$hidden_id."' ");
			if($u == true){
	 			$_SESSION['edit'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
	            exit;
 			}

		}
		else{

			$q = mysqli_query($con,"SELECT * from tblfilessubmitted where filename = '".$txt_edit_file."' and id != '".$hidden_id."' ");
			$ct = mysqli_num_rows($q);

			if($ct == 0){
				if ($txt_edit_file!="" && ($filetype=="application/pdf" || $filetype=="application/octetstream" 
                            || $filetype=="application/msword" || $filetype=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            || $filetype=="application/vnd.ms-excel" || $filetype=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                            || $filetype=="application/vnd.ms-powerpoint" || $filetype=="application/vnd.openxmlformats-officedocument.presentationml.presentation"))
		        {
		            if(move_uploaded_file($temp, realpath(dirname(getcwd())).'/filesubmitted/files/'.$txt_edit_file))
		            {
						$u = mysqli_query($con,"UPDATE tblfilessubmitted set filename = '".$txt_edit_file."',categoryid = '".$edit_ddl_cat."', description = '".$txt_edit_desc."',semesterid = '".$edit_ddl_sem."',schoolyearid = '".$edit_ddl_sy."', dateupdated = NOW() where id = '".$hidden_id."' ");
						if($u == true){
				 			$_SESSION['edit'] = 1;
				            header ("location: ".$_SERVER['REQUEST_URI']);
				            exit;
			 			}
			 		}
			 	}
			 	else{
		            $_SESSION['invalid'] = 1;
		            header ("location: ".$_SERVER['REQUEST_URI']);
		            exit;
		        }
	 		}
			else{
				$_SESSION['duplicate'] = 1;
		        header ("location: ".$_SERVER['REQUEST_URI']);
		        exit;
			}

		}
	}	

?>

