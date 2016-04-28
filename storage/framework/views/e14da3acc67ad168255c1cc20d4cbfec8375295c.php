<li class="sidebar-panel">
    <?php if($group->shouldShowHeading()): ?>
        <a class="sidebar-title <?php if(config('typicms.user.menus_'.$group->id.'_collapsed')): ?>collapsed <?php endif; ?>" href="#<?php echo e($group->id); ?>" data-toggle="collapse">
            <div><?php echo e($group->name); ?></div>
        </a>
    <?php endif; ?>
    <ul class="nav nav-sidebar panel-collapse collapse <?php if(! Config::get('typicms.user.menus_'.$group->id.'_collapsed')): ?>in <?php endif; ?>" id="<?php echo e($group->id); ?>">
        <?php foreach($group->getItems() as $item): ?>
            <?php echo $item->render(); ?>

        <?php endforeach; ?>
    </ul>
</li>
