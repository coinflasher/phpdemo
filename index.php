<?php
$ver = '3.5';
$myhostname = gethostname();

?>

<TABLE width=100% cellspacing=0 cellpadding=0>
<TR>
  <TD>
    <table width=100% bgcolor=black>
      <tr>
        <td width=50>&nbsp;</td>
        <td align=left><img src=rhlogo.png></td>
        <td align=center><b><font face="arial" color="white">My Custom PHP App</font></b></td>
        <td align=right><font size="2" face="arial" color="white">Ver: <?php print "$ver"; ?></font></td>
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
        <td align=center><font size="+3" face="arial" color="white">Hostname: <?php print "$myhostname"; ?></font></b></td>
        <td width=50>&nbsp;</td>
      </tr>
    </table>
  </TD>
</TR>
</TABLE>

