<!DOCTYPE html>
<html>
<head>
	<title>Reporting</title>
	<!-- Import Tailwind CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

	<!-- Custom styles -->
	<style>
		/* Set the height of the main container */
		.main-container {
			min-height: calc(100vh - 4rem);
		}
	</style>
</head>
<body>
	<!-- Navigation bar -->
	<nav class="bg-gray-900 text-white py-2">
		<div class="container mx-auto px-4">
			<a href="#" class="font-bold text-lg">Reporting</a>
			<ul class="float-right">
				<li class="inline-block ml-4"><a href="#">Settings</a></li>
				<li class="inline-block ml-4"><a href="#">Logout</a></li>
			</ul>
		</div>
	</nav>

	<!-- Main content -->
	<div class="container mx-auto px-4 py-8 main-container">
		<h2 class="text-lg font-bold mb-4">Sales Report</h2>
		<div class="bg-white rounded-lg shadow-lg p-4">
			<div class="flex justify-between items-center mb-4">
				<div class="text-gray-600">Total Sales</div>
				<div class="text-green-500">$100,000</div>
			</div>
			<div class="flex justify-between items-center mb-4">
				<div class="text-gray-600"">Total Orders</div>
                <div class="text-green-500">1,000</div>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="text-gray-600">Average Order Value</div>
                <div class="text-green-500">$100</div>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="text-gray-600">Total Customers</div>
                <div class="text-green-500">500</div>
            </div>
        </div>
        	<h2 class="text-lg font-bold mt-8 mb-4">Sales by Month</h2>
	    <div class="bg-white rounded-lg shadow-lg p-4">
                <div class="grid grid-cols-3 gap-4">
                <div class="text-gray-600">Month</div>
                <div class="text-gray-600">Sales</div>
                <div class="text-gray-600">Orders</div>
                <div>January</div>
                <div>$10,000</div>
                <div>100</div>
                <div>February</div>
                <div>$12,000</div>
                <div>120</div>
                <div>March</div>
                <div>$15,000</div>
                <div>150</div>
                <div>April</div>
                <div>$18,000</div>
                <div>180</div>
                <div>May</div>
                <div>$20,000</div>
                <div>200</div>
                <div>June</div>
                <div>$22,000</div>
                <div>220</div>
            </div>
	    </div>
    </div>
</body>
</html>

