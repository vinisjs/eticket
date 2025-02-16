@extends('layouts.app')

@section('content')
<h1 class="mb-4">Relatórios</h1>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Chamados por Status</h5>
            </div>
            <div class="card-body">
                <canvas id="ticketsByStatusChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Tempo Médio de Resolução</h5>
            </div>
            <div class="card-body">
                <p class="display-4 text-center">
                    @if(is_numeric($averageResolutionTime))
                        {{ number_format($averageResolutionTime, 1) }} days
                    @else
                        N/A
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('ticketsByStatusChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($ticketsByStatus->pluck('status')) !!},
            datasets: [{
                label: 'Number of Tickets',
                data: {!! json_encode($ticketsByStatus->pluck('count')) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection