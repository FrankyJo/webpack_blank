<!-- NOT COPY -->
<?php include 'header.php'; ?>
<?php include 'navigate.php'; ?>
<!-- NOT COPY -->

    <div class="content padd-cont">
        <section class="name-section">
            <div class="wrapper">
                <div class="box-contact-form">
                    <?php if (empty($_GET['msg'])) { ?>
                        <iframe width=0 height=0 id="contact_frame" name="contact_frame" style="display: none"></iframe>
                        <form action="https://cp.t.uk/api/feed/contactus" method="post" class="feed_contact validate feed-form" target="contact_frame">
                            <div class="box-title">
                                <h2>Fill out the form below to tell us how we can help you.</h2>
                            </div>
                            <div class="box-field">
                                <div class="field">
                                    <p>Name*</p>
                                    <input type="text" name="name" id="name" class="required" value="" />
                                    <label>Please enter your name.</label>
                                </div>
                                <div class="field">
                                    <p>Email*</p>
                                    <input type="text" name="email" id="email" class="required email" value="" />
                                    <label>Please enter a valid email address.</label>
                                </div>
                                <div class="field">
                                    <p>Phone number</p>
                                    <input type="text" name="phone" id="phone" value="" class="number" />
                                    <label>Please enter a valid phone number.</label>
                                </div>
                                <div class="field">
                                    <p>Subject*</p>
                                    <input type="text" name="subject" id="subject" class="required" value="" />
                                    <label>Please enter your subject.</label>
                                </div>
                                <div class="field textarea-field">
                                    <p>Message*</p>
                                    <textarea name="message" id="message" class="required"></textarea>
                                    <label>Please enter your message.</label>
                                    <input type="hidden" name="sourceUrl" value="<?php echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                                </div>
                            </div>
                            <div class="box-bottom">
                                <div class="get-box">
                                    <div class="box-captcha">
                                        <div id="feedCaptcha"></div>
                                            <input type="hidden" name="feedCaptchaHidden" id="feedCaptchaHidden" class="feedCaptchaHidden required" value="">
                                    </div>
                                    <button type="submit">Send</button>
                                </div>
                                <p class="req-text">Required*</p>
                            </div>
                        </form>
                    <?php } else { ?>
                        <div class="disc">
                            <div class="img"><img src="./img/icon-check.svg" alt=""></div>
                            <h3>Thank You, Your Message Has Been Sent!</h3>
                            <p>We Will Contact You Soon.</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="name-section">
            <div class="wrapper"></div>
        </section>

<!-- NOT COPY -->
<?php include 'footer.php'; ?>
<!-- NOT COPY -->