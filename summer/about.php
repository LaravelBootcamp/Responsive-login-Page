<?php  session_start();
require_once('../config.php'); 
require_once('./Functions/functions.php'); 
needLoged();
get_header();
?>



    <!-- Header Section -->
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold">Our Story</h1>
            <p class="mt-2">Learn more about us</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Section -->
            <div class="md:order-2">
                <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a nisl sit amet odio euismod vulputate. Sed auctor nunc in augue pellentesque, eu suscipit libero convallis.</p>
            </div>
            
            <!-- Right Section -->
            <div class="md:order-1">
                <h2 class="text-2xl font-semibold mb-4">Our Vision</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a nisl sit amet odio euismod vulputate. Sed auctor nunc in augue pellentesque, eu suscipit libero convallis.</p>
            </div>
        </div>
    </section>

  
    <?php 

get_footer();
?>
</body>
</html>
