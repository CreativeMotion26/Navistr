<?php require __DIR__ . '/inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require __DIR__ . '/inc/head.inc.php';?>
   </head>
   <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
      <?php require __DIR__ . '/inc/header.inc.php';?>
         <section class = "mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8py-0 container mx-auto bg-white py-2 border-t border-orange-400">
         <div class="relative mx-auto max-w-screen-xl px-4 py-8">
            <div>
               <h1 class="text-3xl text-orange-500 font-bold lg:text-3xl px-5">Simple Basic Bag</h1>
            </div>
               <nav aria-label="Breadcrumb">
               <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 py-2 sm:px-6 lg:max-w-7xl lg:px-4">
                  <li>
                     <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900">Bags</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                           <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                     </div>
                  </li>
                  <li>
                     <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900">women's</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                           <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                     </div>
                  </li>
                  <li class="text-sm">
                     <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Leather Bag</a>
                  </li>
               </ol>
            </nav>   
            <div class="grid gap-8 lg:grid-cols-4 lg:items-start">
               <div class="lg:col-span-3">
               <div class="relative mt-4">
                  <img alt="bag" src="assets/images/i2.jpg" class="h-full w-full rounded-xl object-cover lg:h-[540px]"/>
                  <div class="absolute bottom-4 left-1/2 inline-flex -translate-x-1/2 items-center rounded-full bg-black/75 px-3 py-1.5 text-white"  >
                     <svg
                     class="h-4 w-4"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     >
                     <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"
                     />
                     </svg>
                  </div>
               </div>
               <ul class="mt-1 flex gap-1">
                  <li>
                     <img alt="Tee" src="assets/images/i1.jpg" class="h-16 w-16 rounded-md object-cover"/>
                  </li>
                  <li>
                     <img alt="Tee" src="assets/images/i1.jpg" class="h-16 w-16 rounded-md object-cover"/>
                  </li>
                  <li>
                     <img alt="Tee" src="assets/images/i1.jpg" class="h-16 w-16 rounded-md object-cover"/>
                  </li>
                  <li>
                     <img alt="Tee" src="assets/images/i1.jpg" class="h-16 w-16 rounded-md object-cover"/>
                  </li>
               </ul>
               </div>
               <section>
               <div class="lg:w-full w-full lg:pl-10 lg:py-6 mt-2 lg:mt-0">
                     <h2 class="text-sm title-font text-gray-500 tracking-widest pb-3">BRAND NAME</h2>
                     <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
                     <p class="leading-relaxed pt-4">Natural skins, the skin of the artisan, real hide leather. Slight variations in colour shades and tones confirm the genuine work of the craftsman. Design, cutting, assembling and packaging made in Italy. Materials originating in Italy.</p>
                     <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <div class="flex">
                           <span class="mr-3">Color</span>
                           <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                           <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                           <button class="border-2 border-gray-300 ml-1 bg-orange-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div>
                        <div class="flex ml-6 items-center">
                           <span class="mr-3">Size</span>
                           <div class="relative">
                           <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                              <option>SM</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                           </select>
                           <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                 <path d="M6 9l6 6 6-6"></path>
                              </svg>
                           </span>
                           </div>
                        </div>
                     </div>
                  <fieldset>
                     <legend class="text-lg font-bold">Material</legend>
                     <div class="mt-2 flex flex-wrap gap-1">
                     <label for="material_cotton" class="cursor-pointer pb-4">
                        <input type="radio" id="material_cotton" name="material" class="peer sr-only" checked/>
                        <span class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"> Cotton </span>
                     </label>
                     <label for="material_wool" class="cursor-pointer pb-4">
                        <input type="radio" id="material_wool" name="material" class="peer sr-only" checked/>
                        <span class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"> Wool </span>
                     </label>
                     </div>
                  </fieldset>
                  <div class="rounded border bg-gray-100 p-4">
                     <p class="text-sm">
                     <span class="block"> Pay as low as $3/mo with 0% APR. </span>
                     <a href="" class="mt-1 inline-block underline"> Find out more </a>
                     </p>
                  </div>
                  <div>
                     <p class="text-3xl font-bold py-4">199.99 AUD</p>
                  </div>
                  <a href="checkout.php">
                  <button type="submit" class="w-full rounded bg-orange-500 px-6 py-4 text-sm font-bold uppercase tracking-wide text-white"> Add to carts</button>
                  <button type="button" class="w-full rounded border border-gray-300 bg-gray-100 px-6 py-4 text-sm font-bold uppercase tracking-wide mt-4">Shop more</button>
                  </a>
               </form>
               </div>
            </div>
         </div>
         </section>
         <section class="py-0 container mx-auto bg-white py-4 border-t border-orange-400">
         <div class="py-2">
            <div class="PageWidth --noBackgroundContainer PageWidth--large relative">
               <div class="media absolute inset-0 flex justify-center items-center"></div>
               <div class="textContentContainer z-10 w-full max-w-full justify-center">
                  <div class="textContent-cover textContent-background py-2 flex flex-col items-center">
                     <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                     <h1 class="text-xl md:text-2xl font-bold mb-4">Florentine's Recommand</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="grid grid-flow-col grid-rows-1 grid-cols-4 gap-8 px-20 pb-2" >
            <div>
               <img class = "rounded-xl" src="assets/images/item3.jpg" alt="" loading = "lazy">
               <h3 class = "pt-3 flex align-center justify-center ">Classic Leather Bag</h3>
               <p class = " flex align-center justify-center">$249.99</p>
            </div>
            <div class="col-start-3">
               <img  class = "rounded-xl" src="assets/images/item4.jpg" alt="" loading = "lazy">
               <h3 class = "pt-3 flex align-center justify-center">Sleek Leather Tote</h3>
               <p class = " flex align-center justify-center">$299.99</p>
            </div>
            <div>
               <img  class = "rounded-xl" src="assets/images/item6.jpg" alt="" loading = "lazy">
               <h3 class = "pt-3 flex align-center justify-center"> Bortoletti Writing Set</h3>
               <p class = " flex align-center justify-center">$99.99</p>
            </div>
            <div>
               <img  class = "rounded-xl" src="assets/images/item6.jpg" alt="" loading = "lazy">
               <h3 class = "pt-3 flex align-center justify-center"> Bortoletti Writing Set</h3>
               <p class = " flex align-center justify-center">$99.99</p>
            </div>
         </div>
         <div></div>
      </section>
       <div class="container my-2 px-6 mx-auto py-0 mx-auto bg-white py-4 border-t border-orange-400">
            <div class="2xl:container 2xl:mx-auto md:py-10 py-2">
               <div class="bg-gray-50 dark:bg-gray-800 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-12 gap-14 lg:px-20 lg:py-12 py-2 md:px-12 px-4">
                  <div class="">
                     <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1.svg" alt="delivery">
                     <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1dark.svg" alt="delivery">
                     <h3 class="text-xl leading-5 dark:text-white font-semibold text-orange-500 lg:mt-10 mt-8">Delivery</h3>
                     <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Free worldwide delivery over orders above $100</p>
                  </div>
                  <div class="">
                     <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2.svg" alt="Customer Care">
                     <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2dark.svg" alt="Customer Care">
                     <h3 class="text-xl leading-5 dark:text-white font-semibold text-orange-500 lg:mt-10 mt-8">Customer Care</h3>
                     <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Our customer care is available 24/7 at <span class="font-semibold cursor-pointer">(02) 9264 6055</span> and <span class="font-semibold cursor-pointer">sales@florentineaustralia.com</span></p>
                  </div>
                  <div class="">
                     <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3.svg" alt="Recycle">
                     <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3dark.svg" alt="Recycle">
                     <h3 class="text-xl leading-5 dark:text-white font-semibold text-orange-500 lg:mt-10 mt-8">Recycle</h3>
                     <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">All out products are 100 percent recycable</p>
                  </div>
                  <div class="">
                     <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4.svg" alt="Secure Payment">
                     <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4dark.svg" alt="Secure Payment">
                     <h3 class="text-xl leading-5 dark:text-white font-semibold text-orange-500 lg:mt-10 mt-8">Secure Payment</h3>
                     <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Transaction process has end to end encryption</p>
                  </div>
               </div>
            </div>
            </div>
         </main>
      <?php require __DIR__ . '/inc/footer.inc.php';?>
   </body>
</html>
