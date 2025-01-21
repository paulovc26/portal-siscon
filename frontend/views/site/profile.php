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
                <div class="col-md-2">

                    <!-- Profile Image -->
                    <div class="card border-secondary mb-3" style="max-width: 15rem;">
                        <div class="card-body box-profile border border-secondary rounded">
                            <div class="text-center border border-primary-subtle rounded">
                                <img class="profile-user-img img-fluid img-circle" src="../../assets/img/gestor1.jpg"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">João</h3>

                            <p class="text-muted text-center">Gerente</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <p>Contratos c/ Cliente:
                                        <b>
                                            <?= $totalContratoCliente ?>
                                        </b>
                                    </p>
                                </li>
                                <li class="list-group-item text-small">
                                    <p>Contratos c/ Fornecedor:
                                        <b>
                                            <?= $totalContratoFornecedor ?>
                                        </b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Resumo</a>
                                </li>
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
                                                        <h5 class="card-title">Rel. Contratos</h5>
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
                                                        <canvas id="donutChart"
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

                                <!-- Bar Chart -->
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Donut Chart
var donutChartCanvas = document.getElementById('donutChart').getContext('2d');
var donutData = {
    labels: [
        'Total Clientes',
        'Total Fornecedores',

    ],
    datasets: [{
        data: [
            <?= $listContratos['totalClientes'] ?>,
            <?= $listContratos['totalFornecedores'] ?>

        ],


        backgroundColor: ['#000cfc', '#aaba00', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
};
var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
};
new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
});

// Bar Chart
var barChartCanvas = document.getElementById('barChart').getContext('2d');
var barData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: '#f56954',
        borderColor: '#f56954',
        data: [10, 20, 30, 40, 50, 60, 70]
    }]
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
</script>