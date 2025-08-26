 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/header.php') ?>

 <!-- Layout: Sidebar + Main -->
   <!-- <?php require base_path('views/partials/nav.php') ?> -->

<!-- Main content -->
<main class="flex-1 p-6">
  <!-- Create Account Form -->
  <div class="max-w-lg mx-auto bg-white/80 p-8 rounded-xl shadow-lg">
  <h1 class="text-xl font-bold mb-6">Log In</h1>

    <form action="/session" method="POST" class="space-y-4">

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600 sm:text-sm"
          placeholder="Enter your email">

          <?php if (isset($errors['email'])) : ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
            <?php endif; ?>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600 sm:text-sm"
          placeholder="Create a password">

        <?php if (isset($errors['password'])) : ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
            <?php endif; ?>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full py-3 px-4 bg-green-600 text-white font-medium rounded-lg shadow hover:bg-green-700 transition">
        Log In
      </button>
    </form>

  </div>
</main>
</div>

 <?php require base_path('views/partials/footer.php') ?>