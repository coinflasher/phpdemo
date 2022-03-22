<?php
function get_server_cpu_usage(){

    $load = sys_getloadavg();
    return $load[0];

}

  $cwd = getcwd();
  $cmd = "sh $cwd/load.sh";
  exec($cmd . " > /dev/null &");

  $myhostname = gethostname();
  print "HOSTNAME: $myhostname";
  $curload = get_server_cpu_usage();
  print "<BR><BR>";
  print "CPU LOAD: $curload";
?>
