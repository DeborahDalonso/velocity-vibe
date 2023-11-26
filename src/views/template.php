<!DOCTYPE html>
<html>

<head>
    <title>Velocity Vibe | <?php echo $title; ?></title>
    <link rel="icon" href="/assets/images/carro-3d.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <link rel="stylesheet" href="/assets/css/main.css">
    <?php foreach ($cssFiles as $cssFile) : ?>
        <link rel="stylesheet" href="<?php echo $cssFile; ?>">
    <?php endforeach; ?>
</head>

<body style="background-color: #fff;">
    <?php include 'partials/header.php'; ?>

    <div class="container">
        <?php include __DIR__ . "/../classes/view/$view.php"; ?>
    </div>

    <?php foreach ($jsFiles as $jsFile) : ?>
        <script src="<?php echo $jsFile; ?>"></script>
    <?php endforeach; ?>
</body>

</html>