<?php

use PHPMailer\PHPMailer\PHPMailer;

    function insert_taikhoan($name,$pass,$email,$adress,$phone)
    {
        $sql = "INSERT into `taikhoan` (`user` , `pass`, `email`, `address`, `tel` ) 
        values ('$name' ,'$pass', '$email','$adress', '$phone')";
        pdo_execute($sql);

    }


    function dangnhap($email, $pass)
    {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' and pass = '$pass'";
        $taikhoan = pdo_query_one($sql);
        if($taikhoan != false) {
            
            $_SESSION['email'] = $email;
            if($taikhoan['role'] == 0){
                header('Location: index.php');
            }
            if($taikhoan['role'] == 1){
                header('Location: admin/index.php');
            }
            // header('location: index.php');
            return  "
            <div class='alert alert-success mt-3' role='alert'>
                Thông tin tài khoản dung!
            </div>
            ";
            // header('location: index.php');
        }else{
            return "
            <div class='alert alert-danger mt-3' role='alert'>
                Thông tin tài khoản sai!
            </div>
            ";
        }
        
    }


    function dangxuat(){
        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
            header('location:index.php');
        }
    }


    function dangxuat_admin(){
        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
            header('location:../index.php');
        }
    }


    function search_id_taikhoan($email){
        $sql = "SELECT id FROM taikhoan where email = '$email'";
        $result = pdo_query_one($sql);
        extract($result);
        return $id;
    }


    function sendMail($email) {
        $sql="SELECT * FROM taikhoan WHERE email = '$email'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            
            return "<div class='alert alert-success mt-3' role='alert'>
                        Gửi email thành công
                    </div>";
        } else {
            return "<div class='alert alert-danger mt-3' role='alert'>
                        Email của bạn nhập không có trong hệ thống
                    </div>";
        }
    }

    
    function sendMailPass($email,$username,$pass ){
        include 'PHPMailer/src/Exception.php';
        include 'PHPMailer/src/PHPMailer.php';
        include 'PHPMailer/src/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output 
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '17323111bef555';                     //SMTP username
            $mail->Password   = '17dda5c25f1820';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('admin@example.com', 'Du An Mau');
            $mail->addAddress($email, $username);     //Add a recipient            //Name is optional

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'user forgot password'; 
            $mail->Body    = "Your password is : $pass";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            }

            function thong_ke_khach_hang(){
                $sql ="SELECT COUNT(id) FROM taikhoan";
                $result = pdo_query_one($sql);
                return $result;
            }

?>