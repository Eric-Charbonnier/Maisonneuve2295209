<?php $__env->startSection('title', 'Accueil - TP1 - Maisonneuve2295209'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-12 text-center pt-5">
      <h1 class="display-one mt-5"><?php echo e(config('app.name')); ?></h1>
      <p>
        Bienvenue sur la banque d'information des étudiants du Collège Maisonneuve, cliquez sur le bouton ci-dessous
      </p>
      <br>
      <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-outline-primary">
        Afficher les étudiants</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP1/Maisonneuve2295209/resources/views/welcome.blade.php ENDPATH**/ ?>