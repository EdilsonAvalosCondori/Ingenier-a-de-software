<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Presupuesto | GuardianMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('<?php echo base_url('assets/images/dark.jpg'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ingresar Presupuesto</h1>
        <?php echo form_open('salario/presupuesto'); ?>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="mb-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" class="form-control" id="monto" name="monto" required>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        <?php echo form_close(); ?>
        <a href="<?php echo site_url('salario/panel'); ?>" class="btn btn-secondary">Regresar al Panel</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



