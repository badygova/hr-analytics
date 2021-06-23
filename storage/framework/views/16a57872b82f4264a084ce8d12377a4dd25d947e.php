<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/ratings/<?php echo e($rating->id); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="employee_id">Employee</label>
                <select class="form-control" name="employee_id" id="employee_id">
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=<?php echo e($emp->id); ?>><?php echo e($emp->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="employee_id">Period</label>
                <select class="form-control" name="period" id="period">
                    <option value="1">1 semester 2020</option>
                    <option value="2">2 semester 2020</option>
                </select>
            </div>

            <div class="form-group">
                <label for="criterion">Criterion</label>
                <select class="form-control" name="criterion" id="criterion">
                    <option value="performance">Performance</option>
                    <option value="competence">Competence</option>
                </select>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <select class="form-control" name="rating" id="rating">
                    <option value="1">Below expectations</option>
                    <option value="2">Meets expectations</option>
                    <option value="3">Above expectations</option>
                    <option value="4">Far above expectations</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <input type="text" class="form-control" name="comment" id="comment">
            </div>
            <input type="submit">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/rating/edit.blade.php ENDPATH**/ ?>