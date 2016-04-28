<?php foreach(config('typicms.feeds', []) as $feed): ?>
    <?php echo app('feed')->link(route($lang.'.'.$feed['module'].'.feed'), 'atom', trans($feed['module'].'::global.feed').' – '.$websiteTitle, $lang); ?>

<?php endforeach; ?>
