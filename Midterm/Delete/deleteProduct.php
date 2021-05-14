<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
DELETE FROM ProductTBL
";

$ret = mysqli_query($con, $sql);

if($ret) {
    echo "삭제 완료";
    // echo mysqli_num_rows($ret), "건이 검색됨.<br><br>";
}
else {
    echo "ProductTBL 데이터 삭제 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>