<?php
$ver = '2.0';
$myhostname = gethostname();
$bgcolor = getenv('BGCOLOR');
?>

<TABLE width=100% cellspacing=0 cellpadding=0>
<TR>
  <TD>
    <table width=100% bgcolor=black border=0>
      <tr>
        <td width=50>&nbsp;</td>
        <td align=left width=100><img src=truistlogo.png></td>
        <td align=center><b><font face="arial" color="white">-={ My Custom PHP App }=-</font></b></td>
        <td align=right width=100><font size="3" face="arial" color="white">
          Ver: <?php print "$ver"; ?>

         </font></td>
        <td width=50>&nbsp;</td>
      </tr>
    </table>
  </TD>
</TR>
</TABLE>
<BR><BR><BR>
<TABLE width=100% cellspacing=0 cellpadding=0 BGCOLOR="<?php print "$bgcolor";?>">
<TR>
  <TD>
    <table width=100%>
      <tr>
        <td width=50>&nbsp;</td>
        <td align=center><font size="+3" face="arial" color="black">
         Hostname: <?php print "$myhostname"; ?>

         </font></b></td>
        <td width=50>&nbsp;</td>
      </tr>
    </table>
  </TD>
</TR>
</TABLE>

