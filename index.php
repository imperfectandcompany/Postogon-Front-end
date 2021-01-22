<?php
   include_once('functions.php');
   ?>
<!doctype html>
<html lang="en">
<!-- head -->
   <?php view("head"); ?>
   <body>

      <div class="font-sans bg-gray-100 flex flex-col min-h-screen w-full">
         <!-- body -->
		 <?php view("body");?>

		 
		 

			
         <!-- Footer -->
         <?php view("footer");?>
         <!-- control panel -->
         <?php view("control");?>	  
      </div>
	  
   </body>
   

</html>