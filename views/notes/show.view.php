<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<!-- Layout: Sidebar + Main -->
<?php require base_path('views/partials/nav.php') ?>


<!-- Main content -->
<main class="flex-1 p-6">
  <h1 class="text-xl font-bold mb-6">Note</h1>
  <!-- You can add dashboard content here -->
  <p class="mb-6">
    <a href="/Notes" class="text-blue-500 underline">Go back...</a>
  </p>

  <p><?= htmlspecialchars($note['body']) ?></p>

  <footer class="mt-6">
  <a href="/Note/edit?id=<?= $note['id'] ?>" class="text-gray-500 border border-current px-3 py-1 rounded">
    Edit
  </a>
  </footer>

  <!-- <form class="mt-6" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="">
      <button class="text-sm text-red-500">Delete</button>
    </form> -->

</main>
</div>

<?php require base_path('views/partials/footer.php') ?>