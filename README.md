# **Proyecto VAKE**

## **Objetivo**


En este proyecto se pretende crear una página web de tartas veganas a domicilio. 

El diseño y los elementos de este, pueden visualizarse en: - <a href="https://www.figma.com/file/ZlpeKMbKTbXkrtdBkN0daP/Mar%C3%ADa-beta?node-id=6%3A1878">Figma</a>


## **Requisitos**
### **Instalación**
Debes clonar el repositorio del proyecto.
### **Contribuir**
Debes crear un pull request al proyecto.

## **Programas utilizados**
El proyecto se ha construido con los siguientes programas:
- Para el diseño:
  - <a href="https://www.figma.com/">Figma</a>: diseño de wireframes y diseño final.
  - <a href="https://www.adobe.com/products/illustrator.html">Illustrator</a>: diseño de ilustraciones.
- Para el desarrollo:
  - <a href="https://code.visualstudio.com/">Visual Studio Code</a>: editor de código fuente.
  - <a href="https://prepros.io/">Prepos</a>: compilador de archivos.

## **Nomenclatura**

### **Clases**

La convención de nombre para las clases de los elementos sigue el patrón BEM:

- .bloque{}
- .bloque__elemento{}
- .bloque--modificador{}

'.bloque' representa el primer nivel de una abstracción o componente, es el elemento padre.
'.bloque__elemento' representa un hijo del elemento padre '.bloque'.
'.bloque--modificador' representa un estado diferente de '.bloque'.

<!-- Ejemplo sacado del proyecto -->

### **Etiquetas archivos sass**

Para la localización rápida de archivos sass emplearemos etiquetas en texto comentado, por ejemplo:

- //-------$VARIABLES
- //-------$CARDS

### **camelCase en JavaScript**



## **Estructura del respositorio del proyecto**

Para el proyecto aplicaremos la metodología de ramas de Gitflow, basada en cinco palabras clave, estas determinaran la estructura de nuestro repositorio.

En primer lugar, tenderemos la rama principal llamada **main**, donde está el código definitivo. No se debe trabajar directamente sobre ella.

La segunda rama mas importante de nuestro repositorio será la **develop**, donde se guardan las nuevas funcionalidades del proyecto. (No hacer commits directamente sobre ella.)

Para el desarrollo de las nuevas funcionalidades crearemos una rama nueva, para cada funcionalidad, que salga de la nombrada anteriormente, y la llamaremos **feature/funcionalidad**. Al finalizar la nueva funcionalidad la mezclamos con la rama Develop para que los cambios queden allí guardados. (Una vez mezclada estas ramas, se puede borrar la Feature.)

Es importante tener una rama llamada **hotfix**, se encarga de solucionar los incidentes. (Esta rama debe ser generada a partir de la Main.)

Al implementar las features en la develop, pueden surgir errores. Para solucionar estos errores se crea una rama **hotfix-error** a partir de la develop, en la que se soluciona el error y se realiza un pull request a la rama develop.

Por últimos tendremos la rama **releaes**, se utiliza para la entrega a producción o ambiente real. En ella se harán las pruebas para el cliente. (Una vez terminada la prueba si no tiene ningún fallo se mezcla con la rama Main.)


