    <section class="pre-footer-section">
        <div class="wrapper">
            <h1>Prefooter section in all page</h1>
        </div>
    </section>

</div> <!-- Закрытие блока 'content' -->

<footer>
    <div class="bottom-nav-section">
        <div class="wrapper">
            <ul>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'index.php') {echo 'class="active" ';} ?> href="./index.php">Home</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'how-it-works.php') {echo 'class="active" ';} ?> href="./how-it-works.php">How It Works</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'faq.php') {echo 'class="active" ';} ?> href="./faq.php">Help Centre</a></li>
                <li><a class="omUKopt_out">Opt Out</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'terms-and-conditions.php') {echo 'class="active" ';} ?> href="./terms-and-conditions.php">Terms & Conditions</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'your-privacy-rights.php') {echo 'class="active" ';} ?> href="./your-privacy-rights.php">Privacy Notice</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'cookies-policy.php') {echo 'class="active" ';} ?> href="./cookies-policy.php">Cookies Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'responsible-broking-policy.php') {echo 'class="active" ';} ?> href="./responsible-broking-policy.php">Broking Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'complaints-policy.php') {echo 'class="active" ';} ?> href="./complaints-policy.php">Complaints Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'contact.php') {echo 'class="active" ';} ?> href="./contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="material">
            <p>{site_url} is not a lender and does not make credit decisions. {site_url} matches customer applications with lenders in our network based on the information provided, in exchange for a commission paid by the lender for advertising services provided. There is no guarantee that you will be accepted by a lender or that you will be offered terms suitable for your financial needs. Not all lenders will be able to provide amounts up to £5000. The time required to process and transfer the loan varies by the lender. This website does not directly endorse any particular product or service. Any information on this site should serve as opinion only. As a condition of extending credit, some lenders you may be matched with may run a credit check from a credit reference agency. Late or missed payments may be subject to increased fees and/or interest rates.</p>
            <p>1. Not all lenders will be able to provide amounts up to £5000. 2. Not all lenders pay out the same day.</p>
            <div class="partners">
                <a target="_blank" href="https://www.ccta.co.uk/"><img src="./img/logo_ccta.png" alt=""></a>
                <a target="_blank" href="https://cfa-uk.co.uk/"><img src="./img/logo_cfa.png" alt=""></a>
            </div>
            <p>Please be advised that this website is not part of Facebook, Instagram or Facebook Inc. Additionally, this site is not endorsed by Facebook or Instagram in any way. Facebook® is a registered trademark of Facebook, Inc. (“Facebook”). Instagram® is a registered trademark of Facebook (“Instagram”)</p>
            <p>{site_url} is a registered trading name of TdotUK Limited, which is authorised and regulated by the Financial Conduct Authority and is entered on the Financial Services Register under reference number: 688026. TdotUK Limited is registered in England and Wales (Company number 09225672), with a registered office located at Office 102, Oxford Point, 19 Oxford Road, Bournemouth, BH8 8GS, United Kingdom. Licensed by the Information Commissioner’s Office under registration number: ZA128431.</p>
            <p class="copyright">© 2020 {site_url} All rights reserved. {site_url} is a trading name of T Dot UK Limited.</p>
        </div>
    </div>
</footer>

<div class="modal">
    <div class="overlay"></div>
    <div class="window">
        <h2>Don’t leave yet!</h2>
        <h3>Get up to £5,000 as soon as the next business day!</h3>
        <form action="form.php" class="preform">
            <div class="select-box">
                <label for="loan_amount">I want to borrow:</label>
                <select name="loan_amount">
                    <option value="1000">£1000</option>
                    <option value="2000">£2000</option>
                    <option value="2500">£2500</option>
                    <option value="3000">£3000</option>
                    <option value="4000">£4000</option>
                    <option value="5000">£5000</option>
                </select>
            </div>
            <div class="select-box">
                <label for="loan_duration_months">For:</label>
                <select name="loan_duration_months">
                    <option value="1">1 month</option>
                    <option value="2">2 month</option>
                    <option value="3">3 month</option>
                    <option value="4">4 month</option>
                    <option value="5">5 month</option>
                    <option value="6">6 month</option>
                    <option value="9">9 month</option>
                    <option value="12">12 month</option>
                    <option value="15">15 month</option>
                    <option value="18">18 month</option>
                    <option value="24">24 month</option>
                    <option value="36">36 month</option>
                </select>
            </div>
            <button type="submit">Get started</button>
        </form>
        <hr>
        <p class="rates">Rates from 49.9% APR to max 1333% APR. Minimum Loan Length is 1 month. Maximum Loan Length
            is 36
            months. Representative Example: £250 borrowed for 30 days. Total amount repayable is £310.00.
            Interest charged is £60.00, annual interest rate of 292% (fixed). Representative 669.35% APR
            (variable).</p>
        <div class="close-modal"></div>
    </div>
</div>

<div class="cookie-message">
    <p>In using this website you allow us to utilize cookies to give you the best site experience. Read our <a target="_blank" href="./cookies-policy.php">cookie policy</a>.</p>
    <div class="cookie-close">Agree</div>
</div>

<script src="public/js/script.js?v={site_version}"></script>

<?php if (basename($_SERVER['SCRIPT_NAME']) != 'index.php' && $_SERVER['SCRIPT_NAME'] != 'how-it-works.php' && $_SERVER['SCRIPT_NAME'] != 'form.php') { ?>
    <script>
        //validate
        function valideForm(handler) {
            jQuery.validator.addMethod("default-value", function(value, element) {
                return value != element.defaultValue;
            }, "");

            jQuery.validator.messages.required = "";
            jQuery(handler).validate({
                onkeyup: false,
                ignore: '.ignore',
                errorElement: 'div',
                rules: {
                    'feedCaptchaHidden': {
                        required: function() {
                            return grecaptcha.getResponse(contactCaptcha) === '';
                        }
                    }
                },
                messages: {
                    'feedCaptchaHidden': {
                        required: 'Please verify that you are not a robot.'
                    }
                },
                errorPlacement: function(error, element) {
                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                        error.insertAfter(element);
                        error.addClass('feedCaptcha-error');
                    } else {
                        return false;
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                        jQuery('#feedCaptcha > div').css('border', '1px solid #F41E00');
                    }
                    jQuery(element).addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                        jQuery('#feedCaptcha > div').css('border', '1px solid transparent');
                    }
                    jQuery(element).removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function(form) {
                    jQuery('button[type="submit"]').prop('disabled', true);
                    form.submit();
                }
            });
        }

        jQuery(document).ready(function() {
            valideForm("form.validate");
        });

        // input help
        $(".box-line input, .box-line textarea").focusin(function() {
            $(this).parent('.box-line').children('.input-help').css('display', 'none');
        });
        $(".box-line input, .box-line textarea").focusout(function() {
            $(this).parent('.box-line').children('.input-help').css('display', 'block');
        });
    </script>
<?php } ?>

<?php include('opt-out-popup.php'); ?>

</body>

</html>