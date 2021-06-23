<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Rating <a href="/rating/create" class="btn btn-success"> + Create</a></div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Date</th>
                                <th>Author</th>
                                <th>Employee</th>
                                <th>Team</th>
                                <th>Period</th>
                                <th>Criterion</th>
                                <th>Rating</th>
                                <th>Comment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="/rating/<?php echo e($rating->id); ?>"><?php echo e($rating->id); ?></a></td>
                                    <td><?php echo e($rating->created_at); ?></td>
                                    <td><?php echo e($rating->user->name); ?></td>
                                    <td><?php echo e($rating->employee->name); ?></td>
                                    <td><?php echo e($rating->employee->team->name); ?></td>
                                    <td><?php echo e($rating->period); ?></td>
                                    <td><?php echo e($rating->criterion); ?></td>
                                    <td><?php echo e($rating->rating); ?></td>
                                    <td><?php echo e($rating->comment); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <a href = "/ratings/export"> <button class = "btn btn-success" > Download Excel xlsx </button> </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/rating/index.blade.php ENDPATH**/ ?>