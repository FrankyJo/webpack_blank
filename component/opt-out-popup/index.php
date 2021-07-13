<!--opt out popup-->
<div class="opt_out_block_wrap">
    <section id="opt_out_block">
        <a id="opt_out_close" class="opt_out_close"></a>
        <h2>Opt Out</h2>
        <span id="opt_out_H">
            <p>To opt out of all marketing please enter your details below:</p>
        </span>
        <form method="post" class="opt_out_form">
            <div class="opt_out_body">
                <div class="opt_out_form_group">
                    <label>Email*</label>
                    <input type="email" name="email" id="optOutEmail" class="email opt_out_form_field" value="" autocomplete="off" />
                </div>
                <span class="opt_out_form_or">or</span>
                <div class="opt_out_form_group">
                    <label>Phone number</label>
                    <input type="tel" name="number" class="opt_out_form_field" id="optOutPhone" value="" autocomplete="off" />
                </div>
                <div class="box-captcha">
                    <div class="g-recaptcha" id="optOutCaptcha"></div>
                    <input type="hidden" id="captchaOptOutCaptchaInput">
                </div>
                <button type="submit" class="get-btn">Unsubscribe</button>
            </div>
        </form>
        <div id="opt_out_ok">
            <p><strong>You have successfully been opted out</strong></p>
            <img src="public/img/opt_out_ok.svg" class="opt_out_ok">
            <div class="opt_out_body">
                <button class="opt_out_close">Close</button>
            </div>
        </div>
        <div id="opt_out_fail">
            <p><strong>We were unable to find you in our records.<br>
                    Please try again or contact us.</strong></p>
            <img src="public/img/opt_out_fail.svg" class="opt_out_fail">
            <div class="opt_out_body">
                <button class="opt_out_again get-btn">Try Again</button>
            </div>
        </div>
    </section>
</div>

<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en' async defer></script>
<script src="lib/validate.js?v={site_version}" type="text/javascript"></script>
<script type="text/javascript">
    var gcResp = '';
    var gcOutResp = '';
    var contactInit = $('#feedCaptcha').length ? true : false;

    var verifyOutPut = function(response) {
        gcOutResp = response;
        if (gcOutResp.length != 0 && jQuery('#captchaOptOutCaptchaInput').val() == '') {
            jQuery(".errorCaptcha").html("");
            jQuery('#optOutCaptcha > div').css('border', 'none');
        }
    };

    var optOutCaptcha;
    var contactCaptcha;
    var onloadCallback = function() {
        var sitekey = '6LdLXGMUAAAAAJdxK5SWRe8Svm4zevgD2-vSZbFW';

        optOutCaptcha = grecaptcha.render('optOutCaptcha', {
            'sitekey': sitekey,
            'callback': verifyOutPut
        });


        if (contactInit) {
            contactCaptcha = grecaptcha.render('feedCaptcha', {
                'sitekey': '6LdLXGMUAAAAAJdxK5SWRe8Svm4zevgD2-vSZbFW',
                'callback': function() {
                    jQuery('#feedCaptchaHidden').valid()
                },
            });
        }
    };
