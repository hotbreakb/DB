<?php
$con = mysqli_connect("localhost", "cookUser", "1234", "") or die("MySQL 접속 실패!!");

$sql = "CREATE DATABASE ecommerce";
$ret = mysqli_query($con, $sql);

if($ret) {
echo "cookDB가 성공적으로 생성됨.";
}
else {
                echo "cookDB 생성 실패!!!"."<BR>";
echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>