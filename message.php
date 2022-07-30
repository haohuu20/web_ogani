<?php 
    require_once "connect.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$sql = "INSERT INTO lienhe (tenlienhe, emaillienhe, noidung) VALUES ('".$name."', '".$email."', '".$message."')";
    if ($ketnoi->query($sql) === TRUE) {
        //header("location:contact.php");
        echo"
            <script type='text/javascript'>
                window.alert('Tin nhắn đã gửi thành công!');
                window.location.href='contact.php';
            </script>
        ";
;    } else {
        // echo "Error: " . $sql . "<br>" . $ketnoi->error;
        echo"
            <script type='text/javascript'>
                window.alert('Chưa gửi được tin nhắn, hãy kiểm tra lại nội dung gửi!');
                window.location.href='contact.php';
            </script>
        ";
    }
?>