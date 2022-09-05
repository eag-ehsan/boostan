<?php
include_once('header.php');

?>
<body dir="rtl">






	<!-- ***** Start First top Buttons ***** -->
	<section class="prjcls aft-sidem-m">


		<div class="kr-contin">
					<div class="kr0">

					</div>
					<div class="kr6">
						
						<h1>سایت مجتمع بوستان خاتم</h1>
						<h1 style="background-color:#013446;color: #fff;width: 100%;">اطلاعات بلوکها و واحد ها</h1>
						<h3>با انتخاب بلوک و واحد مورد نظر می توانید میزان پرداختی شارژ و میزان بدهی آن را مشاهده کنید</h3>
						<hr>
						
						<h1 style="background-color:#005573;color: #fff;width: 100%;">گالری عکس مجتمع</h1>
						<h3>عکس منتخب هفته</h3>
						<a href="images/m1-1.jpg"><img src="images/m1-1.jpg" alt="احوالپرسی کره ای"></a>
						<h3>محیطی واقعا سبز و با صفا</h3>
						<a href="images/m1-2.jpg"><img src="images/m1-2.jpg" alt="احوالپرسی کره ای"></a>
						<hr>
							
						<h1 style="background-color:#005573;color: #fff;width: 100%;">نرم افزار های تمرینی</h1>
						<h3>پیانو</h3>
						<a href="piano/piano.php">پیانو</a>

						<hr>

						<a href="#inbala"><h3><i class="fas fa-chevron-double-up"></i></h3> </a>
					</div>
		</div>



				<?php $pageNumberID = 100;
				?>



		</section>


	<script>
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
