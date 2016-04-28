<?php if($onlineLocales = TypiCMS::getOnlineLocales() and count($onlineLocales) > 1): ?>
<nav class="lang-switcher dropdown">
    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <?php echo e($lang); ?>

        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <?php foreach($onlineLocales as $locale): ?>
        <li class="<?php if($locale == config('app.locale')): ?>active <?php endif; ?>" role="menuitem">
            <?php if(isset($model) and isset($page) and $model->hasTranslation($locale)): ?>
                <?php if($model->category and $model->translate($locale)->status): ?>
                    <a href="<?php echo e(url($page->uri($locale).'/'.$model->category->translate($locale)->slug.'/'.$model->translate($locale)->slug)); ?>"><?php echo e($locale); ?></a>
                <?php elseif($model->translate($locale)->status): ?>
                    <a href="<?php echo e(url($page->uri($locale).'/'.$model->translate($locale)->slug)); ?>"><?php echo e($locale); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(url($page->uri($locale))); ?>"><?php echo e($locale); ?></a>
                <?php endif; ?>
            <?php elseif(isset($category)): ?>
            <a href="<?php echo e(url($page->uri($locale).'/'.$category->translate($locale)->slug)); ?>"><?php echo e($locale); ?></a>
            <?php elseif(isset($page)): ?>
            <a href="<?php echo e(url($page->uri($locale))); ?>"><?php echo e($locale); ?></a>
            <?php else: ?>
            <a href="<?php echo e(url('/')); ?>"><?php echo e($locale); ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>
