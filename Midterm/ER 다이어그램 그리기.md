### ER 다이어그램 그리기

#### 개체 및 속성
1. 직원(Staff)은 아이디(ssn), 이름(name), 나이(age), 직위(rank), 소속(division)을 가진다.
  ![image](https://user-images.githubusercontent.com/64337152/117625452-feac5780-b1b0-11eb-8d4a-dae99bd78b4a.png)
  
2. 쇼핑몰(E-commerce)에는 쇼핑몰 번호(eno), 쇼핑몰 이름(ename), 쇼핑몰 주소(eaddress)가 있다.
  ![image](https://user-images.githubusercontent.com/64337152/117625639-2f8c8c80-b1b1-11eb-85c0-732e5e78a700.png)

3. 고객(Customer)은 아이디(ssn), 이름(name), 나이(age), 등급(rank), 주소(address)를 가진다.
   ![image](https://user-images.githubusercontent.com/64337152/117625687-3c10e500-b1b1-11eb-86e8-6098fecfa277.png)

4. 상품(Product)은 상품번호(pid), 상품 이름(pname), 상품 가격(price)이 있다.
  ![image](https://user-images.githubusercontent.com/64337152/117625742-4a5f0100-b1b1-11eb-8403-e94d824d122a.png)

5. 쇼핑몰(E-commerce)마다 그 쇼핑몰을 대표하는 대표(직원 중 한 명)가 한 명씩 있다.
6. 한 직원(Staff)이 여러 쇼핑몰(E-commerce)에서 근무(work-dept)할 수 있는데, 이때 각 쇼핑몰(E-commerce)별로 참여백분율(pct_time)이 기록된다.
7. 고객(Customer)이 좋아하는 스타일(style)이 하나씩 있다.
8. 상품(Product)은 한 직원에 의해 관리(manage)된다.
9. 한 상품은 여러 고객에게 판매(sale)된다.
