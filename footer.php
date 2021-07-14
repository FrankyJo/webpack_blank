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
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'index.php') {
                        echo 'class="active" ';
                    } ?> href="./index.php">Home</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'how-it-works.php') {
                        echo 'class="active" ';
                    } ?> href="./how-it-works.php">How It Works</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'faq.php') {
                        echo 'class="active" ';
                    } ?> href="./faq.php">Help Centre</a></li>
                <li><a class="omUKopt_out">Opt Out</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'terms-and-conditions.php') {
                        echo 'class="active" ';
                    } ?> href="./terms-and-conditions.php">Terms & Conditions</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'your-privacy-rights.php') {
                        echo 'class="active" ';
                    } ?> href="./your-privacy-rights.php">Privacy Notice</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'cookies-policy.php') {
                        echo 'class="active" ';
                    } ?> href="./cookies-policy.php">Cookies Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'responsible-broking-policy.php') {
                        echo 'class="active" ';
                    } ?> href="./responsible-broking-policy.php">Broking Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'complaints-policy.php') {
                        echo 'class="active" ';
                    } ?> href="./complaints-policy.php">Complaints Policy</a></li>
                <li><a <?php if (basename($_SERVER['SCRIPT_NAME']) == 'contact.php') {
                        echo 'class="active" ';
                    } ?> href="./contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="material">
            <p>{site_url} is not a lender and does not make credit decisions. {site_url} matches customer applications
                with lenders in our network based on the information provided, in exchange for a commission paid by the
                lender for advertising services provided. There is no guarantee that you will be accepted by a lender or
                that you will be offered terms suitable for your financial needs. Not all lenders will be able to
                provide amounts up to £5000. The time required to process and transfer the loan varies by the lender.
                This website does not directly endorse any particular product or service. Any information on this site
                should serve as opinion only. As a condition of extending credit, some lenders you may be matched with
                may run a credit check from a credit reference agency. Late or missed payments may be subject to
                increased fees and/or interest rates.</p>
            <p>1. Not all lenders will be able to provide amounts up to £5000. 2. Not all lenders pay out the same
                day.</p>
            <div class="partners">
                <a target="_blank" href="https://www.ccta.co.uk/"><img src="./public/img/logo_ccta.png" alt=""></a>
                <a target="_blank" href="https://cfa-uk.co.uk/"><img src="./public/img/logo_cfa.png" alt=""></a>
            </div>
            <p>Please be advised that this website is not part of Facebook, Instagram or Facebook Inc. Additionally,
                this site is not endorsed by Facebook or Instagram in any way. Facebook® is a registered trademark of
                Facebook, Inc. (“Facebook”). Instagram® is a registered trademark of Facebook (“Instagram”)</p>
            <p>{site_url} is a registered trading name of TdotUK Limited, which is authorised and regulated by the
                Financial Conduct Authority and is entered on the Financial Services Register under reference number:
                688026. TdotUK Limited is registered in England and Wales (Company number 09225672), with a registered
                office located at Office 102, Oxford Point, 19 Oxford Road, Bournemouth, BH8 8GS, United Kingdom.
                Licensed by the Information Commissioner’s Office under registration number: ZA128431.</p>
            <p class="copyright">© 2020 {site_url} All rights reserved. {site_url} is a trading name of T Dot UK
                Limited.</p>
        </div>
    </div>
</footer>

