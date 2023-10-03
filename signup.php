<?php  
require_once('./config.php');

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);

    $insert = "INSERT INTO regi (name, user_email, mobile, username, password) 
    VALUES ('$name', '$email', '$phone', '$username', '$password')";

if(!empty($name)) {
    if (!empty($email)) {
        if (!empty($phone)) {
            if (!empty($username)) {
                if (!empty($password)) {
                    if ($password == $repassword) {
        if (mysqli_query($con, $insert)) {  
            echo "Registration successful";
            header('Location:index.php');
        } else {
            echo "Error"; 
        }
       
    } else {
        echo "Didnot matched password and repassword";
    }  } else {
        echo "Please Enter Your password";
    }  } else {
        echo "Please Enter Your username";
    }  } else {
        echo "Please Enter Your phone";
    }
    } else {
        echo "Please Enter Your Email";
    }
    }else{
    echo "Please Enter Your Name";
    }
    // echo $name, "<br/>";
    // echo $email, "<br/>";
    // echo $phone, "<br/>";
    // echo $username, "<br/>";
    // echo $password, "<br/>";
    // echo $repassword, "<br/>";
}
?>

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
        <h2 class="text-2xl font-semibold mb-4">Signup</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="johndoe@example.com" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="123-456-7890" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="username" placeholder="johndoe123" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-6">
                <label for="repassword" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="repassword" name="repassword" placeholder="Confirm Password" class="w-full border rounded px-3 py-2" >
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">User Role</label>
                <select id="role" name="role" class="w-full border rounded px-3 py-2" >
                    <option value="Admin">Admin</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="flex items-center gap-5">
            <!-- <a class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit" href="#">Signup</a> -->
                <button type="submit" href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Signup</button>
                <div class="flex gap-3 items-center">
                <h3>Already Have an account ?</h3>
                <a class="text-[#E527B2]" href="./index.php">Login</a>
                <!-- <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"><a href="./index.php">Login</a></button> -->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
