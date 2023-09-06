<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/PHPMailer/PHPMailer/src/Exception.php';
require './vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require './vendor/PHPMailer/PHPMailer/src/SMTP.php';
    function send_mail($from,$to_name, $to, $phone, $branch, $service, $time, $role){
        $mail = new PHPMailer(true);
        $mail->CharSet  = 'UTF-8';
        $mail->Encoding = 'base64';
        
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'phuonglantonhuynh@gmail.com';
            $mail->Password = 'algkykypblagruro'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 
            
            if ($role==1){
                $mail->setFrom($from, 'Admin');
                $mail->addAddress($to, $to_name); 
                $mail->addAddress($to);
                // Content
                $mail->isHTML(true); 
                $str = "Thông báo đăng ký nhận ưu đãi thành công.";
                $mail->Subject = $str;
                $content = 
                '<div>
                    <img src="https://$_SERVER[HTTP_HOST]/images/logo-favicon.jpg" alt="">
                    <p style="font-size: 15px">
                        Xin chào,<span style="font-weight: bold"> '.$to_name.'</span>
                        <br>
                        Cảm ơn chị đã tin tưởng và đăng ký nhận ưu đãi từ thẩm mỹ viện của chúng tôi.
                        <br>
                        <br>
                        Vui lòng kiểm tra lại thông tin chị đã đăng ký:
                    </p>
                    <div id="info">
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Tên</span><span>:</span><span> '.$to_name.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Email</span><span>:</span><span> '.$to.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Số điện thoại</span><span>:</span><span> '.$phone.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Chi nhánh gần chị nhất</span><span>:</span><span> '.$branch.'</span>
                        </p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Dịch vụ chị chọn</span><span>:</span><span> '.$service.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Thời gian chúng tôi có thể liên lạc với chị</span><span>:</span><span>{'. $time.'}</span></p>
                        </div>
                        <div style="font-size: 15px">
                            Chúng tôi sẽ liên lạc với chị sớm nhất để tư vấn chi tiết dịch vụ.
                            <br>
                            Cảm ơn chị đã tin tưởng, chúc chị 1 ngày tốt lành.
                            <br>
                            <br>
                            Admin.
                        </div>
                </div>
                ';
                $mail->Body = $content;
            }
            else {
                $mail->setFrom($from, 'Admin');
                $mail->addAddress($from, "Admin"); 
                $mail->addAddress($from); 
                // Content
                $mail->isHTML(true); 
                $str = "Thông tin người đăng ký nhận ưu đãi.";
                $mail->Subject = $str;
                $content = 
                '<div>
                    <img src="./images/logo-favicon.jpg" alt="">
                    <p style="font-size: 15px">
                        Xin chào,<span style="font-weight: bold">Admin</span>
                        <br>
                        Sau đây là thông tin về người mới đăng ký nhận ưu đãi
                        <br>
                    </p>
                    <div id="info">
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Tên</span><span>:</span><span> '.$to_name.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Email</span><span>:</span><span> '.$to.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Số điện thoại</span><span>:</span><span> '.$phone.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Chi nhánh gần người đăng ký nhất</span><span>:</span><span> '.$branch.'</span>
                        </p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Dịch vụ người đăng ký chọn</span><span>:</span><span> '.$service.'</span></p>
                        <p style="font-size: 15px" ><span style="font-weight: bold" >Thời gian người đăng ký có thể nhận liên lạc</span><span>:</span><span>{'. $time.'}</span></p>
                    </div>
                        <div style="font-size: 15px">
                            Vui lòng liên lạc với người đăng ký sớm để tư vấn chi tiết dịch vụ mà họ đã đăng ký.
                            <br>
                            Hệ thống.
                        </div>
                </div>
                ';
                $mail->Body = $content;
            }
            $mail->send();
        
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>