<!-- resources/views/mahasiswa/chart.blade.php -->

@extends('layout.main')

@section('content')
<div class="container">
    <h2>Grafik Grade Mahasiswa</h2>
    <canvas id="gradeChart" width="400" height="200"></canvas>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script>
    var ctx = document.getElementById('gradeChart').getContext('2d');
    var data = {
        labels: ['A', 'B', 'C', 'D'],
        datasets: [{
            data: [/* Tambahkan jumlah mahasiswa dengan masing-masing grade di sini */],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    };
    var options = {
        scales: {
            y: {
                beginAtZero: true,
                max: /* Tambahkan jumlah maksimum mahasiswa di sini */
            }
        }
    };
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
@endsection
