<?php  session_start();
require_once('../config.php'); 
require_once('./Functions/functions.php'); 
needLoged();
get_header();
?>

    <!-- Header Section -->
  <div class="mx-96">
  <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold">Contact Us</h1>
            <p class="mt-2">We'd love to hear from you</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="md:col-span-2">
                <h2 class="text-2xl font-semibold mb-4">Send us a message</h2>
                <form action="#" method="post">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message:</label>
                        <textarea id="message" name="message" rows="4" class="w-full border rounded px-3 py-2"></textarea>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
                <p class="text-gray-700">Feel free to reach out to us through the contact form above, or you can contact us directly using the information below:</p>
                <ul class="mt-4">
                    <li class="mb-2"><strong>Address:</strong> 123 Main St, City, Country</li>
                    <li class="mb-2"><strong>Email:</strong> contact@example.com</li>
                    <li class="mb-2"><strong>Phone:</strong> +1 (123) 456-7890</li>
                </ul>
            </div>
        </div>
    </section>
  </div>

    <!-- Footer Section -->
    <?php 

get_footer();
?>
</body>
</html>
