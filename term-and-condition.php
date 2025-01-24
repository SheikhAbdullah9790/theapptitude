<!DOCTYPE html>
<html>
   <head>
      <title>Terms And Conditions</title>
      <meta name="description" content="Terms And Conditions"/>
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
   <body class="homepg">
      <?php
         $header = $srcurl."header.php";
         include($header);
      ?>
      <section class="main-privacy sec-pad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="main-heading">Terms and Conditions</h1>
                  <p>Welcome to The Apptitude! These terms and conditions outline the rules and regulations for the use of The Apptitude’s app.</p>
                  <div class=""><br></div>
                  <div class="policyTxt">
                     <h2>1. Acceptance of Terms</h2>
                     <p>By accessing and using The Apptitude, you accept and agree to be bound by the terms and provisions of this agreement.</p>
                     <h2>2. Use License</h2>
                     <p>Permission is granted to temporarily download one copy of The Apptitude for personal, non-commercial transitory viewing only.</p>
                     <h2>3. Restrictions</h2>
                     <p>You are specifically restricted from all of the following:</p>
                     <ul>
                        <li>Selling, sublicensing and/or otherwise commercializing any app material.</li>
                        <li>Using The Apptitude in any way that is damaging to this app.</li>
                        <li>Using The Apptitude contrary to applicable laws and regulations, or in a way that causes harm to the app, or to any person or business entity.</li>
                     </ul>
                     <h2>4. Your Content</h2>
                     <p>In these terms and conditions, “Your Content” shall mean any audio, video, text, images, or other material you choose to display on this app. Your Content must be your own and must not be infringing on any third party’s rights.</p>
                     <h2>5. No warranties</h2>
                     <p>The Apptitude is provided “as is,” with all faults, and we express no representations or warranties, of any kind related to our app or the materials contained on our app.</p>
                     <h2>6. Limitation of liability</h2>
                     <p>In no event shall The Apptitude, nor any of its officers, directors, and employees, be held liable for anything arising out of or in any way connected with your use of this app.</p>
                     <h2>7. Indemnification</h2>
                     <p>You hereby indemnify to the fullest extent The Apptitude from and against any and all liabilities, costs, demands, causes of action, damages, and expenses arising out of or in any way related to your breach of any of the provisions of these terms.</p>
                     <h2>8. Changes to Our Terms and Conditions</h2>
                     <p>We may update our terms and conditions from time to time. If we make changes, we will notify you by revising the date at the top of the policy and, in some cases, we may provide you with additional notice.</p>
                     <h2>9. Contact Us</h2>
                     <p>If you have any questions about these terms and conditions, please contact us at:<a href="mailto:<?php echo $email;?>"><?php echo $email; ?></a></p>
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