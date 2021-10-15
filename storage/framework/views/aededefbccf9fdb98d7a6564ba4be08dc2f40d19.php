<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1 class="mb-4">Dashboard</h1>
        <div class="card px-4 py-5" style="width: 60vmin">
            <h3>Hello <span><?php echo e($user->name); ?></span></h3>
            <a href="/logout" class="btn btn-danger mt-4">Logout</a>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/2A1CF1811CF147F9/projects/Laravel/laravelAuth/resources/views/dashboard.blade.php ENDPATH**/ ?>