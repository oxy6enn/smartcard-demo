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
                        <li class="breadcrumb-item active">เพศ</li>
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
                                <h3 class="card-title align-self-center">เพศทั้งหมด</h3>
                                <button type="button" class="btn btn-primary ml-auto p-2" data-toggle="modal"
                                    data-target="#modal-lg-add"><i class="fas fa-plus"></i>
                                    เพิ่มเพศ
                                </button>
                            </div>
                        </div>


                        <form action="setup_sex_db.php" method="POST">
                            <!-- <form  id="form_inset" method="POST"> -->
                            <div class="modal fade" id="modal-lg-add">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">เพิ่มเพศ</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="sex_name">ชื่อเพศ</label>
                                                <input type="text" class="form-control " id="sex_name"
                                                    name="sex_name" placeholder="ชื่อเพศ">
                                            </div>

                                        </div>

                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" name="sex_add"
                                                class="btn btn-primary">บันทึก</button>

                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </form>



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
                                                    <th>ชื่อเพศ</th>
                                                    <th>สถานะ</th>
                                                    <th>ตัวเลือก</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                            $sql1 = "SELECT 
                                            sex_id,
                                            sex_name,
                                            status_at.status_at_id,
                                            status_at.status_at_name
                                            FROM sex
                                            LEFT JOIN status_at ON sex.status_at_id = status_at.status_at_id
                                            ORDER BY sex_id DESC";
                                            $result1 = mysqli_query($conn, $sql1);
                                            $r = 1;
                                    
                                            while($rows = mysqli_fetch_assoc($result1)) {
                                                  $status_at_id = $rows['status_at_id'];
                                              
                                            ?>

                                                <tr class="odd">
                                                    <td> <?php echo $r ++  ?></td>
                                                    <td> <?php echo $rows["sex_name"]; ?></td>

                                                    <?php if($status_at_id == 1){ ?>

                                                    <td> <span class="badge badge-pill badge-success">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>


                                                        <a href="setup_sex_edit.php?sex_id=<?php echo $rows["sex_id"]; ?>"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i>
                                                        </a>


                                                        <button type="button" class="btn btn-danger" id="delete_sex"
                                                            data-id="<?php echo $rows['sex_id']; ?>">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>

                                                    </td>

                                                    <?php  } else {  ?>

                                                    <td> <span class="badge badge-pill badge-danger">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>

                                            

                                                        <a href="setup_sex_edit.php?sex_id=<?php echo $rows["sex_id"]; ?>"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i>
                                                        </a>


                                                        <button type="button" class="btn btn-danger disabled"><i
                                                                class="far fa-trash-alt"></i>
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