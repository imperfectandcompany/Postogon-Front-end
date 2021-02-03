    <div class="skeleton px-4" id="timeline-scroll">
			<!-- CREATE A POST -->
			<?php section("createpost"); ?>
		
		<div class="z-40">
            <!-- SORT BY -->
			<?php section("sortby"); ?>			
		</div>
		<div class="z-10">
            <!-- POST -->
			<?php section("skeletonpost"); ?>
			<?php section("post"); ?>
            <!-- POST -->
			<?php section("skeletonpost"); ?>			
			<?php section("post"); ?>		
			</div>



			
			<!-- SHOW MORE -->		
<div class="flex items-center">			
			<div class="w-1/5"></div>
	<a href="#" class="flex justify-center mb-20 w-3/5 text-gray-400 transition hover:underline hover:text-gray-600 mb-10 md:mb-4 bg-gray-200">
		<div class="text-lg font-bold p-4 transition">SHOW MORE</div>
	</a>			
			<div class="w-1/5"></div>
			</div>
         </div>
		 
		 <style>
  #timeline-scroll::-webkit-scrollbar {
            width: 4px;
            cursor: pointer;
            /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/

        }
        #timeline-scroll::-webkit-scrollbar-track {
            background-color: rgba(229, 231, 235, var(--bg-opacity));
            cursor: pointer;
            /*background: red;*/
        }
        #timeline-scroll::-webkit-scrollbar-thumb {
            cursor: pointer;
            background-color: #a0aec0;
            /*outline: 1px solid slategrey;*/
        }
</style>