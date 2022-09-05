<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php
class FLdataBase
{
		public function FLconnect()
	{
		 $servername = "learnitor.com";
		 $username = "learnito_ehsan";
		 $password = "kpstboftlm127";
		 $dbname = "learnito_maindb";

		$conn = mysqli_connect( $servername, $username, $password, $dbname );

		 if ( !$conn )
		 {
		   echo( "Connection Fail " . mysqli_connect_error());

		 }
 		return $conn;
	}

		public function FLconnectForum()
	{
		 $servername = "learnitor.com";
		 $username = "learnito_ehsan";
		 $password = "kpstboftlm127";
		 $dbname = "learnito_maindb";

		$conn = mysqli_connect( $servername, $username, $password, $dbname );

		 if ( !$conn )
		 {
		   echo( "Connection Fail " . mysqli_connect_error());

		 }
 		return $conn;
	}

	public function redirect($url)
	{
		if (!headers_sent()){
			header("Location: $url");
		}else{
			echo "<script type='text/javascript'>window.location.href='$url'</script>";
			echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
		}
		exit;
	}

	public function GetIp()
	{
   		$ip = $_SERVER[ 'REMOTE_ADDR' ];
   		return $ip;
 	}

	public function makeInsertInto($tableName, $allFieldsCounts, array $fieldsName, array $fieldsValue)
	{
		$fNames = "";
		$fValues = "";
		for($i=0;$i<$allFieldsCounts;$i++)
		{
			if($fieldsValue[$i]!="")
			{
				if($i==($allFieldsCounts-1))
				{
					$addendN = "";
					$addendV = "'";
				}
				else
				{
					$addendN = ", ";
					$addendV = "', ";
				}
				$fNames = $fNames . $fieldsName[$i] . $addendN;
				$fValues = $fValues . "'" . $fieldsValue[$i] . $addendV;
			}
		}
		$INSsql = "INSERT INTO " . $tableName . "(" . $fNames . ") VALUES (" . $fValues . ")";
		return $INSsql;
	}

	public function makeUpdateInto($tableName, $allFieldsCounts, array $fieldsName, array $fieldsValue)
	{
		$fNamesAnsValue = "";
		$fAll = "";
		for($i=1;$i<$allFieldsCounts;$i++)
		{
			if($fieldsValue[$i]!="")
			{
				if($i==($allFieldsCounts-1))
				{
					$addend = "' ";
				}
				else
				{
					$addend = "', ";
				}
				$fNamesAnsValue = $fieldsName[$i] . "='" . $fieldsValue[$i] . $addend;
				$fAll = $fAll . $fNamesAnsValue;
			}
			else
			{
				if($i==($allFieldsCounts-1))
				{
					$addend = " ";
				}
				else
				{
					$addend = ", ";
				}
				$fNamesAnsValue = $fieldsName[$i] . "=NULL" . $addend;
				$fAll = $fAll . $fNamesAnsValue;

			}
		}
		$UPDsql = "UPDATE " . $tableName . " SET " . $fAll . " WHERE ID=" . $fieldsValue[0];
		return $UPDsql;
	}

	public function makeUpdateIntoUserID($tableName, $allFieldsCounts, array $fieldsName, array $fieldsValue)
	{
		$fNamesAnsValue = "";
		$fAll = "";
		for($i=1;$i<$allFieldsCounts;$i++)
		{
			if($fieldsValue[$i]!="")
			{
				if($i==($allFieldsCounts-1))
				{
					$addend = "' ";
				}
				else
				{
					$addend = "', ";
				}
				$fNamesAnsValue = $fieldsName[$i] . "='" . $fieldsValue[$i] . $addend;
				$fAll = $fAll . $fNamesAnsValue;
			}
			else
			{
				if($i==($allFieldsCounts-1))
				{
					$addend = " ";
				}
				else
				{
					$addend = ", ";
				}
				$fNamesAnsValue = $fieldsName[$i] . "=NULL" . $addend;
				$fAll = $fAll . $fNamesAnsValue;

			}
		}
		$UPDsql = "UPDATE " . $tableName . " SET " . $fAll . " WHERE userID=" . $fieldsValue[0];
		return $UPDsql;
	}

