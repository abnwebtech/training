<a href="<?php echo site_url('items/add'); ?>">ADD ITEMS</a>
<table border='1'>
    <thead>
        <tr>
            <th>ACTION</th>
            <th>ID</th>
            <th>ITEM NAME</th>
            <th>DESCRIPTION</th>
            <th>BARCODE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): ?>
        <tr>
            <td>
                <a href="<?php echo site_url('items/edit/'.$item['id']); ?>">Edit</a>
            </td>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['description']; ?></td>
            <td><?php echo $item['barcode']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>