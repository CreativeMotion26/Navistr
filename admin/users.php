<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
			<a href="#" class="font-bold text-lg">Dashboard</a>
			<ul class="float-right">
				<li class="inline-block ml-4"><a href="#">Settings</a></li>
				<li class="inline-block ml-4"><a href="#">Logout</a></li>
			</ul>
		</div>
	</nav>

	<!-- Main content -->
	<div class="container mx-auto px-4 py-8 main-container">
		<div class="flex justify-between mb-8">
			<div class="w-1/2">
				<h2 class="text-lg font-bold mb-4">Sales Overview</h2>
				<div class="bg-white rounded-lg shadow-lg p-4">
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">Today</div>
						<div class="text-green-500">$5,000</div>
					</div>
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">This week</div>
						<div class="text-green-500">$25,000</div>
					</div>
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">This month</div>
						<div class="text-green-500">$100,000</div>
					</div>
				</div>
			</div>
			<div class="w-1/2">
				<h2 class="text-lg font-bold mb-4">Traffic Overview</h2>
				<div class="bg-white rounded-lg shadow-lg p-4">
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">Today</div>
						<div class="text-green-500">1,000</div>
					</div>
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">This week</div>
						<div class="text-green-500">5,000</div>
					</div>
					<div class="flex justify-between items-center mb-4">
						<div class="text-gray-600">This month</div>
						<div class="text-green-500">20,000</div>
					</div>
				</div>
			</div>
		</div>

		<div>
			<h2 class="text-lg font-bold mb-4">Latest Orders</h2>
			<table class="w-full border border-gray-200">
				<thead>
					<tr class="bg-gray-100">
						<th class="py-2 px-4 text-left">Customer</th>
                        <th class="py-2 px-4 text-left">Order Number</th>
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Amount</th>
                        <th class="py-2 px-4 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">John Doe</td>
                        <td class="py-2 px-4">123456</td>
                        <td class="py-2 px-4">May 5, 2023</td>
                        <td class="py-2 px-4">$100</td>
                        <td class="py-2 px-4">Shipped</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Jane Smith</td>
                        <td class="py-2 px-4">789012</td>
                        <td class="py-2 px-4">May 4, 2023</td>
                        <td class="py-2 px-4">$50</td>
                        <td class="py-2 px-4">Pending</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Bob Johnson</td>
                        <td class="py-2 px-4">345678</td>
                        <td class="py-2 px-4">May 3, 2023</td>
                        <td class="py-2 px-4">$75</td>
                        <td class="py-2 px-4">Shipped</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>
