<table>
    <thead>
    <tr>
        <?php
        foreach ($properties as $property) {
            echo "<th>$property</th>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($properties as $key => $property) {
            echo "<td>$row[$key]</td>";
        }
        echo '<tr/>';
    }
    ?>
    </tbody>
</table>