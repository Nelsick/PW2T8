<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base</title>
    <style type="text/css">
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        .body{
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .navbar{
            width: 100%;
            padding: .5rem;
            background-color: #0F183C;
            color: white;
            text-align: center;
        }

        .container{
            display: grid;
            grid-template-columns: repeat(2,1fr);
        }
        .section{
            grid-column: span 1;
            margin-top: 1rem;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="navbar">
            <h1>Información arrendatarios - Vive Feliz</h1>
        </div>
        <?php

            require_once './Lesse.php';
            $usuario = new lessee();
            $userdata = $usuario->getSomeLessee();

        ?>
        <div class="container">
            <?php 
                foreach ($userdata as $lessee) {
                    echo '
                    <div class="section">
                        <h2>Información cliente</h2>
                        <p>Nombre: '.$lessee['nombre'].' </p>
                        <p>Apellido: '.$lessee['apellido'].'</p>
                        <p>RUT: '.$lessee['rut'].'</p>
                        <p>Meses de arriendo: '.$lessee['arriendo'].'</p>
                        <p>Monto: '.$lessee['monto'].'</p>
                        <p>Dirección: '.$lessee['direccion'].'</p>
                    </div>
                    ';
                }
            
            ?>
        </div>
    </div>
    
</body>
</html>