<?php
include "top.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$columns = 2;
$query = 'SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections'
        . ' WHERE fldDays like "%F%" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
//    $info2 = $thisDatabaseReader->testquery($query, "", 1, 1, 2, 0, false, false);

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
print'<p><br>There are more classes on Wednesday than Friday in Kalkin because many Business classes that meet'
    . 'on Wednesdays do not meet on Fridays <br><br></p>'
//print '</article>';
?>
<?php
include "footer.php";
?>
