<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
INSERT INTO CustomerTBL VALUES
('0', 'A', 20, 0, '서울시 동작구'),
('1', 'B', 25, 1, '인천시 연수구'),
('2', 'C', 30, 2, '인천시 남동구'),
('3', 'D', 54, 1, '서울시 강북구'),
('4', 'E', 10, 1, '서울시 강남구'),
('5', 'F', 15, 1, '경기도 시흥시'),
('6', 'G', 31, 2, '경기도 화성시'),
('7', 'H', 21, 2, '경기도 평택시'),
('8', 'I', 52, 3, '인천시 미추홀구'),
('9', 'J', 21, 3, '인천시 연수구')
";
$ret = mysqli_query($con, $sql);
if($ret) {
echo "CustomerTBL에 데이터가 성공적으로 입력됨.";
}
else {
echo "CustomerTBL 데이터 입력 실패!!!"."<BR>";
echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>