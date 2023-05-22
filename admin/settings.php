<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
    <?php require __DIR__ . '/../inc/head.inc.php';?>
</head>
<body>
    <?php require __DIR__ . '/inc/sidebar.inc.php';?>

    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 m ">




            <div class="w-full max-w-sm bg-white translate-y-16 ">
                
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="assets\images\contact.jpg" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">Bonnie Green</h5>
                    <span class="text-sm text-gray-500 ">Visual Designer</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   ">Add friend</a>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200      ">Message</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8  ">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 ">Admin</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline ">
                            View all
                        </a>
                </div>
                <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 ">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="assets\images\2.jpg" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate ">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate ">
                                            email@windster.com
                                        </p>
                                    </div>
                                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full  ">
                                        <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                                        Available
                                    </span>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="assets\images\3
                                        .jpg" alt="Bonnie image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate ">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate ">
                                            email@windster.com
                                        </p>
                                    </div>
                                    <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full  ">
                                        <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                        Unavailable
                                    </span>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="assets\images\4.jpg" alt="Michael image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate ">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncate ">
                                            email@windster.com
                                        </p>
                                    </div>
                                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full  ">
                                            <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                            Unavailable
                                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="settings-timezone" class="block mb-2 text-sm font-medium text-gray-900 ">Time Zone</label>
                    <select id="settings-timezone" name="countries" class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      ">
                        <option>GMT+0 Greenwich Mean Time (GMT)</option>
                        <option>GMT+1 Central European Time (CET)</option>
                        <option>GMT+2 Eastern European Time (EET)</option>
                        <option>GMT+3 Moscow Time (MSK)</option>
                        <option>GMT+5 Pakistan Standard Time (PKT)</option>
                        <option>GMT+8 China Standard Time (CST)</option>
                        <option>GMT+10 Eastern Australia Standard Time (AEST)</option>
                    </select>
                </div>
            </div>





        <div class="col-span-2 mt-4 ">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2  sm:p-6 ">
                <h3 class="mb-4 text-xl font-semibold ">General information</h3>
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 ">First Name</label>
                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="Bonnie" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="Green" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 ">Country</label>
                            <input type="text" name="country" id="country" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="United States" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 ">City</label>
                            <input type="text" name="city" id="city" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="e.g. San Francisco" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                            <input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="e.g. California" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="example@company.com" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 ">Phone Number</label>
                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="e.g. +(12)3456 789" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 ">Birthday</label>
                            <input type="number" name="birthday" id="birthday" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="15/08/1990" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="organization" class="block mb-2 text-sm font-medium text-gray-900 ">Organization</label>
                            <input type="text" name="organization" id="organization" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="Company Name" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                            <input type="text" name="role" id="role" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="React Developer" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 ">Department</label>
                            <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="Development" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="zip-code" class="block mb-2 text-sm font-medium text-gray-900 ">Zip/postal code</label>
                            <input type="number" name="zip-code" id="zip-code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="123456" required>
                        </div>
                        <div class="col-span-6 sm:col-full">
                            <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   " type="submit">Save all</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2  sm:p-6 ">
                <h3 class="mb-4 text-xl font-semibold ">Password information</h3>
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 ">Current password</label>
                            <input type="text" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="••••••••" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">New password</label>
                            <input data-popover-target="popover-password" data-popover-placement="bottom" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      " placeholder="••••••••" required>
                            <div data-popover id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72   ">
                                <div class="p-3 space-y-2">
                                    <h3 class="font-semibold text-gray-900 ">Must have at least 6 characters</h3>
                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="h-1 bg-orange-300 "></div>
                                        <div class="h-1 bg-orange-300 "></div>
                                        <div class="h-1 bg-gray-200 "></div>
                                        <div class="h-1 bg-gray-200 "></div>
                                    </div>
                                    <p>It’s better to have:</p>
                                    <ul>
                                        <li class="flex items-center mb-1">
                                            <svg class="w-4 h-4 mr-2 text-green-400 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            Upper & lower case letters
                                        </li>
                                        <li class="flex items-center mb-1">
                                            <svg class="w-4 h-4 mr-2 text-gray-300 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            A symbol (#$&)
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-gray-300 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            A longer password (min. 12 chars.)
                                        </li>
                                    </ul>
                            </div>
                            <div data-popper-arrow></div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
                            <input type="text" name="confirm-password" id="confirm-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      " placeholder="••••••••" required>
                        </div>
                        <div class="col-span-6 sm:col-full">
                            <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   " type="submit">Save all</button>
                        </div>
                    </div>
                </form>
            </div>
    
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-6  xl:mb-0">
            <div class="flow-root">
                <h3 class="text-xl font-semibold ">Alerts & Notifications</h3>
                <p class="text-sm font-normal text-gray-500 ">You can set up Themesberg to get notifications</p>
                <div class="divide-y divide-gray-200 ">
                    <!-- Item 1 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Company News</div>
                            <div class="text-base font-normal text-gray-500 ">Get Themesberg news, announcements, and product updates</div>
                        </div>
                        <label for="company-news" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="company-news" class="sr-only">
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Account Activity</div>
                            <div class="text-base font-normal text-gray-500 ">Get important notifications about you or activity you've missed</div>
                        </div>
                        <label for="account-activity" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="account-activity" class="sr-only" checked>
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Meetups Near You</div>
                            <div class="text-base font-normal text-gray-500 ">Get an email when a Dribbble Meetup is posted close to my location</div>
                        </div>
                        <label for="meetups" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="meetups" class="sr-only" checked>
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 4 -->
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">New Messages</div>
                            <div class="text-base font-normal text-gray-500 ">Get Themsberg news, announcements, and product updates</div>
                        </div>
                        <label for="new-messages" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="new-messages" class="sr-only">
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">Save all</button>
                </div>
            </div>
        </div>
        <div class="p-4 mb-4 bg-white border mt-4 border-gray-200 rounded-lg shadow-sm  sm:p-6  xl:mb-0">
            <div class="flow-root">
                <h3 class="text-xl font-semibold ">Email Notifications</h3>
                <p class="text-sm font-normal text-gray-500 ">You can set up Themesberg to get email notifications </p>
                <div class="divide-y divide-gray-200 ">
                    <!-- Item 1 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Rating reminders</div>
                            <div class="text-base font-normal text-gray-500 ">Send an email reminding me to rate an item a week after purchase</div>
                        </div>
                        <label for="rating-reminders" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="rating-reminders" class="sr-only">
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Item update notifications</div>
                            <div class="text-base font-normal text-gray-500 ">Send user and product notifications for you</div>
                        </div>
                        <label for="item-update" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="item-update" class="sr-only" checked>
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-center justify-between py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Item comment notifications</div>
                            <div class="text-base font-normal text-gray-500 ">Send me an email when someone comments on one of my items</div>
                        </div>
                        <label for="item-comment" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="item-comment" class="sr-only" checked>
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                    <!-- Item 4 -->
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900 ">Buyer review notifications</div>
                            <div class="text-base font-normal text-gray-500 ">Send me an email when someone leaves a review with their rating</div>
                        </div>
                        <label for="buyer-rev" class="relative flex items-center cursor-pointer">
                            <input type="checkbox" id="buyer-rev" class="sr-only">
                            <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg  "></span>
                        </label>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">Save all</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>