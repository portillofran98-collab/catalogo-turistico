<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto | Turismo El Salvador</title>

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
            padding: 30px;
        }

        header h1 {
            font-size: 34px;
            margin-bottom: 8px;
        }

        .contenedor {
            width: 90%;
            max-width: 700px;
            margin: 45px auto;
        }

        .formulario {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        h2 {
            color: #006847;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .intro {
            margin-bottom: 30px;
            color: #555;
            line-height: 1.5;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #006847;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #006847;
        }

        .error {
            color: #c62828;
            font-size: 14px;
            margin-top: 5px;
        }

        .exito {
            background: #e8f5e9;
            color: #006847;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .botones {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        button,
        .volver {
            padding: 13px 22px;
            border-radius: 7px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        button {
            border: none;
            background: #006847;
            color: white;
        }

        button:hover {
            background: #004d35;
        }

        .volver {
            background: #eee;
            color: #333;
        }

        footer {
            margin-top: 50px;
            background: #006847;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>🇸🇻 Turismo El Salvador</h1>
    <p>Estamos aquí para ayudarte</p>
</header>

<div class="contenedor">

    <div class="formulario">

        <h2>Contáctanos</h2>

        <p class="intro">
            ¿Querés obtener más información sobre alguno de nuestros
            destinos turísticos? Completá el siguiente formulario.
        </p>

        @if(isset($enviado) && $enviado)
            <div class="exito">
                ¡Gracias, {{ $nombre }}! Tu mensaje fue enviado correctamente.
            </div>
        @endif

        <form action="{{ route('contacto.store') }}" method="POST">

            @csrf

            <div class="campo">
                <label for="nombre">Nombre</label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    placeholder="Escribí tu nombre"
                >

                @error('nombre')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <label for="email">Correo electrónico</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="ejemplo@correo.com"
                >

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <label for="mensaje">Mensaje</label>

                <textarea
                    id="mensaje"
                    name="mensaje"
                    placeholder="Escribí tu mensaje..."
                >{{ old('mensaje') }}</textarea>

                @error('mensaje')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="botones">

                <button type="submit">
                    Enviar mensaje
                </button>

                <a href="{{ route('lugares.index') }}" class="volver">
                    Volver al catálogo
                </a>

            </div>

        </form>

    </div>

</div>

<footer>
    <p>© {{ date('Y') }} Turismo El Salvador | Proyecto Laravel MVC</p>
</footer>

</body>
</html>