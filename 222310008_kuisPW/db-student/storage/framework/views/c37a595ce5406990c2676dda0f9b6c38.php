<?php $__env->startSection('main-content'); ?>
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Nama :</span>
            <h2><?php echo e($data->fullname); ?></h2>
        </div>
        <div class="npm mt-4">
            <span class="text-secondary">NPM :</span>
            <h2><?php echo e($data->npm); ?></h2>
        </div>
        <div class="email mt-4">
            <span class="text-secondary">Email :</span>
            <h2><?php echo e($data->email); ?></h2>
        </div>
        <div class="prodi mt-4">
            <span class="text-secondary">Prodi :</span>
            <h2><?php echo e($data->prodi); ?></h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Student.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\db-student\resources\views/Student/modules/students/show.blade.php ENDPATH**/ ?>