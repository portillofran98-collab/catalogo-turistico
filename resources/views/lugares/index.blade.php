<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Turismo El Salvador</title>

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
            padding: 35px 20px;
        }

        header h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 22px;
        }

        .contenedor {
            width: 90%;
            max-width: 1400px;
            margin: 50px auto;
        }

        .titulo {
            text-align: center;
            margin-bottom: 25px;
        }

        .titulo h2 {
            color: #006847;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .titulo p {
            font-size: 20px;
        }

        .contacto {
            text-align: center;
            margin: 25px 0 40px;
        }

        .boton-contacto {
            display: inline-block;
            background: #006847;
            color: white;
            text-decoration: none;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 17px;
            transition: 0.2s;
        }

        .boton-contacto:hover {
            background: #004d35;
        }

        .catalogo {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 35px;
        }

        .tarjeta {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.12);
            transition: transform 0.2s;
        }

        .tarjeta:hover {
            transform: translateY(-5px);
        }

        .imagen {
            height: 245px;
            background: linear-gradient(135deg, #006847, #00a878);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 58px;
            font-weight: bold;
        }

        .contenido {
            padding: 22px;
        }

        .categoria {
            display: inline-block;
            background: #e8f5e9;
            color: #006847;
            padding: 7px 14px;
            border-radius: 20px;
            margin-bottom: 15px;
        }

        .contenido h3 {
            color: #006847;
            font-size: 26px;
            margin-bottom: 15px;
        }

        .dato {
            margin: 10px 0;
            font-size: 17px;
        }

        .boton {
            display: inline-block;
            margin-top: 15px;
            background: #006847;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 7px;
            font-weight: bold;
        }

        .boton:hover {
            background: #004d35;
        }

        footer {
            margin-top: 60px;
            background: #006847;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 1100px) {
            .catalogo {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {
            header h1 {
                font-size: 32px;
            }

            .titulo h2 {
                font-size: 30px;
            }

            .catalogo {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>🇸🇻 Turismo El Salvador</h1>
    <p>Descubre los lugares más increíbles de nuestro país</p>
</header>

<div class="contenedor">

    <div class="titulo">
        <h2>Destinos turísticos</h2>

        <p>
            Explora nuestra selección de lugares turísticos de El Salvador.
        </p>
    </div>

    <!-- Botón de contacto -->
    <div class="contacto">

        <a href="{{ route('contacto.create') }}" class="boton-contacto">
            📩 Contáctanos
        </a>

    </div>

    <!-- Catálogo de lugares -->
    <div class="catalogo">

        @foreach($lugares as $lugar)

            <div class="tarjeta">

                <div class="imagen">
                    SV
                </div>

                <div class="contenido">

                    <span class="categoria">
                        {{ $lugar['categoria'] }}
                    </span>

                    <h3>
                        {{ $lugar['titulo'] }}
                    </h3>

                    <div class="dato">
                        📍 {{ $lugar['departamento'] }}
                    </div>

                    <div class="dato">
                        💰 {{ $lugar['precio'] }}
                    </div>

                    <a
                        href="{{ route('lugares.show', $lugar['id']) }}"
                        class="boton"
                    >
                        Ver detalles →
                    </a>

                </div>

            </div>

        @endforeach

    </div>

</div>

<footer>
    <p>
        © {{ date('Y') }} Turismo El Salvador | Proyecto Laravel MVC
    </p>
</footer>

</body>
</html>