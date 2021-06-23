<?php $__env->startSection('content'); ?>
    <div class="row justify-content-md-center">
    <div class="col-lg-3 col-md-4">
    Id - <?php echo e($team->id); ?><br>
    Name - <?php echo e($team->name); ?><br>
    </div>
        <div class="col-lg-3 col-md-4">
    <a href="/team/<?php echo e($team->id); ?>/edit" class="btn btn-success"> Edit</a>
    <form action="/team/<?php echo e($team->id); ?>/delete" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" value="data">
        <input type="submit" class="btn btn-success" value="Delete" >
    </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/team/profile.blade.php ENDPATH**/ ?>