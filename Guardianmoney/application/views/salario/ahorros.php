<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Ahorros | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Ingresar Ahorros</h1>
        <?php echo form_open('salario/ahorros'); ?>
            <div class="mb-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="text" class="form-control" id="monto" name="monto" value="<?php echo set_value('monto'); ?>">
                <?php echo form_error('monto', '<div class="text-danger">', '</div>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        <?php echo form_close(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

