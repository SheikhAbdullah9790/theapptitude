<?php
if ($_SERVER['HTTP_HOST'] == "localhost") {
$folder_name = ""; $path = 'http://localhost/theaptitude/'.$folder_name;}
else {
$folder_name = ""; $path = 'http://'.$_SERVER['HTTP_HOST'].'/'.$folder_name;
}
// echo  $path;
?>
<main class="app-container">
   <header class="header" id="header">
      <div class="container-fluid wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
         <div class="row align-items-center">
            <div class="col-md-3 col-sm-3">
               <div class="lgo">
                  <a href="<?php echo $path;?>"><img class="lozad " data-src="<?php echo $basesurl;?>images/logo.gif" alt="" src="<?php echo $basesurl;?>images/logo.gif" data-loaded="true"></a>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <ul class="dsktpmenu">
                  <li><a href="<?php echo $path;?>">Home</a></li>
                  <li><a href="javascript:;">Services</a></li>
                  <li><a href="javascript:;">Why Apptitude</a></li>
                  <li><a href="javascript:;">Case Study</a></li>
                  <li><a href="javascript:;">Process</a></li>
                  <li><a href="javascript:;">Contact Us</a></li>
               </ul>
            </div>
            <div class="col-md-3">
               <ul class="cntcus">
                  <li><a href="javascript:;"><i class="fa-solid fa-phone"></i><?php echo $phone;?></a></li>
                  <li class="mainbtn"><a href="javascript:;">Get in Touch</a></li>
               </ul>
            </div>
         </div>
      </header>





      <nav class="nav">
         <div class="hamburger-container">
            <ul class="hamburger">
               <li></li>
               <li></li>
               <li></li>
            </ul>
         </div>
         <ul id="menu">
            <li><a href="<?php echo $path;?>">Home</a></li>
            <li><a href="javascript:;">Services</a></li>
            <li><a href="javascript:;">Why Apptitude</a></li>
            <li><a href="javascript:;">Case Study</a></li>
            <li><a href="javascript:;">Process</a></li>
            <li><a class="manbutn" href="javascript:;">Contact Us</a></li>
         </ul>
      </nav>