<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Dah Login</h1>
    <!-- Get User harus di echo -->
    <?php echo $this->session->userdata('nama_user') ?> <br>
    <?php echo $this->session->userdata('level') ?>

</body>
</html>