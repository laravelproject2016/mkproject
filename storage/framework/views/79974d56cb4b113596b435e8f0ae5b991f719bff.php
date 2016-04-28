<?php if($menu = Menus::getMenu($name)): ?>

    <?php if($menu->menulinks->count()): ?>
    <ul class="<?php echo e($menu->class); ?>" role="menu">
        <?php foreach($menu->menulinks as $menulink): ?>
            <?php echo $__env->make('menus::public._item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

<?php endif; ?>
