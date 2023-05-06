<?php require __DIR__ . '/inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require __DIR__ . '/inc/head.inc.php';?>
   </head>
   <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
      <?php require __DIR__ . '/inc/header.inc.php';?>
      <main>
         <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
            <div class="flex items-start justify-between">
               <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
            </div>
            <div class="mt-8">
               <div class="flow-root">
                  <ul role="list" class="-my-6 divide-y divide-gray-200">
                     <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                           <img src="assets/images/item3.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                           <div>
                              <div class="flex justify-between text-base font-medium text-gray-900">
                                 <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                 </h3>
                                 <p class="ml-4">$90.00</p>
                              </div>
                              <p class="mt-1 text-sm text-gray-500">Salmon</p>
                           </div>
                           <div class="flex flex-1 items-end justify-between text-sm">
                              <p class="text-gray-500">Qty 1</p>
                              <div class="flex">
                                 <button type="button" class="font-medium text-orange-600 hover:text-orange-500">Remove</button>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                           <img src="assets/images/item4.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                           <div>
                              <div class="flex justify-between text-base font-medium text-gray-900">
                                 <h3>
                                    <a href="#">Medium Stuff Satchel</a>
                                 </h3>
                                 <p class="ml-4">$32.00</p>
                              </div>
                              <p class="mt-1 text-sm text-gray-500">Blue</p>
                           </div>
                           <div class="flex flex-1 items-end justify-between text-sm">
                              <p class="text-gray-500">Qty 1</p>
                              <div class="flex">
                                 <button type="button" class="font-medium text-orange-600 hover:text-orange-500">Remove</button>
                              </div>
                           </div>
                        </div>
                     </li>
                     <!-- More products... -->
                  </ul>
               </div>
            </div>
         </div>
         <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
               <p>Subtotal</p>
               <p>$122.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
               <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-orange-500 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-orange-600">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
               <p>
                  or
                  <button type="button" class="font-medium text-orange-600 hover:text-orange-500">
                  Continue Shopping
                  <span aria-hidden="true"> &rarr;</span>
                  </button>
               </p>
            </div>
         </div>
         </div>
      </main>
      <?php require __DIR__ . '/inc/footer.inc.php';?>
   </body>
</html>