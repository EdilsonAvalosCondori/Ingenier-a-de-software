<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión de Salarios, Presupuestos y Ahorros | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('<?php echo base_url('assets/images/background.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        h2 {
            color: #007bff;
            margin-top: 30px;
        }
        table {
            margin-top: 20px;
        }
        thead {
            background: #007bff;
            color: #fff;
        }
        th, td {
            text-align: center;
            padding: 10px;
        }
        .btn {
            margin-top: 20px;
            background-color: #007bff;
            color: white;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Revisión de Salarios, Presupuestos y Ahorros</h1>
        
        <h2>Salarios</h2>
        <table class="table table-bordered table-hover">
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
        <table class="table table-bordered table-hover">
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
        <table class="table table-bordered table-hover">
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
        
        <a href="<?php echo site_url('salario'); ?>" class="btn btn-primary">Regresar al Panel</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





