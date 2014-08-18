<h3> Class Details </h3>
<?php
if ($details->num_rows() > 0)
{
    echo '<table class ="oneTable" cellspacing="0" width="100%">';
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
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>"; 
    foreach ($details->result() as $row) {
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
        echo "</tr>";
    }
}
?>
</tbody>
</table>
