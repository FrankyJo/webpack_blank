<div class="dont-leave-modal">
    <div class="overlay" style="display: block;"></div>
    <div class="window">
        <div class="icon">
            <img src="public/img/dont-leave.png" alt="">
        </div>
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
        <p class="rates">Rates from 49.9% APR to max 1333% APR. Minimum Loan Length is 1 month. Maximum Loan Length is 36
            months. Representative Example: £250 borrowed for 30 days. Total amount repayable is £310.00.
            Interest charged is £60.00, annual interest rate of 292% (fixed). Representative 669.35% APR
            (variable).</p>
        <div class="close-modal"></div>
    </div>
</div>
<script>

    // open modal
    function omSetAnimateConfigOpen() {
        $("body").css("overflow", "hidden");
        $('.overlay').show();
        $('.dont-leave-modal').addClass('flex-add');
    }
    function omSetAnimateConfigClose() {
        $('.overlay').hide();
        $('.dont-leave-modal ').slideUp();
        $("body").css("overflow", "auto");
    }
    var mouseX = 0;
    var mouseY = 0;
    var popupCounter = 0;

    document.addEventListener("mousemove", function (e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        console.log('work')
    });

    $(document).mouseleave(function () {
        if (document.cookie.indexOf('omPopover') === -1) {
            if (mouseY < 100 && window.innerWidth > 750) {
                if (popupCounter < 1) {
                    if (typeof omSetAnimateConfigOpen === 'function') {
                        omSetAnimateConfigOpen()
                    } else {
                        console.warn('Missing function with settings')
                    };
                }
                popupCounter++;
            }
        }
    });

    $(".close-modal, .overlay, .back-btn").click(function () {
        if (typeof omSetAnimateConfigClose === 'function') {
            omSetAnimateConfigClose()
        } else {
            console.warn('Missing function with settings')
        };
        document.cookie = "omPopover=true";
    });

</script>
