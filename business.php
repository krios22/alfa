<!DOCTYPE html>
<html lang="en">
   <!-- head -->
   <?php
      include './component/head.php'; 
      ?>
   <!-- head -->
   <body>
      <!-- header -->
      <?php
         include './component/header.php'; 
         ?>
      <!-- /header -->
      <!-- content -->
      <div class="content">
      <?php
         include './component/page/business/service.php'; 
         ?>

      

         <?php
         include './component/page/home/numbers.php'; 
         ?>
         <?php
         include './component/page/business/advantages.php'; 
         ?>
           <?php
         include './component/page/business/cost.php'; 
         ?>
      <?php
         include './component/page/home/partner.php'; 
         ?> 
         <?php
         include './component/page/home/banner.php'; 
         ?> 

      
      <!-- /content -->
      <!-- footer -->
      <?php
         include './component/footer.php'; 
         ?>   
      <!-- /footer -->              
   </body>
</html>