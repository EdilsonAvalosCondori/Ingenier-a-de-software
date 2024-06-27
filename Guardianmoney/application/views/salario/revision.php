<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión de Salarios, Presupuestos y Ahorros | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Revisión de Salarios, Presupuestos y Ahorros</h1>
        
        <h2>Salarios</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Salario</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salarios as $salario): ?>
                <tr>
                    <td><?php echo $salario->id; ?></td>
                    <td><?php echo $salario->salario; ?></td>
                    <td><?php echo $salario->fecha; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <h2>Presupuestos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($presupuestos as $presupuesto): ?>
                <tr>
                    <td><?php echo $presupuesto->id; ?></td>
                    <td><?php echo $presupuesto->categoria; ?></td>
                    <td><?php echo $presupuesto->monto; ?></td>
                    <td><?php echo $presupuesto->fecha; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <h2>Ahorros</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ahorros as $ahorro): ?>
                <tr>
                    <td><?php echo $ahorro->id; ?></td>
                    <td><?php echo $ahorro->monto; ?></td>
                    <td><?php echo $ahorro->fecha; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


