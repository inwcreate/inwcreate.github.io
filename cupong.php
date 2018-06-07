<?php
 /*
 เรื่องคำนวนเวลาดูจากเว็บ thesunamulet
 เช็คราคา
 เช็ควันที่อยู่ในรายการรึเปล่า
 */
  $priceDB = 2800;
  $discount = 100;
  $nowDate = date('Y-m-d');
  $dateDB = '2018-06-05';

  echo "<br><hr><br>";
  print "to day : ".$nowDate;
  print "<br>";
  print "time DB : ".$dateDB;
  print "<br>";
  print "<br>";

  $acceptUse = 'Y';

  if($acceptUse == 'Y'){
    $priceNet = $priceDB - $discount;
    // === use session keep price temp === //
     print "ได้ส่วนลด : ".$discount." THB<br>";
     print "ยอดสุทธิ : ".$priceNet." THB<br>";
  }
  else{
    print "รหัสคูปองไม่สามารถใช้ได้";
  }

  print "<br><hr><br>";
  // คำนวนวัน เช็คช่วงเวลาที่สามารถใช้คูปองได้
  $paymentDate = date('Y-m-d');
  $paymentDate=date('Y-m-d', strtotime($paymentDate));;
  $contractDateBegin = date('Y-m-d', strtotime("01/06/2018"));
  $contractDateEnd = date('Y-m-d', strtotime("07/06/2018"));

  if(($paymentDate > $contractDateBegin) && ($paymentDate < $contractDateEnd)){
    echo "is between";
  }else{
    echo "NO GO!";
  }
 ?>
