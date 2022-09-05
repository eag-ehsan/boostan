<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['timtokenmessage']) && $_POST['timtokenmessage']==$_SESSION['hanttoken1'])
	{

	  $sql = "INSERT INTO comments(name, email, comment, nDate, nTime, nPage, userclass) VALUES('" . $_POST['msgname'] . "', '" . $_POST['msgemail'] . "', '" . $_POST['msgsub'] . "', '" . date("Y.m.d") . "', '" . date("h:i:sa") . "', '" . $pageNumberID . "', '" . $_POST['msgclass'] . "')";
	   if ( mysqli_query( $conn, $sql ) )
	   {

	    $checkOK = 601;
	   }
	   else
	   {
	     echo "<script type='text/javascript'>alert('There is a prtoblem in Your registeration!')</script>";
	    $checkOK = 606;
	   }

	  $_SESSION['hanttoken1'] = "";
	}



	if(isset($_POST['replyaptoken']))
	{
			  // echo "<script type='text/javascript'>alert('Please " . $_POST['smsaptoken'] . " I'm not " . $_POST['smsID'] . " a robot)</script>";
			 if($_POST['replyttoken']==$_SESSION['hanttoken2'])
			 {
					 if($_POST['replyaptoken']==1)
					  {
							$sql = "INSERT INTO commentsr(name, comment, nDate, nTime, commentsID, userclass) VALUES('" . $_POST['repName'] . "', '" . $_POST['repMatn'] . "', '" . date("Y.m.d") . "', '" . date("h:i:sa") . "', '" . $_POST['replyID'] . "', '" . $_POST['repClass'] . "')";
						   if ( mysqli_query( $conn, $sql ) )
						   {

						    $checkOK = 601;
						   }
						   else
						   {
						     echo "<script type='text/javascript'>alert('There is a prtoblem in Your registeration!')</script>";
						    $checkOK = 606;
						   }

					  }
						$_SESSION['hanttoken2'] = "";
					}
		}
		if(isset($_POST['wordid']))
		{
					// echo "<script type='text/javascript'>alert('Please " . $_POST['smsaptoken'] . " I'm not " . $_POST['smsID'] . " a robot)</script>";
				 if($_POST['addwordid']==1)
				 {

								$sql = "INSERT INTO uw(userID, wID) VALUES('" . $_SESSION['HID_ID'] . "', '" . $_POST['wordid'] . "')";
								 if ( mysqli_query( $conn, $sql ) )
								 {

									$checkOK = 801;
								 }
								 else
								 {

									$checkOK = 806;
								 }



						}
						else {
							$sql = "DELETE FROM uw WHERE ID='" . $_POST['uwordid'] . "'";
							 if ( mysqli_query( $conn, $sql ) )
							 {

								$checkOK = 901;
							 }
							 else
							 {

								$checkOK = 906;
							 }


						}
			}
			if(isset($_POST['ssid']))
			{
						// echo "<script type='text/javascript'>alert('Please " . $_POST['smsaptoken'] . " I'm not " . $_POST['smsID'] . " a robot)</script>";
					 if($_POST['addssid']==1)
					 {

									$sql = "INSERT INTO uss(userID, ssID) VALUES('" . $_SESSION['HID_ID'] . "', '" . $_POST['ssid'] . "')";
									 if ( mysqli_query( $conn, $sql ) )
									 {

										$checkOK = 801;
									 }
									 else
									 {

										$checkOK = 806;
									 }



							}
							else {
								$sql = "DELETE FROM uss WHERE ID='" . $_POST['ussid'] . "'";
								 if ( mysqli_query( $conn, $sql ) )
								 {

									$checkOK = 901;
								 }
								 else
								 {

									$checkOK = 906;
								 }


							}
				}




}
?>
