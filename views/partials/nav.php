<div class="flex">
  <aside class="w-64 bg-white shadow-md h-screen">
    <nav class="mt-4">
      <a href="/" class="flex items-center px-4 py-2 <?= urlIs('/') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Dashboard</a>
      <a href="/ManageUser" class="flex items-center px-4 py-2 <?= urlIs('/ManageUser') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Manage User</a>
      
      <?php if ($_SESSION['user'] ?? false) : ?>
      <a href="/Notes" class="flex items-center px-4 py-2 <?= urlIs('/Notes') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Notes</a>
      <?php endif; ?>

      <a href="/GeneralRecords" class="flex items-center px-4 py-2 <?= urlIs('/GeneralRecords') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">General Records</a>
      <a href="/CalendarEvents" class="flex items-center px-4 py-2 <?= urlIs('/CalendarEvents') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Calendar & Events</a>
      <a href="/ActivityLog" class="flex items-center px-4 py-2 <?= urlIs('/ActivityLog') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Activity Logs</a>
      <a href="/Settings" class="flex items-center px-4 py-2 <?= urlIs('/Settings') ? 'text-white bg-green-600' : 'text-gray-700 hover:bg-gray-200' ?> rounded-lg mx-2 mb-2">Settings</a>

      <?php if ($_SESSION['user'] ?? false) : ?>
        <form method="POST" action="/session">
          <input type="hidden" name="_method" value="DELETE">

          <button class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-lg mx-2 mb-2">Log Out</button>
        <!-- <a href="/Logout" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-lg mx-2 mb-2">Log Out</a> -->
        </form>
        <?php endif; ?>
    </nav>

    <div class="absolute bottom-4 left-4">
      <p class="text-sm font-medium">Name</p>
      <p class="text-xs text-gray-500"><?= $_SESSION['user']['email'] ?? 'Guest' ?></p>
    </div>
  </aside>