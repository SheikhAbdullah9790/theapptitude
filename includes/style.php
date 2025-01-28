<?php  $phone = "+1 (646) 814-1363"; ?>
<?php  $email = "sales@demo.com"; ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex, nofollow" />
<link rel="icon" href="<?php echo $basesurl;?>images/fav.png"/>
<link rel="stylesheet" href="<?php echo $basesurl;?>css/m-style.css" rel="preload" as="style" />
<link rel="stylesheet" href="<?php echo $basesurl;?>css/style.css" rel="preload" as="style" />
<link rel="stylesheet" href="<?php echo $basesurl;?>css/responsive.css" rel="preload" as="style" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>

<?php
	// session_start();
   	// if ( !isset( $_SESSION["origURL"] ) )
    //   	$_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
?>

<?php
   	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php
         function getUserIP()
         {
             // Get real visitor IP behind CloudFlare network
             if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                       $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                       $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
             }
             $client  = @$_SERVER['HTTP_CLIENT_IP'];
             $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
             $remote  = $_SERVER['REMOTE_ADDR'];
         
             if(filter_var($client, FILTER_VALIDATE_IP))
             {
                 $ip = $client;
             }
             elseif(filter_var($forward, FILTER_VALIDATE_IP))
             {
                 $ip = $forward;
             }
             else
             {
                 $ip = $remote;
             }
             return $ip;
         }
         $user_ip = getUserIP();
         // Output IP address [Ex: 177.87.193.134]
?>
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
