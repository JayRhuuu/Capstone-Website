<?php require("partials/header.php") ?>
 <?php require('partials/head.php') ?>
 <!-- Layout: Sidebar + Main -->
   <?php require('partials/nav.php') ?>

    <!-- Blurred Background Overlay -->
    <div class="absolute inset-0 bg-gray-200/30 backdrop-blur-sm z-10"></div>

    <!-- Main content -->
    <main class="flex-1 flex items-center justify-center z-20">
        <div class="text-center p-10 bg-white/80 rounded-xl shadow-lg">
            <h1 class="text-5xl font-extrabold text-gray-800">Oops! Page Not Found</h1>
            <p class="font-semibold text-gray-500 mt-4">The page you’re looking for doesn’t exist or has been moved.</p>

            <a href="/" 
               class="mt-6 inline-block px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700">
                Go Back Home
            </a>
        </div>
    </main>
</div>

<?php require('partials/footer.php') ?>
