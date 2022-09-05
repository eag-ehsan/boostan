<?php
include_once('header.php');
include 'libs.php';
include_once('connection.php');

$pageNumberID = 88;
include_once('nazaratb.php');
?>
<body dir="rtl">





		<?php
	include_once('Navmenu.php');
  ?>
<!-- ***** Start First top Buttons ***** -->
<section class="prjcls aft-sidem-m">
  <?php	include_once('menu.php');	?>


  	<div class="kr-contin">
			<div class="allpage-sarbarg-fa">
				<p>بانک اطلاعات کره ای در لرنیتور فارسی</p>
			</div>

  		<div class="kr6">
        <h1>لیست موارد بانک</h1>

        <h1 style="background-color:#734000;color: #fff;width: 100%;">بانک افعال</h1>
        <h3>در بانک افعال صرف برای همه 4 صیغه احترام و همه زمانها وجود دارد</h3>
        <h5><a href="verbs.php">بانک افعال</a></h5>
        <hr>

        <h1 style="background-color:#734000;color: #fff;width: 100%;">بانک لغات</h1>
        <h3>بانک لغات شامل کلمات جدید دروس و فرهنگ لغات کره ای لرنیتور است</h3>
        <h5><a href="words.php">بانک لغات</a></h5>
        <hr>

        <h1 style="background-color:#734000;color: #fff;width: 100%;">لیست نکات میاندرسی</h1>
        <h3>نکات میاندرسی در بین مطالب درسی در فصول مختلف وجود دارد. میتوانید لیست همه این نکات را در اینجا ببینید</h3>
        <h5><a href="points.php">نکات میاندرسی</a></h5>
        <hr>

        <h1 style="background-color:#734000;color: #fff;width: 100%;">ضرب المثل ها و جملات رایج</h1>
        <h3>در این بخش علاوه بر بیان ترجمه و محل کاربرد ضرب المثل های کره ای، جملات محاورات روزمره که کنایه ای هستند نیز آمده است</h3>
        <h5><a href="zarbol.php">محاورات و ضرب المثل ها</a></h5>
        <hr>

       <h1 style="background-color:#734000;color: #fff;width: 100%;">تمرینات</h1>
        <h3>در پایان هر فصل بخشی برای تمرین و کسب نمره موجود است. لیست همه این تمرینات را ببینید</h3>
        <h5><a href="talist.php">تمرینات پایان فصول</a></h5>
        <hr>

			
		  </div>





        <div class="kr3">
  				<h5><a href="f2d1p1.php">درس اول از فصل دوم - لغات جدید درس</a></h5>
        </div>




		</div>

		<?php $pageNumberID = 88;
	include_once('nazaratp.php');
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
