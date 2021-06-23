<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" >
    <div class="container">
        <div class="container">
            <section class="member-details">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="img-container">
                                <?php if(isset($path)): ?>
                                    <img src="<?php echo e(asset ('https://hr360app.s3.us-east-2.amazonaws.com/'.$path)); ?>" alt="team member" class="img-thumbnail">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="member_designation">
                                <h2><?php echo e($employee->name); ?></h2>
                                <span><?php echo e($employee->role); ?></span><br>
                                <span>Team - <?php echo e($employee->team->name); ?></span><br>
                                <span>Email - <?php echo e($employee->email); ?></span><br>
                                <a href="/employee/<?php echo e($employee->id); ?>/edit" class="btn btn-success"> Edit</a>
                                <form action="/employee/<?php echo e($employee->id); ?>/delete" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" value="data">
                                    <input type="submit" class="btn btn-success" value="Delete" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/employee/profile.blade.php ENDPATH**/ ?>