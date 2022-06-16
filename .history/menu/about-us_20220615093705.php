/*
  Nombre del tema: NewBiz
  URL del tema: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  Autor: BootstrapMade.com
  Licencia: https://bootstrapmade.com/license/
*/

/*------------------------------------------------ --------------
# General
-------------------------------------------------- ------------*/

cuerpo {
  fondo: #fff;
  color: #444;
  familia de fuentes: "Open Sans", sans-serif;
}

a {
  color: #1e943c;
  transición: 0,5 s;
}

a: flotar,
un: activo,
un foco {
  color: #168548;
  contorno: ninguno;
  texto-decoración: ninguno;
}

pags {
  relleno: 0;
  margen: 0 0 30px 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  familia tipográfica: "Montserrat", sans-serif;
  peso de fuente: 400;
  margen: 0 0 20px 0;
  relleno: 0;
}

/* Volver al botón superior */

.volver arriba {
  posición: fijo;
  pantalla: ninguno;
  fondo: #078f1e;
  color: #fff;
  ancho: 44px;
  altura: 44px;
  alineación de texto: centro;
  altura de línea: 1;
  tamaño de fuente: 16px;
  borde-radio: 50%;
  derecha: 15px;
  abajo: 15px;
  transición: fondo 0.5s;
  índice z: 11;
}

.volver arriba i {
  acolchado superior: 12px;
  color: #fff;
}

/*------------------------------------------------ --------------
# Encabezado
-------------------------------------------------- ------------*/

#encabezado {
  altura: 80px;
  transición: todos los 0,5 s;
  índice z: 997;
  transición: todos los 0,5 s;
  relleno: 20px 0;
  fondo: #fff;
  sombra de caja: 0px 0px 30px rgba(127, 137, 161, 0.3);
}

#header.header-scrolled,
#header.header-pages {
  altura: 60px;
  relleno: 10px 0;
}

#encabezado .logo h1 {
  tamaño de fuente: 36px;
  margen: 0;
  relleno: 0;
  altura de línea: 1;
  peso de fuente: 400;
  espaciado entre letras: 3px;
  transformación de texto: mayúsculas;
}

#encabezado .logo h1 a,
#header .logo h1 a: pasar el cursor {
  color: #006f4a;
  texto-decoración: ninguno;
}

#header .logo img {
  relleno: 0;
  margen: 7px 0;
  altura máxima: 26px;
}

.páginas principales {
  margen superior: 60px;
}

/*------------------------------------------------ --------------
# Sección de introducción
-------------------------------------------------- ------------*/

#introducción {
  ancho: 100%;
  posición: relativa;
  fondo: url("../img/portada.png") centro inferior sin repetición;
  tamaño de fondo: portada;
  relleno: 200px 0 120px 0;
}

#introducción .introducción-img {
  ancho: 50%;
  flotar derecho;
}

#intro .intro-info {
  ancho: 50%;
  flotador izquierdo;
}

#intro .intro-info h2 {
  color: #fff;
  margen inferior: 40px;
  tamaño de fuente: 48px;
  peso de fuente: 700;
}

#intro .intro-info h2 span {
  color: #38e471;
  decoración de texto: subrayado;
}

#intro .intro-info .btn-comenzar,
#intro .intro-info .btn-servicios {
  familia tipográfica: "Montserrat", sans-serif;
  tamaño de fuente: 14px;
  peso de fuente: 600;
  espaciado entre letras: 1px;
  pantalla: bloque en línea;
  relleno: 10px 32px;
  borde-radio: 50px;
  transición: 0,5 s;
  margen: 0 20px 20px 0;
  color: #fff;
}

#intro .intro-info .btn-comenzar {
  fondo: #037525;
  borde: 2px sólido #0ac05c;
  color: #fff;
}

#intro .intro-info .btn-get-started:hover {
  fondo: ninguno;
  color del borde: #fff;
  color: #fff;
}

#intro .intro-info .btn-servicios {
  borde: 2px sólido #fff;
}

#intro .intro-info .btn-services:hover {
  fondo: #037525;
  borde: 2px sólido #0ac05c;
  color: #fff;
}

/*------------------------------------------------ --------------
# Menú de Navegación
-------------------------------------------------- ------------*/

/* Navegación en el escritorio */

