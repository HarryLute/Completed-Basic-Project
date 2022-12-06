
<?php $__env->startSection("content"); ?>
<div class="custom-product">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php echo e($item['id']==1?'active':''); ?>">
      <a href="detail/<?php echo e($item['id']); ?>">
      <img class="slider-img" src="<?php echo e($item['gallery']); ?>" >
      <div class="carousel-caption d-none d-md-block slider-text">
        <h5><?php echo e($item['name']); ?></h5>
        <p><?php echo e($item['description']); ?></p>
      </div>
      </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<div class="trending-wrapper">
  <h3>Trending Products</h3>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="trending-item">
  <a href="detail/<?php echo e($item['id']); ?>">
      <img class="trending-image" src="<?php echo e($item['gallery']); ?>" class="d-block w-100" >
      <div class="">
        <h5><?php echo e($item['name']); ?></h5>
      </div>
  </a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\xampp\htdocs\congnghephanmem\NHOM\resources\views/product.blade.php ENDPATH**/ ?>