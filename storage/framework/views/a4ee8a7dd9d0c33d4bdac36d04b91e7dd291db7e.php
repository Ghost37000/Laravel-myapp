<?php $__env->startSection('title', 'Account activation'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5">Account activation</h1>

            
                    <?php echo $__env->make('alerts.alert-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form method="POST" action="<?php echo e(route('app_activation_code', ['token' => $token ])); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="activation-code" class="form-label">Activation Code</label>
                    <input type="text" class="form-control <?php if(Session::has('danger')): ?> is-invalid <?php endif; ?> " name="activation-code" id="activation-code" value="<?php if(Session::has('activation_code')): ?><?php echo e(Session::get('activation_code')); ?><?php endif; ?>" required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <a href="<?php echo e(route('app_activation_account_change_email', ['token' => $token])); ?>">Change your email address</a>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="<?php echo e(route('app_resend_activation_code', ['token' => $token])); ?>">Resend the activation code</a>
                </div>
                </div>

                <div class="d-grid grap-2">
                    <button class="btn btn-primary" type="submit">Activate</button>
                </div>


            </form>

    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Site\myapp\resources\views/auth/activation_code.blade.php ENDPATH**/ ?>