.main-nav {
  /* Desplegable */
  /* Menú desplegable profundo */
}

.main-nav,
.nav-principal * {
  margen: 0;
  relleno: 0;
  estilo de lista: ninguno;
}

.main-nav > ul > li {
  posición: relativa;
  espacios en blanco: nowrap;
  flotador izquierdo;
}

.main-nav a {
  bloqueo de pantalla;
  posición: relativa;
  color: #3e8031;
  relleno: 10px 15px;
  transición: 0,3 s;
  tamaño de fuente: 14px;
  familia tipográfica: "Montserrat", sans-serif;
  peso de fuente: 500;
}

.main-nav a: hover,
.nav-principal .activo > a,
.main-nav li: hover > a {
  color: #3cac54;
  texto-decoración: ninguno;
}

.main-nav .desplegable ul {
  bloqueo de pantalla;
  posición: absoluta;
  izquierda: 0;
  arriba: calc(100% + 30px);
  índice z: 99;
  opacidad: 0;
  visibilidad: oculto;
  relleno: 10px 0;
  fondo: #fff;
  sombra de caja: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transición: facilita los 0,3 s;
}

.main-nav .drop-down:hover > ul {
  opacidad: 1;
  Top 100%;
  visibilidad: visible;
}

.main-nav .desplegable li {
  ancho mínimo: 180px;
  posición: relativa;
}

.main-nav .desplegable ul a {
  relleno: 10px 20px;
  tamaño de fuente: 13px;
  color: #008929;
}

.main-nav .drop-down ul a:hover,
.main-nav .drop-down ul .active > a,
.main-nav .drop-down ul li:hover > a {
  color: #1f6e25;
}

.main-nav .desplegable > a:después {
  contenido: "\f107";
  familia de fuentes: FontAwesome;
  relleno-izquierda: 10px;
}

.main-nav .desplegable .desplegable ul {
  superior: 0;
  izquierda: calc(100% - 30px);
}

.main-nav .drop-down .drop-down:hover > ul {
  opacidad: 1;
  superior: 0;
  izquierda: 100%;
}

.main-nav .desplegable .desplegable > a {
  relleno derecho: 35px;
}

.main-nav .drop-down .drop-down > a:después de {
  contenido: "\f105";
  posición: absoluta;
  derecha: 15px;
}

/* Navegación móvil */

.mobile-nav {
  posición: fijo;
  superior: 0;
  inferior: 0;
  índice z: 9999;
  desbordamiento-y: automático;
  izquierda: -260px;
  ancho: 260px;
  acolchado superior: 18px;
  fondo: rgba(19, 39, 57, 0.8);
  transición: 0,4 s;
}

.mobile-nav * {
  margen: 0;
  relleno: 0;
  estilo de lista: ninguno;
}

.mobile-nav un {
  bloqueo de pantalla;
  posición: relativa;
  color: #fff;
  relleno: 10px 20px;
  peso de fuente: 500;
}

.mobile-nav a: hover,
.mobile-nav .activo > a,
.mobile-nav li: hover > a {
  color: #83e476;
  texto-decoración: ninguno;
}

.mobile-nav .desplegable > a:después de {
  contenido: "\f078";
  familia de fuentes: FontAwesome;
  relleno-izquierda: 10px;
  posición: absoluta;
  derecha: 15px;
}

.mobile-nav .active.drop-down > a:después de {
  contenido: "\f077";
}

.mobile-nav .desplegable > a {
  relleno derecho: 35px;
}

.mobile-nav .desplegable ul {
  pantalla: ninguno;
  desbordamiento: oculto;
}

.mobile-nav .desplegable li {
  relleno-izquierda: 20px;
}

.mobile-nav-alternar {
  posición: fijo;
  derecha: 0;
  superior: 0;
  índice z: 9998;
  borde: 0;
  fondo: ninguno;
  tamaño de fuente: 24px;
  transición: todo 0.4s;
  contorno: ninguno !importante;
  altura de línea: 1;
  cursor: puntero;
  alineación de texto: derecha;
}

.mobile-nav-alternar i {
  margen: 18px 18px 0 0;
  color: #008934;
}

.mobile-nav-overly {
  ancho: 100%;
  altura: 100%;
  índice z: 9997;
  superior: 0;
  izquierda: 0;
  posición: fijo;
  fondo: rgba(19, 39, 57, 0.8);
  desbordamiento: oculto;
  pantalla: ninguno;
}

