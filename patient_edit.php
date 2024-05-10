<?php session_start(); ?>
<?php include("componanted/header.php"); ?>
<?php include("componanted/sidebar.php"); ?>
<?php include("config/db.php"); ?>


<?php 

if(isset($_GET['patient_id'])){


    $patient_id = mysqli_real_escape_string($conn,$_GET["patient_id"]);

    // echo "<pre>";
    // print_r($patient_id);
    // echo "</pre>";
    // exit();

    $sql1 = "SELECT patient_id,hn,id_card,passport,prefix_id,first_name,last_name,birth_date, 
    birth_date,sex_id,nationality_id,address,phone,status_at_id
    FROM patient WHERE patient_id = '$patient_id'";
    $result1 = mysqli_query($conn,$sql1);
    $rows1 = mysqli_fetch_array($result1);
    $prefix_id_rows1 = $rows1["prefix_id"];
    $sex_id_rows1 = $rows1["sex_id"];
    $nationality_id_rows1 = $rows1["nationality_id"];
    $status_at_id_rows1 = $rows1["status_at_id"];

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
                        <li class="breadcrumb-item active">แก้ไขข้อมูลผู้รับบริการ</li>
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
                                <h3 class="card-title align-self-center">แก้ไขข้อมูลผู้รับบริการ</h3>
                                <!-- <button type="button" class="btn btn-primary ml-auto p-2" data-toggle="modal"
                                    data-target="#modal-lg"><i class="fas fa-plus"></i>
                                    เพิ่มสมาชิก
                                </button> -->
                            </div>
                        </div>

                        <form action="patient_db.php" method="POST">
                            <input type="hidden" name="patient_id" value="<?php echo $rows1['patient_id']; ?>">
                            <input type="hidden" name="id_card_old" value="<?php echo $rows1['id_card']; ?>">
                            <input type="hidden" name="passport_old" value="<?php echo $rows1['passport']; ?>">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="hn">HN</label>
                                                    <input type="text" class="form-control" value="<?php echo $rows1['hn']; ?>" id="hn" name="hn"
                                                        placeholder="HN" maxlength="7">
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_card">เลขบัตรประชาชน</label>
                                                    <input type="text" class="form-control" value="<?php echo $rows1['id_card']; ?>" id="id_card" name="id_card"
                                                        placeholder="เลขบัตรประชาชน" maxlength="13">
                                                </div>

                                                <div class="form-group">
                                                    <label for="passport">Passport</label>
                                                    <input type="text" class="form-control" value="<?php echo $rows1['passport']?>" id="passport"
                                                        name="passport" placeholder="Passport" maxlength="15" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="prefix_id">คำนำหน้า</label>
                                                    <select class="form-control select2bs4" id="prefix_id"
                                                        name="prefix_id" style="width: 100%;" required>
                                                        <option value="">-- กรุณาเลือก --</option>
                                                        <?php 
                                                $sql = "SELECT prefix_id, prefix_name FROM prefix";
                                                $result = mysqli_query($conn, $sql);
                                                while($rows2 = mysqli_fetch_array($result)) { 
                                                    $prefix_id_rows2 = $rows2['prefix_id'] ?>
                                                        <option value="<?php echo $rows2['prefix_id'] ?>" 
                                                        <?php if ($prefix_id_rows2 == $prefix_id_rows1) {  echo "selected=selected";  } ?>>
                                                            <?php echo $rows2["prefix_name"]; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="first_name">ชื่อ</label>
                                                    <input type="text" class="form-control" value="<?php echo $rows1['first_name']; ?>" id="first_name"
                                                        name="first_name" placeholder="ชื่อ" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name">นามสกุล</label>
                                                    <input type="text" class="form-control" value="<?php echo $rows1['last_name']; ?>" id="last_name"
                                                        name="last_name" placeholder="นามสกุล" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="modal-body">


                                            <!-- <div class="form-group">
                                                <label for="birth_date">วัน/เดือน/ปี(เกิด)</label>
                                                <div class="input-group date" id="datetimepicker11"
                                                    data-target-input="nearest">

                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#datetimepicker11" name="birth_date"  value="<?php echo $rows1['birth_date'] ?>"/>
                                                    <div class="input-group-append" data-target="#datetimepicker11"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                        
                                                <label for="birth_date">วัน/เดือน/ปี(เกิด)</label> 
                                                <!-- <input type="text" class="form-control" value="<?php echo $rows1['birth_date']; ?>"> -->
                                                <input type="date" class="form-control " id="birth_date "
                                                    name="birth_date" required value="<?php echo date('Y-m-d', strtotime($rows1['birth_date'])) ?>">
                                            </div>



                                            <div class="form-group">
                                                <label for="sex">เพศ</label>
                                                <select class="form-control select2bs4 " id="sex_id" name="sex_id"
                                                    style="width: 100%;" required>
                                                    <option value="">-- กรุณาเลือก --</option>
                                                    <?php 
                                                $sql = "SELECT sex_id, sex_name FROM sex";
                                                $result = mysqli_query($conn, $sql);
                                                while($rows3 = mysqli_fetch_array($result)) { 
                                                    $sex_id_rows3 = $rows3['sex_id'];?>
                                                    <option value="<?php echo $rows3['sex_id'] ?>" 
                                                    <?php if($sex_id_rows3 == $sex_id_rows1) { echo "selected=selected";} ?>>
                                                        <?php echo $rows3["sex_name"]; ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nationality">สัญชาติ</label>
                                                <select class="form-control select2bs4 " id="nationality_id"
                                                    name="nationality_id" style="width: 100%;" required>
                                                    <option value="">-- กรุณาเลือก --</option>
                                                    <?php 
                                                $sql = "SELECT nationality_id, nationality_name FROM nationality";
                                                $result = mysqli_query($conn, $sql);
                                                while($rows4 = mysqli_fetch_array($result)) { 
                                                    $nationality_id_rows4 = $rows4['nationality_id'];?>
                                                    <option value="<?php echo $rows4['nationality_id'] ?>"
                                                    <?php if($nationality_id_rows4 == $nationality_id_rows1){ echo "selected=selected"; }?>>
                                                        <?php echo $rows4["nationality_name"]; ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">ที่อยู่</label>
                                                <textarea class="form-control" rows="3"  id="address" name="address"
                                                    placeholder="ที่อยู่" required><?php echo $rows1['address']; ?></textarea>
                                            </div>


                                            <div class="form-group">
                                                <label for="phone">เบอรโทรศัพท์</label>
                                                <input type="text" class="form-control" value="<?php echo $rows1['phone']; ?>" id="phone" name="phone"
                                                    placeholder="เบอร์โทรศัพท์" maxlength="10" required>
                                            </div>

                                            <div class="form-group">
                                                    <label for="status_at_id">สถานะ</label>
                                                    <select class="form-control select2bs4" id="status_at_id"
                                                        name="status_at_id" style="width: 100%;" required>
                                                        <?php 
                                                        $sql = "SELECT status_at_id, status_at_name FROM status_at";
                                                        $result = mysqli_query($conn, $sql);
                                                        while($rows5 = mysqli_fetch_array($result)) { 
                                                            $status_at_id_rows5 = $rows5['status_at_id'];?>
                                                            <option value="<?php echo $rows5['status_at_id'] ?>"
                                                            <?php if($status_at_id_rows5 == $status_at_id_rows1){ echo "selected=selected"; }?>>
                                                                <?php echo $rows5["status_at_name"]; ?> </option>
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
                        <a href="patient.php"><button type="button" class="btn btn-default ">ยกเลิก</button></a>
                        <button type="submit" name="patient_edit"
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
    header('location: member.php');

 } ?>



<?php include("componanted/footer.php"); ?>