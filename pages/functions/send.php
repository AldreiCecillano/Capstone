<?php

	if(isset($_POST['btn_send'])){
 	$ddl_to = $_POST['ddl_to'];
 	$txt_subj = $_POST['txt_subj'];
 	$txt_msg = $_POST['txt_msg'];

 	$q = mysqli_query($con,"SELECT * from tblfaculty where id = '".$ddl_to."' ");
 	$row = mysqli_fetch_array($q);
 	$name = $row['lname'].', '.$row['fname'];
 	
 		$s = mysqli_query($con,"INSERT into tblsent (message_date,subject,message,sendto,senderid,sender_name) values (NOW(),'".$txt_msg."','".$txt_subj."','".$ddl_to."','".$_SESSION['userid']."','Administrator')");
 		$i = mysqli_query($con,"INSERT into tblinbox (message_date,subject,message,sendto,senderid,sender_name) values (NOW(),'".$txt_msg."','".$txt_subj."','".$ddl_to."','".$_SESSION['userid']."','Administrator')");
 		
 		if($i == true){
 			$_SESSION['sent'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
 		}
 	
 	}

	if(isset($_POST['btn_sendsms'])){

		//##########################################################################
			// ITEXMO SEND SMS API - CURL-LESS METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			function itexmo($number,$message,$apicode){
			$url = 'https://www.itexmo.com/php_api/api.php';
			$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
			$param = array(
			    'http' => array(
			        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        'method'  => 'POST',
			        'content' => http_build_query($itexmo),
			    ),
			);
			$context  = stream_context_create($param);
			return file_get_contents($url, false, $context);}
			//##########################################################################
/*
			//##########################################################################
			// ITEXMO SEND SMS API - CURL METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			function itexmo($number,$message,$apicode){
						$ch = curl_init();
						$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
						curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
						curl_setopt($ch, CURLOPT_POST, 1);
						 curl_setopt($ch, CURLOPT_POSTFIELDS, 
						          http_build_query($itexmo));
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						return curl_exec ($ch);
						curl_close ($ch);
			}
			//##########################################################################
*/



	 	$result = itexmo($_POST['txt_num'],$_POST['txt_msg'],"TR-RYOMA883264_FLE2X");
		if ($result == ""){
		echo "iTexMo: No response from server!!! <br>
		Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
		Please <a href=\"https://www.itexmo.com/contactus.php\">CONTACT US</a> for help. ";	
		}else if ($result == 0){
			$_SESSION['sent'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
		}
		else{	
		echo "Error Num ". $result . " was encountered!";
		}

				
	}



	if(isset($_POST['btn_sendsmsfac'])){

		//##########################################################################
			// ITEXMO SEND SMS API - CURL-LESS METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			function itexmo($number,$message,$apicode){
			$url = 'https://www.itexmo.com/php_api/api.php';
			$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
			$param = array(
			    'http' => array(
			        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        'method'  => 'POST',
			        'content' => http_build_query($itexmo),
			    ),
			);
			$context  = stream_context_create($param);
			return file_get_contents($url, false, $context);}
			//##########################################################################
/*
			//##########################################################################
			// ITEXMO SEND SMS API - CURL METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			function itexmo($number,$message,$apicode){
						$ch = curl_init();
						$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
						curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
						curl_setopt($ch, CURLOPT_POST, 1);
						 curl_setopt($ch, CURLOPT_POSTFIELDS, 
						          http_build_query($itexmo));
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						return curl_exec ($ch);
						curl_close ($ch);
			}
			//##########################################################################
*/



	 	$result = itexmo($_POST['txt_num'],$_POST['txt_msg'],"TR-RYOMA883264_FLE2X");
		if ($result == ""){
		echo "iTexMo: No response from server!!! <br>
		Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
		Please <a href=\"https://www.itexmo.com/contactus.php\">CONTACT US</a> for help. ";	
		}else if ($result == 0){
			$_SESSION['sent'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
            exit;
		}
		else{	
		echo "Error Num ". $result . " was encountered!";
		}

				
	}
		
			

?>