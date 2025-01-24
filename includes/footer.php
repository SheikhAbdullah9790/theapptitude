<footer class="sec-pad" id="footer">
    <div class="container wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-md-3">
                <div class="cntnt">
                    <img class="lozad " data-src="<?php echo $basesurl;?>images/logo.gif" alt="" src="<?php echo $basesurl;?>images/logo.gif" data-loaded="true">
                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt ut labore et consectetur adipiscing elit, sed do eiusmod huiytr incididunt ut labore et consec adipiscing elit,</p>
                </div>
                
                
                <ul class="socl">
                    <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="srvs">
                    <h4>SERVICES</h4>
                    <li><a href="javascript:;">Mobile App Development</a></li>
                    <li><a href="javascript:;">Game Development</a></li>
                    <li><a href="javascript:;">Flutter App Development</a></li>
                    <li><a href="javascript:;">React Native Development</a></li>
                    <li><a href="javascript:;">iOS App Development</a></li>
                    <li><a href="javascript:;">Android App Development</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="menu">
                    <h4>QUICK LINKS</h4>
                    <li><a href="<?php echo $path;?>">Home</a></li>
                    <li><a href="javascript:;">About Us</a></li>
                    <li><a href="javascript:;">Services</a></li>
                    <li><a href="javascript:;">Why Apptitude</a></li>
                    <li><a href="javascript:;">Case Study</a></li>
                    <li><a href="javascript:;">Process</a></li>
                    <li><a href="javascript:;">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="nws">
                    <h4>NEWS LETTER</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                    <form action="">
                        <input class="eml" type="text" name="email" placeholder="Email Address">
                        <input class="sbmt" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</footer>
<div class="copyright">
        <div class="container wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>©  Copyright <span id="year"></span> The Apptitudestats. All Rights Reserve</p>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="info">
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="term-and-condition.php">Terms & Conditions</a></li>
                        <li><a href="support.php">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo $basesurl;?>js/mlib.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js" defer></script>
<script src="<?php echo $basesurl;?>js/functions.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- <script>
$(document).ready(function() {
//var currentIP;
var key = '5XpThOAEkfgOvEJ';
var currentIP = $("meta[name=ip2loc]").attr('content');
var pgurl = $("meta[name=page_url]").attr('content');
$.ajax({
method: 'get',
url: '//pro.ip-api.com/json/' + currentIP,
data: {
key: key
},
success: function(data) {
if (data) {
$('input[name=ip2loc_ip]').val(data.query);
$('input[name=ip2loc_isp]').val(data.isp);
$('input[name=ip2loc_org]').val(data.org);
$('input[name=ip2loc_country]').val(data.country);
$('input[name=ip2loc_region]').val(data.regionName);
$('input[name=ip2loc_city]').val(data.city);
//$('input[name=pageurl]').val(pageurl);
}
}
});
});
</script> -->
<?php
// $popup = $srcurl."../popup/popup.php";
// include_once($popup);
?>
<?php
// $chat = $srcurl."../chat-script.php";
// include_once($chat);
?>