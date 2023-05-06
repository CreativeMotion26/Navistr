<?php require __DIR__ . '/inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require __DIR__ . '/inc/head.inc.php';?>
   </head>
   <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
      <?php require __DIR__ . '/inc/header.inc.php';?>
      <section>
         <!--Pills navigation-->
         <ul
            class="mb-5 flex list-none flex-col flex-wrap pl-0 md:flex-row"
            role="tablist"
            data-te-nav-ref>
            <li role="presentation" class="flex-auto text-center">
               <a
                  href="#pills-home01"
                  class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                  id="pills-home-tab01"
                  data-te-toggle="pill"
                  data-te-target="#pills-home01"
                  data-te-nav-active
                  role="tab"
                  aria-controls="pills-home01"
                  aria-selected="true"
                  >Home</a
                  >
            </li>
            <li role="profile" class="flex-auto text-center">
               <a
                  href="#pills-profile01"
                  class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                  id="pills-profile-tab01"
                  data-te-toggle="pill"
                  data-te-target="#pills-profile01"
                  role="tab"
                  aria-controls="pills-profile01"
                  aria-selected="false"
                  >Profile</a
                  >
            </li>
            <li role="contact" class="flex-auto text-center">
               <a
                  href="#pills-contact01"
                  class="my-2 block rounded bg-neutral-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                  id="pills-contact-tab01"
                  data-te-toggle="pill"
                  data-te-target="#pills-contact01"
                  role="tab"
                  aria-controls="pills-contact01"
                  aria-selected="false"
                  >Contact</a
                  >
            </li>
            <li role="disabled" class="flex-auto text-center">
               <a
                  href="#pills-disabled01"
                  class="pointer-events-none my-2 block rounded bg-neutral-200 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 dark:bg-neutral-600 dark:text-neutral-500"
                  id="pills-disabled-tab01"
                  data-te-toggle="pill"
                  data-te-target="#pills-disabled01"
                  role="tab"
                  aria-controls="pills-disabled01"
                  aria-selected="false"
                  >Disabled</a
                  >
            </li>
         </ul>
         <!--Pills content-->
         <div class="mb-6">
            <div
               class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
               id="pills-home01"
               role="tabpanel"
               aria-labelledby="pills-home-tab01"
               data-te-tab-active>
               Tab 1 content
            </div>
            <div
               class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
               id="pills-profile01"
               role="tabpanel"
               aria-labelledby="pills-profile-tab01">
               Tab 2 content
            </div>
            <div
               class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
               id="pills-contact01"
               role="tabpanel"
               aria-labelledby="pills-contact-tab01">
               Tab 3 content
            </div>
            <div
               class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
               id="pills-disabled01"
               role="tabpanel"
               aria-labelledby="pills-disabled-tab01">
               Tab 4 disabled
            </div>
         </div>
      </section>
      <section class="text-gray-600 body-font">
         <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap -m-4">
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item4.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                     <p class="mt-1">$16.00</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item5.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                     <p class="mt-1">$21.15</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item3.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                     <p class="mt-1">$12.00</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item5.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                     <p class="mt-1">$18.40</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item6.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                     <p class="mt-1">$16.00</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item6.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                     <p class="mt-1">$21.15</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item3.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                     <p class="mt-1">$12.00</p>
                  </div>
               </div>
               <div class="p-4">
                  <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="assets/images/item5.jpg">
                  </a>
                  <div class="mt-4">
                     <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                     <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                     <p class="mt-1">$18.40</p>
                  </div>
               </div>
            </div>
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
                     <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
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