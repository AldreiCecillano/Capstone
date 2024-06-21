<?php

//SEMESTER

 if(isset($_POST['btn_addsem'])){
 	$sem = $_POST['txt_sem'];

 	$q = mysqli_query($con,"SELECT * from tblsemester where semester = '".$sem."' ");
 	$ct = mysqli_num_rows($q);
 	if($ct == 0){
 		$i = mysqli_query($con,"INSERT into tblsemester (semester) values ('$sem')");
 		if($i == true){
 			$_SESSION['added'] = 1;
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

  if(isset($_POST['btn_addsy'])){
 	$sy = $_POST['txt_sy'];

 	$q = mysqli_query($con,"SELECT * from tblschoolyear where schoolyear = '".$sy."' ");
 	$ct = mysqli_num_rows($q);
 	if($ct == 0){
 		$i = mysqli_query($con,"INSERT into tblschoolyear (schoolyear) values ('$sy')");
 		if($i == true){
 			$_SESSION['added'] = 1;
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

  if(isset($_POST['btn_addfac'])){
 	$txt_facid = $_POST['txt_facid'];
 	$txt_lname = $_POST['txt_lname'];
 	$txt_fname = $_POST['txt_fname'];
 	$txt_mname = $_POST['txt_mname'];
 	$txt_address = $_POST['txt_address'];
 	$txt_contact = $_POST['txt_contact'];
 	$txt_uname = $_POST['txt_uname'];
 	$txt_pass = $_POST['txt_pass'];

 	//$q = mysqli_query($con,"SELECT * from tblfaculty where schoolyear = '".$sy."' ");
 	//$ct = mysqli_num_rows($q);
 	//if($ct == 0){
 		$i = mysqli_query($con,"INSERT into tblfaculty (facultyid,lname,fname,mname,address,contact,username,password)
 								values ('$txt_facid','$txt_lname','$txt_fname','$txt_mname','$txt_address','$txt_contact','$txt_uname','$txt_pass')");
 		if($i == true){
 			$_SESSION['added'] = 1;
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

  if(isset($_POST['btn_addfilecat'])){
    $txt_cname = $_POST['txt_cname'];
    $txt_desc = $_POST['txt_desc'];
    $txt_dline = $_POST['txt_dline'];

    $q = mysqli_query($con,"SELECT * from tblfilecategory where categoryname = '".$txt_cname."' and deadline = '".$txt_dline."' ");
    $ct = mysqli_num_rows($q);
    if($ct == 0){
        $i = mysqli_query($con,"INSERT into tblfilecategory (categoryname,description,deadline) values ('$txt_cname','$txt_desc','$txt_dline')");
        if($i == true){
            $_SESSION['added'] = 1;
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


 //DOWNLOADABLE FILE

  if(isset($_POST['btn_adddownload'])){
    $txt_file = basename($_FILES['txt_file']['name']);
    $temp = $_FILES['txt_file']['tmp_name'];
    $filetype = $_FILES['txt_file']['type'];
    $size = $_FILES['txt_file']['size'];

    $txt_desc = $_POST['txt_desc'];

    $q = mysqli_query($con,"SELECT * from tbldownloadable where downloadablefile = '".$txt_file."' ");
    $ct = mysqli_num_rows($q);
    if($ct == 0){

        if ($txt_file!="" && ($filetype=="application/pdf" || $filetype=="application/octetstream" 
                            || $filetype=="application/msword" || $filetype=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            || $filetype=="application/vnd.ms-excel" || $filetype=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                            || $filetype=="application/vnd.ms-powerpoint" || $filetype=="application/vnd.openxmlformats-officedocument.presentationml.presentation"))
        {
            if(move_uploaded_file($temp, realpath(dirname(getcwd())).'/downloadable/files/'.$txt_file))
            {
                $i = mysqli_query($con,"INSERT into tbldownloadable (downloadablefile,description) values ('$txt_file','$txt_desc')");
                if($i == true){
                    $_SESSION['added'] = 1;
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


 //ACTIVITY

 if(isset($_POST['btn_addact'])){
    $txt_aname = $_POST['txt_aname'];
    $txt_desc = $_POST['txt_desc'];
    $txt_actdate = $_POST['txt_actdate'];

    $q = mysqli_query($con,"SELECT * from tblactivities where activityname = '".$txt_aname."' and activity_date = '".$txt_actdate."' ");
    $ct = mysqli_num_rows($q);
    if($ct == 0){
        $i = mysqli_query($con,"INSERT into tblactivities (activityname,description,activity_date) values ('$txt_aname','$txt_desc','$txt_actdate')");
        if($i == true){
            $_SESSION['added'] = 1;
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


 //UPLOAD FILES

 if(isset($_POST['btn_upload'])){
    $txt_file =  basename($_FILES['txt_files']['name']);
    $temp = $_FILES['txt_files']['tmp_name'];
    $filetype = $_FILES['txt_files']['type'];
    $size = $_FILES['txt_files']['size'];

    $txt_desc = $_POST['txt_desc'];
    $ddl_cat = $_POST['ddl_cat'];
    $ddl_sem = $_POST['ddl_sem'];
    $ddl_sy = $_POST['ddl_sy'];


    $q = mysqli_query($con,"SELECT * from tblfilessubmitted where filename = '".$txt_file."' and categoryid = '".$ddl_cat."' and facultyid = '".$_SESSION['userid']."' ");
    $ct = mysqli_num_rows($q);
    if($ct == 0){
        if ($txt_file!="" && ($filetype=="application/pdf" || $filetype=="application/octetstream" 
                            || $filetype=="application/msword" || $filetype=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            || $filetype=="application/vnd.ms-excel" || $filetype=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                            || $filetype=="application/vnd.ms-powerpoint" || $filetype=="application/vnd.openxmlformats-officedocument.presentationml.presentation"))
        {
            if(move_uploaded_file($temp, realpath(dirname(getcwd())).'/filesubmitted/files/'.$txt_file))
            {
                $i = mysqli_query($con,"INSERT into tblfilessubmitted (filename,categoryid,description,facultyid,semesterid,schoolyearid,dateuploaded,dateupdated,status,remarks) 
                                                                values ('$txt_file','$ddl_cat','$txt_desc','".$_SESSION['userid']."','$ddl_sem','$ddl_sy',NOW(),NOW(),'Not Yet Approve','')");
                if($i == true){
                    $_SESSION['added'] = 1;
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

?>