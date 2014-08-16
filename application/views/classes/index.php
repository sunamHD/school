<?php
if ( $classes->num_rows() > 0)
{
    echo '<table border="1" cellspacing="2" cellpadding="2">';
    echo "<tr>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">ID</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Class Name</font>';
    echo "</td>";
    echo "<td>";
    echo '<font face="Arial, Helvetica, sans-serif">Major ID</font>';
    echo "</td>";
    echo "</tr>";
    foreach ($classes->result() as $row) {
        echo "<tr>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->class_id</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->className</font>";
        echo "</td>";
        echo "<td>";
        echo "<font face='Arial, Helvetica, sans-serif'>$row->maj_id</font>";
        echo "</td>";
        echo "</tr>";
    }
}
?>