</script>
<script>
    if (window.location.hash) {
        var hash = window.location.hash.toLowerCase();
        if (hash == '#optout') {
            setTimeout(function() {
                $('.opt_out_block_wrap').show();
            }, 1000)
        }
    }
    /*$.validator.addMethod('phoneNumber', function(value, element) {
        return this.optional(element) || (/([+0-9() -]{8,20})+/ig).test(value);
    }, 'Invalid value.');*/
    $.validator.addMethod('customEmail', function(value, element) {
        return this.optional(element) || /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
    }, 'Invalid email.');
    $.validator.addMethod("require_from_group", function(value, element, options) {
        var $fields = $(options[1], element.form),
            $fieldsFirst = $fields.eq(0),
            validator = $fieldsFirst.data("valid_req_grp") ? $fieldsFirst.data("valid_req_grp") : $.extend({}, this),
            isValid = $fields.filter(function() {
                return validator.elementValue(this);
            }).length >= options[0];

        // Store the cloned validator for future validation
        $fieldsFirst.data("valid_req_grp", validator);

        // If element isn't being validated, run each require_from_group field's validation rules
        if (!$(element).data("being_validated")) {
            $fields.data("being_validated", true);
            $fields.each(function() {
                validator.element(this);
            });
            $fields.data("being_validated", false);
        }
        return isValid;
    }, $.validator.format("Please fill at least {0} of these fields."));
    $('.omUKopt_out').on('click', function() {
        $('.opt_out_block_wrap').show().trigger('optOutPopupShow');
        return false;
    });
    $('.opt_out_close').on('click', function() {
        $('.opt_out_block_wrap').hide().trigger('optOutPopupClose');
        return false;
    });
    $(document).on('click', '.opt_out_block_wrap', function(e) {
        if (!$(e.target).closest('#opt_out_block').length) {
            $('.opt_out_block_wrap').hide().trigger('optOutPopupClose');
        }
    });
    var $optOutForm = $('.opt_out_form');
    $('.opt_out_again').on('click', function() {
        $('#opt_out_H').css({
            display: 'inline'
        });
        $('#optOutPhone').val('');
        $('#optOutEmail').val('');
        $('#opt_out_fail').hide();
        $optOutForm.show();
    });
    var formValidator = $optOutForm.validate({
        errorElement: 'span',
        rules: {
            'number': {
                number: true,
                require_from_group: [1, '.opt_out_form_field']
            },
            'email': {
                customEmail: true,
                require_from_group: [1, '.opt_out_form_field']
            }
        }
    });
    $optOutForm.on('submit', function(e) {
        e.preventDefault();
        var $this = $(this),
            phone = $.trim($('#optOutPhone').val().replace(/[-() ]/g, '')),
            email = $.trim($('#optOutEmail').val()),
            fieldsAPI = "",
            contentAPI = "",
            siteURL = "{site_url}",
            gcaptcha = grecaptcha.getResponse(optOutCaptcha);

        if ($this.valid()) {
            if (gcaptcha.length === 0) {
                $('.box-captcha .errorCaptcha').remove();
                $('.box-captcha').append('<span class="errorCaptcha">Captcha is required field</span>');
                $('#optOutCaptcha > div').css({
                    border: '1px solid red'
                })
            } else {
                $('.g-recaptcha').next('span').html('');
                if (phone != '') {
                    fieldsAPI += "phoneNumber";
                    contentAPI += "&phoneNumber=" + phone;
                }
                if (email != '') {
                    fieldsAPI += phone != '' ? ",email" : "email";
                    contentAPI += "&email=" + email;
                }
                $.ajax({
                    type: 'POST',
                    url: "ajax.php",
                    data: {
                        "fieldsAPI": fieldsAPI,
                        "contentAPI": contentAPI,
                        "siteURL": siteURL,
                        "gcaptcha": gcaptcha
                    },
                    beforeSend: function() {
                        $this.find('button').prop('disabled', true);
                    },
                    complete: function() {
                        $this.find('button').prop('disabled', false);
                    },
                    success: function(data) {
                        data = data.replace(/\s+/, '');
                        if (data == 'success') {
                            $('#opt_out_H').hide();
                            $this.hide();
                            $('#opt_out_ok').show();
                        } else {
                            $('#opt_out_H').hide();
                            $this.hide();
                            $('#opt_out_fail').show();
                        }
                    }
                });
            }
        }
    });
    $('.opt_out_block_wrap').on('optOutPopupClose', function() {
        formValidator.resetForm();
        $optOutForm[0].reset();
        grecaptcha.reset();
        $('#opt_out_fail').hide();
        $('#opt_out_ok').hide();
        $('#opt_out_H').show();
        $optOutForm.show();
        $optOutForm.find('button').prop('disabled', false);
    });
</script>
<!--end opt out popup-->