.mobile-nav-activo {
  desbordamiento: oculto;
}

.mobile-nav-activo .mobile-nav {
  izquierda: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*------------------------------------------------ --------------
# Secciones
-------------------------------------------------- ------------*/

/* Encabezado de secciones
---------------------------------*/

.sección-encabezado h3 {
  tamaño de fuente: 36px;
  color: #283d50;
  alineación de texto: centro;
  peso de fuente: 500;
  posición: relativa;
}

.sección-encabezado p {
  alineación de texto: centro;
  margen: automático;
  tamaño de fuente: 15px;
  parte inferior del relleno: 60px;
  color: #556877;
  ancho: 50%;
}

/* Sección con fondo
---------------------------------*/

.sección-bg {
  fondo: #ecf5ff;
}

/* Sección Acerca de nosotros
---------------------------------*/

#sobre {
  fondo: #fff;
  relleno: 60px 0;
}

#about .about-container .background {
  margen: 20px 0;
}

#acerca de .acerca del contenedor .contenido {
  fondo: #fff;
}

#about .about-container .title {
  color: #333;
  peso de fuente: 700;
  tamaño de fuente: 32px;
}

#sobre .sobre-contenedor p {
  altura de línea: 26px;
}

#about .about-container p:last-child {
  margen inferior: 0;
}

#about .about-container .icon-box {
  fondo: #fff;
  tamaño de fondo: portada;
  relleno: 0 0 30px 0;
}

#about .about-container .icon-box .icon {
  flotador izquierdo;
  fondo: #fff;
  ancho: 64px;
  altura: 64px;
  pantalla: -webkit-caja;
  pantalla: -webkit-flex;
  pantalla: -ms-flexbox;
  pantalla: flexible;
  -webkit-box-pack: centro;
  -webkit-justificar-contenido: centro;
  -ms-flex-paquete: centro;
  justificar-contenido: centro;
  -webkit-box-align: centro;
  -webkit-alinear-elementos: centro;
  -ms-flex-alinear: centro;
  alinear elementos: centro;
  -webkit-caja-orientar: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: columna;
  -ms-flex-direction: columna;
  dirección de flexión: columna;
  alineación de texto: centro;
  borde-radio: 50%;
  borde: 2px sólido #00ff6a;
  transición: todos los 0,3 s de entrada y salida;
}

#about .about-container .icon-box .icon i {
  color: #64dd4b;
  tamaño de fuente: 24px;
}

#about .about-container .icon-box:hover .icon {
  fondo: #06751e;
}

#about .about-container .icon-box:hover .icon i {
  color: #fff;
}

#about .about-container .icon-box .title {
  margen izquierdo: 80px;
  peso de fuente: 600;
  margen inferior: 5px;
  tamaño de fuente: 18px;
}

#about .about-container .icon-box .title a {
  color: #283d50;
}

#about .about-container .icon-box .descripción {
  margen izquierdo: 80px;
  altura de línea: 24px;
  tamaño de fuente: 14px;
}

#sobre .sobre-extra {
  acolchado superior: 60px;
}

#sobre .sobre-extra h4 {
  peso de fuente: 600;
  tamaño de fuente: 24px;
}

/* Sección de Servicios
---------------------------------*/

#servicios {
  relleno: 60px 0 40px 0;
  box-shadow: inserción 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
}

#servicios .box {
  relleno: 30px;
  posición: relativa;
  desbordamiento: oculto;
  borde-radio: 10px;
  margen: 0 10px 40px 10px;
  fondo: #fff;
  sombra de caja: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transición: todos los 0,3 s de entrada y salida;
}

#servicios .box: pasar el cursor {
  -webkit-transform: traducirY(-5px);
  transformar: traducirY(-5px);
}

#servicios .icon {
  posición: absoluta;
  izquierda: -10px;
  arriba: calc(50% - 32px);
}

#servicios .icon i {
  tamaño de fuente: 64px;
  altura de línea: 1;
  transición: 0,5 s;
}

#servicios .título {
  margen izquierdo: 40px;
  peso de fuente: 700;
  margen inferior: 15px;
  tamaño de fuente: 18px;
}

#servicios .título a {
  color: #111;
}

