                    <div  class="px-6 py-6 border border-l transition bg-white mb-2 shadow-sm dark:bg-dark">
                        <div class="" x-data="{ count: 0 } " x-init="count = $refs.countme.value.length">
                            <div class="flex flex-col">
                                <div class="flex" >
                                    <div class="my-auto">
                                        <div class="w-10 h-10 mr-3 font-bold text-center text-white transition bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full shadow-inner" style="background-image: url('')" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"><div class="my-1 select-none">?</div>
                                        </div>
                                    </div>
                                    <textarea class="w-full h-6 transition p-2 bg-white border rounded-lg dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring focus:ring-primary focus:ring-opacity-10 char-limiter" maxlength="280" placeholder="What's Poppin'?" rows="3" x-on:keyup="count = $refs.countme.value.length" x-ref="countme"></textarea>
                                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
    $('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
</script>



                                <!-- icons -->
                                <div class="flex m-2 text-gray-500 icons ml-14">
                                    <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
                                    <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
                                    <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
                                    <div class="ml-auto text-xs font-semibold text-gray-400 count">
                                        <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>
                                    </div>
                                </div>
                                <!-- buttons -->
                                <div class="flex flex-row-reverse buttons">
                                    <div class="p-1 px-4 ml-2 mr-2 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">Post</div>
                                </div>
                            </div>
                        </div>
                    </div>
