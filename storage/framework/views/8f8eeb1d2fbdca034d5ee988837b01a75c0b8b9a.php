<!doctype html>
<html lang="<?php echo e(config('typicms.admin_locale')); ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>[admin] <?php echo $__env->yieldContent('title'); ?> – <?php echo e(config('typicms.'.config('typicms.admin_locale').'.website_title')); ?></title>

    <?php echo $__env->yieldContent('css'); ?>

    <link href="<?php echo e(app()->isLocal() ? asset('css/admin.css') : asset(elixir('css/admin.css'))); ?>" rel="stylesheet">

</head>

<body class="<?php if(auth()->user()): ?>has-navbar <?php endif; ?> <?php echo $__env->yieldContent('bodyClass'); ?>">

<?php $__env->startSection('navbar'); ?>
    <?php if(auth()->user()): ?>
        <?php echo $__env->make('core::_navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('otherSideLink'); ?>
    <?php echo $__env->make('core::admin._navbar-public-link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">

        <?php $__env->startSection('sidebar'); ?>
            <?php echo $__env->make('core::admin._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldSection(); ?>

        <div class="<?php $__env->startSection('mainClass'); ?>col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main <?php echo $__env->yieldSection(); ?>">

            <?php $__env->startSection('errors'); ?>
                <?php if(!$errors->isEmpty()): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo app('translator')->get('core::global.The form contains errors'); ?>.
                        <ul>
                            <?php foreach($errors->all() as $message): ?>
                                <li><?php echo e($message); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <?php echo $__env->yieldSection(); ?>

            <?php echo $__env->yieldContent('main'); ?>

        </div>

        <?php echo $__env->make('core::admin._javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <script src="<?php if(app()->environment('production')): ?><?php echo e(asset(elixir('js/admin/components.min.js'))); ?><?php else: ?><?php echo e(asset('js/admin/components.min.js')); ?><?php endif; ?>"></script>

        <?php if(config('typicms.admin_locale') != 'en'): ?>
            <script src="<?php echo e(asset('js/angular-locales/angular-locale_'.config('typicms.admin_locale').'-'.config('typicms.admin_locale').'.js')); ?>"></script>
        <?php endif; ?>

        <?php echo $__env->yieldContent('js'); ?>

        <script type="text/javascript">
            <?php echo Notification::showError('alertify.error(\':message\');'); ?>

            <?php echo Notification::showInfo('alertify.log(\':message\');'); ?>

            <?php echo Notification::showSuccess('alertify.success(\':message\');'); ?>

        </script>

    </div>

</div>

</body>

</html>
