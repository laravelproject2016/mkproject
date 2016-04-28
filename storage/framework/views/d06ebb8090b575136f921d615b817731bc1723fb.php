<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">

    <meta property="og:site_name" content="<?php echo e($websiteTitle); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('ogTitle'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(URL::full()); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('image'); ?>">

    <link href="<?php echo e(app()->isLocal() ? asset('css/public.css') : asset(elixir('css/public.css'))); ?>" rel="stylesheet">

    <?php echo $__env->make('core::public._feed-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('css'); ?>

    <?php if(app()->environment('production') and config('typicms.google_analytics_code')): ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo e(config('typicms.google_analytics_code')); ?>', 'auto');
        ga('send', 'pageview');
    </script>

    <?php endif; ?>

</head>

<body class="body-<?php echo e($lang); ?> <?php echo $__env->yieldContent('bodyClass'); ?> <?php if($navbar): ?>has-navbar <?php endif; ?>">

    <?php $__env->startSection('skip-links'); ?>
    <a href="#main" class="skip-to-content"><?php echo app('translator')->get('db.Skip to content'); ?></a>
    <a href="#site-nav" class="btn-offcanvas" data-toggle="offcanvas" title="<?php echo app('translator')->get('db.Open navigation'); ?>" aria-label="<?php echo app('translator')->get('db.Open navigation'); ?>" role="button" aria-controls="navigation" aria-expanded="false"><span class="fa fa-bars fa-fw" aria-hidden="true"></span></a>
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->make('core::_navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="site-container" id="main" role="main">

        <?php $__env->startSection('site-header'); ?>
        <header class="site-header">
            <?php $__env->startSection('site-title'); ?>
            <div class="site-title"><?php echo $__env->make('core::public._site-title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
            <?php echo $__env->yieldSection(); ?>
        </header>
        <?php echo $__env->yieldSection(); ?>

        <div class="sidebar-offcanvas">

            <button class="btn-offcanvas btn-offcanvas-close" data-toggle="offcanvas" title="<?php echo app('translator')->get('global.Close navigation'); ?>" aria-label="<?php echo app('translator')->get('global.Close navigation'); ?>"><span class="fa fa-close fa-fw" aria-hidden="true"></span></button>

            <?php $__env->startSection('lang-switcher'); ?>
                <?php echo $__env->make('core::public._lang-switcher', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>

            <?php $__env->startSection('site-nav'); ?>
            <nav class="site-nav" id="site-nav">
                <?php echo Menus::render('main'); ?>

            </nav>
            <?php echo $__env->yieldSection(); ?>

        </div>

        <?php echo $__env->make('core::public._alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('main'); ?>

        <?php $__env->startSection('site-footer'); ?>
        <footer class="site-footer">
            <nav class="social-nav">
                <?php echo Menus::render('social'); ?>

            </nav>
            <nav class="footer-nav">
                <?php echo Menus::render('footer'); ?>

            </nav>
        </footer>
        <?php echo $__env->yieldSection(); ?>

    </div>

    <script src="<?php if(app()->environment('production')): ?><?php echo e(asset(elixir('js/public/components.min.js'))); ?><?php else: ?><?php echo e(asset('js/public/components.min.js')); ?><?php endif; ?>"></script>
    <script src="<?php if(app()->environment('production')): ?><?php echo e(asset(elixir('js/public/master.js'))); ?><?php else: ?><?php echo e(asset('js/public/master.js')); ?><?php endif; ?>"></script>
    <?php if(Request::input('preview')): ?>
    <script src="<?php echo e(asset('js/public/previewmode.js')); ?>"></script>
    <?php endif; ?>

    <?php echo $__env->yieldContent('js'); ?>

</body>

</html>
