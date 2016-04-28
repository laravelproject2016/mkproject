<?php $__env->startSection('lang-switcher'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('site-header'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('site-nav'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('site-footer'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyClass'); ?> lang-chooser <?php $__env->stopSection(); ?>
<?php $__env->startSection('skip-links'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="page-header lang-chooser-header">
        <h1 class="lang-chooser-title">Choose language</h1>
    </div>

    <ul class="lang-chooser-list">
        <?php foreach($locales as $locale): ?>
            <li class="lang-chooser-list-item">
                <a class="lang-chooser-list-anchor" href="<?php echo e(url($homepage->uri($locale))); ?>"><?php echo e(trans('db.languages.'.$locale)); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::public.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>