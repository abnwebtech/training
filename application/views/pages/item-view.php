<html>
<head>

<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
<script src="<?php echo site_url("assets/jquery-3.2.1.min.js") ?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>


</head>
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