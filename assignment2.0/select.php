<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
print "<p><a href='q01.php'>Query 1 = SELECT pmkNetId FROM tblTeachers</a></p>";
print '<p><a href="q02.php">Query 2 = SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"</a></p>';
print "<p><a href='q03.php'>Query 3 = SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, 
    fldStart, fldStop, fldDays, fldBuilding, fldRoom 
    FROM tblSections WHERE fldStart LIKE '13:10%'</a></p>";
print "<p><a href='q04.php'>Query 4 = SELECT pmkCourseId, fldCourseNumber, fldCourseName, fldDepartment, fldCredits
    FROM tblCourses WHERE fldCourseName LIKE 'Database Design%</a>'</p>";
print "<p><a href='q05.php'>Query 5 = SELECT fldFirstName, fldLastName
    FROM tblTeachers WHERE fldFirstName LIKE 'R%' AND fldLastName LIKE '%o'</a></p>";
print "<p><a href='q06.php'>Query 6 = SELECT fldCourseName
    FROM tblCourses WHERE fldCourseName LIKE '%Data%' AND fldDepartment NOT LIKE 'CS'</a></p>";
print "<p><a href='q07.php'>Query 7 = SELECT COUNT(DISTINCT fldDepartment)
    FROM tblCourses</a></p>";
print "<p><a href='q08.php'>Query 8 = SELECT (DISTINCT fldBuilding)
    FROM tblSections ORDER BY fldBuilding</a></p>";
print "<p><a href='q09.php'>Query 9 = SELECT SUM(fldNumStudents) FROM tblSections WHERE fldBuilding IN '
        . '(SELECT DISTINCT(fldBuilding) FROM tblSections WHERE fldDays LIKE '%W%'') ORDER BY fldNumStudents</a></p>";
print "<p><a href='q10.php'>Query 10 = SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections'
        . ' WHERE fldDays like '%F%' GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC</a></p>";

?>