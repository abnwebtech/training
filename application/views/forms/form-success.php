<html>
<head>
<title>My Form</title>
<script src="<?php echo site_url("assets/jquery-3.2.1.min.js"); ?>"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script>
</head>

<body>

<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('form', 'Try it again!'); ?></p>

</body>
</html>
