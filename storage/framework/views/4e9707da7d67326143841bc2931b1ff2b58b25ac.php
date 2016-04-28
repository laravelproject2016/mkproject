<?php foreach($model->galleries as $gallery): ?>
<div class="gallery">
    <?php if($gallery->title): ?>
    <h3 class="gallery-title"><?php echo e($gallery->title); ?></h3>
    <?php endif; ?>
    <?php echo $gallery->present()->body; ?>

    <?php echo $__env->make('galleries::public._thumbs', ['model' => $gallery], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php endforeach; ?>
