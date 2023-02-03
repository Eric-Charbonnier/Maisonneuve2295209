<?php $__env->startSection('title', 'Liste des étudiants'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center my-4">Liste des étudiants du Collège Maisonneuve</h1>

      <div class="text-center my-4">
        <h2 class="text-warning">
          Ajouter un nouvel étudiant
        </h2>
        <a href="<?php echo e(route('etudiant.create')); ?>" class="btn btn-warning mb-3">Ajouter un étudiant </a>
      </div>

      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="bg-primary text-white">
            <!-- <th>ID</th> -->
            <th>Nom</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Ville</th>
            <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $etudiantDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiantDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <td><?php echo e($etudiantDetail->name); ?></td>
            <td><?php echo e($etudiantDetail->address); ?></td>
            <td><?php echo e($etudiantDetail->phone); ?></td>
            <td><?php echo e($etudiantDetail->email); ?></td>
            <td><?php echo e($etudiantDetail->etudiantHasVille->name); ?></td>
            <td><a href="<?php echo e(route('etudiant.show', $etudiantDetail->id)); ?>" class="btn btn-dark btn-sm">Voir</a></td>
            <td><a href="<?php echo e(route('etudiant.edit', $etudiantDetail->id)); ?>" class="btn btn-info btn-sm">Modifier</a></td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Supprimer
              </button>

            </td>
          </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-warning">
            Aucun etudiant
          </p>
          <?php endif; ?>
        </tbody>
      </table>
      <div class="d-flex justify-content-center m-4">
      <?php echo e($etudiantDetails); ?>

      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<!-- https://getbootstrap.com/docs/5.3/components/modal/#how-it-works -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer l'étudiant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirmer la suppression
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <form class="d-inline-block" action="<?php echo e(route('etudiant.destroy', $etudiantDetail->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('delete'); ?>
          <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP1/Maisonneuve2295209/resources/views/etudiant/index.blade.php ENDPATH**/ ?>