<?php require __DIR__ . '/inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <?php require __DIR__ . '/inc/head.inc.php';?>
    </head>
   <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
      <?php require __DIR__ . '/inc/header.inc.php';?>
      
         <div id="newsletter-banner" tabindex="-1" class="fixed top-0 left-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="flex items-center flex-shrink-0 w-full mx-auto sm:w-auto">
               <form action="#" class="flex flex-col items-center w-full md:flex-row">
                     <label for="email" class="flex-shrink-0 mb-2 mr-auto text-sm font-medium text-gray-500 md:mb-0 md:mr-4 dark:text-gray-400 md:m-0">Sign up for our newsletter</label>
                     <input type="email" id="email" placeholder="Enter your email" class="bg-white border border-gray-300 text-gray-900 md:w-64 mb-2 md:mb-0 md:mr-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                     <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
               </form>
            </div>
            <div class="flex items-center absolute top-2.5 right-2.5 md:relative md:top-auto md:right-auto">
               <button data-dismiss-target="#newsletter-banner" type="button" class="flex-shrink-0 inline-flex justify-center items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                     <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                     <span class="sr-only">Close banner</span>
               </button>
            </div>
         </div>
         
      <section style="background-image: url('/assets/images/Main.jpg')" class="flex align-center justify-center flex-col h-[60vh] bg-cover bg-center bg-no-repeat bg-contain text-center text-white bg-gradient-to-t from-black/75 via-black/0">
         <div class="relative overflow-hidden bg-cover bg-no-repeat" style="
            background-position: 50%;
            background-image: url('assets/images/Main.jpg');
            height: 450px;
            ">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.35)">
               <div class="flex h-full items-center justify-center">
                  <div class="px-6 text-center text-white md:px-12">
                     <h1 class="mb-6 text-4xl font-bold">Discover Fine Leather Goods from Italy</h1>
                     <h3 class="mb-8 text-1mb text-orange-300">Explore our collection of handcrafted leather bags and luxury stationaries made in Venice.</h3>
                     <button type="button" class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light"> Get started </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="py-4 px-20">
            <div class="PageWidth PageWidth--large relative">
               <div class="media absolute inset-0 flex justify-center items-center"></div>
               <div class="w-full max-w-full justify-center">
                  <div class="textContent-cover textContent-background py-4 flex flex-col items-center">
                     <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                     <h1 class="text-4xl md:text-5xl font-bold mb-4">About Florentine</h1>
                     <div>
                        <p class="flex align-center justify-center"> Florentine is a family-owned business that specialises in importing high-quality leather goods from Italy's finest leather workers. Our collection includes a wide range of leather bags, from sleek and modern designs to classic and timeless styles. We also offer luxury writing sets made by Bortoletti, a world-renowned brand based in Venice.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-0 container mx-auto bg-white py-4 border-t border-orange-400">
         <div class="py-4">
            <div class="PageWidth  noBackgroundContainer PageWidth--large relative">
               <div class=" absolute inset-0 flex justify-center items-center"></div>
               <div class=" w-full max-w-full justify-center">
                  <div class="py-6 flex flex-col items-center">
                     <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                     <h1 class="text-4xl md:text-5xl font-bold mb-4">Florentine Essentials</h1>
                     <div></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="grid grid-cols-2 gap-4 px-8">
            <a href="leathers.php" class="relative h-48 bg-center bg-cover rounded-xl" style="background-image: url('assets/images/1.jpg')">
               <div class="absolute inset-0 bg-black opacity-50 rounded-xl"></div>
               <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold">Leathers</h1>
               <img class="w-full h-full object-cover absolute top-0 left-0 bg-black opacity-0 hover:opacity-30 transition-opacity duration-300 rounded-xl">
            </a>
            <a href="/collections/cases" class="relative h-48 bg-center bg-cover rounded-xl" style="background-image: url('assets/images/2.jpg')">
               <div class="absolute inset-0 bg-black opacity-50 rounded-xl"></div>
               <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold">Calligraphy</h1>
               <img class="w-full h-full object-cover absolute top-0 left-0 bg-black opacity-0 hover:opacity-30 transition-opacity duration-300 rounded-xl">
            </a>
            <a href="/products/sport-slim-band-sage-41mm" class="relative h-48 bg-center bg-cover rounded-xl" style="background-image: url('assets/images/3.jpg')">
               <div class="absolute inset-0 bg-black opacity-50 rounded-xl"></div>
               <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold">Jornals</h1>
               <img class="w-full h-full object-cover absolute top-0 left-0 bg-black opacity-0 hover:opacity-30 transition-opacity duration-300 rounded-xl">
            </a>
            <a href="/collections/power" class="relative h-48 bg-center bg-cover rounded-xl" style="background-image: url('assets/images/4.jpg')">
               <div class="absolute inset-0 bg-black opacity-50 rounded-xl"></div>
               <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold">Stationeries</h1>
               <img class="w-full h-full object-cover absolute top-0 left-0 bg-black opacity-0 hover:opacity-30 transition-opacity duration-300 rounded-xl">
            </a>
            <div></div>
         </div>
      </section>
      <section class="py-0 container mx-auto bg-white py-4 border-t border-orange-400">
         <div class="py-2">
            <div class="PageWidth --noBackgroundContainer PageWidth--large relative">
               <div class="media absolute inset-0 flex justify-center items-center"></div>
               <div class="textContentContainer z-10 w-full max-w-full justify-center">
                  <div class="textContent-cover textContent-background py-2 flex flex-col items-center">
                     <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                     <h1 class="text-4xl md:text-5xl font-bold mb-4">Florentine Essentials</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <section class="text-gray-600 body-font">
            <div class="container px-5 py-6 mx-auto">
               <div class="flex flex-wrap -m-4">
                  <div class="p-4 md:w-1/3">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/images/item6.jpg" alt="blog">
                        <div class="p-6">
                           <h2 class="tracking-widest text-xs title-font font-medium text-orange-400 mb-1">CATEGORY</h2>
                           <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                           <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                           <div class="flex items-center flex-wrap ">
                              <a class="text-orange-500 inline-flex items-center md:mb-2 lg:mb-0">
                                 Learn More 
                                 <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                 </svg>
                              </a>
                              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                 </svg>
                                 1.2K 
                              </span>
                              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                 </svg>
                                 6 
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="p-4 md:w-1/3">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/images/item3.jpg" alt="blog">
                        <div class="p-6">
                           <h2 class="tracking-widest text-xs title-font font-medium text-orange-400 mb-1">CATEGORY</h2>
                           <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                           <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                           <div class="flex items-center flex-wrap">
                              <a class="text-orange-500 inline-flex items-center md:mb-2 lg:mb-0">
                                 Learn More 
                                 <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                 </svg>
                              </a>
                              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                 </svg>
                                 1.2K 
                              </span>
                              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                 </svg>
                                 6 
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="p-4 md:w-1/3">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/images/item4.jpg" alt="blog">
                        <div class="p-6">
                           <h2 class="tracking-widest text-xs title-font font-medium text-orange-400 mb-1">CATEGORY</h2>
                           <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                           <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                           <div class="flex items-center flex-wrap ">
                              <a class="text-orange-500 inline-flex items-center md:mb-2 lg:mb-0">
                                 Learn More 
                                 <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                 </svg>
                              </a>
                              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                 </svg>
                                 1.2K 
                              </span>
                              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                 </svg>
                                 6 
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <main class="container mx-auto bg-white py-4 border-t border-orange-400">
         <section>
            <div class="container py-2">
               <div class="PageWidth PageWidth--large relative">
                  <div class=" inset-0 flex justify-center items-center"></div>
                  <div class="-textContentContainer z-10 w-full max-w-full justify-center">
                     <div class="-textContent -textContent-cover -textContent-background py-8 flex flex-col items-center" style="--textImageMaxWidthMobile:300px; --textImageMaxWidthDesktop:800px;">
                        <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4 ">Florentine Product</h1>
                        <div class="cta--container"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-8 ">
            <div>
               <a href="POverview.php">
                  <img class="rounded-xl" src="assets/images/item3.jpg" alt="" loading="lazy">
                  <h3 class="pt-3 flex align-center justify-center ">Classic Leather Bag</h3>
                  <p class=" flex align-center justify-center">$249.99</p>
               </a>
            </div>
            <div class="col-start-3">
               <img class="rounded-xl" src="assets/images/item4.jpg" alt="" loading="lazy">
               <h3 class="pt-3 flex align-center justify-center">Sleek Leather Tote</h3>
               <p class=" flex align-center justify-center">$299.99</p>
            </div>
            <div>
               <img class="rounded-xl" src="assets/images/item5.jpg" alt="" loading="lazy">
               <h3 class="pt-3 flex align-center justify-center"> Bortoletti Writing Set</h3>
               <p class=" flex align-center justify-center">$99.99</p>
            </div>
            <div>
               <img class="rounded-xl" src="assets/images/item6.jpg" alt="" loading="lazy">
               <h3 class="pt-3 flex align-center justify-center">Bortoletti Writing Set</h3>
               <p class=" flex align-center justify-center">$199.99</p>
            </div>
            <div>
               <img class="rounded-xl" src="assets/images/item3.jpg" alt="" loading="lazy">
               <h3 class="pt-3 flex align-center justify-center">Bortoletti Fountain Pen Set</h3>
               <p class=" flex align-center justify-center">$149.99</p>
            </div>
            <div>
               <img class="rounded-xl" src="assets/images/item4.jpg" alt="" loading="lazy">
               <h3 class="pt-3 flex align-center justify-center">Bortoletti Fountain Pen Set</h3>
               <p class=" flex align-center justify-center">$149.99</p>
            </div>
         </div>
      </main>
   </body>
   <div class="container mx-auto bg-white py-8 border-t border-orange-400">
      <section>
         <div class="PageWidth PageWidth--large relative">
            <div class=" inset-0 flex justify-center items-center"></div>
            <div class="-textContentContainer z-10 w-full max-w-full justify-center">
               <div class="-textContent -textContent-cover -textContent-background py-2 flex flex-col items-center">
                  <h4 class="text-orange-400 font-semibold text-sm mb-2 uppercase tracking-widest">Reliable Classics</h4>
                  <h1 class="text-4xl md:text-5xl font-bold mb-4 ">Contact</h1>
               </div>
            </div>
         </div>
      </section>
      <div class="container my-8 px-2 mx-auto">
         <section class="text-gray-600 body-font relative">
            <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">
               <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                  <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps?q=Shop%2022,%202nd%20Floor,%20Queen%20Victoria%20Building,%20Sydney&z=13&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                  <div class="bg-white relative flex flex-wrap py-3 rounded shadow-md">
                     <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                     </div>
                     <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-orange-500 leading-relaxed">example@email.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">123-456-7890</p>
                     </div>
                  </div>
               </div>
               <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                  <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                  <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                  <div class="relative mb-4"> <label for="name" class="leading-7 text-sm text-gray-600">Name</label> <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> </div>
                  <div class="relative mb-4"> <label for="email" class="leading-7 text-sm text-gray-600">Email</label> <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> </div>
                  <div class="relative mb-4"> <label for="message" class="leading-7 text-sm text-gray-600">Message</label> <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea> </div>
                  <button class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Button</button>
                  <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
               </div>
            </div>
         </section>
      </div>
   </div>
   <?php require __DIR__ . '/inc/footer.inc.php';?>
</html>