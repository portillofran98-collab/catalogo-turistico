# 🇸🇻 Catálogo Turístico de El Salvador

Aplicación web desarrollada con Laravel que permite consultar un catálogo de lugares turísticos de El Salvador.

El proyecto implementa el patrón arquitectónico MVC (Modelo-Vista-Controlador) y utiliza un archivo JSON como fuente de datos.

---

## 📋 Descripción del proyecto

El sistema permite a los usuarios:

- Explorar diferentes destinos turísticos de El Salvador.
- Visualizar información detallada de cada lugar.
- Consultar departamento, categoría, precio, ubicación, horario y descripción.
- Enviar un formulario de contacto para solicitar más información.

El objetivo principal es demostrar el funcionamiento del patrón MVC en Laravel y el flujo de información entre las diferentes capas de la aplicación.

---

## 🛠️ Tecnologías utilizadas

- PHP 8.2
- Laravel 12
- Composer
- HTML5
- CSS3
- JSON
- Visual Studio Code
- XAMPP
- Git y GitHub

---

## 📁 Estructura principal

```text
catalogo-turistico/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── LugarController.php
│   │       └── ContactoController.php
│   │
│   └── Models/
│       └── Lugar.php
│
├── resources/
│   └── views/
│       ├── lugares/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       │
│       └── contacto.blade.php
│
├── routes/
│   └── web.php
│
├── storage/
│   └── app/
│       └── data/
│           └── lugares.json
│
├── capturas/
│   ├── catalogo.png
│   ├── detalle.png
│   └── contacto.png
│
├── public/
├── database/
├── config/
├── bootstrap/
├── tests/
│
├── .gitignore
├── .env.example
├── artisan
├── composer.json
└── README.md