<?php
  $cwd = getcwd();
  $cmd = "$cwd/load.sh";
  exec($cmd . " > /dev/null &");
?>
