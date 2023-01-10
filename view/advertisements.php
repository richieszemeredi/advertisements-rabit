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
            $value = isset($row[$key]) ? $row[$key] : '';
            echo "<td>$value</td>";
        }
        echo '<tr/>';
    }
    ?>
    </tbody>
</table>

<a href="/" class="button">Go back</a>
