<?php  $date = new DateTime('2000-01-20');
  $date->add(new DateInterval('P10D'));
  echo $date->format('Y-m-d') . "\n"; 
?>