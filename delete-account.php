<!DOCTYPE html>
<html>
   <head>
      <title>Delete Account</title>
      <meta name="description" content="Delete Account"/>
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
                  <h1 class="main-heading">DELETE ACCOUNT</h1>
                  <h2 class="main-heading">1. Step 01</h2>
                  <p> login The Apptitude application.</p>
                  <h2 class="main-heading">2. Step 02</h2>
                  <p>Go to settings</p>
                  <h2 class="main-heading">3. Step 03</h2>
                  <p>Tap on delete account</p>
                  <h2 class="main-heading">4. Step 04</h2>
                  <p>Tap on “Yes” to delete your account.</p>
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