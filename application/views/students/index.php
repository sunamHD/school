<?php
if ( $students->num_rows() > 0)
{
    echo '<table border="1" cellspacing="2" cellpadding="2">';
    echo "<tr>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">ID</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">First Name</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Middle Name</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Last Name</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Year</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">GPA</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Breakdance</font>';
    echo "</td>";
    echo "</tr>";
    foreach ($students->result() as $row) {
        echo "<tr>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->stud_id</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->firstName</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->midName</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->lastName</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->year</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->gpa</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->breakdance</font>";
        echo "</td>";
        echo "</tr>";
    }
}
?>
