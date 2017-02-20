<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</title>
</head>

<body>
<div align="center">
   
   <h2>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</h2>

  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
  case 1:
    $coin_m=240.49;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." กีบลาว (LAK)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." กีบลาว (LAK)";
    break;
  case 2:
    $coin_m=50;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." จ๊าดพม่า (MMK)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." จ๊าดพม่า (MMK)";
    break;
  case 3:
    $coin_m=600;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดงเวียดนาม (VND)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดงเวียดนาม (VND)";
    break;
   case 4:
    $coin_m=0.04;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์สิงคโปร์ (SGD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์สิงคโปร์ (SGD)";
    break;
   case 5:
    $coin_m=0.05;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์ออสเตรเลีย (AUD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์ออสเตรเลีย (AUD)";
    break;
   case 6:
    $coin_m=0.2;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์ฮ่องกง (HKD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์ฮ่องกง (HKD)";
    break;    
   case 7:
    $coin_m=1;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์ไต้หวันใหม่ (TWD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์ไต้หวันใหม่ (TWD)";
    break;
   case 8:
    $coin_m=0.02;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ปอนด์ (GBP)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ปอนด์ (GBP)";
    break;    
   case 9:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ยูโร (EUR)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ยูโร (EUR)";
    break;
   case 10:
    $coin_m=0.11;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ริงกิตมาเลเซีย (MYR)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ริงกิตมาเลเซีย (MYR)";
    break;
   case 11:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." สหดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." สหดอลลาร์สหรัฐอเมริกา (USD)";
    break;
   case 12:
    $coin_m=33;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." เกาหลีวอน (KRW)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
    break;    
   case 13:
    $coin_m=1.9;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." เงินรูปีของอินเดีย (INR)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." เงินรูปีของอินเดีย (INR)";
    break;
   case 14:
    $coin_m=3.58757333;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนของญี่ปุ่น (JPY)";
    break;    
  }
 
  ?>
 
</div>
</body>
</html>