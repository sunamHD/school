<h3> Student Index </h3>
<?php
if ( $students->num_rows() > 0)
{
    echo '<table id = "interacTable" class ="display" cellspacing="0" width="100%">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo 'ID';
    echo "</th>";
    echo "<th>";
    echo 'First Name';
    echo "</th>";
    echo "<th>";
    echo 'Middle Name';
    echo "</th>";
    echo "<th>";
    echo 'Last Name';
    echo "</th>";
    echo "<th>";
    echo 'Year';
    echo "</th>";
    echo "<th>";
    echo 'GPA';
    echo "</th>";
    echo "<th>";
    echo 'Breakdance';
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($students->result() as $row) {
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
</tbody>
</table>