	public function saveUserLog($bank, $pagename, $nDate, $nTime, $userID, $nAction, $matn)
	{
		if($bank=="Software")
		{
			$fNames = array("userID", "page", "action", "nDate", "nTime", "matn");
			$fValues = array($userID, $pagename, $nAction, $nDate, $nTime, $matn);
			$softSQL = $this->makeInsertInto("rasad", 6, $fNames, $fValues);
	        $softconn = $this->SoftwareConnect();
			mysqli_query( $softconn, $softSQL);
		}
		else if($bank=="Site")
		{
			$sNames = array("userID", "page", "action", "nDate", "nTime", "matn");
			$sValues = array($userID, $pagename, $nAction, $nDate, $nTime, $matn);

			$siteSQL = $this->makeInsertInto("rasad", 6, $sNames, $sValues);

	        $siteconn = $this->FLconnect();
			mysqli_query( $siteconn, $siteSQL);
		}
	}

	public function checkuser($usernm)
	{
		$softconn = $this->FLconnect();
		$softSQL = "SELECT username FROM users WHERE username='" . $usernm . "'";
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				return 1;
			}
			else
			{
				return 0;
			}

	}
	public function getuserEhraz($userID)
	{
		$softconn = $this->FLconnect();
		$softSQL = "SELECT ID, nEhraz FROM users WHERE ID='" . $userID . "'";
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				if($row['nEhraz']=="")
				{
					return 2727;
				}
				else{
					return $row['nEhraz'];
				}

			}
			else
			{
				return 0;
			}

	}

	public function checkuseronline($usernm)
	{
		$softconn = $this->FLconnect();
		$softSQL = "SELECT userID FROM onlines WHERE userID='" . $usernm . "'";
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				return 1;
			}
			else
			{
				return 0;
			}

	}

	public function checkemail($emailm)
	{
		$softconn = $this->FLconnect();
		$softSQL = "SELECT email FROM users WHERE email='" . $emailm . "'";
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				return 1;
			}
			else
			{
				return 0;
			}

	}

	public function plusplussabt($userID)
	{
		$softconn = $this->SoftwareConnect();
		$softSQL = "SELECT ID, userID, lastAct, loginTD, sabtcounter, showcounter FROM last WHERE userID=" . $userID;
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$ssabt = $row['sabtcounter'];
				$ssabt++;
				$lact = "Enter to software";
				$dtdt = date("Y.m.d") . " - " . date("h:i:sa");
				$fNames = array("userID", "sabtcounter");
				$fValues = array($userID, $ssabt);
				$softSQL2 = $this->makeUpdateIntoUserID("last", 2, $fNames, $fValues);
				mysqli_query( $softconn, $softSQL2);
				return 1;
			}
			else
			{
				return 0;
			}

	}

	public function plusplusshow($userID)
	{
		$softconn = $this->SoftwareConnect();
		$softSQL = "SELECT ID, userID, lastAct, loginTD, sabtcounter, showcounter FROM last WHERE userID=" . $userID;
		$result = $softconn->query($softSQL);


			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$ssabt = $row['showcounter'];
				$ssabt++;
				$lact = "Enter to software";
				$dtdt = date("Y.m.d") . " - " . date("h:i:sa");
				$fNames = array("userID", "showcounter");
				$fValues = array($userID, $ssabt);
				$softSQL2 = $this->makeUpdateIntoUserID("last", 2, $fNames, $fValues);
				mysqli_query( $softconn, $softSQL2);
				return 1;
			}
			else
			{
				return 0;
			}

	}

	public function getUserRankIconPath($usercls)
	{
			$svgadrQ = "";
			if($usercls['userclass']==1)
				$svgadrQ = "images/king.svg";
			else if($usercls['userclass']==0)
				$svgadrQ = "images/star0-0.svg";
			else if($usercls['userclass']==2)
				$svgadrQ = "images/star1.svg";
			else if($usercls['userclass']==3)
				$svgadrQ = "images/star2.svg";
			else if($usercls['userclass']==4)
				$svgadrQ = "images/star3.svg";
			else if($usercls['userclass']==5)
				$svgadrQ = "images/star4.svg";

				return $svgadrQ;
	}

	public function makenewstr($di, $mainstr)
	{
		$ll = strlen($di);
		$pp = strlen($mainstr);
		$strdes= "" ;
		for ($i=0; $i < $pp; $i++) {
			if($i<$ll)
			{
					$strdes = $strdes . substr($di,$i,1);
			}
			else {
				$strdes = $strdes . substr($mainstr,$i,1);
			}

		}

		return $strdes;
	}





}



	?>
	</body>
</html>
