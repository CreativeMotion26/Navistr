<?php require __DIR__ . '/inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require __DIR__ . '/inc/head.inc.php';?>
   </head>
   <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
      <?php require __DIR__ . '/inc/header.inc.php';?>
      <section class="py-0 container mx-auto bg-white py-2 border-t border-orange-400">
         <div class="mx-auto max-w-screen-xl px-4 py-2 sm:px-6 sm:py-12 lg:px-8">
            <header>
               <h2 class="text-xl font-bold text-orange-500 sm:text-3xl">
                  Product Collection
               </h2>
               <p class="mt-4 max-w-md text-gray-500">
               Florentine Australia sits amongst other exclusive shops from around the world , giving our customers a truly international experience.
               </p>
            </header>
            <div class="mt-8 sm:flex sm:items-center sm:justify-between">
               <div class="block sm:hidden">
                  <button class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                     <span class="text-sm font-medium"> Filters & Sorting </span>
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                     </svg>
                  </button>
               </div>
               <div class="hidden sm:flex sm:gap-4">
                  <div class="relative">
                     <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                           <span class="text-sm font-medium"> Availability </span>
                           <span class="transition group-open:-rotate-180">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                              </svg>
                           </span>
                        </summary>
                        <div class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                           <div class="w-96 rounded border border-gray-200 bg-white">
                              <header class="flex items-center justify-between p-4">
                                 <span class="text-sm text-gray-700"> 0 Selected </span>
                                 <button  type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
                              </header>
                              <ul class="space-y-1 border-t border-gray-200 p-4">
                                 <li>
                                    <label for="FilterInStock" class="inline-flex items-center gap-2">
                                    <input type="checkbox" id="FilterInStock" class="h-5 w-5 rounded border-gray-300"/>
                                    <span class="text-sm font-medium text-gray-700">  In Stock (5+)</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label  for="FilterPreOrder" class="inline-flex items-center gap-2">
                                    <input type="checkbox" id="FilterPreOrder" class="h-5 w-5 rounded border-gray-300"/>
                                    <span class="text-sm font-medium text-gray-700">Pre Order (3+)</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                    <input type="checkbox" id="FilterOutOfStock" class="h-5 w-5 rounded border-gray-300"/>
                                    <span class="text-sm font-medium text-gray-700">Out of Stock (10+)
                                    </span>
                                    </label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </details>
                  </div>
                  <div class="relative">
                     <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                           <span class="text-sm font-medium"> Price </span>
                           <span class="transition group-open:-rotate-180">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                              </svg>
                           </span>
                        </summary>
                        <div class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                           <div class="w-96 rounded border border-gray-200 bg-white">
                              <header class="flex items-center justify-between p-4">
                                 <span class="text-sm text-gray-700">The highest price is $600</span>
                                 <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
                              </header>
                              <div class="border-t border-gray-200 p-4">
                                 <div class="flex justify-between gap-4">
                                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                                    <span class="text-sm text-gray-600">$</span>
                                    <inpu type="number" id="FilterPriceFrom" placeholder="From" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"/>
                                    </label>
                                    <label for="FilterPriceTo" class="flex items-center gap-2">
                                    <span class="text-sm text-gray-600">$</span>
                                    <input type="number" id="FilterPriceTo" placeholder="To" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"/>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </details>
                  </div>
               </div>
               <div class="hidden sm:block">
                  <label for="SortBy" class="sr-only">SortBy</label>
                  <select id="SortBy" class="h-10 rounded border-gray-300 text-sm">
                     <option>Sort By</option>
                     <option value="Title, DESC">Title, DESC</option>
                     <option value="Title, ASC">Title, ASC</option>
                     <option value="Price, DESC">Price, DESC</option>
                     <option value="Price, ASC">Price, ASC</option>
                  </select>
               </div>
            </div>
            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-bold text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php" class="group block overflow-hidden">
                     <img src="assets/images/i2.jpg"alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"/>
                     <div class="relative bg-white pt-3">
                        <h3 class="text-xl text-orange-500 group-hover:underline group-hover:underline-offset-4">Leather Bag</h3>
                        <p class="mt-2">
                           <span class="sr-only"> Regular Price </span>
                           <span class="tracking-wider text-gray-900"> 240.00 AUD </span>
                        </p>
                     </div>
                  </a>
               </li>
               
               
            </ul>
         </div>
      </section>
      <section>
         <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
               <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
               <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
               <div>
                  <p class="text-sm text-gray-700">
                     Showing
                     <span class="font-medium">1</span>
                     to
                     <span class="font-medium">10</span>
                     of
                     <span class="font-medium">97</span>
                     results
                  </p>
               </div>
               <div>
                  <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                     <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                           <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                        </svg>
                     </a>
                     <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-orange-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">1</a>
                     <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                     <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                     <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                     <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                     <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                     <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                     <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                           <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                        </svg>
                     </a>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <?php require __DIR__ . '/inc/footer.inc.php';?>
   </body>
</html>