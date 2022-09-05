<?php
include_once('header.php');
include 'libs.php';
include_once('connection.php');
$checkOK = 0;
$continu = 1;

      $_SESSION["HID_username"] = "";
      $_SESSION["HID_fname"] = "";
      $_SESSION["HID_lname"] = "";
      $_SESSION["HID_email"] = "";
      $_SESSION["HID_userIMG"] = "";
      $_SESSION["HID_userclass"] = "";

      $_SESSION["HID_nActivate"] = "";
      $_SESSION["HID_nEhraz"] = "";
      $_SESSION["HID_ISLOGIN"] = 0;
      $_SESSION["HID_ID"] = 0;
      $karbarName = "";
      $checkOK = 203;

    //	$_SESSION['ttokforlog'] = "";
$myDb->redirect("https://hangul.learnitor.com/index.php");


?>
<body dir="rtl">





		<?php
	include_once('Navmenu.php');
  ?>
<!-- ***** Start First top Buttons ***** -->
<section class="prjcls aft-sidem-m">

  	<div class="kr-contin">
			<div class="kr6">

        <h1>داشتن حساب کاربری کاملا رایگان است.</h1>
        <h3>مزایای داشتن کاربری:</h3>
        <h5>1- بازشدن بخش تمرین و آزمون برای شما</h5>
        <h5>2- عضویت در تالار گفتمان کره ای برای پرسش و پاسخ</h5>
        <h5>3- داشتن کارنامه برای رسیدن به نمره بالای 90 برای کسب مدرک زبان کره ای (به زودی تاییدیه از مراجع زبان کره ای سفارت برای صدور مدارک زبان گرفته خواهد شد) </h5>
        <h5>4- داشتن صفحه شخصی برای ثبت یادداست ها و چاپ فلش کار تهای لغات و افعال برای شما</h5>
        <h5>5- در صورت خواست شما می توانید در طرح آزمون ها ما را یاری کنید. </h5>

        <hr>
        <div class="kr0-divofoghi-users3">

          <?php if($checkOK==201){
            $continu = 1;
            ?>
            <h3 style="color:red;">نام کاربری وارد شده وجود ندارد. </h3>
          <?php }else if($checkOK==202){
            $continu = 1;
            ?>
            <h3 style="color:red;">رمز عبور مطابقت ندارد</h3>
          <?php }else if($checkOK==203){
            $continu = 0;
            ?>
            <h3 style="color:green;">خوش آمدید</h3>
            <h3><a href="https://hangul.learnitor.com/index.php">منوی اصلی</a></h3>
          <?php } ?>



<?php if($continu==1){ ?>
            <form id="contact" name="contact" action="" method="post">

                <div class="kr0-divofoghi-users2">

                    <label id="llgusername" class="prf-lbl-st" for="lgusername">نام کاربری</label>
                    <input id="lgusername" class="form-control" type="text" placeholder="فقط حروف انگلیسی" name="username" value="<?php echo $_GET['fromsignup']; ?>" required>
                    <span id='messageu'></span>
                    <label id="llgpassword" class="prf-lbl-st" for="lgpassword">رمز عبور</label>
                    <input id="lgpassword" class="form-control" type="password" placeholder="رمز عبور" name="password" required>
                    <span id='message'></span>
                    <button onclick="setTokkenlogin();" type="submit" name="lrnlogin" id="form-submit" class="main-button">ورود</button>
                    <h5><a class="underlineHover" href="#">فراموشی رمز عبور</a></h5>
                    <h5><a class="underlineHover" href="signup1.php">ثبت نام رایگان</a></h5>
                    <input type="hidden" id="timt" name="timt" value="" >
                </div>
            </form>
<?php } ?>






        </div>








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
  	</script>



	<script>







  function setTokkensignup(){

    var ttok1 = "<?php $_SESSION['ttokforlog'] =  bin2hex(random_bytes(8));
    echo $_SESSION['ttokforlog'];?>";
    document.getElementById('timt').value = ttok1;
    document.getElementById("contact").submit();



  }










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
