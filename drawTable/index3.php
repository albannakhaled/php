<?php
    echo '<table border = "1">';
    echo '<tr><th>*</th>';

    // Display column headers
    for ($j = 1; $j <= 10; $j++) {
        echo "<th>$j</th>";
    }
    echo '</tr>';

    // Display table rows
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><th>$i</th>";

        // Multiply and display values
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "<td>$result</td>";
        }

        echo '</tr>';
    }

    echo '</table>';
?>


