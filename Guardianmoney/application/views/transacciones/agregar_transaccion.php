<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar <?php echo $tipo; ?> | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar <?php echo $tipo; ?></h1>
        <?php echo form_open('transacciones/agregar_transaccion/'.$tipo); ?>
            <div class="mb-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="text" class="form-control" id="monto" name="monto" placeholder="Ejemplo: 200.00">
                <?php echo form_error('monto', '<div class="text-danger">', '</div>'); ?>
            </div>
            <?php if(in_array($tipo, ['Pago Agua', 'Pago Luz', 'Pago Internet'])): ?>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pagado" name="pagado">
                <label class="form-check-label" for="pagado">Pagado</label>
            </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Agregar</button>
        <?php echo form_close(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




