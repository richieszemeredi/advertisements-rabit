<?php
/**
* Users page template.
*
* @var array $args Template variables.
*/
?>
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

<a href="/" class="button">Go back</a>
