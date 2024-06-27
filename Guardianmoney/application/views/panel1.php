<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: url('<?php echo base_url('assets/images/pages.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            font-size: 1em;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-outline-primary {
            border-color: #4CAF50;
            color: #4CAF50;
            font-size: 1em;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-outline-primary:hover {
            background-color: #4CAF50;
            color: #fff;
        }

        .btn-secondary {
            background-color: #555;
            border: none;
            font-size: 0.9em;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .btn-secondary:hover {
            background-color: #444;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
        }

        .card h2 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .card ul {
            padding-left: 20px;
        }

        .card ul li {
            color: #555;
            margin-bottom: 10px;
        }

        /* Agregar CSS para posicionar el botón de cerrar sesión */
        .logout-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .logout-button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .logout-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <a href="<?php echo site_url('welcome/logout'); ?>" class="logout-button">Cerrar Sesión</a>
    </div>
    <div class="container mt-5">
        <h1>Bienvenido al Panel de GuardianMoney</h1>
        <p>Has iniciado sesión correctamente.</p>
        
        
        <div class="card mt-4">
            <h2>Requerimientos del Cliente</h2>
            <ul>
                <li>Gestión de Salario</li>
                <a href="<?php echo site_url('salario/ingresar'); ?>" class="btn btn-secondary">Ingresar Salario</a>
                <a href="<?php echo site_url('salario/presupuesto'); ?>" class="btn btn-secondary">Ingresar Presupuesto</a>
                <a href="<?php echo site_url('salario/ahorros'); ?>" class="btn btn-secondary">Ingresar Ahorros</a>
                <a href="<?php echo site_url('salario/revision'); ?>" class="btn btn-secondary">Revisión de Salario</a>

                <li>Gestión de Transacciones</li>
                <a href="<?php echo site_url('transacciones/pago_agua'); ?>" class="btn btn-secondary">Pago Agua</a>
                <a href="<?php echo site_url('transacciones/pago_luz'); ?>" class="btn btn-secondary">Pago Luz</a>
                <a href="<?php echo site_url('transacciones/pago_internet'); ?>" class="btn btn-secondary">Pago Internet</a>
                <a href="<?php echo site_url('transacciones/caprichos'); ?>" class="btn btn-secondary">Caprichos</a>
                <a href="<?php echo site_url('transacciones/agregar_otro_gasto'); ?>" class="btn btn-secondary">Agregar Otro Gasto</a>

                <li>Estadísticas Financieras</li>
                <a href="<?php echo site_url('estadisticas/ver'); ?>" class="btn btn-secondary">Ver Estadísticas</a>
                <a href="<?php echo site_url('estadisticas/ver'); ?>" class="btn btn-secondary">Últimos movimientos</a>                  
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





