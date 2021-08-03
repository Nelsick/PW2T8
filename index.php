<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/views/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Vive Feliz</title>
</head>

<body>
    <nav class="navbar">
        <div class="main__content">
            <a class="active" href="#"><i class='bx bx-home'></i> Inicio</a>
            <a href="#"><i class='bx bx-user-pin' ></i> Clientes</a>
            <a href="#"><i class='bx bx-edit-alt'></i> Registro</a>
        </div>
        <div class="secondary__content">
            <a href="#"><i class='bx bx-log-out-circle' ></i> Salir</a>
        </div>
    </nav>
    <section class="body__main">
        <h1>Vive Feliz - Tu mejor opción de arriendos</h1>
        <div class="card__1">
            <h2 class="card__title">Lista de arrendatarios registrados</h2>
            <div class="card__body">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Meses</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody id="dataLessee">
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card__1">
            <h2 class="card__title">Formulario de registro de nuevo arrendatario</h2>
            <div class="card__body">
                <form action="" id="newLessee">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    <label for="rut">RUT</label>
                    <input type="text" name="rut" id="rut" placeholder="Ingrese su rut">
                    <label for="arriendo">Tiempo de arriendo</label>
                    <input type="number" name="arriendo" id="arriendo" placeholder="Ingrese su tiempo de arriendo">
                    <label for="monto">Monto</label>
                    <input type="number" name="monto" id="monto" placeholder="Ingrese el monto de arriendo">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                    <button type="submit">Registrar</button>
                </form>
            </div>
        </div>

        <div class="card__2">
            <h2 class="card__title">Manejo de archivos</h2>
            <div class="card__body">
                <button class="card2__button" type="submit" onclick="location.href='./app/controllers/generarXml.php'">Generar XLM</button>
                <button class="card2__button" type="submit">Editar registro</button>
                <button class="card2__button" type="submit" onclick="location.href='./app/controllers/generarPDF.php'">Guardar en PDF</button>
            </div>
        </div>
    </section>

    <script src="./app/js/main.js"></script>
</body>
</html>