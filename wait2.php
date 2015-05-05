<?php
sleep(30);
echo "wait2<br>";
for($var = 0; $var < 100; $var++) {
	echo "hello";
}
echo "PID:".getmypid();
