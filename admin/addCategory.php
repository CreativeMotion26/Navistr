<!doctype html>
<html lang="en">
<head>
    <?php require __DIR__ . '/../inc/head.inc.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body>
    <?php require __DIR__ . '/inc/sidebar.inc.php';?>
    
        <div class=" top-0 left-0 right-0 z-50  translate-y-10 w-full p-4 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class=" bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <section class="bg-white">
                            <div class="transform -translate-y-16 px-4 mx-auto max-w-2xl lg:py-16">
                                <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new Category</h2>
                                <form action="/admin/products" method="POST">
                                    <input name="add_category" type="hidden">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200  hover:bg-primary-800">
                                        Add Category
                                    </button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>