Viết một tập lệnh PHP để trì hoãn việc thực thi chương trình trong một số giây nhất định.

<?php
// current time
  echo date('h:i:s') . "\n";
  // sleep for 5 seconds
  sleep(5);
  // wake up
  echo date('h:i:s')."\n";
?>