<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lugar['titulo'] }} | Turismo El Salvador</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7f6;
            color: #222;
        }

        header {
            background: #006847;
            color: white;
            text-align: center;
            padding: 25px;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .contenedor {
            width: 90%;
            max-width: 900px;
            margin: 45px auto;
        }

        .detalle {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .imagen {
            height: 280px;
            background: linear-gradient(135deg, #006847, #00a878);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 80px;
        }

        .contenido {
            padding: 35px;
        }

        .categoria {
            display: inline-block;
            background: #e8f5e9;
            color: #006847;
            padding: 7px 14px;
            border-radius: 20px;
            margin-bottom: 15px;
        }

        h2 {
            color: #006847;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .descripcion {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .datos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }

        .dato {
            background: #f4f7f6;
            padding: 18px;
            border-radius: 8px;
        }

        .dato strong {
            display: block;
            color: #006847;
            margin-bottom: 5px;
        }

        .boton {
            display: inline-block;
            background: #006847;
            color: white;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 7px;
        }

        .boton:hover {
            background: #004d35;
        }

        footer {
            margin-top: 50px;
            background: #006847;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 600px) {
            .datos {
                grid-template-columns: 1fr;
            }

            h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>🇸🇻 Turismo El Salvador</h1>
    <p>Información del destino turístico</p>
</header>

<div class="contenedor">

    <div class="detalle">

        <div class="imagen">
            🇸🇻
        </div>

        <div class="contenido">

            <span class="categoria">
                {{ $lugar['categoria'] }}
            </span>

            <h2>
                {{ $lugar['titulo'] }}
            </h2>

            <p class="descripcion">
                {{ $lugar['descripcion'] }}
            </p>

            <div class="datos">

                <div class="dato">
                    <strong>📍 Departamento</strong>
                    {{ $lugar['departamento'] }}
                </div>

                <div class="dato">
                    <strong>🗺️ Ubicación</strong>
                    {{ $lugar['ubicacion'] }}
                </div>

                <div class="dato">
                    <strong>💰 Precio</strong>
                    {{ $lugar['precio'] }}
                </div>

                <div class="dato">
                    <strong>🕐 Horario</strong>
                    {{ $lugar['horario'] }}
                </div>

            </div>

            <a href="{{ route('lugares.index') }}" class="boton">
                ← Volver al catálogo
            </a>

        </div>

    </div>

</div>

<footer>
    <p>© {{ date('Y') }} Turismo El Salvador | Proyecto Laravel MVC</p>
</footer>

</body>
</html>