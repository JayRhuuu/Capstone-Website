 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/header.php') ?>

 <!-- Layout: Sidebar + Main -->
   <?php require base_path('views/partials/nav.php') ?>


   <!-- Main content -->
   <main class="flex-1 p-6">
     <h1 class="text-xl font-bold mb-6"> My Notes</h1>
     <!-- You can add dashboard content here -->
     <ul>
       <?php foreach ($notes as $note) : ?>
         <li>
           <a href="/Note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
             <?= htmlspecialchars($note['body']) ?>
           </a>
         </li>
       <?php endforeach; ?>
     </ul>

     <p class="mt-6">
      <a href="/Notes/create" class="text-blue-500 hover:underline">Creat Note</a>
     </p>

   </main>
 </div>

 <?php require base_path('views/partials/footer.php') ?>