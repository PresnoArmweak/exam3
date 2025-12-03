<?php

$rows = ordered($_SESSION['user_id']);

?>
<h1>Orders for <strong><?= htmlspecialchars($_SESSION['full_name']) ?></strong></h1>
<table>
        <tr>
            <th>Purchase Date</th>
            <th>Title</th>
        </tr>
    <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo ($row['purchase_date']); ?></td>
            <td><?php echo ($row['title']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>