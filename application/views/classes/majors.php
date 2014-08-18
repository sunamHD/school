<h3> Index of Majors </h3>
<?php
if ( $majors->num_rows() > 0)
{
    echo '<table class ="display" cellspacing="0" width="100%">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo 'Major ID';
    echo "</th>";
    echo "<th>";
    echo 'Major Name';
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($majors->result() as $row) {
        echo "<tr>";
        echo "<td>";
        echo "$row->maj_id";
        echo "</td>";
        echo "<td>";
        echo "$row->majorName";
        echo "</td>";
        echo "</tr>";
    }
}
?>
</tbody>
</table>
