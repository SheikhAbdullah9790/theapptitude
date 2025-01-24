<!DOCTYPE html>
<html>
   <head>
      <title>Privacy Policy</title>
      <meta name="description" content="Privacy Policy"/>
      <?php
         $srcurl = "includes/";
         $basesurl = "assets/";
         $urhere = "none";
      ?>
      <?php
         $style = $srcurl."style.php";
         include_once($style);
      ?>
   </head>
   <body class="homepg prcvy">
      <?php
         $header = $srcurl."header.php";
         include($header);
      ?>
      <section class="main-privacy sec-pad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="main-heading">Privacy Policy</h1>
                  <p>Welcome to The Apptitude! We respect your privacy and are committed to protecting it through our compliance with this policy.</p>
                  <div class=""><br></div>
                  <div class="policyTxt">
                     <h2 class="main-heading">1. Information We Collect</h2>
                     <p>We may collect several types of information from and about users of our app, including: </p>
                     <ul>
                        <li>Personal Information: This includes your name, email address, and other information you provide when you register or update your profile.</li>
                        <li>Usage Information: We collect information about your usage of the app, such as the features you use and the time you spend on the app.</li>
                        <li>Device Information: We may collect information about your mobile device, including the hardware model, operating system, and other unique device identifiers.</li>
                     </ul>
                     <h2 class="main-heading">2. How We Use Your Information</h2>
                     <p>We use the information we collect to:</p>
                     <ul>
                        <li>Provide and improve our services.</li>
                        <li>Respond to your inquiries.</li>
                        <li>Communicate with you about updates or changes to our services.</li>
                        <li>Monitor and analyze trends, usage, and activities in connection with our services.</li>
                     </ul>
                     <h2 class="main-heading">3. Sharing Your Information</h2>
                     <p>We do not share your personal information with third parties without your consent, except in the following circumstances:</p>
                     <ul>
                        <li>To comply with any court order, law, or legal process.</li>
                        <li>To enforce our terms of service and other agreements.</li>
                        <li>If we believe disclosure is necessary or appropriate to protect the rights, property, or safety of The Apptitude, our users, or others.</li>
                     </ul>
                     <h2 class="main-heading">4. Security</h2>
                     <p>We take reasonable measures to help protect your personal information from loss, theft, misuse, unauthorized access, disclosure, alteration, and destruction.</p>
                     <h2 class="main-heading">5. Changes to Our Privacy Policy</h2>
                     <p>We may update our privacy policy from time to time. If we make changes, we will notify you by revising the date at the top of the policy and, in some cases, we may provide you with additional notice.</p>
                     <h2 class="main-heading">6. Contact Us</h2>
                     <p>If you have any questions about this privacy policy, please contact us at: <a href="mailto:<?php echo $email;?>"><?php echo $email; ?></a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php
      $footer = $srcurl."footer.php";
      include($footer);
      ?>
   </body>
</html>