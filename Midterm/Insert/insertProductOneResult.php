<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$pid = $_POST["pid"];
$pname = $_POST["pname"];
$price = $_POST["price"];
$StaffTBL_ssn = $pid;

$sql = "
insert into ProductTBL values
($pid, $pname, $price, $StaffTBL_ssn)
";

$ret = mysqli_query($con, $sql);
if($ret) {
echo "ProductTBL에 데이터가 성공적으로 입력됨.";
}
else {
echo "ProductTBL 데이터 입력 실패!!!"."<BR>";
echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>