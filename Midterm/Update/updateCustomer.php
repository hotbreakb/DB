<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
SELECT * FROM CustomerTBL WHERE name ='".$_GET['userName']."'";

$ret = mysqli_query($con, $sql);

if($ret) {
    $count = mysqli_num_rows($ret);

    if($count==0) {
        echo $_GET['userName']." 회원이 없음 !!!"."<BR>";
        echo "<BR> <A HREF='main.html'> < 초기 화면 </A> ";
        exit();
    }
    else{
        header("location: updateCustomer.html");
    }
}

else {
    echo "CustomerTBL 데이터 검색 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<BR> <A HREF='main.html'> < 초기 화면 </A> ";
    exit();
}

mysqli_close($con);
?>