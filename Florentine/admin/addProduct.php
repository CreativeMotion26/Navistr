<?php
require_once __DIR__ . '/inc/functions.inc.php';
if(isset($_GET['edit'])){
    $result = mysqli_query($conn,"SELECT sku, name, price, description, stock FROM product WHERE sku='" . mysqli_real_escape_string($conn, $_GET['edit']) . "'");
    $product = [];
    while($row = mysqli_fetch_assoc($result)){
        $product = $row;
    }
}?>
<!doctype html>
<html lang="en">
<head>
    <?php require __DIR__ . '/../inc/head.inc.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body>
    <?php require __DIR__ . '/inc/sidebar.inc.php';?>
    <section class="p-4 md:inset-0 h-[calc(100%-1rem)] rounded-lg shadow p-6 space-y-6 mx-auto lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new product</h2>
        <form action="/admin/products" method="POST">
            <input name="add_product" type="hidden">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required value="<?php echo $product['name'] ?? '';?>">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="299.00" required value="<?php echo $product['price'] ?? '';?>">
                </div>
                <div class="w-full">
                    <label for="sku" class="block mb-2 text-sm font-medium text-gray-900">SKU</label>
                    <input type="text" name="sku" id="sku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="SKU" required value="<?php echo $product['sku'] ?? '';?>">
                </div>
                <div>
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">stock</label>
                    <input type="number" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="12" required value="<?php echo $product['stock'] ?? '';?>">
                </div>
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea name="description" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Your description here"><?php echo $product['description'] ?? '';?></textarea>
                </div>

                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Upload Image</label>
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

            </div>
            <div class="flex gap-2">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200  hover:bg-primary-800">
                    Add product
                </button>
                <a href="/admin/addProduct" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4">
                    Cancel
                </a>
            </div>
        </form>
    </section>
</body>
</html>