#servicios .box: hover .title a {
  color: #00ff88;
}

#servicios .descripción {
  tamaño de fuente: 14px;
  margen izquierdo: 40px;
  altura de línea: 24px;
  margen inferior: 0;
}

#porque nosotros {
  relleno: 60px 0;
  fondo: #00996b;
}

#por-que-nosotros .section-header h3,
#por-que-nosotros .section-header p {
  color: #fff;
}

#por-que-nosotros .card {
  fondo: #058f00;
  color del borde: #016e01;
  borde-radio: 10px;
  margen: 0 15px;
  relleno: 15px 0;
  alineación de texto: centro;
  color: #fff;
  transición: 0,3 s de entrada y salida;
  altura: 100%;
}

#por-que-nosotros .card:hover {
  fondo: #007a47;
  color del borde: #007a2f;
}

#por-que-nosotros .card i {
  tamaño de fuente: 48px;
  acolchado superior: 15px;
  color: #bfddfe;
}

#por-que-nosotros .card h5 {
  tamaño de fuente: 22px;
  peso de fuente: 600;
}

#por-que-nosotros .card p {
  tamaño de fuente: 15px;
  color: #d8eafe;
}

#por-que-nosotros .card .readmore {
  color: #fff;
  peso de fuente: 600;
  pantalla: bloque en línea;
  transición: 0,3 s de entrada y salida;
  borde inferior: #008f1f sólido 2px;
}

#por-que-nosotros .card .readmore:hover {
  borde inferior: #fff sólido 2px;
}

#por-que-nosotros .contadores {
  acolchado superior: 40px;
}

#por qué-nosotros .counters span {
  familia tipográfica: "Montserrat", sans-serif;
  fuente-peso: negrita;
  tamaño de fuente: 48px;
  bloqueo de pantalla;
  color: #fff;
}

#por-que-nosotros .contadores p {
  relleno: 0;
  margen: 0 0 20px 0;
  familia tipográfica: "Montserrat", sans-serif;
  tamaño de fuente: 14px;
  color: #cce5ff;
}


/* CSS para la seccion del equipo
---------------------------------*/

#equipo {
  fondo: #fff;
  relleno: 60px 0;
  sombra de caja: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
}

#miembro del equipo {
  alineación de texto: centro;
  margen inferior: 20px;
  posición: relativa;
  borde-radio: 50%;
  desbordamiento: oculto;
}

#equipo .miembro .miembro-info {
  opacidad: 0;
  pantalla: -webkit-caja;
  pantalla: -webkit-flex;
  pantalla: -ms-flexbox;
  pantalla: flexible;
  -webkit-box-pack: centro;
  -webkit-justificar-contenido: centro;
  -ms-flex-paquete: centro;
  justificar-contenido: centro;
  -webkit-box-align: centro;
  -webkit-alinear-elementos: centro;
  -ms-flex-alinear: centro;
  alinear elementos: centro;
  posición: absoluta;
  inferior: 0;
  superior: 0;
  izquierda: 0;
  derecha: 0;
  transición: 0,2 s;
}

#equipo .miembro .miembro-info-contenido {
  margen superior: 50px;
  transición: margen 0,2 s;
}

#equipo .miembro: hover .miembro-info {
  fondo: rgba(0, 128, 17, 0.7);
  opacidad: 1;
  transición: 0,4 s;
}

#team .member:hover .member-info-content {
  margen superior: 0;
  transición: margen 0,4 s;
}

#equipo .miembro h4 {
  peso de fuente: 700;
  margen inferior: 2px;
  tamaño de fuente: 18px;
  color: #fff;
}

#equipo .miembro span {
  estilo de fuente: cursiva;
  bloqueo de pantalla;
  tamaño de fuente: 13px;
  color: #fff;
}

#equipo .miembro .social {
  margen superior: 15px;
}

#equipo .miembro .social a {
  transición: ninguna;
  color: #fff;
}

#equipo .miembro .social a:hover {
  color: #077a24;
}

#equipo .miembro .social i {
  tamaño de fuente: 18px;
  margen: 0 2px;
}

