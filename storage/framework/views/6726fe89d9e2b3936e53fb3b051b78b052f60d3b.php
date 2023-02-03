<?php $__env->startSection('title', 'Ajouter un étudiant'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-one ">
        Ajouter un étudiant
      </h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <form method="post" action="<?php echo e(route('etudiant.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="card-header">
            Formulaire
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="address">Adresse</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="birthdate">Date de naissance</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>
            <div class="form-group">
              <label for="ville_id">Ville</label>
              <select class="form-control" id="ville_id" name="ville_id">
              <option value="" selected>Sélectionnez un pays</option>
                <?php $__empty_1 = true; $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value="">Aucune ville disponible</option>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <div class="card-footer">
          <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-secondary btn-dark">Retour à la liste</a>
            <input type="submit" value="Sauvegarder l'étudiant" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP1/Maisonneuve2295209/resources/views/etudiant/create.blade.php ENDPATH**/ ?>