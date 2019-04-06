<?php
chdir('/var/www/html/ffmpeg_test/mp4');
exec('ls -l', $out);
var_dump($out);

exec('ffmpeg -i sample.mp4 -ss 10 -t 5 -r 1 image%d.jpg', $out);
var_dump($out);


