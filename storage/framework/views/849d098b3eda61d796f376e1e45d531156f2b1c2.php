<li id="menuitem_<?php echo e($menulink->id); ?>" class="<?php echo e($menulink->class); ?>" role="menuitem">
    <a href="<?php echo e(url($menulink->href)); ?>" <?php if($menulink->target): ?> target="<?php echo e($menulink->target); ?>" <?php endif; ?> <?php if($menulink->items->count()): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?>>
        <?php if($menulink->icon_class): ?>
            <span class="<?php echo e($menulink->icon_class); ?>"></span>
        <?php endif; ?>
        <?php echo e($menulink->title); ?>

        <?php if($menulink->items->count()): ?>
            <span class="caret"></span>
        <?php endif; ?>
    </a>
    <?php if($menulink->items->count()): ?>
        <ul class="dropdown-menu">
            <?php foreach($menulink->items as $menulink): ?>
                <?php echo $__env->make('menus::public._item', ['menulink' => $menulink], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</li>
