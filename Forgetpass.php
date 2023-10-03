<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-1/2">
        <h2 class="text-2xl font-semibold mb-4">Change Password</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Password</label>
                <input type="text" id="name" name="password" placeholder="Enter your Old Password" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">New Password</label>
                <input type="text" id="email" name="email" placeholder="Enter your New Password" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Confirm password</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your Confirm Password" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="flex items-center gap-5">
                <button type="submit" href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Password Change</button>
                <div class="flex gap-3 items-center">
                <a class="text-[#E527B2]" href="./index.php">Login</a>
                <!-- <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"><a href="./index.php">Login</a></button> -->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
