<?php
$ver = '3.5';
$myhostname = gethostname();

?>

<TABLE width=100% cellspacing=0 cellpadding=0>
<TR>
  <TD>
    <table width=100% bgcolor=black border=1>
      <tr>
        <td width=50>&nbsp;</td>
        <td align=left width=100><img src=rhlogo.png></td>
        <td align=center><b><font face="arial" color="white">My Custom PHP App</font></b></td>
        <td align=right width=100><font size="3" face="arial" color="white">Ver: <?php print "$ver"; ?></font></td>
        <td width=50>&nbsp;</td>
      </tr>
    </table>
  </TD>
</TR>
</TABLE>
<TABLE width=100% cellspacing=0 cellpadding=0>
<TR>
  <TD>
    <table width=100% bgcolor=white>
      <tr>
        <td width=50>&nbsp;</td>
        <td align=center><font size="+3" face="arial" color="black">Hostname: <?php print "$myhostname"; ?></font></b></td>
        <td width=50>&nbsp;</td>
      </tr>
    </table>
  </TD>
</TR>
</TABLE>

