<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Money Exchange</title>
<style type="text/css">
<!--
body {
    background-color:#69C;
    color:#fff;
}
-->
</style></head>

<body>
    <form action="process.php" method="post">
<table width="500" border="0" align="center">
    <tr>
      <td colspan="2">
      <div align="center"><h2>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</h2></div></td>
    </tr>
    <tr>
      <td width="150"><div align="right">จำนวนเงิน : </div></td>
      <td width="212"><input type="text" name="money" size="20" maxlength="100" />  บาทไทย (THB)</td>
    </tr>     
    <tr>
      <td width="150"><div align="right">เลือกสกุลเงิน : </div></td>
      <td width="212"><select name="coin" >
                <option value="1" >กีบลาว (LAK)</option>
                <option value="2" >จ๊าดพม่า (MMK)</option>
                <option value="3" >ดงเวียดนาม (VND)</option>
                <option value="4" >ดอลลาร์สิงคโปร์ (SGD)</option>
                <option value="5" >ดอลลาร์ออสเตรเลีย (AUD)</option>
                <option value="6" >ดอลลาร์ฮ่องกง (HKD)</option>
                <option value="7" >ดอลลาร์ไต้หวันใหม่ (TWD)</option>
                <option value="8" >ปอนด์ (GBP)</option>
                <option value="9" >ยูโร (EUR)</option>
                <option value="10" >ริงกิตมาเลเซีย (MYR)</option>
                <option value="11" >สหดอลลาร์สหรัฐอเมริกา (USD)</option>
                <option value="12" >เกาหลีวอน (KRW)</option>
                <option value="13" >เงินรูปีของอินเดีย (INR)</option>
                <option value="14" >เงินเยนของญี่ปุ่น (JPY)</option>                 
              </select></td>
    </tr>  
    <tr>
      <td colspan="2"> <div align="center"><input type="submit" value="คำนวณ" /></div></td>
    </tr>   
    <tr>
      <td colspan="2" style="font-size:14px; color:#F00;" align="center"></td>
    </tr>
  </table>
<div align="center"></div>
</body>
</html>