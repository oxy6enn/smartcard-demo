<?php session_start();?>
<?php include("config/db.php") ?>

<?php 


if(isset($_POST['nationality_add'])){


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $nationality_name = mysqli_real_escape_string($conn,$_POST["nationality_name"]);



    
     // เช็คซ้ำ!
    $sql_check = "SELECT nationality_name FROM nationality WHERE nationality_name = '$nationality_name'";
    $result_check = mysqli_query($conn,$sql_check);
    $num_check = mysqli_num_rows($result_check);
    
    
    
    if ($num_check) {
    
        // echo "ข้อมูลซ้ำ!";
        $_SESSION['status_code'] = "error";
        $_SESSION['status'] = "ชื่อสัญชาติซ้ำ!";
        echo '<script>window.history.back();</script>';
    
    
    }else {
    
        // echo "บันทึกข้อมูลเรียบร้อย";
        $sql = "INSERT INTO nationality (nationality_name) 
        VALUES ('$nationality_name')";
        $result = mysqli_query($conn,$sql);
        
        $_SESSION['status_code'] = "success";
        $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
        header('location: setup_nationality.php');
       
    
    
}

    } elseif (isset($_POST['nationality_edit'])){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();


$nationality_id = mysqli_real_escape_string($conn,$_POST["nationality_id"]);
$nationality_name = mysqli_real_escape_string($conn,$_POST["nationality_name"]);
$nationality_name_old = mysqli_real_escape_string($conn,$_POST["nationality_name_old"]);
$status_at_id = mysqli_real_escape_string($conn,$_POST["status_at_id"]);


//"เช็คเงื่อนไขว่า ใหม่ และ เก่า ตรงกันหรือไม่ ?
if($nationality_name == $nationality_name_old){ 
 

    // echo "ใหม่ และ เก่า ตรงกัน!";
    $sql =  "UPDATE nationality SET 
    nationality_name = '$nationality_name' ,
    status_at_id = '$status_at_id' 
    WHERE nationality_id = $nationality_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
    //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
    header('location: setup_nationality.php');
       

}else{

   
     // เช็คซ้ำ!
     $sql_check = "SELECT nationality_name FROM nationality WHERE nationality_name = '$nationality_name'";
     $result_check = mysqli_query($conn,$sql_check);
     $num_check = mysqli_num_rows($result_check);
     
     
     
     if ($num_check) {
     
         // echo "ข้อมูลซ้ำ!";
         $_SESSION['status_code'] = "error";
         $_SESSION['status'] = "ชื่อสัญชาติซ้ำ!";
         echo '<script>window.history.back();</script>';
     
     
     }else {
     
         // echo "บันทึกข้อมูลเรียบร้อย";
         $sql =  "UPDATE nationality SET 
         nationality_name = '$nationality_name' ,
         status_at_id = '$status_at_id' 
         WHERE nationality_id = $nationality_id";
         $result = mysqli_query($conn,$sql);
         
         $_SESSION['status_code'] = "success";
         $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
        //  header("location: setup_nationality_edit.php?nationality_id=".$nationality_id);
        header('location: setup_nationality.php');
        
     
 }

}



} else if (isset($_GET['nationality_id'])) {


// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

    $nationality_id = mysqli_real_escape_string($conn,$_GET["nationality_id"]);

    $sql = "UPDATE nationality SET status_at_id = 2 WHERE nationality_id = $nationality_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "ยกเลิกข้อมูลเรียบร้อย";
    header('location: setup_nationality.php');


} else {

    $_SESSION['status_code'] = "error";
    $_SESSION['status'] = "เกิดข้อผิดพลาดในการส่งข้อมูลจากฟอร์ม";
    echo '<script>window.history.back();</script>';


}