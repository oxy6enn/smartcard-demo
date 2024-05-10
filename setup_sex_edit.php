<?php session_start(); ?>
<?php include("componanted/header.php"); ?>
<?php include("componanted/sidebar.php"); ?>
<?php include("config/db.php"); ?>


<?php 

if(isset($_GET['sex_id'])){

    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";
    // exit();

    $sex_id = mysqli_real_escape_string($conn,$_GET["sex_id"]); 

    $sql1 = "SELECT 
    sex_id, 
    sex_name,
    status_at.status_at_id,
    status_at.status_at_name
    FROM sex 
    LEFT JOIN status_at ON sex.status_at_id = status_at.status_at_id
    WHERE sex_id = '$sex_id'";

    $result1 = mysqli_query($conn,$sql1);
    $rows1 = mysqli_fetch_array($result1);

?>


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
                        <li class="breadcrumb-item active">แก้ไขเพศ</li>
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
                                <h3 class="card-title align-self-center">แก้ไขเพศ</h3>
                                <!-- <button type="button" class="btn btn-primary ml-auto p-2" data-toggle="modal"
                                    data-target="#modal-lg"><i class="fas fa-plus"></i>
                                    เพิ่มสมาชิก
                                </button> -->
                            </div>
                        </div>

                        <form action="setup_sex_db.php" method="POST">
                            <input type="hidden" name="sex_id" value="<?php echo $rows1['sex_id']; ?>">
                            <input type="hidden" name="sex_name_old" value="<?php echo $rows1['sex_name']; ?>">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="sex_name">ชื่อเพศ</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $rows1['sex_name']; ?>"
                                                        id="sex_name" name="sex_name"
                                                        placeholder="ชื่อเพศ" required>
                                                </div>


                                                <div class="form-group">
                                                <label for="status_at_id">สถานะ</label>
                                                <select class="form-control select2bs4" id="status_at_id"
                                                    name="status_at_id" style="width: 100%;" required>
                                                    <option value="">-- กรุณาเลือก --</option>
                                                    <?php 
                                                $sql2 = "SELECT status_at_id , status_at_name  FROM status_at";
                                                $result2 = mysqli_query($conn, $sql2);
                                                while($rows2 = mysqli_fetch_array($result2)) { 
                                                    $status_at_id_rows2 = $rows2['status_at_id']; 
                                                    $status_at_id_rows1 = $rows1['status_at_id']; ?>
                                                    <option value="<?php echo $rows2['status_at_id'] ?>"
                                                        <?php if ($status_at_id_rows1 == $status_at_id_rows2) {  echo "selected=selected";  } ?>>
                                                        <?php echo $rows2["status_at_name"]; ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer ">
                                <a href="setup_sex.php"><button type="button" class="btn btn-default ">ยกเลิก</button></a>
                                <button type="submit" name="sex_edit"
                                    class="btn btn-primary justify-content-end">บันทึก</button>

                            </div>
                        </form>
                    </div>
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

<?php }else{  

    $_SESSION['status_code'] = "error";
    $_SESSION['status'] = "เกิดข้อผิดพลาดในการส่งข้อมูลจากฟอร์ม";
    header('location: setup_sex.php');

 } ?>



<?php include("componanted/footer.php"); ?>