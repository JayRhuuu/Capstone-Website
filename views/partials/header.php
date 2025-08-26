  <!-- Full Header -->
  <header class="bg-white shadow-md w-full flex items-center justify-between px-6 py-3">
    <!-- Left: Logo + School Name -->
    <div class="flex items-center space-x-3">
      <img src="img/logo.png" alt="Logo" class="h-10 w-10 rounded-full" />
      <span class="font-bold text-lg">Taysan Senior High School</span>
    </div>

    <!-- Right: User Info -->
    <div class="flex items-center space-x-4">
      <span class="font-medium"><?= $_SESSION['user']['email'] ?? 'Guest' ?></span>

      <?php if ($_SESSION['user'] ?? false) : ?>
      <div class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">A</div>
      <?php else : ?>
        <a href="/Register" class="text-gray-500 border border-current hover:bg-gray-200 px-2 py-1 rounded">Register</a>
        <a href="/Login" class="text-blue-500 border border-current hover:bg-blue-200 px-2 py-1 rounded">Log In</a>
      <?php endif; ?>
    </div>
  </header>
