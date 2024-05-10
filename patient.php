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
                        <li class="breadcrumb-item active">รายชื่อผู้รับบริการ</li>
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
                                <h3 class="card-title align-self-center mr-auto">รายชื่อผู้รับบริการ</h3>
                                <button type="button" class="btn btn-primary p-2 mr-2" data-toggle="modal"
                                    data-target="#modal-lg-add"><i class="fas fa-plus"></i>
                                    เพิ่มผู้รับบริการ (Manual)
                                </button>
                                <button type="button" class="btn btn-primary p-2" data-toggle="modal"
                                    data-target="#modal-lg-add2"><i class="fas fa-plus"></i>
                                    เพิ่มผู้รับบริการ (Card)
                                </button>
                                
                            
                            </div>
                        </div>

                        <?php include("patient_add.php")?>
                        <?php include("patient_add_card.php")?>

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
                                                    <th>HN</th>
                                                    <th>เลขบัตรประชาชน</th>
                                                    <th>Passport</th>
                                                    <th>ชื่อ-นามสกุล</th>
                                                    <th>วัน/เดือน/ปี(เกิด)</th>
                                                    <!-- <th>เพศ</th> -->
                                                    <th>สัญชาติ</th>
                                                    <!-- <th>ที่อยู่</th>
                                                    <th>เบอร์โทรศัพท์</th> -->
                                                    <th>สถานะ</th>
                                                    <th>ตัวเลือก</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                            $sql = "SELECT
                                            status_at.status_at_id,
                                            status_at.status_at_name,
                                            patient.status_at_id,
                                            patient.hn,
                                            patient.patient_id,
                                            patient.id_card,
                                            patient.passport,
                                            patient.address,
                                            patient.phone,
                                            CONCAT(prefix.prefix_name,' ',patient.first_name,' ',patient.last_name) as fullname,
                                            CONCAT(DATE_FORMAT(patient.birth_date, '%d/%m/'),DATE_FORMAT(patient.birth_date, '%Y')) as birth_date,
                                            (YEAR(NOW()) - YEAR(`birth_date`)+543) as age,
                                            sex.sex_name,
                                            nationality.nationality_name
                                           
                                            FROM patient
                                            LEFT JOIN prefix ON patient.prefix_id = prefix.prefix_id
                                            LEFT JOIN sex ON patient.sex_id = sex.sex_id
                                            LEFT JOIN nationality ON patient.nationality_id = nationality.nationality_id
                                            LEFT JOIN status_at ON patient.status_at_id = status_at.status_at_id
                                            ORDER BY patient.patient_id DESC";
                                            $result = mysqli_query($conn, $sql);
                                            $r = 1;
                                    
                                            while($rows = mysqli_fetch_assoc($result)) {
                                                  $status_at_id = $rows['status_at_id'];

                                              
                                            ?>


                                                <tr class="odd">
                                                    <td> <?php echo $r ++  ?></td>
                                                    <td> <?php echo $rows["hn"]; ?></td>
                                                    <td> <?php echo $rows["id_card"]; ?></td>
                                                    <td> <?php echo $rows["passport"]; ?></td>
                                                    <td> <?php echo $rows["fullname"]; ?></td>
                                                    <td> <?php echo $rows["birth_date"] ." (อายุ " . $rows["age"] ." ปี)"; ?>
                                                    </td>
                                                    <!-- <td> <?php echo $rows["sex_name"]; ?></td> -->
                                                    <td> <?php echo $rows["nationality_name"]; ?></td>
                                                    <!-- <td> <?php echo $rows["address"]; ?></td> -->
                                                    <!-- <td> <?php echo $rows["phone"]; ?></td> -->

                                                    <?php if($status_at_id == 1 ){ ?>

                                                    <td> <span class="badge badge-pill badge-success">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>


                                                        <a href="register.php?patient_id=<?php echo $rows["patient_id"]; ?>"
                                                            class="btn btn-info"><i
                                                                class="nav-icon fa fa-address-book"></i>
                                                        </a>

                                                        <a href="patient_edit.php?patient_id=<?php echo $rows["patient_id"]; ?>"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i>
                                                        </a>



                                                        <button type="button" class="btn btn-danger" id="delete_patient"
                                                            data-id="<?php echo $rows['patient_id']; ?>">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>


                                                    </td>

                                                    <?php  } else {  ?>

                                                    <td> <span class="badge badge-pill badge-danger">
                                                            <?php echo $rows["status_at_name"]; ?>
                                                        </span>
                                                    </td>

                                                    <td>



                                                        <button type="button" class="del-btn btn btn-info disabled"><i
                                                                class="nav-icon fa fa-address-book"></i></button>


                                                        <a href="patient_edit.php?patient_id=<?php echo $rows["patient_id"]; ?>"
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