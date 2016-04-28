<?php $__env->startSection('title', trans('users::global.Log in')); ?>

<?php $__env->startSection('page-header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainClass'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('errors'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div id="login" class="container-login container-xs-center">

    <?php echo $__env->make('core::admin._message', ['closable' => false], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo BootForm::open(); ?>


        <h1><?php echo app('translator')->get('users::global.Log in'); ?></h1>

        <div class="form-group">
            <?php echo Form::email('email')->addClass('form-control input-lg')->placeholder(trans('validation.attributes.email'))->autofocus(true); ?>

        </div>
        <div class="form-group">
            <?php echo Form::password('password')->addClass('form-control input-lg')->placeholder(trans('validation.attributes.password')); ?>

        </div>

        <div class="form-group">
            <?php echo BootForm::checkbox(trans('users::global.Remember me'), 'remember'); ?>

        </div>

        <div class="form-group">
            <?php echo BootForm::submit(trans('validation.attributes.log in'), 'btn-primary')->addClass('btn-lg btn-block'); ?>

        </div>

        <div class="form-group">
            <span class="help-block">
                <a href="<?php echo e(route('resetpassword')); ?>"><?php echo app('translator')->get('users::global.Forgot your password?'); ?></a>
            </span>
        </div>

    <?php echo BootForm::close(); ?>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>