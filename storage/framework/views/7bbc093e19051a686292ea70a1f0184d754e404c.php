<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Report 1 semester 2020</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>Criterion</th>
                                <th>Below expectations</th>
                                <th>Meets expectations</th>
                                <th>Above expectations</th>
                                <th>Far above expectations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($team->name); ?></td>
                                    <td>Performance</td>
                                    <td><?php $__currentLoopData = $reports11p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports12p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                                    <td> <?php $__currentLoopData = $reports13p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports14p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Competence</td>
                                    <td><?php $__currentLoopData = $reports11c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports12c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                                    <td> <?php $__currentLoopData = $reports13c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports14c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Report 2 semester 2020</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Team</th>
                                <th>Criterion</th>
                                <th>Below expectations</th>
                                <th>Meets expectations</th>
                                <th>Above expectations</th>
                                <th>Far above expectations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($team->name); ?></td>
                                    <td>Performance</td>
                                    <td><?php $__currentLoopData = $reports21p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports22p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                                    <td> <?php $__currentLoopData = $reports23p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports24p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Competence</td>
                                    <td><?php $__currentLoopData = $reports21c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports22c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                                    <td> <?php $__currentLoopData = $reports23c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td> <?php $__currentLoopData = $reports24c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rep->employee->team->id === $team->id): ?>
                                                <?php echo $rep->employee->name ?><br><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/report/index.blade.php ENDPATH**/ ?>