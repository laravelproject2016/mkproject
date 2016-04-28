<a href="<?php echo e(TypiCMS::homeUrl()); ?>">
    <?php if(TypiCMS::hasLogo()): ?>
        <img class="logo" src="<?php echo e(url('uploads/settings/'.config('typicms.image'))); ?>" width="" height="150" alt="<?php echo e(TypiCMS::title()); ?>">
    <?php else: ?>
        <?php echo e(TypiCMS::title()); ?>

    <?php endif; ?>
</a>
