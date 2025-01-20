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
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card border-primary mb-3" style="max-width: 20rem;" bis_skin_checked="1">
                        <div class="card-body box-profile">
                            <div class="text-center">
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
                                <li class="list-group-item">
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

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
                                        data-toggle="tab">Resumo</a>
                                </li>

                            </ul>
                        </div><!-- /.card-header -->


                        <div class="content">
                            <div class="row px-2 py-2">

                                <div class="col-md-6">
                                    <div class="card border-primary mb-3">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <div class="card card-danger">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Donut Chart</h3>

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
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
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



                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>