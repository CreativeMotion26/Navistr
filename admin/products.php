<?php
require_once __DIR__ . '/inc/functions.inc.php';
if(isset($_POST['add_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $sku = mysqli_real_escape_string($conn, $_POST['sku']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    mysqli_query($conn, "REPLACE INTO product (name, description, price, sku, stock) VALUES ('$name', '$description', '$price', '$sku', '$stock')");
}
if(isset($_GET['delete'])){
    $sku = mysqli_real_escape_string($conn, $_GET['delete']);
    mysqli_query($conn, "DELETE FROM product WHERE sku='$sku'");
}
if(isset($_GET['delete_category'])){
    $name = mysqli_real_escape_string($conn, $_GET['delete_category']);
    mysqli_query($conn, "DELETE FROM categories WHERE name='$name'");
}
if(isset($_POST['add_category'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    mysqli_query($conn, "REPLACE INTO categories (name) VALUES ('$name')");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php require __DIR__ . '/../inc/head.inc.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body>
<?php require __DIR__ . '/inc/sidebar.inc.php';?>
    <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <form class="w-full md:w-1/2 flex items-center">
                <label for="search-bar" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="search-bar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search" required="">
                </div>
            </form>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 flex items-center space-x-2 w-full md:w-auto">
                <a href="/admin/addProduct" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 17.5a7.5 7.5 0 110-15 7.5 7.5 0 010 15zM10 19a9 9 0 100-18 9 9 0 000 18z"/>
                        <path d="M9.293 10.707a1 1 0 000 1.414l2 2a1 1 0 001.414-1.414L11.414 12H15a1 1 0 100-2H11.414l1.293-1.293a1 1 0 10-1.414-1.414l-2 2z"/>
                    </svg>
                    Add Product
                </a>
                <button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 17.5a7.5 7.5 0 110-15 7.5 7.5 0 010 15zM10 19a9 9 0 100-18 9 9 0 000 18z"/>
                        <path d="M9.293 10.707a1 1 0 000 1.414l2 2a1 1 0 001.414-1.414L11.414 12H15a1 1 0 100-2H11.414l1.293-1.293a1 1 0 10-1.414-1.414l-2 2z"/>
                    </svg>
                    Categories
                </button>
                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow">
                    <h6 class="mb-3 text-sm font-medium text-gray-900">Choose brand</h6>
                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                        <li class="flex items-center">
                            <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="apple" class="ml-2 text-sm font-medium text-gray-900">Apple (56)</label>
                        </li>
                        <li class="flex items-center">
                            <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900">Microsoft (16)</label>
                        </li>
                        <li class="flex items-center">
                            <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="razor" class="ml-2 text-sm font-medium text-gray-900">Razor (49)</label>
                        </li>
                        <li class="flex items-center">
                            <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="nikon" class="ml-2 text-sm font-medium text-gray-900">Nikon (12)</label>
                        </li>
                        <li class="flex items-center">
                            <input id="benq" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="benq" class="ml-2 text-sm font-medium text-gray-900">BenQ (74)</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3"></th>
                    <th scope="col" class="px-4 py-1">SKU</th>
                    <!-- <th scope="col" class="px-4 py-3">Product</th> -->
                    <th scope="col" class="px-4 py-3">Name</th>
                    <th scope="col" class="px-4 py-3">Stock</th>
                    <th scope="col" class="px-4 py-3">Price</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
                </thead>
                <tbody id="table_content">
                    <?php $result = mysqli_query($conn,"SELECT sku, name, price, description, stock FROM product");
                    while($row = mysqli_fetch_assoc($result)){?>
                        <tr class="border-b">
                            <td class="w-4 px-4 py-3">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500   focus:ring-2">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-4 py-3"><?php echo $row['sku'];?></td>
                            <!-- <th scope="row" class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/devices/apple-iphone-14.png" alt="iMac Front Image" class="w-auto h-8 mr-3">
                            </th> -->
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap"><?php echo $row['name'];?></th>
                            <td class="px-4 py-3"><?php echo $row['stock'];?></td>
                            <td class="px-4 py-3">$<?php echo $row['price'];?></td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="control-<?php echo $row['sku'];?>-dropdown-button" data-dropdown-toggle="control-<?php echo $row['sku'];?>-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="control-<?php echo $row['sku'];?>-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                    <div class="py-1">
                                        <a href="/admin/addProduct?edit=<?php echo $row['sku'];?>" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    </div>
                                    <div class="py-1">
                                        <a href="?delete=<?php echo $row['sku'];?>" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
     <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Categories
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal1">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="/admin/products" method="POST">
                        <input name="add_category" type="hidden">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type category name" required="">
                            </div>
                        </div>
                        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200  hover:bg-primary-800">
                            Add Category
                        </button>
                    </form>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $result = mysqli_query($conn,"SELECT name FROM categories");
                            while($row = mysqli_fetch_assoc($result)){?>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <?php echo $row['name'];?>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <a href="?delete_category=<?php echo $row['name'];?>" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4">Delete</a>
                                    </th>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Main modal for Add Category-->

    <div id="defaultModal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">

                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal2">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <section class="bg-white">
                        <div class="transform -translate-y-16 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new Category</h2>
                            <form action="#">
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required="">
                                    </div>
                                    <div class="w-full">
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Brand</label>
                                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Product brand" required="">
                                    </div>
                                    <div>
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type" required="">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                        <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Your description here"></textarea>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        document.getElementById('search-bar').addEventListener('keyup', function(){
            let search_value = this.value.toLowerCase();
            document.querySelectorAll('#table_content > tr > :nth-child(4)').forEach(function(e){
                e.parentElement.style.display = 'table-row'
                if(!e.innerText.toLowerCase().includes(search_value))
                    console.log(e.parentElement.style.display = 'none');
            });
        });
    </script>
</body>
</html>