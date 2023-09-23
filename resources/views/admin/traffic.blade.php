@extends('admin.index') <!-- You can extend your app's layout or a different layout -->

@section('admin-body')
<div class="container">
    <h1>Daily Traffic</h1>
    <div class="row">
        <div class="col-md-6">
            <canvas id="newUserChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="newProductChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    // Data for New User Chart
    var newUserData = {
        labels: ["New Users"],
        datasets: [{
            data: [{{ $newUserCount }}],
            backgroundColor: ["#36A2EB"],
        }]
    };

    // Data for New Product Chart
    var newProductData = {
        labels: ["New Products"],
        datasets: [{
            data: [{{ $newProductCount }}],
            backgroundColor: ["#FFCE56"],
        }]
    };

    // Create New User Chart
    var ctx1 = document.getElementById('newUserChart').getContext('2d');
    var newUserChart = new Chart(ctx1, {
        type: 'bar',
        data: newUserData,
    });

    // Create New Product Chart
    var ctx2 = document.getElementById('newProductChart').getContext('2d');
    var newProductChart = new Chart(ctx2, {
        type: 'bar',
        data: newProductData,
    });
</script>
@endsection
