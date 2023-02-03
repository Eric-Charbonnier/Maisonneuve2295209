<?php $__env->startSection('title', 'Mettre à jour un étudiant'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-4">
        Mettre à jour un étudiant
      </h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <form method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('put'); ?>
          <div class="card-header bg-primary text-white">
            Formulaire
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" id="name" name="name" class="form-control" value="<?php echo e($etudiantDetail->name); ?>">
            </div>
            <div class="form-group">
              <label for="address">Adresse</label>
              <input type="text" id="address" name="address" class="form-control" value="<?php echo e($etudiantDetail->address); ?>">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="text" id="phone" name="phone" class="form-control" value="<?php echo e($etudiantDetail->phone); ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" value="<?php echo e($etudiantDetail->email); ?>">
            </div>
            <div class="form-group">
              <label for="birthdate">Date de naissance</label>
              <input type="date" id="birthdate" name="birthdate" class="form-control" value="<?php echo e($etudiantDetail->birthdate); ?>">
            </div>

            <div class="control-group col-12">
              <label for="ville_id">Ville</label>
              <!-- <select name="ville_id" id="ville_id" class="form-control">
                print_r($etudiantDetail);
                <?php $__empty_1 = true; $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($ville->id); ?>"
                <?php if($ville->id == $etudiantDetail->ville_id): ?> selected
                  <?php endif; ?> > <?php echo e($ville->name); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value="">Aucune ville disponible</option>
                <?php endif; ?>
              </select> -->

              <select name="ville_id" id="ville_id" class="form-control">

                <?php $__empty_1 = true; $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <?php if($ville->id == $etudiantDetail->ville_id): ?>
                <option value="<?php echo e($ville->id); ?>" selected> <?php echo e($ville->name); ?> </option>
                  <?php else: ?>
                <option value="<?php echo e($ville->id); ?>"> <?php echo e($ville->name); ?> </option>
                <?php endif; ?> 

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value="">Aucune ville disponible</option>
                <?php endif; ?>
              </select>

            </div>

          </div>
          <div class="card-footer">
            <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-secondary btn-dark">Retour à la liste</a>
            <input type="submit" value="Mettre à jour" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP1/Maisonneuve2295209/resources/views/etudiant/edit.blade.php ENDPATH**/ ?>