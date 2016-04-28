<?php $__env->startSection('title', $page->title.' – '.$websiteTitle); ?>
<?php $__env->startSection('ogTitle', $page->title); ?>
<?php $__env->startSection('description', $page->meta_description); ?>
<?php $__env->startSection('keywords', $page->meta_keywords); ?>
<?php if($page->image): ?>
<?php $__env->startSection('image', url($page->present()->thumbSrc())); ?>
<?php endif; ?>
<?php $__env->startSection('bodyClass', 'body-page body-page-'.$page->id); ?>

<?php $__env->startSection('css'); ?>
    <?php if($page->css): ?>
    <style type="text/css">
        <?php echo e($page->css); ?>

    </style>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if($page->js): ?>
    <script>
        <?php echo e($page->js); ?>

    </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <?php echo $__env->yieldContent('page'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::public.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>