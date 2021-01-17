            <div class="mb-6">
               <div class="flex">
                  <div class="w-1/5 text-center py-8">
                     <div class="text-grey-darker mb-2">
                        <span class="text-3xl"></span>
                     </div>
                  </div>
                  <div class="w-3/5 bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow text-center py-8">
                     <form>
                        <div class="text-grey-darker mb-2">
						<?php part("createpost_user");?>						
						<?php part("createpost_content");?>
                        </div>
						<?php part("createpost_options");?>
						<?php part("createpost_submit");?>
                     </form>
                  </div>
                  <div class="w-1/5 text-center py-8">
                     <div class="text-grey-darker mb-2">
                        <span class="text-3xl"></span>
                     </div>
                  </div>
               </div>
            </div>