<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicos - Hospital Ágape</title>
    <link rel="stylesheet" href="index.html">
</head>
<body>
    <?php include('../app/includes/header.php'); ?>

    <main>
        <section class="medicos">
            <h1>Nossos Médicos</h1>
            <?php include('../app/medicos.php'); ?>
        </section>
    </main>

    <?php include('../app/includes/footer.php'); ?>
</body>
</html>
