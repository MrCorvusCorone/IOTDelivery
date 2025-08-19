<?php $__env->startSection('title', 'Home | IOTDelivery'); ?>

<?php $__env->startSection('headLibrary'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('hero'); ?>
    <section id="hero" class="hero">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('assets/templates/Carousel/images/beranda/hero/delivery.jpg')); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption mb-5 p-3">
                    <h5 class="mb-3">Delivery</h5>
                    <p>Delivery merupakan bagian penting dari perekonomi masyarakat. Manajemen yang baik terhadap proses delivery barang akan memperlancar kegiatan ekonomi masyarakat modern.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('assets/templates/Carousel/images/beranda/hero/sewa_gudang.jpg')); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption mb-5 p-3">
                    <h5 class="mb-3">Sewa Gudang</h5>
                    <p>Manfaatkan ruang kosong yang Anda punya untuk warehouse. Jadilah bagian dari suplai logistik dan ekonomi negeri</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('assets/templates/Carousel/images/beranda/hero/dokumentasi.jpg')); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption mb-5 p-3">
                    <h5 class="mb-3">Manajemen, Laporan dan Arsip</h5>
                    <p>Manajemen, laporan, dan arsip digital akan memudahkan Anda mengelola proses delivery.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('JavaScript'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.carousel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Apache24\htdocs\My_Project\IOTDelivery\resources\views/home/index.blade.php ENDPATH**/ ?>