<table>
    <thead>
    <tr>
        <?php
        foreach ($args['properties'] as $property) {
            echo "<th>$property</th>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($args['data'] as $row) {
        echo '<tr>';
        foreach ($args['properties'] as $key => $property) {
            echo "<td>$row[$key]</td>";
        }
        echo '<tr/>';
    }
    ?>
    </tbody>
</table>