![ramas](https://user-images.githubusercontent.com/92877904/153928693-8aa5247e-470d-4f54-b365-163a4a15d1a1.jpg)



## **SCSS**

Los archivos scss son los encargados de aportar los estilos necesarios a los elementos html, estos se encuentran organizados en la carpeta sass/.

### **Estructura del repositorio sass/**

- sass/
  - style.scss

  - htmlelements/
    - _buttons.scss
    - _links.scss
    - _typographyhtml.scss

  - layout/
    - _main.scss
    - _header.scss
    - _cards-reviews.scss
    - _newsletter.scss
    - _navigation.scss
    - _footer.scss

  - site/
    - _site.scss

  - structure/
    - grid.scss

  - utilities/
    - _functions.scss
    - _mixins.scss

  - variables/
    - _color.scss
    - _spacing.scss
    - _typography.scss






El archivo main.sass nos indica el path de los elementos así como su nombre. Todos los archivos sass tienen una etiqueta para facilitar su localización mediante la búsqueda de nuestro editor (Cmd/Ctrl + f) y acceder a ellos fácilmente.


### **Variables**

Las variables que se emplearán en este proyecto se encuentra en el archivo sass/utilites/_variables.scss. Estas variables globales definen los colores, el espaciado y las tipografías de todo el documento.

#### **Espaciado**

Para el espaciado la unidad base será 6px, de la cual se emplearán sus múltiplos en función del espaciado que necesitemos.
Las tarjetas tendrán 4 tipos de medidas S, M , L y XL: 
* S para el grid de todos los productos y la cesta (165px). 
* M para el grid de la landing y las reviews(330px). 
* L para ver el producto completo (425px) y 
* XL para las tartas especiales de la landing y la newsletter(600px)

** espacios:
* 

- $space-unit: 6px;

#### **Color**

La paleta de colores a utilizar en este proyecto estará declarada de la siguiente manera.

- $color-purple
- $color-green
- $color-grey
- $color-white
- $color-black

- $color-main: $color-purple;
- $color-cta: $color-green;

#### **Fuentes**

En cuanto a las fuentes, se han elegido estás dos. Mattone se empleará para títulos y subtítulos. En cuanto a DM Sans se usará para el cuerpo del documento y títulos secundarios. De la misma manera se definirá el tamaño de fuente tanto de títulos como del cuerpo en función de la resolución de la pantalla.

- $font-family-sec: 'DM Sans', sans-serif;
- $font-family-main: 'Mattone', sans-serif;


### **Recursos multimedia**

Los recursos multimedia a emplear en el documento web, se guardarán en la carpeta resources/. Existen tres subcarpetas, una para los iconos resources/icons/, otra para las imágenes resources/img/ y otra para el logo resources/logo/. Las imágenes deben de estar optimizadas y no deben superar un peso de 2MB. Para las ilustraciones e iconos usaremos el formato SVG.

## **PHP**

En los archivos PHP se programan los diferentes componentes de la web. Cada componente tiene una carpeta con los archivos que lo forman.

Para ejecutar el proyecto, debemos tener instalado un servidor local, dejo enlaces a los más utilizados:
XAMPP: https://www.apachefriends.org/es/index.html
MAMP: https://www.mamp.info/de/downloads/
LAMP: https://bitnami.com/stack/lamp/installer

Después de instalar el servidor debemos meternos en las carpetas de la aplicación y buscar una llamada htdocs, en esta carpeta habra que meter la carpeta del proyecto que queremos ejecutar.
Finalmente habría que inicar Apache y MySQL en el servidor y al buscar localhost/normbre de la carpeta, deberia aparecernos el directorio.

se programa como si fuese un archivo HTML, el código HTML va fuera de las etiquetas de PHP ( <?php   ?>). Las etiquetas como body, head... Ya estan creadas no hace falta volver a crearlas, y los estilos ya estan enlazados.

### **Estructura del repositorio php/**

  - php/
    - card/
      - button_CARD.php
      - CARD.php
      - text_CARD.php
      - title_CARD.php
    - header/
      - description_HEADER.php
      - HEADER.php
      - logo_HEADER.php
    - bottom_menu.php
    - pagination.php
    - search.php
- index.php

### **Explicación de estructura**

- php/ -> Carpeta general que contiene todos los archivos de php (Index.php el cual es el código principal se encuentra fuera de dicha carpeta).

  - card/ -> Carpeta que contiene los componentes que forman la "card" principal.
    - Button_CARD.php ->  Código del botón que se encuentra dentro de las cartas.
    - CARD.PHP -> Aquí se linkeaerán todas las variables de esta carpeta "card" y se dará formato.
    - text_CARD.PHP.js -> Textos del elemento "CARD".
    - title_CARD.js -> Titulo dentro del elemento "CARD".

  -header/ -> Encabezado general de la página formado por los elementos que se encuentran dentro de la carpeta.
    - description_HEADER.php -> Breve descripción de nuestra web situado en el "header".
    - HEADER.php -> Aquí se linkeaerán todas las variables de esta carpeta "header" y se dará formato.
    - logo_HEADER.php -> Se define el logo de la web.

  - bottom_menu.php -> Se define el menú situado en nuestro pie de página y se le otorga estilos.
  - pagination.php -> Se define la paginación de nuestra web.
  - search -> Se define la barra de búsqueda situada en la parte superior de la misma.

- index.php -> Aquí se linkearan todos los componentes anteriormente nombrados formando así nuestra web.


### **Vídeo explicativo para la ejecución de PHP**

    https://www.youtube.com/watch?v=p8Ozqop6O3s 



    <strong>
    alt palabras clave
    verbos ver descubre mira 