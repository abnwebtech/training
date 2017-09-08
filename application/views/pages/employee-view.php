<html>
<head>
<title>E M P L O Y E E</title>
<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
<script src="<?php echo site_url("assets/jquery-3.2.1.min.js") ?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>


</head>

<a href="<?php echo site_url('employees/add'); ?>">ADD EMPLOYEE</a>
<table border='1'>
    <thead>
        <tr>
            <th>ACTION</th>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>MIDDLE NAME</th>
            <th>LAST NAME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($employees as $employee): ?>
        <tr>
            <td>
                <a href="<?php echo site_url('employees/edit/'.$employee['id']); ?>">Edit</a>
            </td>
            <td><?php echo $employee['id']; ?></td>
            <td><?php echo $employee['first_name']; ?></td>
            <td><?php echo $employee['middle_name']; ?></td>
            <td><?php echo $employee['last_name']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>