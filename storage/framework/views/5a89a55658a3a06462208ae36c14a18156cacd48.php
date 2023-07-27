<h1>Hi <?php echo e($name); ?> Please confirm your email!</h1>

<p>
    Please activate your account by copying and pasting the activation code. 
    <br>Activation code : <?php echo e($activation_code); ?>.<br>
    Or by clicking the following link : <br>
    <a href="<?php echo e(route('app_activation_account_link',['token' => $activation_token])); ?>" target="_blank">Confirm your account</a>
</p>

<p>
    Myapp team.
</p><?php /**PATH C:\wamp64\www\Site\myapp\resources\views/mail/confirmation_email.blade.php ENDPATH**/ ?>