/* CSS para contenedores con iconos y videos
---------------------------------*/
.Contenedor1 {
	ancho: 100%;
	altura: 500px;
	fondo:rgb(73, 158, 70);
  tamaño de fuente: 10px;
  margen: automático; /*centro la caja*/
	pantalla:flex;
	dirección flexible:fila;
	envoltura flexible: envoltura;

	/*flex-flow: ajuste de fila;*/
	justificar-contenido:espacio-entre;
	/*alinear-elementos:centro;*/
	alinear-contenido:centro;
}
.Contenedor2 {
	ancho: 100%;
	altura: 500px;
	fondo: rgb (21, 82, 19);
   
  margen: automático; /*centro la caja*/
	pantalla:flex;
	dirección flexible:fila;
	envoltura flexible: envoltura;

	/*flex-flow: ajuste de fila;*/
	justificar-contenido:espacio-entre;
	/*alinear-elementos:centro;*/
	alinear-contenido:centro;
}
.foto
      {
       ancho: 200px;
       altura: 200px;
       alinear elementos: centro;
      
          
       }

.cajaX {
	ancho: 300px;
	altura: 300px;
	fondo:#69db8f;
	alineación de texto: centro;
	margen: 70px;
	relleno: 100px;
	tamaño de fuente: 40px;
	color: #fff;
	/*orden:1;*/
	flexible: 1 1 automático;
}
.cajaX :flotar{
  color: #2364aa59;
}
#contacto {
  sombra de caja: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  relleno: 60px 0;
  desbordamiento: oculto;
}

#contacto .sección-encabezado {
  parte inferior del relleno: 30px;
}

#contacto .contacto-acerca de h3 {
  tamaño de fuente: 36px;
  margen: 0 0 10px 0;
  relleno: 0;
  altura de línea: 1;
  familia tipográfica: "Montserrat", sans-serif;
  peso de fuente: 300;
  espaciado entre letras: 3px;
  transformación de texto: mayúsculas;
  color: #00ff80;
}

#contacto .contacto-acerca de p {
  tamaño de fuente: 14px;
  altura de línea: 24px;
  familia tipográfica: "Montserrat", sans-serif;
  color: #888;
}

#contacto .social-enlaces {
  parte inferior del relleno: 20px;
}

#contacto .social-enlaces a {
  tamaño de fuente: 18px;
  pantalla: bloque en línea;
  fondo: #fff;
  color: #216e0a;
  altura de línea: 1;
  relleno: 8px 0;
  margen derecho: 4px;
  borde-radio: 50%;
  alineación de texto: centro;
  ancho: 36px;
  altura: 36px;
  transición: 0,3 s;
  borde: 1px sólido #0ca007;
}

#contacto .social-links a: hover {
  fondo: #00ff73;
  color: #fff;
}

#Datos de contacto {
  color: #283d50;
}

#contacto .info i {
  tamaño de fuente: 32px;
  color: #00ff40;
  flotador izquierdo;
  altura de línea: 1;
}

#contacto .info p {
  relleno: 0 0 10px 36px;
  altura de línea: 28px;
  tamaño de fuente: 14px;
}

#contacto .formulario #enviarmensaje {
  color: #117e2c;
  borde: 1px sólido #00ff40;
  pantalla: ninguno;
  alineación de texto: centro;
  relleno: 15px;
  peso de fuente: 600;
  margen inferior: 15px;
}


#contacto .formulario de entrada,
#contacto .formulario textarea {
  borde-radio: 0;
  sombra de caja: ninguna;
  tamaño de fuente: 14px;
}

#contacto .formulario botón[tipo="enviar"] {
  fondo: #3ed66c;
  borde: 0;
  borde-radio: 20px;
  relleno: 8px 30px;
  color: #fff;
  transición: 0,3 s;
}

#contacto .botón de formulario[tipo="enviar"]: pasar el cursor {
  fondo: #41db62;
  cursor: puntero;
}

/*------------------------------------------------ --------------
# pie de página
-------------------------------------------------- ------------*/

#pie de página {
  fondo: #58bb4083;
  relleno: 0 0 30px 0;
  color: #eee;
  tamaño de fuente: 14px;
}

#footer .footer-top {
  fondo: #117e32;
  relleno: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margen inferior: 30px;
}

#footer .footer-top .footer-info h3 {
  tamaño de fuente: 34px;
  margen: 0 0 20px 0;
  relleno: 2px 0 2px 0;
  altura de línea: 1;
  familia tipográfica: "Montserrat", sans-serif;
  color: #fff;
  peso de fuente: 400;
  espaciado entre letras: 3px;
  transformación de texto: mayúsculas;
}

