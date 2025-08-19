<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery-3.7.1.min.js')); ?>"></script>

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/css/plugins/bootstrap.min.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free-6.4.0/css/all.min.css')); ?>">

    
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Carousel/css/style.css')); ?>">

    
    <?php echo $__env->yieldContent('headLibrary'); ?>
  </head>
  <body>
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg mx-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                
                <i class="fa-solid fa-truck me-2"></i>IOTDelivery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Komunitas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Komunitas Kurir</a></li>
                            <li><a class="dropdown-item" href="#">Komunitas Warehouse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sewa Gudang</a></li>
                            <li><a class="dropdown-item" href="#">Ekspedisi dan Mitra</a></li>
                            <li><a class="dropdown-item" href="#">Info Loker</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(auth()->guard()->check()): ?>
                            
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                <form action="/logout" method="post">
                                    <?php echo method_field('post'); ?>
                                    <?php echo csrf_field(); ?>
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>
                                </form>
                            
                            <?php else: ?> 
                            
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/register">Resgistrasi</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    </header>

    <main>
        
        <?php echo $__env->yieldContent('hero'); ?>
        

        
        <section class="tentangKepengurusan pt-5 pb-5">
            <div class="container">
                <div class="text-center">
                    <h4 class="mb-4">IOT Delivery App</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias inventore saepe ipsum adipisci ea voluptate magni aliquid reiciendis hic perferendis, sit, veniam blanditiis dolores nam nostrum voluptatibus explicabo, nisi ut quas voluptas quaerat fugiat dolore. Assumenda, quis qui eos iste asperiores eaque perspiciatis quaerat dolor laborum deserunt necessitatibus ab voluptates.
                    </p>
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-circle-info me-2"></i>Lihat Detail</button>
                </div>
            </div>
        </section>
    </main>
    
    
    <?php echo $__env->yieldContent('footer'); ?>
    

    <?php echo $__env->yieldContent('JavaScript'); ?>

    
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.bundle.min.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\Apache24\htdocs\My_Project\IOTDelivery\resources\views/templates/carousel.blade.php ENDPATH**/ ?>