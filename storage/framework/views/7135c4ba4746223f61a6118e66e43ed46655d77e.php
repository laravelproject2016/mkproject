<?php if(isset($model) and $model->id): ?>
<a href="<?php echo e(TypiCMS::isLocaleOnline($locale) ? url($model->uri($locale)) : url($model->uri())); ?>">
<?php elseif($module = Request::segment(2) and Route::has($locale.'.'.$module)): ?>
<a href="<?php echo e(TypiCMS::isLocaleOnline($locale) ? route($locale.'.'.$module) : route($locale.'.'.$module)); ?>">
<?php else: ?>
<a href="<?php echo e(url('/')); ?>">
<?php endif; ?>
<?php echo app('translator')->get('global.View website', [], config('typicms.admin_locale')); ?>
</a>
