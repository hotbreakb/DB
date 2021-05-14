<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$sql ="
INSERT INTO ECommerceTBL VALUES
('0', '핫핑', '부산시 해운대구'),
('1', '육육걸즈', '전주시 완산구'),
('2', '로미스토리', '경기도 김포시')
('3', '제이스타일', '서울시 성동구')
('4', '쵸퍼', '서울시 중구')
('5', '리리앤코', '부산시 부산진구')
('6', '로로텐', '서울시 동대문구')
('7', '시크릿라벨', '서울시 성북구') 
('8', '공구우먼', '경기도 양주시')
('9', '핑크시슬리', '경기도 안양시')
";
$ret = mysqli_query($con, $sql);
if($ret) {
echo "ECommerceTBL에 데이터가 성공적으로 입력됨.";
}
else {
echo "ECommerceTBL 데이터 입력 실패!!!"."<BR>";
echo "실패 원인 :".mysqli_error($con);
}

mysqli_close($con);
?>