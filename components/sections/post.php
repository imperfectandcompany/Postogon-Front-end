            <div class="mb-6">
               <div class="flex">
                  <div class="w-1/5 text-center py-8">
                  </div>
                  <div class="w-3/5 bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow text-center py-3">
                     <!-- who made the post? -->
                     <div class="w-1/3 pr-20">
					 <?php part("post_user");?>
					 </div>
                     <!-- when did they post? --> 
                     <div class="w-1/3">					 
					 <?php part("post_date");?>
					 </div>
                     <!-- post content -->
                     <div class="text-gray-darker mx-mb-1 pt-2">					 
					 <?php part("post_content");?>
					 </div>
                  </div>
               </div>
            </div>