## ER 다이어그램 그리기

### 개체 및 속성
1. 직원(Staff)은 아이디(ssn), 이름(name), 나이(age), 직위(rank), 소속(division)을 가진다.
  ![image](https://user-images.githubusercontent.com/64337152/117625452-feac5780-b1b0-11eb-8d4a-dae99bd78b4a.png)
  
2. 쇼핑몰(E-commerce)에는 쇼핑몰 번호(eno), 쇼핑몰 이름(ename), 쇼핑몰 주소(eaddress)가 있다.
  ![image](https://user-images.githubusercontent.com/64337152/117625639-2f8c8c80-b1b1-11eb-85c0-732e5e78a700.png)

3. 고객(Customer)은 아이디(ssn), 이름(name), 나이(age), 등급(rank), 주소(address)를 가진다.
  ![image](https://user-images.githubusercontent.com/64337152/117625687-3c10e500-b1b1-11eb-86e8-6098fecfa277.png)

4. 상품(Product)은 상품번호(pid), 상품 이름(pname), 상품 가격(price)이 있다.<br>
  ![image](https://user-images.githubusercontent.com/64337152/117625742-4a5f0100-b1b1-11eb-8403-e94d824d122a.png)

5. 쇼핑몰(E-commerce)마다 대표(represent)가 한 명씩 있다.<br><br>
  ![그림1](https://user-images.githubusercontent.com/64337152/117642210-ff011e80-b1c1-11eb-83e1-bea15b48460b.png)<br>
  하나의 쇼핑몰에는 1명의 직원이 대표한다. (1,1)<br><br>
  ![그림2](https://user-images.githubusercontent.com/64337152/117642222-01fc0f00-b1c2-11eb-8e5f-fbf6b9f79447.png)<br>
  한 명의 직원은 0~1개의 쇼핑몰을 대표한다. (0,1)<br><br>

6. 한 직원(Staff)이 여러 쇼핑몰(E-commerce)에서 근무(work-e)할 수 있는데, 이때 각 쇼핑몰(E-commerce)별로 참여백분율(pct_time)이 기록된다.<br><br>
  ![그림3](https://user-images.githubusercontent.com/64337152/117642253-07595980-b1c2-11eb-8829-87e4458c9396.png)<br>
  하나의 쇼핑몰에는 대표자가 1명이 있기 때문에 최소 1명이 일한다. (1,*)<br>
  ![그림4](https://user-images.githubusercontent.com/64337152/117642260-09bbb380-b1c2-11eb-9485-1ac5234480b6.png)<br>
  한 명의 직원은 여러 곳에서 일할 수 있다.(1,*)<br><br>

7. 고객(Customer)은 상품을 구매(buy)할 수 있다.<br><br>
   상품믄 여러 고객에게 팔릴 수 있다.<br>
   ![그림13](https://user-images.githubusercontent.com/64337152/117738870-f9deb680-b237-11eb-92bd-a54e08c68940.png)<br>
   고객은 여러 상품을 구매할 수 있다.<br>
   ![그림14](https://user-images.githubusercontent.com/64337152/117738873-fba87a00-b237-11eb-8e45-7f9260d8a815.png)<br>

8. 고객은 어떤 스타일이 어울리는지 추천해주는 서비스(service)를 받을 수 있다.<br><br>
   ![그림11](https://user-images.githubusercontent.com/64337152/117738650-7e7d0500-b237-11eb-9c5d-bd1c5957f829.png)<br>
   쇼핑몰에서 여러 고객에게 서비스할 수 있다.<br>
   ![그림12](https://user-images.githubusercontent.com/64337152/117738661-82108c00-b237-11eb-88bb-3d1c1ade30f5.png)<br>
   한 명의 고객은 여러 쇼핑몰에서 서비스를 받을 수 있다.<br><br>

9. 상품(Product)은 한 직원에 의해 관리(manage)된다.<br><br>
   ![그림9](https://user-images.githubusercontent.com/64337152/117737993-fc401100-b235-11eb-8839-b2a85d425ad6.png)<br>
   한 명의 직원이 여러 개의 물건을 관리한다.<br>
   ![그림10](https://user-images.githubusercontent.com/64337152/117738002-006c2e80-b236-11eb-829c-c99c892648bb.png)<br>
   하나의 물건은 한 명의 직원이 관리한다.<br><br>
   
### 결과
![image](https://user-images.githubusercontent.com/64337152/117738491-1cbc9b00-b237-11eb-952f-b3c0021ab4e9.png)

### 느낀점
글쓰는 것보다 라인이 맞추느라 수정하는 데 시간을 더 쓴 거 같다. 미래의 나에게 도움이 되겠지.
