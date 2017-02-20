<html>
<head>
	<title>MONEY EXCHANGE</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<form action="process1.php" method="post">
		<div id="wrapper">
			<div class="container">
				<div class="header">
					<div class="logo"><img src="img/logo.png"></div>
					<div class="text-head">
						<p>โปรแกรมแลกเปลี่ยนสกุลเงิน</p>
					</div>
				</div>
				<div class="container-money">
					<div class="exchange-box">
						<div class="text1">จำนวนเงิน
							<input type="text" name="money" placeholder="กรุณากรอกจำนวนเงิน">บาท
						</div>
						<div class="select-money">เลือกสลุกเงิน
							<select name="coin">
								<option value="1" >ดอลลาร์สหรัฐอเมริกา (USD)</option>
								<option value="2" >เกาหลีวอน (KRW)</option>
								<option value="3" >เวียดนามดง (VND)</option>
							</select>
						</div>
						<div class="submit">
							<input type="submit" value="แปลงสกุลเงิน">
						</div>	
					</div>
				</div>
			</div>
		</div>
</body>
</html>