# 📰 El Faro Chile - Portal de Noticias

¡Hola! 👋 Bienvenidos al repositorio de **"El Faro Chile"**, 
un proyecto universitario colaborativo enfocado en el aprendizaje y aplicación de desarrollo web estructurado, arquitectura de software e interactividad.

----------------------------------------------------------------------------------------------------------

## 🎯 Objetivo del Proyecto
Esta actividad fue desarrollada como parte de nuestra formación práctica en **Programación y Análisis de Sistemas**. 
El propósito principal es aplicar los conceptos fundamentales del desarrollo web *Full Stack*. Se comenzó con una maquetación mediante HTML5, CSS3 y JavaScript, y posteriormente se escaló a una plataforma dinámica implementando el patrón de arquitectura **MVC (Modelo-Vista-Controlador)** con **PHP** y una base de datos relacional **MySQL**.

----------------------------------------------------------------------------------------------------------

## 🚀 Características Principales
* **Arquitectura MVC:** Separación estricta de la lógica de negocio (Model), la interfaz de usuario (View) y el procesamiento de peticiones (Controller), garantizando un código limpio y escalable.
* **Gestión Dinámica de Noticias:** Los artículos se extraen directamente desde la base de datos y se renderizan dinámicamente mediante bucles en PHP, categorizados por sección.
* **Base de Datos Relacional:** Implementación de tablas para Usuarios, Artículos y Contactos utilizando MySQL.
* **Seguridad (Prevención SQLi):** Uso de sentencias preparadas (Prepared Statements) a través de PDO para proteger la base de datos contra inyecciones SQL.
* **Diseño Atractivo y Responsivo:** Uso de **Bulma CSS** para adaptar la plataforma perfectamente a dispositivos móviles, tablets y computadoras de escritorio.
* **Interactividad:** Reloj en tiempo real administrado por JavaScript y redireccionamiento dinámico con anclas tras el envío de formularios.
* **Integración Multimedia:** Inserción de un video de fondo envolvente en la cabecera y uso de imágenes para acompañar cada titular.

-----------------------------------------------------------------------------------------------------------

## 👥 Autor
Este proyecto fue maquetado, diseñado y programado por **Álvaro Brizuela Rivera**.

-----------------------------------------------------------------------------------------------------------

## 🛠️ Tecnologías Utilizadas
### Frontend
* **HTML5** 🌐 - Para la estructura y semántica del contenido.
* **CSS3 & Bulma CSS** 🎨 - Framework moderno para el diseño visual responsivo y sistema de columnas.
* **JavaScript** ⚡ - Para la manipulación del DOM y el reloj en tiempo real.

### Backend & Base de Datos
* **PHP 8+** 🐘 - Lenguaje de servidor para la lógica MVC, enrutamiento y procesamiento de formularios.
* **MySQL** 🐬 - Motor de base de datos para el almacenamiento persistente.
* **PDO (PHP Data Objects)** 🛡️ - Capa de abstracción de acceso a datos para conexiones seguras.

-----------------------------------------------------------------------------------------------------------

### 📌 Cómo ejecutar el proyecto (Entorno Local)

**1.- Instalar un Servidor Local:** Descarga e instala XAMPP o WAMP.

**2.- Clonar el Repositorio:** Copia esta carpeta completa (Actividad-equipo-universidad) dentro del directorio de tu servidor:

    - En XAMPP: C:/xampp/htdocs/

**3.- Preparar la Base de Datos:**

    - Abre XAMPP Control Panel y enciende los módulos Apache y MySQL.

    - Ve a tu navegador e ingresa a http://localhost/phpmyadmin/.

    - Crea una base de datos llamada el_faro_db (cotejamiento UTF-8).

    - Ejecuta los scripts SQL o importa las tablas de Usuarios, Artículos y Contactos.

**4.- Abrir la Aplicación:**

    - Abre tu navegador web de preferencia e ingresa a la siguiente ruta:

    - 👉 http://localhost/Actividad-equipo-universidad/View/index.php

**¡Y listo para gestionar noticias como un administrador! 🎉**

-----------------------------------------------------------------------------------------------------------

## 📁 Estructura del Proyecto (Arquitectura MVC)
```text
Actividad-equipo-universidad/
├── Asset/
│   ├── audio/
│   │   └── audio.mp3
│   ├── img/
│   │   └── Icono1.png
│   └── video/
│       └── video.mp4
├── Config/
│   └── Conexion.php               # Archivo centralizado para la conexión PDO a MySQL
├── Controller/
│   ├── ArticuloController.php     # Intermediario que procesa la subida de nuevas noticias
│   ├── ContactoController.php     # Procesa los mensajes enviados desde el footer
│   └── UsuarioController.php      # Gestiona el registro de nuevos lectores
├── Model/
│   ├── Articulo.php               # Clase para consultas SQL de los artículos (Lectura/Escritura)
│   ├── Contacto.php               # Clase para guardar mensajes en la base de datos
│   └── usuario.php                # Clase para administrar la tabla de usuarios
├── View/
│   ├── includes/
│   │   ├── Contacto.php           # Fragmento HTML del formulario de contacto
│   │   ├── Footer.php             # Fragmento HTML del pie de página
│   │   ├── header.php             # Menú de navegación principal
│   │   └── Noticias.php           # Renderizado de noticias mediante bucles foreach (PHP)
│   ├── agregar-articulo.php       # Interfaz administrativa para publicar noticias
│   ├── index.php                  # Página principal del portal
│   └── Usuarios-Registrados.php   # Tabla administrativa de usuarios registrados en el sistema
├── README.md                      # Documentación técnica del proyecto
├── script.js                      # Lógica del reloj y scripts del cliente
└── styles.css                     # Hoja de estilos personalizados (sobreescritura de Bulma)
-----------------------------------------------------------------------------------------------------------

