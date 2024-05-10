<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./assets/plugins/moment/moment.min.js"></script>
<script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./assets/plugins/jszip/jszip.min.js"></script>
<script src="./assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="./assets/plugins/select2/js/select2.full.min.js"></script>
<!-- bootstrap-toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Smart-Card -->
<script src="./assets/plugins/smartcard/smartcard.js"></script>

<!-- <script>
function handleValueChange() {
			
			var txtpersonIDCard = document.getElementById('CitizenNo');
			document.getElementById('personIDCard').value=txtpersonIDCard.innerHTML;
			
			var txtprefixNameID = document.getElementById('TitleNameTh');
			document.getElementById('prefixNameID').value=txtprefixNameID.innerHTML;
			
			var txtprefixNameIDEng = document.getElementById('TitleNameEn');
			document.getElementById('prefixNameIDEng').value=txtprefixNameIDEng.innerHTML;
			
			var txtpersonFname = document.getElementById('FirstNameTh');
			document.getElementById('personFname').value=txtpersonFname.innerHTML;
			
			var x=txtpersonLname = document.getElementById('LastNameTh');
			document.getElementById('personLname').value=txtpersonLname.innerHTML;
			
			var txtpersonFnameEng = document.getElementById('FirstNameEn');
			document.getElementById('personFnameEng').value=txtpersonFnameEng.innerHTML;
			
			var txtpersonLnameEng = document.getElementById('LastNameEn');
			document.getElementById('personLnameEng').value=txtpersonLnameEng.innerHTML;
			
			var txtpersonBirthday = document.getElementById('BirthDate');
			document.getElementById('personBirthday').value=txtpersonBirthday.innerHTML;
			
			var txtpersonGender = document.getElementById('Gender');
			document.getElementById('personGender').value=txtpersonGender.innerHTML;
			
			var txtpersonAddress = document.getElementById('HomeNo');
			document.getElementById('personAddress').value=txtpersonAddress.innerHTML;
			
			var txtpersonMoo = document.getElementById('Moo');
			document.getElementById('personMoo').value=txtpersonMoo.innerHTML;
			
			var txtpersonRoad = document.getElementById('Road');
			document.getElementById('personRoad').value=txtpersonRoad.innerHTML;
			
			var txtpersonSoi = document.getElementById('Soi');
			document.getElementById('personSoi').value=txtpersonSoi.innerHTML;
			
			var txtpersonProv = document.getElementById('Province');
			document.getElementById('personProv').value=txtpersonProv.innerHTML;
			
			var txtpersonAmp = document.getElementById('Amphur');
			document.getElementById('personAmp').value=txtpersonAmp.innerHTML;
			
			var txtpersonDis = document.getElementById('Tumbol');
			document.getElementById('personDis').value=txtpersonDis.innerHTML;
			
			swal({
									title: "นำข้อมูลเข้าระบบสำเร็จ", 
									icon: "success",
									button: "ตกลง",
									});
		}
	</script> -->



<!-- Page specific script -->
<script>
$(function() {

    $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "lengthMenu": [
                [ -1 ,10, 20, 50, 100],
                ["All",10, 20, 50, 100]
            ],
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


        $("#example2").DataTable({
            "responsive": true,
            "lengthChange": true,
            "lengthMenu": [
                [ -1 ,10, 20, 50, 100],
                ["All",10, 20, 50, 100]
            ],
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


    
    $('#example3').DataTable({
        "paging": false,
        "lengthChange": true,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": true,
        "responsive": true,
    });
});

$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
})
</script>


<!-- show password -->
<script>
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>


<!-- sweetalert -->
<?php 
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
?>
<script>
Swal.fire({
    icon: '<?php echo $_SESSION['status_code'];?>',
    title: '<?php echo $_SESSION['status'];?>'
})
</script>

<?php 
    unset($_SESSION['status']);
}
?>
</body>


<!-- sweetalert delete_patient -->
<script>
    $(document).on('click', '#delete_patient', function(){ 
                    let id = $(this).data('id')
                    console.log(id);
                    Swal.fire({
                        title: 'ต้องการยกเลิกข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./patient_db.php?patient_id=${id}`;
                        }
                    })
                })
</script>


<!-- sweetalert delete_activity -->
<script>
    $(document).on('click', '#delete_activity', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการยกเลิกข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./setup_activity_db.php?activity_id=${id}`;
                        }
                    })
                })
</script>



<!-- sweetalert delete_package -->
<script>
    $(document).on('click', '#delete_package', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการลบข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./queue_db.php?package_order_id=${id}`;
                        }
                    })
                })
</script>


<!-- sweetalert delete_queue -->
<script>
    $(document).on('click', '#delete_queue', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการลบข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./queue_db.php${id}`;
                        }
                    })
                })
</script>



<!-- sweetalert delete_nationality -->
<script>
    $(document).on('click', '#delete_nationality', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการยกเลิกข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./setup_nationality_db.php?nationality_id=${id}`;
                        }
                    })
                })
</script>


<!-- sweetalert delete_sex -->
<script>
    $(document).on('click', '#delete_sex', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการยกเลิกข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./setup_sex_db.php?sex_id=${id}`;
                        }
                    })
                })
</script>

<!-- sweetalert delete_sex -->
<script>
    $(document).on('click', '#delete_prefix', function(){ 
                    let id = $(this).data('id')
                    // console.log(id);
                    Swal.fire({
                        title: 'ต้องการยกเลิกข้อมูลนี้หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `./setup_prefix_db.php?prefix_id=${id}`;
                        }
                    })
                })
</script>



<!-- date picker -->
<script type="text/javascript">
$(function() {
    $('#datetimepicker11').datetimepicker({
        format: 'DD/MM/YYYY',
        // locale: "th"

    });
});
</script>





</html>