<div class="dont-leave-modal">
    <div class="overlay" style="display: block;"></div>
    <div class="window">
        <h2>Don’t leave yet!</h2>
        <p>Get up to £5,000 as soon as the next business day!</p>
        <form action="form.php" class="preform">
            <div class="select-box">
                <label for="loan_amount">I want to borrow:</label>
                <select name="loan_amount">
                    <option value="100">£100</option>
                    <option value="200">£200</option>
                    <option value="300">£300</option>
                    <option value="400">£400</option>
                    <option value="500">£500</option>
                    <option value="600">£600</option>
                    <option value="700">£700</option>
                    <option value="800">£800</option>
                    <option value="900">£900</option>
                    <option value="1000" selected="">£1000</option>
                    <option value="1100">£1100</option>
                    <option value="1200">£1200</option>
                    <option value="1300">£1300</option>
                    <option value="1400">£1400</option>
                    <option value="1500">£1500</option>
                    <option value="1600">£1600</option>
                    <option value="1700">£1700</option>
                    <option value="1800">£1800</option>
                    <option value="1900">£1900</option>
                    <option value="2000">£2000</option>
                    <option value="2100">£2100</option>
                    <option value="2200">£2200</option>
                    <option value="2300">£2300</option>
                    <option value="2400">£2400</option>
                    <option value="2500">£2500</option>
                    <option value="3000">£3000</option>
                    <option value="3500">£3500</option>
                    <option value="4000">£4000</option>
                    <option value="4500">£4500</option>
                    <option value="5000">£5000</option>
                </select>
            </div>
            <div class="select-box">
                <label for="loan_duration_months">For:</label>
                <select name="loan_duration_months">
                    <option value="1">1 month</option>
                    <option value="2">2 months</option>
                    <option value="3" selected="">3 months</option>
                    <option value="4">4 months</option>
                    <option value="5">5 months</option>
                    <option value="6">6 months</option>
                    <option value="9">9 months</option>
                    <option value="12">12 months</option>
                    <option value="15">15 months</option>
                    <option value="18">18 months</option>
                    <option value="24">24 months</option>
                    <option value="36">36 months</option>
                </select>
            </div>
            <button type="submit">Get started</button>
        </form>
        <hr>
        <p class="rates">Rates from 49.9% APR to max 1333% APR. Minimum Loan Length is 1 month. Maximum Loan Length is
            36
            months. Representative Example: £250 borrowed for 30 days. Total amount repayable is £310.00.
            Interest charged is £60.00, annual interest rate of 292% (fixed). Representative 669.35% APR
            (variable).</p>
        <div class="close-modal"></div>
    </div>
</div>

<div class="cookie-message">
    <p>In using this website you allow us to utilize cookies to give you the best site experience. Read our <a
                target="_blank" href="./cookies-policy.php">cookie policy</a>.</p>
    <div class="cookie-close">Agree</div>
</div>

<script src="public/js/script.js?v={site_version}"></script>

<?php if (basename($_SERVER['SCRIPT_NAME']) != 'index.php' && $_SERVER['SCRIPT_NAME'] != 'how-it-works.php' && $_SERVER['SCRIPT_NAME'] != 'form.php') { ?>
    <script>
        //validate
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
                            return grecaptcha.getResponse(contactCaptcha) === '';
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
                        jQuery('#feedCaptcha > div').css('border', '1px solid #F41E00');
                    }
                    jQuery(element).addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    if (jQuery(element).attr('name') === 'feedCaptchaHidden') {
                        jQuery('#feedCaptcha > div').css('border', '1px solid transparent');
                    }
                    jQuery(element).removeClass(errorClass).addClass(validClass);
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

        // input help
        $(".box-line input, .box-line textarea").focusin(function () {
            $(this).parent('.box-line').children('.input-help').css('display', 'none');
        });
        $(".box-line input, .box-line textarea").focusout(function () {
            $(this).parent('.box-line').children('.input-help').css('display', 'block');
        });
    </script>
<?php } ?>

<?php include 'opt-out-popup.php'; ?>

