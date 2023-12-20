<?php
// Example data array
$data = array(
    array('Name' => 'ahmad', 'Age' => 25, 'City' => 'tripoli'),
    array('Name' => 'fadi', 'Age' => 30, 'City' => 'tripoli'),
    array('Name' => 'chadi', 'Age' => 22, 'City' => 'tripoli'),
);

// HTML code to display the table
?>
<html>


<body>

<table border="1">
    <tr>
        <?php
        // Display table header row
        foreach ($data[0] as $key => $value) {
            echo "<th>$key</th>";
        }
        ?>
    </tr>

    <?php
    // Display data rows
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
