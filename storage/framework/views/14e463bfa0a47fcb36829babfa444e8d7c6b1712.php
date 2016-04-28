<?php if($message = Session::get('status') or $message = $errors->first()): ?>
    <div class="alert alert-info <?php if($closable): ?>alert-dismissable <?php endif; ?>">
        <?php if($closable): ?>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php endif; ?>
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
