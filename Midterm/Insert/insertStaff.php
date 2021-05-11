<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "") or die("MySQL 접속 실패!!");

$sql ="
INSERT INTO StaffTBL VALUES
('0', '성은지', 24, 0, 'IT'),
('1', '조유진', 25, 1, 'GA'),
('2', '유현아', 26, 2, 'PS'),
('3', '이지연', 24, 1, 'HR'),
('4', '이서현', 23, 1, 'HR'),
('5', '허가현', 22, 1, 'EX'),
('6', '이동은', 31, 2, 'QA'),
('7', '김현지', 41, 2, 'QA'),
('8', '이현지', 65, 3, 'QA'),
('9', '박은지', 21, 3, 'IT')
";
$ret = mysqli_query($con, $sql);
if($ret) {
echo "userTBL에 데이터가 성공적으로 입력됨.";
}
else {
echo "userTBL 데이터 입력 실패!!!"."<BR>";
echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>