<?php session_start();?>
<?php include("config/db.php") ?>

<?php 


if(isset($_POST['prefix_add'])){


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $prefix_name = mysqli_real_escape_string($conn,$_POST["prefix_name"]);


    
     // เช็คซ้ำ!
    $sql_check = "SELECT prefix_name FROM prefix WHERE prefix_name = '$prefix_name'";
    $result_check = mysqli_query($conn,$sql_check);
    $num_check = mysqli_num_rows($result_check);
    
    
    
    if ($num_check) {
    
        // echo "ข้อมูลซ้ำ!";
        $_SESSION['status_code'] = "error";
        $_SESSION['status'] = "ชื่อคำนำหน้าซ้ำ!";
        echo '<script>window.history.back();</script>';
    
    
    }else {
    
        // echo "บันทึกข้อมูลเรียบร้อย";
        $sql = "INSERT INTO prefix (prefix_name) 
        VALUES ('$prefix_name')";
        $result = mysqli_query($conn,$sql);
        
        $_SESSION['status_code'] = "success";
        $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
        header('location: setup_prefix.php');
       
    
    
}

    } elseif (isset($_POST['prefix_edit'])){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();


$prefix_id = mysqli_real_escape_string($conn,$_POST["prefix_id"]);
$prefix_name = mysqli_real_escape_string($conn,$_POST["prefix_name"]);
$prefix_name_old = mysqli_real_escape_string($conn,$_POST["prefix_name_old"]);
$status_at_id = mysqli_real_escape_string($conn,$_POST["status_at_id"]);


//"เช็คเงื่อนไขว่า ใหม่ และ เก่า ตรงกันหรือไม่ ?
if($prefix_name == $prefix_name_old){ 
 

    // echo "ใหม่ และ เก่า ตรงกัน!";
    $sql =  "UPDATE prefix SET 
    prefix_name = '$prefix_name' ,
    status_at_id = '$status_at_id' 
    WHERE prefix_id = $prefix_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
    //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
    header('location: setup_prefix.php');
       

}else{

   
     // เช็คซ้ำ!
     $sql_check = "SELECT prefix_name FROM prefix WHERE prefix_name = '$prefix_name'";
     $result_check = mysqli_query($conn,$sql_check);
     $num_check = mysqli_num_rows($result_check);
     
     
     
     if ($num_check) {
     
         // echo "ข้อมูลซ้ำ!";
         $_SESSION['status_code'] = "error";
         $_SESSION['status'] = "ชื่อคำนำหน้าซ้ำ!";
         echo '<script>window.history.back();</script>';
     
     
     }else {
     
         // echo "บันทึกข้อมูลเรียบร้อย";
         $sql =  "UPDATE prefix SET 
         prefix_name = '$prefix_name' ,
         status_at_id = '$status_at_id' 
         WHERE prefix_id = $prefix_id";
         $result = mysqli_query($conn,$sql);
         
         $_SESSION['status_code'] = "success";
         $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
        //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
        header('location: setup_prefix.php');
        
     
 }

}



} else if (isset($_GET['prefix_id'])) {


// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

    $prefix_id = mysqli_real_escape_string($conn,$_GET["prefix_id"]);

    $sql = "UPDATE prefix SET status_at_id = 2 WHERE prefix_id = $prefix_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "ยกเลิกข้อมูลเรียบร้อย";
    header('location: setup_prefix.php');


} else {

    $_SESSION['status_code'] = "error";
    $_SESSION['status'] = "เกิดข้อผิดพลาดในการส่งข้อมูลจากฟอร์ม";
    echo '<script>window.history.back();</script>';


}