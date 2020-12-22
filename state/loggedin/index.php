
<div class="font-sans bg-gray-100 flex flex-col min-h-screen w-full">
<!-- NAVBAR -->
<?php require_once('components/header/index.php'); ?>
	
	


  

  <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
<!-- CREATE A POST -->  
  	<?php require_once('components/body/createpost/index.php'); ?>

  
  <!-- POST -->
  	<?php require_once('components/body/postbit/index.php'); ?>

	
	


  </div>
	
	<!-- Footer -->
<?php require_once('components/footer/index.php'); ?>
</div>