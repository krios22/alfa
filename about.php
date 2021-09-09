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
         include './component/page/about/about.php'; 
         ?> 

      
      <?php
         include './component/page/home/numbers.php'; 
         ?> 
     <?php
         include './component/page/home/team.php'; 
         ?> 
         <?php
         include './component/page/about/work.php'; 
         ?> 
      <?php
         include './component/page/home/partner.php'; 
         ?> 
         <?php
         include './component/page/about/region.php'; 
         ?> 

      
      <!-- /content -->
      <!-- footer -->
      <?php
         include './component/footer.php'; 
         ?>   
      <!-- /footer -->              
   </body>
</html>