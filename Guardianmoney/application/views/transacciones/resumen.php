<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Transacciones | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Resumen de Transacciones</h1>
        <p><strong>Total Ingresos:</strong> <?php echo $ingresos; ?></p>
        <p><strong>Total Gastos:</strong> <?php echo $gastos; ?></p>
        <p><strong>Balance:</strong> <?php echo $ingresos - $gastos; ?></p>

        <h2>Transacciones</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Pagado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transacciones as $transaccion): ?>
                <tr>
                    <td><?php echo $transaccion->id; ?></td>
                    <td><?php echo $transaccion->tipo; ?></td>
                    <td><?php echo $transaccion->monto; ?></td>
                    <td><?php echo $transaccion->fecha; ?></td>
                    <td><?php echo $transaccion->pagado ? 'Sí' : 'No'; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



