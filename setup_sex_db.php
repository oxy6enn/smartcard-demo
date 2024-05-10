<?php session_start();?>
<?php include("config/db.php") ?>

<?php 


if(isset($_POST['sex_add'])){


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $sex_name = mysqli_real_escape_string($conn,$_POST["sex_name"]);


    
     // เช็คซ้ำ!
    $sql_check = "SELECT sex_name FROM sex WHERE sex_name = '$sex_name'";
    $result_check = mysqli_query($conn,$sql_check);
    $num_check = mysqli_num_rows($result_check);
    
    
    
    if ($num_check) {
    
        // echo "ข้อมูลซ้ำ!";
        $_SESSION['status_code'] = "error";
        $_SESSION['status'] = "ชื่อเพศซ้ำ!";
        echo '<script>window.history.back();</script>';
    
    
    }else {
    
        // echo "บันทึกข้อมูลเรียบร้อย";
        $sql = "INSERT INTO sex (sex_name) 
        VALUES ('$sex_name')";
        $result = mysqli_query($conn,$sql);
        
        $_SESSION['status_code'] = "success";
        $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
        header('location: setup_sex.php');
       
    
    
}

    } elseif (isset($_POST['sex_edit'])){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();


$sex_id = mysqli_real_escape_string($conn,$_POST["sex_id"]);
$sex_name = mysqli_real_escape_string($conn,$_POST["sex_name"]);
$sex_name_old = mysqli_real_escape_string($conn,$_POST["sex_name_old"]);
$status_at_id = mysqli_real_escape_string($conn,$_POST["status_at_id"]);


//"เช็คเงื่อนไขว่า ใหม่ และ เก่า ตรงกันหรือไม่ ?
if($sex_name == $sex_name_old){ 
 

    // echo "ใหม่ และ เก่า ตรงกัน!";
    $sql =  "UPDATE sex SET 
    sex_name = '$sex_name' ,
    status_at_id = '$status_at_id' 
    WHERE sex_id = $sex_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
    //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
    header('location: setup_sex.php');
       

}else{

   
     // เช็คซ้ำ!
     $sql_check = "SELECT sex_name FROM sex WHERE sex_name = '$sex_name'";
     $result_check = mysqli_query($conn,$sql_check);
     $num_check = mysqli_num_rows($result_check);
     
     
     
     if ($num_check) {
     
         // echo "ข้อมูลซ้ำ!";
         $_SESSION['status_code'] = "error";
         $_SESSION['status'] = "ชื่อเพศซ้ำ!";
         echo '<script>window.history.back();</script>';
     
     
     }else {
     
         // echo "บันทึกข้อมูลเรียบร้อย";
         $sql =  "UPDATE sex SET 
         sex_name = '$sex_name' ,
         status_at_id = '$status_at_id' 
         WHERE sex_id = $sex_id";
         $result = mysqli_query($conn,$sql);
         
         $_SESSION['status_code'] = "success";
         $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
        //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
        header('location: setup_sex.php');
        
     
 }

}



} else if (isset($_GET['sex_id'])) {


// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

    $sex_id = mysqli_real_escape_string($conn,$_GET["sex_id"]);

    $sql = "UPDATE sex SET status_at_id = 2 WHERE sex_id = $sex_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "ยกเลิกข้อมูลเรียบร้อย";
    header('location: setup_sex.php');


} else {

    $_SESSION['status_code'] = "error";
    $_SESSION['status'] = "เกิดข้อผิดพลาดในการส่งข้อมูลจากฟอร์ม";
    echo '<script>window.history.back();</script>';


}