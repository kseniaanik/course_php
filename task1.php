<?php
	print "<table cellpadding=3 cellspacing=0 border='1'>\n";
	for ($i=1; $i<=100; $i++)
    {
		if ($i%10==1)
        {
			print "\t<tr>\n";
		}
		print "\t\t<td>$i</td>\n";
        
		if ($i%10==0)
        {
			print "\t</tr>\n";
		}
	}
	print "</table>\n";
?>


