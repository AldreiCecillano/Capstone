<?php
	
	//SEMESTER

	if(isset($_POST['btn_deletesem']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblsemester where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}

	//SCHOOLYEAR

	if(isset($_POST['btn_deletesy']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblschoolyear where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}


	//FACULTY

	if(isset($_POST['btn_deletefac']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblfaculty where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}


	//FILE CATEGORY

	if(isset($_POST['btn_deletefilecat']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblfilecategory where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}


	//DOWNLOADABLE FILE

	if(isset($_POST['btn_deletedownload']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tbldownloadable where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}


	//ACTIVITY

	if(isset($_POST['btn_deleteact']))
	{
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblactivities where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}


	//MESSAGE

	if(isset($_POST['btn_deletemess']))
	{

		//INBOX
	    if(isset($_POST['chk_delete']))
	    {
	        foreach($_POST['chk_delete'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblinbox where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                unset($_POST['btn_deletemess']);
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }

	    //SENT
	    if(isset($_POST['chk_deletesent']))
	    {
	        foreach($_POST['chk_deletesent'] as $value)
	        {
	            $delete_query = mysqli_query($con,"DELETE from tblsent where id = '$value' ") or die('Error: ' . mysqli_error($con));
	                    
	            if($delete_query == true)
	            {
	                $_SESSION['delete'] = 1;
	                unset($_POST['btn_deletemess']);
	                header("location: ".$_SERVER['REQUEST_URI']);
	            }
	        }
	    }
	}



?>