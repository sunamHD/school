<?php
if ( $class->num_rows() > 0)
{
    echo '<table border="1" cellspacing="2" cellpadding="2">';
    echo "<tr>";
    echo "<td>";
    echo 'Student ID';
    echo "</td>";
    echo "<td>";
    echo 'First Name';
    echo "</td>";
    echo "<td>";
    echo 'Middle Name';
    echo "</td>";
    echo "<td>";
    echo 'Last Name';
    echo "</td>";
    echo "<td>";
    echo 'Year';
    echo "</td>";
    echo "<td>";
    echo 'GPA';
    echo "</td>";
    echo "<td>";
    echo 'Breakdance';
    echo "</td>";
    echo "</tr>";
    foreach ($class->result() as $row) {
        echo "<tr>";
        echo "<td>";
        echo "$row->stud_id";
        echo "</td>";
        echo "<td>";
        echo "$row->firstName";
        echo "</td>";
        echo "<td>";
        echo "$row->midName";
        echo "</td>";
        echo "<td>";
        echo "$row->lastName";
        echo "</td>";
        echo "<td>";
        echo "$row->year";
        echo "</td>";
        echo "<td>";
        echo "$row->gpa";
        echo "</td>";
        echo "<td>";
        echo "$row->breakdance";
        echo "</td>";
        echo "</tr>";
    }
}
?>
