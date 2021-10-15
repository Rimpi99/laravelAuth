<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="card px-4 py-4 mx-auto border border-primary" style="width: 40vw">
            <?php if(Session::get('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::get('fail')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('fail')); ?>

                </div>
            <?php endif; ?>



            <h1 class="mb-4">Register</h1>
            <form action="<?php echo e(route('registerPage')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" class="form-control mb-4" name="name" placeholder="Your Name Please">
                <input type="email" class="form-control mb-4" name="email" placeholder="name@example.com">
                <input type="password" class="form-control mb-4" name="password" placeholder="******">
                <button class="btn btn-primary">Submit</button>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger mt-4">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </form>
            <a class="btn mt-4" href="/login">Already a user? <span
                    style="font-weight: bold; color: blue;font-size: 1.2rem">Login</span></a>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/2A1CF1811CF147F9/projects/Laravel/laravelAuth/resources/views/register.blade.php ENDPATH**/ ?>