#footer .footer-top .footer-info p {
  tamaño de fuente: 13px;
  altura de línea: 24px;
  margen inferior: 0;
  familia tipográfica: "Montserrat", sans-serif;
  color: #ecf5ff;
}

#footer .footer-top .social-links a {
  tamaño de fuente: 18px;
  pantalla: bloque en línea;
  fondo: #29b96a;
  color: #fff;
  altura de línea: 1;
  relleno: 8px 0;
  margen derecho: 4px;
  borde-radio: 50%;
  alineación de texto: centro;
  ancho: 36px;
  altura: 36px;
  transición: 0,3 s;
}

#footer .footer-top .social-links a:hover {
  fondo: #00d57c;
  color: #fff;
}

#footer .footer-top h4 {
  tamaño de fuente: 14px;
  fuente-peso: negrita;
  color: #fff;
  transformación de texto: mayúsculas;
  posición: relativa;
  parte inferior del relleno: 10px;
}

#footer .footer-top .footer-links {
  margen inferior: 30px;
}

#footer .footer-top .footer-links ul {
  estilo de lista: ninguno;
  relleno: 0;
  margen: 0;
}

#footer .footer-top .footer-links ul li {
  relleno: 8px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  acolchado superior: 0;
}

#footer .footer-top .footer-links ul a {
  color: #ecf5ff;
}

#footer .footer-top .footer-links ul a:hover {
  color: #74fc96;
}

#footer .footer-top .footer-contact {
  margen inferior: 30px;
}

#footer .footer-top .footer-contact p {
  altura de línea: 26px;
}

#footer .footer-top .footer-newsletter {
  margen inferior: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  borde: 0;
  relleno: 6px 8px;
  ancho: 65%;
}

#footer .footer-top .footer-newsletter entrada[tipo="enviar"] {
  fondo: #00ff95;
  borde: 0;
  ancho: 35%;
  relleno: 6px 0;
  alineación de texto: centro;
  color: #fff;
  transición: 0,3 s;
  cursor: puntero;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  fondo: #00cc66;
}

#pie de página .derechos de autor {
  alineación de texto: centro;
  acolchado superior: 30px;
}

#footer .créditos {
  alineación de texto: centro;
  tamaño de fuente: 13px;
  color: #f1f7ff;
}

#footer .acredita un {
  color: #bfddfe;
}

#footer .credits a: hover {
  color: #f1f7ff;
}

/*------------------------------------------------ --------------
# Consultas de medios receptivos
-------------------------------------------------- ------------*/

@media (ancho mínimo: 992 px) {
  #testimonials .testimonial-item p {
    ancho: 80%;
  }
}

@media (ancho máximo: 991px) {
  #encabezado {
    altura: 60px;
    relleno: 10px 0;
  }

  #encabezado .logo h1 {
    tamaño de fuente: 28px;
    relleno: 8px 0;
  }

  #introducción {
    relleno: 140px 0 60px 0;
  }

  #introducción .introducción-img {
    ancho: 80%;
    flotante: ninguno;
    margen: 0 automático 25px automático;
  }

  #intro .intro-info {
    ancho: 80%;
    flotante: ninguno;
    margen: automático;
    alineación de texto: centro;
  }

  #por-que-nosotros .card {
    margen: 0;
  }
}

@media (ancho máximo: 768px) {
  .volver arriba {
    abajo: 15px;
  }
}

@media (ancho máximo: 767px) {
  #intro .intro-info {
    ancho: 100%;
  }

  #intro .intro-info h2 {
    tamaño de fuente: 34px;
    margen inferior: 30px;
  }

  .sección-encabezado p {
    ancho: 100%;
  }

  #testimonials .testimonial-item {
    alineación de texto: centro;
  }

  #testimonials .testimonial-item .testimonial-img {
    flotante: ninguno;
    margen: automático;
  }

  #testimonials .testimonial-item h3,
  #testimonials .testimonial-item h4,
  #testimonials .testimonial-item p {
    margen izquierdo: 0;
  }
}

@media (ancho máximo: 574px) {
  #introducción {
    relleno: 100px 0 20px 0;
  }
}