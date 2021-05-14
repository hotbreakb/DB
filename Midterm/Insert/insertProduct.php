<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
INSERT INTO ProductTBL VALUES
('0', '프린팅 반팔티셔츠', 9900, 1),
('1', '밴딩와이드팬츠', 14800, 1),
('2', '투피스', 19900, 1),
('3', '스판바지', 29900, 1),
('4', '골지티셔츠', 9800, 1),
('5', '부츠컷스판팬츠', 15400, 1),
('6', '얼음바지', 9800, 1),
('7', '무지반팔티셔츠', 5000, 1), 
('8', '9부슬랙스', 38000, 1),
('9', '7부슬랙스', 37000, 1)
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