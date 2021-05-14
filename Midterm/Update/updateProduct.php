<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
SELECT * FROM ProductTBL WHERE pname ='".$_GET['productName']."'";

$ret = mysqli_query($con, $sql);

if($ret) {
    $count = mysqli_num_rows($ret);

    if($count==0) {
        echo $_GET['productName']." 쇼핑몰이 없음 !!!"."<BR>";
        echo "<BR> <A HREF='main.html'> < 초기 화면 </A> ";
        exit();
    }
    else{
        header("location: updateProduct.html");
    }
}

else {
    echo "ProductTBL 데이터 검색 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<BR> <A HREF='main.html'> < 초기 화면 </A> ";
    exit();
}

mysqli_close($con);
?>