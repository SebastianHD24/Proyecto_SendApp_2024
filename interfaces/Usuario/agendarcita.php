<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Agendar Cita</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            color: #555;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .form-container select,
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border 0.2s ease-in-out;
        }

        .form-container select:focus,
        .form-container input[type="text"]:focus {
            border-color: #00aaff;
        }

        .form-container button {
            background-color: #00aaff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #008fcc;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Agendar Cita</h2>
    <form action="guardarcita.php" method="post">
        <label>Jornada:
            <select name="jornada">
                <option value="Diurna">Diurna</option>
                <option value="Tarde">Tarde</option>
            </select>
        </label>
        <label>
            Descripción:
            <input type="text" name="descripcion" placeholder="Agrega aquí un texto" />
        </label>
        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
