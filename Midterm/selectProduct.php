<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
SELECT * FROM ProductTBL
";

$ret = mysqli_query($con, $sql);

if($ret) {
    echo mysqli_num_rows($ret), "건이 검색됨.<br><br>";
}
else {
    echo "ProductTBL 데이터 검색 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
}


while($row = mysqli_fetch_array($ret)) {
    echo $row['pid'], " ", $row['pname'], " ", $row['price'], " ", $row['StaffTBL_ssn'], "<br>";
}

mysqli_close($con);
?>