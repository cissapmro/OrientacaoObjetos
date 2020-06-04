<?php
//$hoje = new DateTime();
//$final = new DateTime('2020-12-31');
//$diff = $hoje->diff($final);
//echo $diff->format('%a'. '<br />'); //217

//$data = new DateTime();
//echo $data->format('d/m/yy'. '<br />');

//$data = new DateTime('1974-08-22 15:35:00');
//echo $data->format('d-m H:m:s' . '<br />');

//$data = new DateTime('2020-01-22 15:38:00');
//$data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
//echo $data->format('d/m/yy H:i:s');

//$data = new DateTime('2020-01-22 15:38:00');
//$data->add(date_interval_create_from_date_string('5 days'));
//$data->sub(date_interval_create_from_date_string('10 days'));
//$data->sub(DateInterval::createFromDateString('10 days 5 minutes 15 seconds'));
//$data->sub(DateInterval::createFromDateString('10 years 10 minutes'));
//echo $data->format('d/m/yy H:i:s');

$data1 = new DateTime('2020-01-01');
$data2 = new DateTime('2020-02-15');

$dif = $data1->diff($data2);
echo $dif->format('%a');

//if($data1 > $data2) {
 //   if($data1 == $data2){
  //  echo "data é maior que data2";
//} else {
  //  echo "data2 é MAIOR";
//}

