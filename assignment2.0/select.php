<?php
include "top.php";
print '<table>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$query = 'SELECT fnkTeacherNetId FROM tblSections;';
    $info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 0, 0, false, false);
    
//    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    $highlight = 0; // used to highlight alternate rows
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
<a href="select.php?q=1;">Query 1</a>
<?php
include "footer.php";
?>
