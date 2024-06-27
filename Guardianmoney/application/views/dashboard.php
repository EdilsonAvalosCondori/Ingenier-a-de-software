<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Dashboard</h2>
        <h3>Ingresos</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Salario</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ingresos as $ingreso): ?>
                    <tr>
                        <td><?= $ingreso->id ?></td>
                        <td><?= $ingreso->salario ?></td>
                        <td><?= $ingreso->fecha ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Presupuestos</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Presupuesto</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($presupuestos as $presupuesto): ?>
                    <tr>
                        <td><?= $presupuesto->id ?></td>
                        <td><?= $presupuesto->presupuesto ?></td>
                        <td><?= $presupuesto->fecha ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Ahorros</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ahorro</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ahorros as $ahorro): ?>
                    <tr>
                        <td><?= $ahorro->id ?></td>
                        <td><?= $ahorro->ahorro ?></td>
                        <td><?= $ahorro->fecha ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Transacciones</h3>
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
                        <td><?= $transaccion->id ?></td>
                        <td><?= $transaccion->tipo ?></td>
                        <td><?= $transaccion->monto ?></td>
                        <td><?= $transaccion->fecha ?></td>
                        <td><?= $transaccion->pagado ? 'Sí' : 'No' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
