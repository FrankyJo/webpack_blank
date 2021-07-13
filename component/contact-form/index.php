<div class="box-form">
    <div class="contact-form-wrap">
        <?php if (empty($_GET['msg'])) { ?>
            <div class="contact-title">

                <h2>Fill out the form on the right to tell us how we can help you.</h2>
                <div class="contact-sup">
                    <h3>Contact<br> consumer support at:</h3>
                    <div>
                        <a href="tel:+18887750859">(888) 775-0859</a>
                        <p>1125 E Broadway, #545<br> Glendale, CA 91205</p>
                    </div>
                </div>

            </div>
        <?php } ?>
        <?php if (empty($_GET['msg'])) { ?>
            <div class="box-contact">


                <div class="box-form-cont">
                    <iframe width=0 height=0 id="contact_frame" name="contact_frame"
                            style="display: none"></iframe>
                    <form action="https://cp.zeroparallel.com/api/feed/contactus" method="post"
                          class="feed_contact validate" target="contact_frame">
                        <p class="required-val">*required</p>
                        <div class="box-field">
                            <div class="box-error-field box-single-wrap" data-text="Your Name *">
                                <input type="text" placeholder="Your Name *" name="name" id="name"
                                       class="required" value=""/>
                                <label><span>Please enter your name</span></label>
                            </div>
                            <div class="box-single-wrap" data-text="Phone number">
                                <input type="text" placeholder="Phone number" name="phone" id="phone"
                                       value="" class="number"/>
                                <label><span>Please enter valid phone</span></label>
                            </div>
                            <div class="box-error-field box-single-wrap" data-text="Email *">
                                <input type="text" placeholder="Email *" name="email" id="email"
                                       class="required email"
                                       value=""/>
                                <label><span>Please enter valid email</span></label>
                            </div>
                            <div class="box-error-field box-single-wrap" data-text="Subject *">
                                <input type="text" placeholder="Subject *" name="subject" id="subject"
                                       class="required" value=""/>
                                <label><span>Please enter a subject of your enquiry</span></label>
                            </div>
                            <div class="field-text box-error-field box-single-wrap"
                                 data-text="Message *">
                                            <textarea placeholder="Message *" cols="50" rows="4" name="message"
                                                      id="message"
                                                      class="required"></textarea>
                                <label><span>Please enter your message</span></label>
                                <input type="hidden" name="sourceUrl"
                                       value="https://holidaycashfast.com/contact.php">
                            </div>
                        </div>

                        <div class="box-bot-form">

                            <div class="box-captcha">
                                <div id="feedCaptcha"></div>
                                <input type="hidden" name="feedCaptchaHidden" id="feedCaptchaHidden"
                                       class="feedCaptchaHidden required" value="">
                            </div>
                            <button class="get-btn" type="submit">Submit</button>
                        </div>

                    </form>
                    <script src="lib/validate.js?v=004"></script>
                    <script>
                        function valideForm(handler) {
                            jQuery.validator.addMethod("default-value", function (value, element) {
                                return value != element.defaultValue;
                            }, "");

                            jQuery.validator.messages.required = "";
                            jQuery(handler).validate({
                                onkeyup: false,
                                ignore: '.ignore',
                                errorElement: 'div',
                                rules: {
                                    'feedCaptchaHidden': {
                                        required: function () {
                                            return grecaptcha.getResponse(contactRecaptcha) ===
                                                '';
                                        }
                                    }
                                },
                                messages: {
                                    'feedCaptchaHidden': {
                                        required: 'Please verify that you are not a robot.'
                                    }
                                },
                                errorPlacement: function (error, element) {
                                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                                        error.insertAfter(element);
                                        error.addClass('feedCaptcha-error');
                                    } else {
                                        return false;
                                    }
                                },
                                highlight: function (element, errorClass, validClass) {
                                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                                        jQuery('#feedCaptcha > div').css('border',
                                            '1px solid red');
                                    }
                                    jQuery(element).addClass(errorClass).removeClass(
                                        validClass);
                                },
                                unhighlight: function (element, errorClass, validClass) {
                                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                                        jQuery('#feedCaptcha > div').css('border',
                                            '1px solid transparent');
                                    }
                                    jQuery(element).removeClass(errorClass).addClass(
                                        validClass);
                                },
                                submitHandler: function (form) {
                                    jQuery('button[type="submit"]').prop('disabled', true);
                                    form.submit();
                                }
                            });
                        }

                        jQuery(document).ready(function () {
                            valideForm("form.validate");
                        });
                    </script>
                    <style>
                        #feedCaptcha > div {
                            border: 1px solid transparent;
                        }

                        .feedCaptcha-error {
                            color: red;
                            border: none !important;
                        }
                    </style>
                    <script type="text/javascript">
                        var contactRecaptcha = '';
                        var captchaCallback = function () {
                            var response = grecaptcha.getResponse(contactRecaptcha);
                            jQuery('#feedCaptchaHidden').val(response).valid();
                        }
                        var onloadCallback = function () {
                            contactRecaptcha = grecaptcha.render('feedCaptcha', {
                                'sitekey': '6LdLXGMUAAAAAJdxK5SWRe8Svm4zevgD2-vSZbFW',
                                'callback': captchaCallback,
                                'expired-callback': captchaCallback,
                            });
                        };
                    </script>
                    <script
                            src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en"
                            async defer></script>
                </div>


            </div>
        <?php } else { ?>
            <div class="send-msg-success">
                <img src="./img/success.svg" alt="">
                <h4>Thank You, Your Message<br> Has Been Sent!</h4>
                <span>We Will Contact You Soon.</span>
            </div>
        <?php } ?>
    </div>
</div>