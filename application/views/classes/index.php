<?php
if ( $classes->num_rows() > 0)
{
    echo '<table border="1" cellspacing="2" cellpadding="2">';
    echo "<tr>";
    echo "<td>";
    echo 'Class ID';
    echo "</td>";
    echo "<td>";
    echo 'Class Name';
    echo "</td>";
    echo "<td>";
    echo 'Major Name';
    echo "</td>";
    echo "<td>";
    echo 'Major ID';
    echo "</td>";
    echo "</tr>";
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
</table>
