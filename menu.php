

			<div class="kr-contin">
				<div class="kr0">
					<hr>
					<div class="kr0-divofoghi-jomle-kr">
						<img src="images/LOGO4.png" alt="learnitor logo">
						<h4  id="inbala">그것을 배우다 또는 ...</h4>
					</div>
					<div class="kr0-divofoghi-users">

						<?php if($_SESSION['HID_ISLOGIN']==1){ ?>
							<h5 style="color:#a9ecf7"><?php echo $_SESSION["HID_username"] ?> - <?php echo $_SESSION["HID_lname"] ?></h5>
							<?php if($_SESSION["HID_nActivate"]==0){ ?>
							<h5 style="color:red"><a style="color:red" href="active1.php">تایید نشده</a></h5>

							<?php }else{  ?>
								<h5 style="color:green"><a style="color:green" href="mypoints.php">امتیازات</a></h5>
								<h5 style="color:red"><a style="color:#ecdd22" href="fu0.php">برگزیده ها</a></h5>
							<?php } ?>
							<h5 style="color:red"><a style="color:#a9ecf7" href="logout.php"><i style="font-size:20px;" class="fa fa-sign-out" aria-hidden="true"></i></a></h5>
						<?php }else{  ?>
							<h3><a href="login1.php">ورود</a></h3>
						<?php } ?>





					</div>

				</div>
				<div class="kr1">



				<button class="accordion acc">فصل اول -سطح صفر در رده بندی لرنیتور کره ای</button>
	        <div class="panel">
	            <button class="accordion zir-majmo">درس اول - آشنایی با زبان کره ای</button>
	            <div class="panel">
	                <!-- filter 11 -->
	                <p><a href="f1d1p1.php">مقدمه</a></p>
	                <p><a href="f1d1p2.php">معرفی زبان کره ای یا همان هانگول 한국어 </a></p>
									<p><a href="f1d1p3.php">حروف صدا دار و ترکیب ها به همراه رسم الخط</a></p>
									<p><a href="f1d1p4.php">تمرین نوشتن حروف کره ای</a></p>
	            </div>
							<button class="accordion zir-majmo">درس دوم - شروع نوشتن و خواندن جملات کره ای</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f1d2p1.php">کلمات انگلیسی وارد شده به کره ای</a></p>
									<p><a href="f1d2p2.php">نوشتن فارسی و نام خودتان به کره ای</a></p>
									<p>تمرینات درس</p>
	            </div>
							<button class="accordion zir-majmo">درس سوم - آغاز دروس اصولی آموزش کره ای</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f1d3p1.php">اصول و روش کار - حتما بخوانید</a></p>
									<p><a href="f1d3p2.php">لغات جدید - با مثال</a></p>
									<p><a href="f1d3p3.php">دستور زبان کره ای - جملات ساده با فعل ربطی 이다</a></p>
									<p><a href="f1d3p4.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>

	            </div>
							<button class="accordion zir-majmo">درس چهارم - ضمیر های فاعلی در زبان کره ای</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f1d4p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f1d4p2.php">دستور زبان کره ای - کاربرد انواع ضمیر - من، تو، او، ما، شما و ایشان </a></p>
									<p><a href="f1d4p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>

	            </div>
							<button class="accordion zir-majmo">درس پنجم  - فعل 있다 و نکات گرامری</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f1d5p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f1d5p2.php">دستور زبان کره ای - فعل 있다 و نکات گرامری </a></p>
									<p><a href="f1d5p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>

	            </div>
							<button class="accordion zir-majmo">درس ششم  - فرمول افعال 싶다  و قواعد افعال هادایی 하다 یی </button>
				            <div class="panel">
				                <!-- filter 11 -->
												<p><a href="f1d6p1.php">لغات جدید - با مثال</a></p>
												<p><a href="f1d6p2.php">دستور زبان کره ای - فرمول افعال 싶다  و قواعد افعال هادایی 하다 یی </a></p>
												<p><a href="f1d6p3.php">لیست جملات این درس</a></p>
												<p><a href="#">تمرین و آزمون</a></p>

				            </div>
							<button class="accordion zir-majmo">تمرینات فصل اول </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f1ta1.php">تمرینات تصویری و فیلمی</a></p>
									<p><a href="#">تمرینات چهار  جوابی</a></p>
									<p><a href="#"></a></p>
									<p><a href="#"></a></p>
	            </div>

	        </div>
					<button class="accordion acc">فصل دوم - آغاز دروس سطح یک لرنیتور کره ای</button>
		        <div class="panel">
							<button class="accordion zir-majmo">درس اول - زمان حال استمراری و گذشته ساده</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d1p0.php">مقدمه فصل دوم</a></p>
									<p><a href="f2d1p2.php">دستور زبان کره ای - حال استمراری و گذشته ساده در زبان کره ای </a></p>
									<p><a href="f2d1p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d1p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">درس دوم - اعداد چینی و سیستم شمارش چینی</button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d2p2.php">دستور زبان کره ای - اعداد چینی و کره ای، سیستم های شمارش </a></p>
									<p><a href="f2d2p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d2p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">درس سوم - واحد های شمارش در کره ای </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d3p2.php">دستور زبان کره ای -واحد های شمارش در کره ای </a></p>
									<p><a href="f2d3p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d3p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">درس چهارم - تقویم، سال ماه و روز های هفته، خواندن ساعت و زمان </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d4p2.php">دستور زبان کره ای -تقویم، سال ماه و روز های هفته، خواندن ساعت و زمان </a></p>
									<p><a href="f2d4p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d4p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">درس پنجم - صفت های ریشه فعل - قید ها در جمله </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d5p2.php">دستور زبان کره ای -صفت های ریشه فعل - قید ها در جمله </a></p>
									<p><a href="f2d5p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d5p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">درس ششم - فعل زمان آینده - فعل امر - جمله منفی - فعل نهی  </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2d6p2.php">دستور زبان کره ای -فعل زمان آینده - فعل امر - جمله منفی - فعل نهی</a></p>
									<p><a href="f2d6p1.php">لغات جدید - با مثال</a></p>
									<p><a href="f2d6p3.php">لیست جملات این درس</a></p>
									<p><a href="#">تمرین و آزمون</a></p>
	            </div>
							<button class="accordion zir-majmo">تمرینات فصل دوم </button>
	            <div class="panel">
	                <!-- filter 11 -->
									<p><a href="f2ta1.php">تمرینات تصویری و فیلمی</a></p>
									<p><a href="#">تمرینات چهار  جوابی</a></p>
									<p><a href="#"></a></p>
									<p><a href="#"></a></p>
	            </div>



						</div>
						<button class="accordion acc">فصل سوم - نکات تکمیلی برای اتمام سطح یک لرنیتور کره ای</button>
			        <div class="panel">
								<button class="accordion zir-majmo">درس اول - همه چیز درباره پسوندها</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d1p2.php">دستور زبان کره ای - همه چیز درباره پسوندها </a></p>
										<p><a href="f3d1p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d1p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>
								<button class="accordion zir-majmo">درس دوم - ادامه بحث پسوند ها</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d2p2.php">دستور زبان کره ای - ادامه بحث پسوند ها </a></p>
										<p><a href="f3d2p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d2p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>
								<button class="accordion zir-majmo">درس سوم - افعال بخش اول - افعال بی قاعده در صرف</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d3p2.php">دستور زبان کره ای - افعال بخش اول - افعال بی قاعده در صرف </a></p>
										<p><a href="f3d3p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d3p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>
								<button class="accordion zir-majmo">درس چهارم - افعال بخش دوم -  معادل افعال ربطی فارسی و ماضی نقلی</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d4p2.php">دستور زبان کره ای - افعال بخش دوم -  معادل افعال ربطی فارسی و ماضی نقلی </a></p>
										<p><a href="f3d4p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d4p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>
								<button class="accordion zir-majmo">درس پنجم - افعال بخش سوم -  افعال معلوم و مجهول در کره ای</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d5p2.php">دستور زبان کره ای - افعال بخش سوم -  افعال معلوم و مجهول در کره ای </a></p>
										<p><a href="f3d5p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d5p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>
								<button class="accordion zir-majmo">درس ششم - افعال بخش چهارم - نکات دستوری افعال</button>
		            <div class="panel">
		                <!-- filter 11 -->
										<p><a href="f3d6p2.php">دستور زبان کره ای - افعال بخش چهارم - نکات دستوری افعال </a></p>
										<p><a href="f3d6p1.php">لغات جدید - با مثال</a></p>
										<p><a href="f3d6p3.php">لیست جملات این درس</a></p>
										<p><a href="#">تمرین و آزمون</a></p>
		            </div>



							</div>


					</div>
			</div>
