<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleprocess.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<title>โปรแกรมแลกเปลี่ยนสกุลเงิน</title>
</head>

<body>
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
          <h2>ผลการแลกเปลี่ยนสกุลเงิน</h2>
          <div class="center">
            <?php
            $money=$_POST['money'];   
            $coin=$_POST['coin'];
           
           
            switch ($coin) {
            case 1:
              $coin_m=0.03;
              $sum=$money*$coin_m;
              // echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
              echo number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์สหรัฐอเมริกา (USD)";
              break;
            case 2:
              $coin_m=33;
              $sum=$money*$coin_m;
              // echo "1 บาทไทย (THB) = ".$coin_m." เกาหลีวอน (KRW)"."<br><br>";
              echo number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
              break;
            case 3:
              $coin_m=600;
              $sum=$money*$coin_m;
              // echo "1 บาทไทย (THB) = ".$coin_m." เวียดนามดง (VND)"."<br><br>";
              echo number_format($money,2)." บาท  =  ".number_format($sum,2)." เวียดนามดง (VND)";
              break;
             
            }

            ?>          
          </div>
          <div class="back"><a href="home.php">กลับหน้าหลัก</a></div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>