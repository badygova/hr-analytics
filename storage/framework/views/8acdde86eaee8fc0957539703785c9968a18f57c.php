    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>

<?php $__env->startSection('content'); ?>
<!-- bar chart canvas element -->
<div class="row justify-content-md-center">
<canvas id="income" width="600" height="400"></canvas>
</div>
<script>
    // bar chart data
    var barData = {
       
        datasets : [
            {
                fillColor : "#48A497",
                strokeColor : "#48A4D1",
                data : <?php echo e($sums); ?>

            },
        ]
    }
    // get bar chart canvas
    var income = document.getElementById("income").getContext("2d");
    // draw bar chart
    new Chart(income).Bar(barData);
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aliya/hr/hr/resources/views/chart.blade.php ENDPATH**/ ?>