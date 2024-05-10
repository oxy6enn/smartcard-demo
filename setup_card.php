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
                        <li class="breadcrumb-item active">ตั้งค่า Card</li>
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
                                <h3 class="card-title align-self-center">ตั้งค่า Card</h3>
                                <!-- <button type="button" class="btn btn-primary ml-auto p-2" data-toggle="modal"
                                    data-target="#modal-lg-add"><i class="fas fa-plus"></i>
                                    เพิ่มเพศ
                                </button> -->
                            </div>
                        </div>


                        <div class="card-body">
                            <dl>
                                <dt class="mt-2 mb-2 h5">1.ดาวน์โหลดไฟล์</dt>
                                <a href="assets/frontagen.rar"><i class="fa fa-download mb-2" aria-hidden="true"></i> frontagen.rar</a>
                                <hr>
                                <dt class="mt-2 mb-2 h5">2.Run ไฟล์ frontagent.exe </dt>
                                <img src="assets/img/fronagen-2.jpg" width = 500px; alt=""><br>
                                <img src="assets/img/fronagen-3.jpg" width = 200px; alt="">
                                <!-- <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                <dd>Donec id elit non mi porta gravida at eget metus.</dd> -->
                                <hr>
                                <dt class="mt-2 mb-2 h5">3.ติดตั้ง Extension "Cross Domain - CORS" บน Google Chome</dt> 
                                <a href="https://chromewebstore.google.com/detail/mjhpgnbimicffchbodmgfnemoghjakai?hl=th&utm_source=ext_sidebar" target="_blank" class="mt-2 mb-2"><i class="fa fa-link " aria-hidden="true"></i> Cross Domain - CORS</a><br><br>
                                <img src="assets/img/cross-domain- CORS-1.png" width = 1000px; alt="">
                                <hr>
                                <!-- <dd>Etiam porta sem malesuada magna mollis euismod.</dd> -->
                                <dt class="mt-2 mb-2 h5">4.เปิดลิงค์เพื่ออนุญาตให้เชื่อมต่อกับบัตรประชาชน</dt>
                                <a href="https://localhost:8182/thaiid/read.jsonp?callback=callback&section1=true&section2a=true&section2c=true" target="_blank" class="mt-2 mb-2"><i class="fa fa-link" aria-hidden="true"></i> localhost:8182/thaiid/read.jsonp</a><br><br>
                                <img src="assets/img/cross-domain- CORS-2.jpg" width = 1000px; alt="">
                                <hr>
                            </dl>
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