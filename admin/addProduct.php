  <!doctype html>
<html lang="en">
<head>
    <?php require __DIR__ . '/../inc/head.inc.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body>
    <?php require __DIR__ . '/inc/sidebar.inc.php';?>
  <div class="fixed top-0 left-0 right-0 z-50  w-full p-4 translate-y-10 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-6 space-y-6">
                    <section class="bg-white">
                        <div class=" transform -translate-y-16 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new product</h2>
                            <form action="/admin/products" method="POST">
                                <input name="add_product" type="hidden">
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
                                    </div>
                                    <div class="w-full">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="299.00" required>
                                    </div>
                                    <div class="w-full">
                                        <label for="sku" class="block mb-2 text-sm font-medium text-gray-900">SKU</label>
                                        <input type="text" name="sku" id="sku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="SKU" required>
                                    </div>
                                    <div>
                                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">stock</label>
                                        <input type="number" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="12" required>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                        <textarea name="description" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Your description here"></textarea>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Upload Image</label>
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50   hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div>

                                </div>
                                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200  hover:bg-primary-800">
                                    Add product
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