# Proyecto en Drupal 10

Este proyecto consiste en la creación de un sitio web utilizando el tema base Bartik de Drupal 10, con modificaciones realizadas mediante un subtema personalizado. A continuación se detallan los pasos seguidos y las tecnologías utilizadas.

## Requisitos previos

- **Docker**: Asegúrate de tener instalado Docker y DDEV en tu máquina.
- **DDEV**: Si no tienes instalado DDEV, sigue las [instrucciones de instalación de DDEV](https://ddev.readthedocs.io/en/stable/).

## Instalación y configuración del tema

### 1. Clona el repositorio

 - git clone git@github.com:CarlaMaceiras/prueba-drupal.git
 - cd prueba-drupal

### 2. Configurar DDEV y la base de datos

1. **Instalar dependencias**
   - composer install
2. **Iniciar DDEV**
   - ddev start
3. **Importar la base de datos**
   - ddev import-db --src=db.sql.gz
4. **Acceder al sitio**
   - http://prueba-drupal.ddev.site

## Tema base Bartik
He utilizado Bartik como tema base para este proyecto.

## Subtema personalizado
Creé un subtema basado en Bartik para realizar las modificaciones necesarias.

## Modificaciones realizadas

- **Plantillas personalizadas**: Las plantillas se han modificado dentro de una carpeta `custom` para adaptar el contenido a los requerimientos del diseño.
- **Redirección a /home**: Como el contenido es estático, redirigí la página principal de la web a `/home`.
- **Bloques personalizados**: Creé bloques personalizados para añadir los siguientes elementos:
  - Header (encabezado)
  - Contenido principal
  - Footer (pie de página)

## Menú de hamburguesa

- El menú de hamburguesa se ha creado mediante una nueva plantilla `Twig` que contiene el HTML correspondiente, además del archivo `.js` necesario para la funcionalidad del menú desplegable.

## Maquetación con SASS y FlexBox

- **SASS**: He utilizado SASS para la maquetación. Podría haber optado por la metodología SMACSS para estructurar los archivos CSS, pero dado que se trata de una maquetación pequeña, decidí crear un único archivo `style.scss`.
  - En este archivo, la maquetación está organizada por bloques.
  - Las **media queries** se han añadido para asegurar que el diseño sea completamente responsive.
  
- **FlexBox**: Se ha utilizado FlexBox como técnica principal de maquetación, lo que ha reducido la cantidad de modificaciones necesarias en las **media queries**, ya que el contenido se adapta fácilmente a diferentes tamaños de pantalla, desde las más grandes hasta las más pequeñas.

## Diseño responsive

Gracias al uso de FlexBox y las media queries dentro del archivo `style.scss`, el diseño es completamente adaptable a pantallas de diferentes tamaños, sin que el contenido se rompa en ningún momento.