<?php session_start(); ?>
<?php include("config/db.php"); ?>

<?php 


if(isset($_POST['patient_add'])){


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // exit();
//    echo  $birth_date = date("Y-m-d", strtotime($_POST["birth_date"])); 
//    echo '<br>';
//    echo  $birth_date = mysqli_real_escape_string($conn,$_POST["birth_date"]);
    // exit();
    
    $hn = mysqli_real_escape_string($conn,$_POST["hn"]);
    $id_card = mysqli_real_escape_string($conn,$_POST["id_card"]);
    $passport = mysqli_real_escape_string($conn,$_POST["passport"]);
    $prefix_id = mysqli_real_escape_string($conn,$_POST["prefix_id"]);
    $first_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $birth_date = mysqli_real_escape_string($conn,$_POST["birth_date"]);
    $sex_id = mysqli_real_escape_string($conn,$_POST["sex_id"]);
    $nationality_id = mysqli_real_escape_string($conn,$_POST["nationality_id"]);
    $address = mysqli_real_escape_string($conn,$_POST["address"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);



    if($nationality_id == 1){

        // ถ้าเป็นคนไทย เช็คเลขบัตรประชาชน ซ้ำ!
        $sql_check = "SELECT id_card,nationality_id FROM patient WHERE id_card = '$id_card' AND nationality_id = 1";
        $result_check = mysqli_query($conn,$sql_check);
        $num_check = mysqli_num_rows($result_check);



        if ($num_check) {

            // echo "ข้อมูลผู้รับบริการซ้ำ!";
            $_SESSION['status_code'] = "error";
            $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
            echo '<script>window.history.back();</script>';


        }else {

            // echo "บันทึกข้อมูลเรียบร้อย";
            $sql = "INSERT INTO patient (hn,id_card, passport, prefix_id, first_name,last_name,birth_date,sex_id,nationality_id,address,phone) 
            VALUES ('$hn','$id_card','$passport','$prefix_id','$first_name','$last_name','$birth_date','$sex_id','$nationality_id','$address','$phone')";
            $result = mysqli_query($conn,$sql);
            
            $_SESSION['status_code'] = "success";
            $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
            header('location: patient.php');
        
}

    }else{

        // ถ้าเป็นต่างชาติ เช็ค Passport ซ้ำ!
        $sql_check = "SELECT passport FROM patient WHERE passport = '$passport' ";
        $result_check = mysqli_query($conn,$sql_check);
        $num_check = mysqli_num_rows($result_check);



        if ($num_check) {

            // echo "ข้อมูลผู้รับบริการซ้ำ!";
            $_SESSION['status_code'] = "error";
            $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
            echo '<script>window.history.back();</script>';


        }else {

            // echo "บันทึกข้อมูลเรียบร้อย";
            $sql = "INSERT INTO patient (hn,id_card, passport, prefix_id, first_name,last_name,birth_date,sex_id,nationality_id,address,phone) 
            VALUES ('$hn','$id_card','$passport','$prefix_id','$first_name','$last_name','$birth_date','$sex_id','$nationality_id','$address','$phone')";
            $result = mysqli_query($conn,$sql);
            
            $_SESSION['status_code'] = "success";
            $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
            header('location: patient.php');
        }
  

    }

     

    } elseif (isset($_POST['patient_add_card'])){


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

    $hn = mysqli_real_escape_string($conn,$_POST["hn"]);
    $id_card = mysqli_real_escape_string($conn,$_POST["id_card"]);
    $passport = mysqli_real_escape_string($conn,$_POST["passport"]);
    $prefix_name = mysqli_real_escape_string($conn,$_POST["prefix_name"]);
    $first_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $birth_date = date("Y-m-d", strtotime($_POST["birth_date"])); 
    $sex_id = mysqli_real_escape_string($conn,$_POST["sex_id"]);
    $nationality_id = mysqli_real_escape_string($conn,$_POST["nationality_id"]);
    $home_no = mysqli_real_escape_string($conn,$_POST["home_no"]);
    $soi = mysqli_real_escape_string($conn,$_POST["soi"]);
    $road = mysqli_real_escape_string($conn,$_POST["road"]);
    $tumbol = mysqli_real_escape_string($conn,$_POST["tumbol"]);
    $amphur = mysqli_real_escape_string($conn,$_POST["amphur"]);
    $province = mysqli_real_escape_string($conn,$_POST["province"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    $address = $home_no ." ซ.".$soi." ถ.".$road." ต.".$tumbol." อ.".$amphur." จ.".$province;


    $sql_check = "SELECT prefix_id , prefix_name FROM prefix WHERE prefix_name = '$prefix_name' ";
    $result_check = mysqli_query($conn,$sql_check);
    $check = mysqli_fetch_assoc($result_check);
    $check_prefix_id_num = mysqli_num_rows($result_check);


       

    if($check_prefix_id_num){
       $check_prefix_id = $check['prefix_id'];

        if($nationality_id == 1){

            // ถ้าเป็นคนไทย เช็คเลขบัตรประชาชน ซ้ำ!
            $sql_check = "SELECT id_card, nationality_id FROM patient WHERE id_card = '$id_card' AND nationality_id = 1 ";
            $result_check = mysqli_query($conn,$sql_check);
            $num_check = mysqli_num_rows($result_check);
        
        
        
            if ($num_check) {
        
            
                // echo "ข้อมูลผู้รับบริการซ้ำ!";
                $_SESSION['status_code'] = "error";
                $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
                echo '<script>window.history.back();</script>';
        
        
            }else {
        
                // echo "บันทึกข้อมูลเรียบร้อย";
                $sql = "INSERT INTO patient (hn,id_card, passport, prefix_id, first_name,last_name,birth_date,sex_id,nationality_id,address,phone) 
                VALUES ('$hn','$id_card','$passport','$check_prefix_id','$first_name','$last_name','$birth_date','$sex_id','$nationality_id','$address','$phone')";
                $result = mysqli_query($conn,$sql);
                
                $_SESSION['status_code'] = "success";
                $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
                header('location: patient.php');
            
        }
        
        }else{
        
            // ถ้าเป็นต่างชาติ เช็ค Passport ซ้ำ!
            $sql_check = "SELECT passport FROM patient WHERE passport = '$passport' ";
            $result_check = mysqli_query($conn,$sql_check);
            $num_check = mysqli_num_rows($result_check);
        
        
        
            if ($num_check) {
        
                // echo "ข้อมูลผู้รับบริการซ้ำ!";
                $_SESSION['status_code'] = "error";
                $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
                header('location: patient.php');
                // echo '<script>window.history.back();</script>';
        
        
            }else {
        
                // echo "บันทึกข้อมูลเรียบร้อย";
                $sql = "INSERT INTO patient (hn,id_card, passport, prefix_id, first_name,last_name,birth_date,sex_id,nationality_id,address,phone) 
                VALUES ('$hn','$id_card','$passport','$check_prefix_id','$first_name','$last_name','$birth_date','$sex_id','$nationality_id','$address','$phone')";
                $result = mysqli_query($conn,$sql);
                
                $_SESSION['status_code'] = "success";
                $_SESSION['status'] = "บันทึกข้อมูลเรียบร้อย";
                header('location: patient.php');
            }
        
        
        }
    


    }else{

            // echo "ข้อมูลไม่มีคำนำหน้า!";
            $_SESSION['status_code'] = "error";
            $_SESSION['status'] = "ไม่มีคำนำหน้า"."(".$prefix_name.")";
            echo '<script>window.history.back();</script>';

    }
    



    }elseif (isset($_POST['patient_edit'])){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();


        $hn = mysqli_real_escape_string($conn,$_POST["hn"]);
        $patient_id = mysqli_real_escape_string($conn,$_POST["patient_id"]);
        $id_card_old = mysqli_real_escape_string($conn,$_POST["id_card_old"]);
        $id_card = mysqli_real_escape_string($conn,$_POST["id_card"]);
        $passport_old = mysqli_real_escape_string($conn,$_POST["passport_old"]);
        $passport = mysqli_real_escape_string($conn,$_POST["passport"]);
        $prefix_id = mysqli_real_escape_string($conn,$_POST["prefix_id"]);
        $first_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn,$_POST["last_name"]);
        $birth_date = mysqli_real_escape_string($conn,$_POST["birth_date"]);
        $sex_id = mysqli_real_escape_string($conn,$_POST["sex_id"]);
        $nationality_id = mysqli_real_escape_string($conn,$_POST["nationality_id"]);
        $address = mysqli_real_escape_string($conn,$_POST["address"]);
        $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
        $status_at_id = mysqli_real_escape_string($conn,$_POST["status_at_id"]);


        if($nationality_id == 1){


                    //"เช็คเงื่อนไขว่า id_card  ใหม่ และ เก่า ตรงกันหรือไม่ ?
                    if($id_card == $id_card_old){ 
                    

                        // echo "id_card ใหม่ และ เก่า ตรงกัน!";
                        $sql =  "UPDATE patient SET 
                        hn = '$hn' , 
                        id_card = '$id_card' , 
                        passport = '$passport' , 
                        prefix_id = '$prefix_id' , 
                        first_name = '$first_name' , 
                        last_name = '$last_name' , 
                        birth_date = '$birth_date',
                        sex_id = '$sex_id' ,
                        nationality_id = '$nationality_id' ,
                        address = '$address' ,
                        phone = '$phone',
                        status_at_id = '$status_at_id'
                        WHERE patient_id = $patient_id";
                        $result = mysqli_query($conn,$sql);

                        $_SESSION['status_code'] = "success";
                        $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
                        // header("location: patient_edit.php?patient_id=".$patient_id);
                        header('location: patient.php');

                        

                    }else{
                        

                            $sql_check = "SELECT id_card,nationality_id FROM patient WHERE id_card = '$id_card' AND nationality_id = 1";
                            $result_check = mysqli_query($conn,$sql_check);
                            $num_check = mysqli_num_rows($result_check);


                        //"เช็คเงื่อนไขว่า ข้อมูลผู้รับบริการซ้ำกันหรือไม่?
                        if($num_check){ 


                                // echo "ข้อมูลผู้รับบริการซ้ำ!";
                                $_SESSION['status_code'] = "error";
                                $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
                                echo '<script>window.history.back();</script>';

                        }else{


                            // echo "บันทึกข้อมูลเรียบร้อย";


                            $sql =  "UPDATE patient SET 
                            hn = '$hn' , 
                            id_card = '$id_card' , 
                            passport = '$passport' , 
                            prefix_id = '$prefix_id' , 
                            first_name = '$first_name' , 
                            last_name = '$last_name' , 
                            birth_date = '$birth_date',
                            sex_id = '$sex_id' ,
                            nationality_id = '$nationality_id' ,
                            address = '$address' ,
                            phone = '$phone',
                            status_at_id = '$status_at_id'
                            WHERE patient_id = $patient_id";
                            $result = mysqli_query($conn,$sql);
                        
                            $_SESSION['status_code'] = "success";
                            $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
                            // header("location: patient_edit.php?patient_id=".$patient_id);
                            header('location: patient.php');

                            
                        

                        }   

                    }


        }else{


                    //"เช็คเงื่อนไขว่า passport ใหม่ และ เก่า ตรงกันหรือไม่ ?
                    if($passport == $passport_old){ 
                    
                        // echo "passport ใหม่ และ เก่า ตรงกัน!";
                        $sql =  "UPDATE patient SET 
                        hn = '$hn' , 
                        id_card = '$id_card' , 
                        passport = '$passport' , 
                        prefix_id = '$prefix_id' , 
                        first_name = '$first_name' , 
                        last_name = '$last_name' , 
                        birth_date = '$birth_date',
                        sex_id = '$sex_id' ,
                        nationality_id = '$nationality_id' ,
                        address = '$address' ,
                        phone = '$phone',
                        status_at_id = '$status_at_id'
                        WHERE patient_id = $patient_id";
                        $result = mysqli_query($conn,$sql);

                        $_SESSION['status_code'] = "success";
                        $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
                        // header("location: patient_edit.php?patient_id=".$patient_id);
                        header('location: patient.php');

                        

                    }else{
                        

                            $sql_check = "SELECT passport FROM patient WHERE passport = '$passport'";
                            $result_check = mysqli_query($conn,$sql_check);
                            $num_check = mysqli_num_rows($result_check);


                        //"เช็คเงื่อนไขว่า ข้อมูลผู้รับบริการซ้ำกันหรือไม่?
                        if($num_check){ 


                                // echo "ข้อมูลผู้รับบริการซ้ำ!";
                                $_SESSION['status_code'] = "error";
                                $_SESSION['status'] = "ข้อมูลผู้รับบริการซ้ำ!";
                                echo '<script>window.history.back();</script>';

                        }else{


                            // echo "บันทึกข้อมูลเรียบร้อย";


                            $sql =  "UPDATE patient SET 
                            hn = '$hn' , 
                            id_card = '$id_card' , 
                            passport = '$passport' , 
                            prefix_id = '$prefix_id' , 
                            first_name = '$first_name' , 
                            last_name = '$last_name' , 
                            birth_date = '$birth_date',
                            sex_id = '$sex_id' ,
                            nationality_id = '$nationality_id' ,
                            address = '$address' ,
                            phone = '$phone',
                            status_at_id = '$status_at_id'
                            WHERE patient_id = $patient_id";
                            $result = mysqli_query($conn,$sql);
                        
                            $_SESSION['status_code'] = "success";
                            $_SESSION['status'] = "แก้ไขข้อมูลเรียบร้อย";
                            // header("location: patient_edit.php?patient_id=".$patient_id);
                            header('location: patient.php');

                            
                        

                        }   

                    }



        }




} else if (isset($_GET['patient_id'])){


// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

$patient_id = mysqli_real_escape_string($conn,$_GET["patient_id"]);

    $sql = "UPDATE patient SET status_at_id = 2 WHERE patient_id = $patient_id";
    $result = mysqli_query($conn,$sql);

    $_SESSION['status_code'] = "success";
    $_SESSION['status'] = "ยกเลิกข้อมูลเรียบร้อย";
    header('location: patient.php');


}