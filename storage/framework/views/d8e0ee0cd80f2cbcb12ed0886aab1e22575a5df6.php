<?php $__env->startSection('site-title'); ?>
<h1 class="site-title"><?php echo $__env->make('core::public._site-title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page'); ?>

    <?php echo $page->present()->body; ?>


    <?php echo $__env->make('galleries::public._galleries', ['model' => $page], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php /*
    <?php if($slides = Slides::all() and $slides->count()): ?>
        <?php echo $__env->make('slides::public._slider', ['items' => $slides], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
*/ ?>
<?php /*
    <?php if($latestNews = News::latest(3) and $latestNews->count()): ?>
        <div class="container-news">
            <h2><?php echo app('translator')->get('db.Latest news'); ?></h2>
            <?php echo $__env->make('news::public._list', ['items' => $latestNews], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <a href="<?php echo e(route($lang.'.news')); ?>" class="btn btn-default btn-xs"><?php echo app('translator')->get('db.All news'); ?></a>
        </div>
    <?php endif; ?>
*/ ?>
<?php /*
    <?php if($incomingEvents = Events::incoming() and $incomingEvents->count()): ?>
        <div class="container-events">
            <h3><?php echo app('translator')->get('db.Incoming events'); ?></h3>
            <?php echo $__env->make('events::public._list', ['items' => $incomingEvents], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <a href="<?php echo e(route($lang.'.events')); ?>" class="btn btn-default btn-xs"><?php echo app('translator')->get('db.All events'); ?></a>
        </div>
    <?php endif; ?>
*/ ?>
<?php /*
    <?php if($partners = Partners::allBy('homepage', 1) and $partners->count()): ?>
        <div class="container-partners">
            <h2><a href="<?php echo e(route($lang.'.partners')); ?>"><?php echo app('translator')->get('db.Partners'); ?></a></h2>
            <?php echo $__env->make('partners::public._list', ['items' => $partners], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php endif; ?>
*/ ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages::public.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>