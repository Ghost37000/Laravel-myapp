<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if(Request::route()->getName() == 'app_home'): ?> active <?php endif; ?>" aria-current="page" href="<?php echo e(route('app_home')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(Request::route()->getName() == 'app_about'): ?> active <?php endif; ?>" aria-current="page" href="<?php echo e(route('app_about')); ?>">About</a>
          </li>
        </ul>
      </div>

<!-- Example single danger button -->
<div class="btn-group">
    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      My account
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a></li>
      <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a></li>
    </ul>
  </div>

    </div>
  </nav>
<?php /**PATH /var/www/html/myapp/resources/views/navbar/navbar.blade.php ENDPATH**/ ?>