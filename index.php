<?php include("componanted/header.php"); ?>
<?php include("componanted/sidebar.php"); ?>
<?php include("config/db.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php 
                $sql = "SELECT patient_id FROM patient ";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_num_rows($query);
                ?>
                            <h3><?php echo $result?></h3>
                            <p>ผู้รับบริการ</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div> -->
                        <a href="patient.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            
                            <h3>0</h3>

                            <p>กิจกรรม</p>
                        </div>

                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="setup_activity.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                           
                            <h3>0</h3>

                            <p>Package</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                        <a href="setup_package.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                           
                            <h3>0</h3>
                            <p>ยอดเงินทั้งหมด</p>
                        </div>
                        <div class="icon">

                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงานยอดเงิน (แยกกิจกรรม)</h3>
                        </div>

                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example3"
                                            class="table table-bordered table-hover dataTable dtr-inline"
                                            aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1" colspan="1">#</th>
                                                    <th rowspan="1" colspan="1">ชื่อกิจกรรม</th>
                                                    <th rowspan="1" colspan="1">ยอดเงิน</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                              
                                            </tbody>
                                            <!-- <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Rendering engine</th>
                                                <th rowspan="1" colspan="1">Browser</th>
                                                <th rowspan="1" colspan="1">Platform(s)</th>
                                                <th rowspan="1" colspan="1">Engine version</th>
                                                <th rowspan="1" colspan="1">CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

                <div class="col-lg-6 col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงานผู้รับบริการ (แยกกิจกรรม)</h3>
                        </div>

                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example3"
                                            class="table table-bordered table-hover dataTable dtr-inline"
                                            aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1" colspan="1">#</th>
                                                    <th rowspan="1" colspan="1">ชื่อกิจกรรม</th>
                                                    <th rowspan="1" colspan="1">ผู้รับบริการ</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                               
                                            </tbody>
                                            <!-- <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Rendering engine</th>
                                                <th rowspan="1" colspan="1">Browser</th>
                                                <th rowspan="1" colspan="1">Platform(s)</th>
                                                <th rowspan="1" colspan="1">Engine version</th>
                                                <th rowspan="1" colspan="1">CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                <!-- /.row (main row) -->

            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





<?php include("componanted/footer.php"); ?>