@extends('layouts.app')


    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>

@section('content')
<!-- bar chart canvas element -->
<div class="row justify-content-md-center">
<canvas id="income" width="600" height="400"></canvas>
</div>
<script>
    // bar chart data
    var barData = {
        labels : ["Competence","Performance"],
        datasets : [
            {
                fillColor : "#48A497",
                strokeColor : "#48A4D1",
                data : [2,3]
            },
            {
                fillColor : "rgba(73,188,170,0.4)",
                strokeColor : "rgba(72,174,209,0.4)",
                data : [3,4]
            }
        ]
    }
    // get bar chart canvas
    var income = document.getElementById("income").getContext("2d");
    // draw bar chart
    new Chart(income).Bar(barData);
</script>
@endsection

