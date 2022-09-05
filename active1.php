<?php
include_once('header.php');
include 'libs.php';
include_once('connection.php');
$checkOK = 0;
$continu = 1;
$chh = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['codeehraz']))
	{
		if($_POST['codeehraz']==$_SESSION["HID_nEhraz"])
		$sql = "UPDATE users SET nActivate = '1' WHERE ID='" . $_SESSION["HID_ID"] . "'";
		if ( mysqli_query( $conn, $sql ) )
		 {

			 $_SESSION["HID_nActivate"] = 1;
			$checkOK = 124;
		}
		else
		{

			$checkOK = 125;

		}

	}
	else {
		$ehrazCode = $myDb->getuserEhraz($_SESSION["HID_ID"]);
		$newLine = "\r\n";
		$headers .= "From: admin@learnitor.com" . $newLine;
		$headers .= "Reply-To: info@learnitor.com" . $newLine;
    $headers = "MIME-Version: 1.0" . $newLine;
    $headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
		$headers .= "X-Mailer: PHP/" . phpversion() . $newLine;
	$slink = "<p style='font-size:16px; color:green;'>";
	$slink .= "کد اهراز ایمیل شما برای سایت لرنیتور کره ای :";
	$slink .= "</p>";
	$slink .= "<p style='font-size:25px; color:red;'>";
	$slink .=  $newLine . $ehrazCode;
	$slink .= "</p>";

	mail($_SESSION["HID_email"],"کد فعال سازی لرنیتور", $slink, $headers);

	$chh = 111;

	}

}
?>
<body dir="rtl">





		<?php
	include_once('Navmenu.php');
  ?>
<!-- ***** Start First top Buttons ***** -->
<section class="prjcls aft-sidem-m">

  	<div class="kr-contin">
			<div class="kr6">
        <?php if($_SESSION['HID_ISLOGIN']==1 && $_SESSION["HID_nActivate"]==0){
					$ehrazCode = $myDb->getuserEhraz($_SESSION["HID_ID"]);
					if($chh==111)
					{
						?>
						<hr>
						<hr>
						<h3>ایمیل برایتان ارسال شد.</h3>
						<hr>
						<hr>

						<?php
					}

					?>
					<hr>
					<hr>
          <h1>حساب شما هنوز تایید نشده است.</h1>
					<hr>
					<h2>می توانید حساب خود را فعال کنید. </h2>
					<h3>برای این منظور با زدن دکمه زیر ایمیلی دریافت خواهید کرد که در آن کد اهراز شما قرار دارد. </h3>
					<h3>ایمیل شما که در ثبت نام ذکر کردید:</h3>
					<h5><?php echo $_SESSION["HID_email"]; ?></h5>
					<form id="contact" name="contact" action="" method="post">
							<div class="kr0-divofoghi-users2">
								<div id="gre1" class="g-recaptcha" data-sitekey="6LeRPdMbAAAAAFy5sQ3uGNW3rHG6TWjLSPCSe9Iu"></div>
								<span id='messager'></span>
								<button onclick="setTokkensend();" type="button" name="lrnlogin" id="form-submit" class="main-button">ارسال کد تایید ایمیل</button>

							</div>
					</form>
					<hr>
					<h1>در صورتی که کد را دریافت کرده اید آن را وارد کنید:</h1>
					<form id="contact" name="contact" action="" method="post">
							<div class="kr0-divofoghi-users2">

								<input id="codeehraz" class="lrninp" type="text"  name="codeehraz" required>
								<span id='messager'></span>
								<button  type="submit" name="lrnlogin" id="form-submit" class="main-button">فعال سازی حساب</button>

							</div>
					</form>

				<?php }else{
						if($_SESSION['HID_ISLOGIN']==1)
						{
									$myDb->redirect("https://hangul.learnitor.com/index.php");
								}
						else {
						$myDb->redirect("https://hangul.learnitor.com/login1.php");
						}



        } ?>







      </div>

    </div>



	</section>
  <!-- jQuery -->
  <script src="js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="js/scrollreveal.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imgfix.min.js"></script>


  	<script>
  					function textToAudio(txttxt) {

  							let asltxt = txttxt;
  							let speech = new SpeechSynthesisUtterance();
  							speech.lang = "ko-KR";

  							speech.text = asltxt;
  							speech.volume = 1;
							speech.rate = 0.85;
							speech.pitch = 1.1;

  							window.speechSynthesis.speak(speech);
  					}


						function setTokkensend()
						{
							var checkgoon = 1;
							let lvlsuprecaptcha = document.getElementById('messager');
								var res = grecaptcha.getResponse();
								if (res == "" || res.length == 0)
								{
										lvlsuprecaptcha.style.color = "red";
										lvlsuprecaptcha.innerHTML = "تیک من ربات نیستم را بزنید";
									checkgoon = 0;
								}
								else
								{
									lvlsuprecaptcha.style.color = "green";
									lvlsuprecaptcha.innerHTML = "ok";
								}
							if(checkgoon==1)
							{

							  document.getElementById("contact").submit();
							}
						}

  	</script>



	<script>















  function expandLoghat(whichone)
  {

      if($('#id-i'+whichone).hasClass('divoff'))
      {
        $('#id-i'+whichone).removeClass('divoff');
      }
      else {
        $('#id-i'+whichone).addClass('divoff');
      }


  }
	function expandLoghatv(whichone)
  {

      if($('#id-v'+whichone).hasClass('divoff'))
      {
        $('#id-v'+whichone).removeClass('divoff');
      }
      else {
        $('#id-v'+whichone).addClass('divoff');
      }


  }
	        var acc = document.getElementsByClassName("accordion");
	        var i;

	        for (i = 0; i < acc.length; i++) {
	            acc[i].addEventListener("click", function() {
	                this.classList.toggle("active2");
	                var panel = this.nextElementSibling;
	                if (panel.style.display === "block") {
	                    panel.style.display = "none";
	                } else {
	                    panel.style.display = "block";
	                }
	            });
	        }
	    </script>
  </body>

</html>
