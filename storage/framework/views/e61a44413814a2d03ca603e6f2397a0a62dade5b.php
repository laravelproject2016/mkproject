<?php if($navbar): ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="offcanvas">
                    <span class="fa fa-bars fa-fw fa-inverse"></span>
                    <span class="sr-only"><?php echo app('translator')->get('global.Toggle navigation'); ?></span>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="fa fa-chevron-down fa-fw fa-inverse"></span>
                    <span class="sr-only"><?php echo app('translator')->get('global.Toggle navigation'); ?></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>"><?php echo e(config('typicms.'.config('typicms.admin_locale').'.website_title')); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php $__env->startSection('otherSideLink'); ?>
                            <?php if(Request::segment(1) == 'admin'): ?>
                                <?php echo $__env->make('core::admin._navbar-public-link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php else: ?>
                                <?php echo $__env->make('core::public._navbar-admin-link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endif; ?>
                        <?php echo $__env->yieldSection(); ?>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo e(route('admin::index-users')); ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user fa-fw"></span> <?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?> <b class="caret"></b></a>
                        <div class="dropdown-menu dropdown-user">
                            <div class="img pull-left">
                                <img src="https://www.gravatar.com/avatar/<?php echo e(md5(auth()->user()->email)); ?>" class="pull-left">
                            </div>
                            <div class="info">
                                <p><?php echo e(auth()->user()->email); ?></p>
                                <?php if (Gate::check('edit-users')): ?>
                                <p>
                                    <a href="<?php echo e(route('admin::edit-user', Auth::id())); ?>"><?php echo app('translator')->get('users::global.Profile', [], config('typicms.admin_locale')); ?></a>
                                </p>
                                <?php endif; ?>
                                <p>
                                    <a href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('users::global.Log out', [], config('typicms.admin_locale')); ?></a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <?php if (Gate::check('index-settings')): ?>)
                        <li><a href="<?php echo e(route('admin::index-settings')); ?>"><span class="fa fa-cog fa-fw"></span> <span class="hidden-sm"><?php echo app('translator')->get('global.Settings', [], config('typicms.admin_locale')); ?></span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
