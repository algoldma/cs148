<?php
include "top.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$columns = 1;
$query = 'SELECT pmkNetId FROM tblTeachers';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    
//    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

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
