<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Ciudades por País</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; padding: 20px; }
        .caja { max-width: 800px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; }
        h1 { color: #1F3864; font-size: 22px; }
        select, button { padding: 10px; font-size: 16px; width: 100%; margin-bottom: 10px; }
        button { background: #1F3864; color: #fff; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background: #1F3864; color: #fff; padding: 10px; text-align: left; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        @media (min-width: 600px) { select, button { width: auto; } }
    </style>
</head>
<body>
<div class="caja">
    <h1>Consulta de Ciudades por País</h1>

    <form method="POST" action="">
        <select name="pais" required>
            <option value="">-- Seleccione un país --</option>
            <?php while ($p = $paises->fetch_assoc()) { ?>
                <option value="<?= $p['Code'] ?>" <?= ($p['Code'] == $paisSeleccionado) ? 'selected' : '' ?>>
                    <?= $p['Name'] ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit">Consultar ciudades</button>
    </form>

    <?php if ($ciudades !== null) { ?>
        <?php if ($ciudades->num_rows > 0) { ?>
            <table>
                <tr><th>Ciudad</th><th>Población</th></tr>
                <?php while ($c = $ciudades->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $c['Name'] ?></td>
                        <td><?= number_format($c['Population']) ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p>No se encontraron ciudades para el país seleccionado.</p>
        <?php } ?>
    <?php } ?>
</div>
</body>
</html>