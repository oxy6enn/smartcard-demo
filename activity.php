<?php session_start(); ?>
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
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">กิจกรรม</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="d-flex">
                                <h3 class="card-title align-self-center">กิจกรรมทั้งหมด</h3>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                            class="table table-bordered table-striped dataTable dtr-inline"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ชื่อกิจกรรม</th>
                                                    <th>วันที่เริ่มกิจกรรม</th>
                                                    <th>สถานะ</th>
                                                    <th>ตัวเลือก</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                            $sql1 = "SELECT
                                            activity_id,
                                            activity_name,
                                            status_at.status_at_id,
                                            status_at.status_at_name,
                                            CONCAT(DATE_FORMAT(activity_date,'%d/%m/'),DATE_FORMAT(activity_date,'%Y')+543) as activity_date
                                            FROM activity
                                            LEFT JOIN status_at ON activity.status_at_id = status_at.status_at_id
                                            ORDER BY activity_id DESC";
                                            $result1 = mysqli_query($conn, $sql1);
                                            $r = 1;
                                    
                                            while($rows = mysqli_fetch_assoc($result1)) {
                                                  $status_at_id = $rows['status_at_id'];
                                              
                                            ?>

                                                <tr class="odd">
                                                    <td> <?php echo $r ++  ?></td>
                                                    <td> <?php echo $rows["activity_name"]; ?></td>
                                                    <td> <?php echo $rows["activity_date"]; ?></td>

                                                    <?php if($status_at_id == 1){ ?>

                                                    <td> <span class="badge badge-pill badge-success">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>


                                                        <a href="queue.php?activity_id=<?php echo $rows["activity_id"]; ?>"
                                                            class="btn btn-info"><i class="nav-icon fa fa-search"></i>
                                                        </a>


                                                    </td>

                                                    <?php  } else {  ?>

                                                    <td> <span class="badge badge-pill badge-danger">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>

                                                        <button type="button" class="del-btn btn btn-info disabled">
                                                            <i class="nav-icon fa fa-search"></i>
                                                        </button>

                                                    </td>


                                                    <?php } ?>


                                                </tr>

                                                <?php } ?>


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
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                        <div class="card-footer justify-content-between">
                            
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>







</div>
<!-- /.content-wrapper -->


<?php include("componanted/footer.php"); ?>


<script>


</script>