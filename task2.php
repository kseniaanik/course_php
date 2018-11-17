<?php
$p[3][5] = 3;
$p[6][2] = 2;
$n_min = 1; $n_max = 11; 
$m_min = 1; $m_max = 11;
print "<table cellpadding=3 cellspacing=0 border = '1'>\n";
for ($i=$n_min; $i<$n_max; $i++)
{
   if ($i==n_min)
   {
       print "<tr><td> * </td>";
       for ($k=$m_min; $i<$m_max; $k++)
       {
           print "<td>$k</td>";
       }
       print "</tr>";
   }
    print "\t<tr>\n";
    print "<td>$i</td>";
    for ($j=$m_min; $j<$m_max; $j++)
    {
        if (isset($p[$i][$j]))
        {
            $g=pow(($i*$j),($p[$i][$j]));
            print "\t\t<td>$g</td>\n";
        }
        else
        {
            $l=$i*$j;
            print "\t\t<td>$l</td>\n";
        }
    }
    print "\t</tr>\n";
}
print "</table>\n";
?>