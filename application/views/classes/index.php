<h3> Class Index </h3>
<?php
if ( $classes->num_rows() > 0)
{
    echo '<table id="display10" class ="display" cellspacing="0" width="100%">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo 'Class ID';
    echo "</th>";
    echo "<th>";
    echo 'Class Name';
    echo "</th>";
    echo "<th>";
    echo 'Major Name';
    echo "</th>";
    echo "<th>";
    echo 'Major ID';
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";    
    foreach ($classes->result() as $row) {
        echo "<tr>";
        echo "<td>";
        echo "$row->class_id";
        echo "</td>";
        echo "<td>";
        echo "$row->className";
        echo "</td>";
        echo "<td>";
        echo "$row->majorName";
        echo "</td>";
        echo "<td>";
        echo "$row->maj_id";
        echo "</td>";
        echo "</tr>";
    }
}
?>
</tbody>
</table>
