<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Início</h2>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <!-- Profile Image -->
                    <div class="card border-secondary">
                        <div class="card-body box-profile border border-secondary rounded">
                            <div class="text-center border border-primary-subtle rounded mb-3">
                                <img class="profile-user-img img-fluid img-circle" src="../../assets/img/gestor1.jpg"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">João</h3>

                            <p class="text-muted text-center">Gerente</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Resumo</a></li>
                            </ul>
                        </div><!-- /.card-header -->

                        <div class="content">
                            <div class="row px-2 py-2">
                                <div class="col-md-6">
                                    <div class="card border-secondary mb-3">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Val. Contratos</h5>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="remove">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <canvas id="donutChart2"
                                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 744px;"
                                                            width="744" height="250"
                                                            class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="col-md-6">
                                    <div class="card border-secondary mb-3">
                                        <div class="card-header">
                                            <h5 class="card-title">Bar Chart</h5>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="barChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 744px;"
                                                width="744" height="250" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- Line Chart -->
                                <div class="col-md-12">
                                    <div class="card border-secondary mb-3">
                                        <div class="card-header">
                                            <h5 class="card-title">Line Chart</h5>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="lineChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 744px;"
                                                width="744" height="250" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.container-fluid -->

<!-- Adicione o Chart.js -->
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Donut Chart 2
var donutChartCanvas2 = document.getElementById('donutChart2').getContext('2d');
var donutData2 = {
    labels: [
        'Valor Clientes',
        'Valor Fornecedores',
    ],
    datasets: [{
        data: [
            <?= $valoresContratados['totalClientes'] ?>,
            <?= $valoresContratados['totalFornecedores'] ?>
        ],
        backgroundColor: ['#000cfc', '#aaba00', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
};
var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
};
new Chart(donutChartCanvas2, {
    type: 'doughnut',
    data: donutData2,
    options: donutOptions
});

// Bar Chart
var barChartCanvas = document.getElementById('barChart').getContext('2d');
var barData = {
    labels: ['Total/Cliente', 'Total/Fornecedores'],
    datasets: [{
            label: 'Contratos Cliente',
            backgroundColor: '#f56954',
            borderColor: '#f56954',
            data: [<?= $listContratos['totalClientes'] ?>, 0], // Adicione 0 para a segunda barra
            barThickness: 40, // Ajuste a espessura das barras aqui
            maxBarThickness: 50 // Ajuste a espessura máxima das barras aqui
        },
        {
            label: 'Contratos Fornecedor',
            backgroundColor: '#99A700',
            borderColor: '#99A700',
            data: [0, <?= $listContratos['totalFornecedores'] ?>], // Adicione 0 para a primeira barra
            barThickness: 40, // Ajuste a espessura das barras aqui
            maxBarThickness: 50 // Ajuste a espessura máxima das barras aqui
        }
    ]
};
var barOptions = {
    maintainAspectRatio: false,
    responsive: true,
};
new Chart(barChartCanvas, {
    type: 'bar',
    data: barData,
    options: barOptions
});

var barOptions = {
    maintainAspectRatio: false,
    responsive: true,
};
new Chart(barChartCanvas, {
    type: 'bar',
    data: barData,
    options: barOptions
});

// Line Chart
var lineChartCanvas = document.getElementById('lineChart').getContext('2d');
var lineData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [10, 20, 30, 40, 50, 60, 70]
    }]
};
var lineOptions = {
    maintainAspectRatio: false,
    responsive: true,
};
new Chart(lineChartCanvas, {
    type: 'line',
    data: lineData,
    options: lineOptions
});
</script>