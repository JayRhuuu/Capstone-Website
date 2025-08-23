 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/header.php') ?>

 <!-- Layout: Sidebar + Main -->
   <?php require base_path('views/partials/nav.php') ?>



   <!-- Main content -->
   <main class="flex-1 p-6">
     <h1 class="text-xl font-bold mb-6"> Creat Note</h1>

     <form method="POST">
       <label for="body">Description</label>
       <div>
         <textarea
           id="body"
           name="body"
           ><?= $_POST['body'] ?? '' ?></textarea>

           <?php if (isset($errors['body'])) : ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>
       </div>

       <div>
         <button type="submit">Create</button>
       </div>
     </form>

   </main>
 </div>

 <?php require base_path('views/partials/footer.php') ?>