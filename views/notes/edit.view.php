 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/header.php') ?>

 <!-- Layout: Sidebar + Main -->
   <?php require base_path('views/partials/nav.php') ?>



   <!-- Main content -->
   <main class="flex-1 p-6">
     <h1 class="text-xl font-bold mb-6"> Edit Note</h1>

     <form method="POST" action="/Note">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">

       <label for="body">Description</label>
       <div>
         <textarea
           id="body"
           name="body"
           ><?= htmlspecialchars($note['body']) ?></textarea>

           <?php if (isset($errors['body'])) : ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>
       </div>

       <div>
         <a href="/Notes" class="text-gray-500 border border-current px-2 py-1 rounded">
          Cancel
        </a>

         <button 
         type="submit" class="text-blue-500 border border-current px-2 py-1 rounded">
         Update
        </button>
       </div>
     </form>

   </main>
 </div>

 <?php require base_path('views/partials/footer.php') ?>