<h2>Your Cart</h2>

<?php $records = $records_in_cart ?? [];?>

<?php if (empty($records)): ?>
    <p>Your cart is empty.</p>
<?php else: ?>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Format</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $row): ?>
                <tr>
                    <td><?php echo($row['title']); ?></td>
                    <td><?php echo($row['artist']); ?></td>
                    <td><?php echo($row['name']); ?></td>
                    <td><?php echo($row['price']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form method="post">
        <input type="hidden" name="action" value="checkout">
        <button class="btn btn-success">Complete Purchase</button>
    </form>

<?php endif; ?>