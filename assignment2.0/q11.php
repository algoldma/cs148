<?php
include "top.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$columns = 2;
$query = 'SELECT SELECT fnkCourseId FROM (SELECT fldBuilding, COUNT(fldSection) FROM tblSections WHERE COUNT(fldSection)>50 GROUP BY fldBuilding)';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 1, false, false);
//    $info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 0, 1, false,s false);

    $highlight = 0; // used to highlight alternate rows
    print $query;
    print '<table>';
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
//    print '</aside>';

//print '</article>';
?>
<?php
include "footer.php";
?>
