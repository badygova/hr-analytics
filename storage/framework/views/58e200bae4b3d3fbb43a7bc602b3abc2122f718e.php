<?php $__env->startSection('content'); ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-4">
    Id - <?php echo e($rating->id); ?><br>
    Date - <?php echo e($rating->created_at); ?> <br>
    Author - <?php echo e($rating->user->name); ?><br>
    Employee - <?php echo e($rating->employee->name); ?><br>
    Team - <?php echo e($rating->employee->team->name); ?><br>
    Period - <?php echo e($rating->period); ?><br>
    Criterion - <?php echo e($rating->criterion); ?><br>
    Rating - <?php echo e($rating->rating); ?><br>
    Comment - <?php echo e($rating->comment); ?><br>
        </div>
        <div class="col-lg-3 col-md-4">
    <a href="/rating/<?php echo e($rating->id); ?>/edit" class="btn btn-success"> Edit</a>
    <form action="/rating/<?php echo e($rating->id); ?>/delete" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" value="data">
        <input type="submit" class="btn btn-success" value="Delete" >
    </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/rating/profile.blade.php ENDPATH**/ ?>