<?php if (basename($_SERVER['SCRIPT_NAME']) == 'your-privacy-rights.php') { ?>
    <script>
        // open box links
        const listLinks = [
            '<a target="_blank" href="https://www.1plus1loans.co.uk/privacy-policy/">1plus1 Loans Limited</a>',
            '<a target="_blank" href="https://www.247moneybox.com/247Moneybox-PP-full.htm">Active Securities Limited</a>',
            '<a target="_blank" href="http://www.affiliateroi.net/AROI_privacy.htm">Affiliate ROI LLC</a>',
            '<a target="_blank" href="https://www.talkloans.co.uk/privacy-policy/">Butler Westbury Limited</a>',
            '<a target="_blank" href="https://www.choosewisely.co.uk/pages/privacy">Choose Wisely Limited</a>',
            '<a target="_blank" href="https://www.clickfinancial.co.uk/privacy-notice">Click Loans Limited</a>',
            '<a target="_blank" href="https://www.creditstar.co.uk/site/help/documents#privacy">Creditstar UK Limited</a>',
            '<a target="_blank" href="http://dataondemand.co.uk/privacy-policy/">Data OD LTD</a>',
            '<a target="_blank" href="https://www.piggy-bank.co.uk/privacy/">DJS UK Limited</a>',
            '<a target="_blank" href="https://www.moneyboat.co.uk/privacy-policy/">Evergreen Finance London Ltd</a>',
            '<a target="_blank" href="https://www.ferratum.co.uk/sites/ferratum.co.uk/files/20180509_uk_principles_of_processing_personal_data_of_clients_-_copy.pdf">Ferratum UK Ltd</a>',
            '<a target="_blank" href="https://www.safetynetcredit.com/content/html/privacy-policy.html">Indigo Michael Limited</a>',
            '<a target="_blank" href="http://www.interlincx.com/privacy-policy/">Interlincx</a>',
            '<a target="_blank" href="https://www.leadbyte.co.uk/privacy/">Lead Byte LTD</a>',
            '<a target="_blank" href="https://www.lendingstream.co.uk/legal/privacy-policy/">Lending Stream LLC</a>',
            '<a target="_blank" href="http://www.leadaffinity.com/privacy-policy.html">Loan Machine Limited</a>',
            '<a target="_blank" href="https://loans2go.co.uk/privacy-policy/">Loans 2 Go Ltd</a>',
            '<a target="_blank" href="https://www.guarantormyloan.co.uk/privacy/">Match the Cash Limited</a>',
            '<a target="_blank" href="https://www.mediablanket.co.uk/privacy-policy/">Mediablanket Ltd</a>',
            '<a target="_blank" href="https://www.swiftsterling.co.uk/Information/PrivacyPolicy">MMP Financial Ltd</a>',
            '<a target="_blank" href="https://www.monetise.co.uk/privacy-notice/">Monetise Media Limited</a>',
            '<a target="_blank" href="https://privacy.monevo.com/uk/privacy-policy">Monevo Limited</a>',
            '<a target="_blank" href="https://www.myfinanceclub.com/your-privacy/">My Finance Club Limited</a>',
            '<a target="_blank" href="https://www.myjar.com/privacy-policy/">MYJAR IT OU</a>',
            'Mylenders.co.uk',
            '<a target="_blank" href="https://www.bizzyloans.co.uk/app-pages/privacypolicy">Nouveau Finance Ltd</a>',
            '<a target="_blank" href="https://www.mrlender.com/privacy-policy">PDL Finance Limited</a>',
            'Quest 365',
            '<a target="_blank" href="https://www.happydosh.co.uk/privacy-policy/">Sandhurst Associates LTD</a>',
            '<a target="_blank" href="http://terms1.co.uk/privacy-policy.php">Season Marketing Ltd</a>',
            '<a target="_blank" href="https://www.unsecuredloans4u.co.uk/privacy-policy/">Serpable Ltd</a>',
            '<a target="_blank" href="https://www.dotdotloans.co.uk/privacy-notice">Shelby Finance Ltd</a>',
            '<a target="_blank" href="https://www.quidmarketloans.com/privacypolicy/">Stagemount Limited</a>',
            '<a target="_blank" href="https://www.stopgonetworks.co.uk/privacy-policy/">Stop Go Networks Ltd</a>',
            '<a target="_blank" href="https://www.bestloans.co.uk/privacy.php">TFLI Limited</a>',
            '<a target="_blank" href="https://www.loanfirst.co.uk/privacy.php">Total Processing Ltd</a>',
            '<a target="_blank" href="https://www.savvy.co.uk/Privacy/">Valour Finance Limited</a>',
            '<a target="_blank" href="https://www.brighthouse.co.uk/privacy-notice ">Caversham Finance Ltd t/a Brighthouse</a>',
            '<a target="_blank" href="https://claimdisrepair.co.uk/privacy/">Savvy Claims Limited</a>',
            '<a target="_blank" href="https://themoneyplatform.com/privacy">Gracombex Ltd</a>',
            '<a target="_blank" href="https://fernovo.co.uk/info/privacy-policy">Quidi Limited</a>',
            '<a target="_blank" href="https://www.ukcredit.co.uk/privacy-policy/">UK Credit Limited</a>',
            '<a target="_blank" href="https://www.satsumaloans.co.uk/privacy">Provident Personal Credit Limited</a>',
            '<a target="_blank" href="https://www.loantube.com/privacy-policy/">Tiger Lion Financial Limited</a>',
            '<p>Fund Ourselves Ltd, Warwick Financial Services Ltd, Dunham Technology Ltd, Bridgehouse Finance Ltd, Leadfix Ltd, Be All Ears Ltd, Saas Management Ltd, Paloma Digital Ltd, Quidie Ltd</p>',
            '<a target="_blank" href="https://www.megamobiledeals.com/privacy-policy/ ">Duke Leads</a>',
            '<a target="_blank" href="https://www.cash4unow.co.uk/privacy-policy ">Novaloans Ltd</a>',
            '<a target="_blank" href="https://www.dotdotloans.co.uk/privacy-notice">Shelby CPF</a>',
            '<a target="_blank" href="https://www.creditspring.co.uk/cookies-privacy-policy">Credit Spring</a>',
            '<a target="_blank" href="https://fernovo.co.uk/info/privacy-policy">Fernovo - CPF Campaign</a>',
            '<a target="_blank" href="https://www.mrlender.com/privacy-policy">Mr Lender - CPF Campaign</a>',
            '<a target="_blank" href="https://walletwhale.co.uk/privacy.php">Fuel Ltd</a>',
            '<a target="_blank" href="https://fernovo.co.uk/info/privacy-policy">Fernovo PCW</a>',
            '<a target="_blank" href="https://smart-loans.co.uk/privacy-policy">ESL Consultancy Services Ltd</a>',
            '<a target="_blank" href="https://www.quidmarketloans.com/privacy-policy/">Quidmarket_PCW</a>',
            '<a target="_blank" href="https://fernovo.co.uk/info/privacy-policy">Fernovo</a>',
            '<a target="_blank" href="https://loans2go.co.uk/privacy-policy/">DigitalOyster t/a Loans2Go</a>',
            '<a target="_blank" href="https://www.myfinanceclub.com/your-privacy/">MyFinance Club</a>',
            '<a target="_blank" href="https://www.cashfloat.co.uk/legal/gdpr-privacy-notice/">Western Circle Ltd</a>',
            '<a target="_blank" href="https://www.safetynet.credit/privacy-policy">SafetyNet_PCW</a>',
            '<a target="_blank" href="https://themoneyplatform.com/privacy">The Money Platform</a>',
            '<a target="_blank" href="http://www.leadaffinity.com/iframe-policy.html">Lead Affinity</a>',
            '<a target="_blank" href="https://www.quidmarketloans.com/privacy-policy/">QuidMarket</a>',
            '<a target="_blank" href="https://www.savvy.co.uk/Privacy/">Valour Finance_CPA</a>',
            '<a target="_blank" href="https://www.talkloans.co.uk/privacy-policy/">Talk Loans</a>',
            '<a target="_blank" href="https://www.everythingfinancial.co.uk/privacypolicy">Everything Financial Ltd</a>',
            '<a target="_blank" href="https://www.bizzyloans.co.uk/app-pages/privacypolicy">PingYo</a>',
        ]

        $('.get-links').on('click', function () {
            var newWindow = window.open("", null, "height=200,width=400,status=yes,toolbar=no,menubar=no,location=no");
            newWindow.document.body.innerHTML = listLinks;
        });
    </script>
<?php } ?>

<!-- Delete -->
<script src="dev_helper/var-helper.js"></script>
<!-- / -->

</body>

</html>