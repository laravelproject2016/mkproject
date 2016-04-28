<?php $__env->startSection('title', 'Error 404 – '.$websiteTitle); ?>

<?php $__env->startSection('bodyClass', 'error-404'); ?>

<?php $__env->startSection('main'); ?>

    <article class="http-error-message">
        <h2><?php echo app('translator')->get('db.Sorry, this page was not found'); ?>.</h2>
        <p>
            <?php echo app('translator')->get('db.Go to our homepage?', ['a_open' => '<a href="/">', 'a_close' => '</a>']); ?>
        </p>
    </article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::public.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>