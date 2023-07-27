<?php $__env->startSection('title', 'Change your email address'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center text-muted mb-3 mt-5">Change your email address</h2>

                
                <?php echo $__env->make('alerts.alert-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <form action="<?php echo e(route('app_activation_account_change_email', ['token' => $token])); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="new-email" class="form-label">New Email address</label>
                        <input type="email" class="form-control" <?php if(Session::has('danger')): ?> is-invalid <?php endif; ?> name="new-email" id="new-email" value="<?php if(Session::has('new_email')): ?><?php echo e(Session::get('new_email')); ?><?php endif; ?>" placeholder="Enter the new email address" required>
                    </div>

                    <div class="d-grid grap-2">
                        <button class="btn btn-primary" type="submit">Change</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Site\myapp\resources\views/auth/activation_account_change_email.blade.php ENDPATH**/ ?>