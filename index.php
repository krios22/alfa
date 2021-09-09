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
         include './component/page/home/promo.php'; 
         ?> 
      <?php
         include './component/page/home/service.php'; 
         ?> 
         <?php
         include './component/page/home/question.php'; 
         ?> 
      
      <?php
         include './component/page/home/numbers.php'; 
         ?> 
     <?php
         include './component/page/home/team.php'; 
         ?> 
      <?php
         include './component/page/home/partner.php'; 
         ?> 
         <?php
         include './component/page/home/reviews.php'; 
         ?>
         <?php
         include './component/page/home/banner.php'; 
         ?>  
      </div>
      
      <!-- /content -->
      <!-- footer -->
      <?php
         include './component/footer.php'; 
         ?>   
      <!-- /footer -->              
   </body>
</html>