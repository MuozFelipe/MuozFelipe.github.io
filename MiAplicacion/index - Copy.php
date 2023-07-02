<!DOCTYPE html>
<html lang="es">
    <!--html de la pagina de inicio-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
        <link rel="stylesheet" href="CSS/index.css">  
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@0,300;1,700&display=swap" rel="stylesheet">  
        <script defer src="script.js"></script>
        <title>
            El Faro - Inicio
        </title> 
    </head>
    <body>
        <header class="topheader">
            <div class="row">
                <div class="col-md-1">
                    <img src="img/descarga.png" style="width: 50%;">
                </div>
            </div>
            <nav class="topnav">
              <a href="#" class="logo">
                <img
                  height="50"
                  width="50"
                  src="img/Logo.jpeg"
                  alt="programador"
                />
                <div class="logotype">
                  El Faro <br />
                  Periódico
                </div>
              </a>
              <button class="open-menu" aria-label="Abrir menú">
                <img src="img/hamburger-icon.svg" alt="abrir menú" />
              </button>
              <ul class="menu">
                <button class="close-menu" aria-label="Cerrar menú">
                  <img src="img/close-icon.svg" alt="cerrar menú" />
                </button>
                <li><a href="#Inicio" class="selected">Inicio</a></li>
                <li><a href="#Noticias">Noticias</a></li>
                <li><a href="#Deportes">Deportes</a></li>
                <li><a href="#Negocios">Negocios</a></li>
                
              </ul>
            </nav>
        </header>
      

        <div class="horizontal-padding vertical-padding">
            <section class="Inicio" id="Inicio">
                <div class="Inicio-info">
                  <h1 class="Inicio-title">Bienvenidos a <br />El Faro<br />Periódico</h1>
                  <p class="Inicio-details"></p>
                 </div>
                <span class="Inicio-img-section">
                    <img
                    class="Inicio-img"
                    src="img/Logo.jpeg";
                    alt="programador"
                    />
                    <div class="Inicio-img-line"></div>
                </span>
            </section>
        </div>
        <div id="clock"> </div>
        <main>
            <h1 class="Resumen-title" id="Resumen">Resumen de la semana</h1>
            <section class="contenido">
                <div class="mostrador" id="mostrador">
                    <h1 class="Resumen-title">Noticias</h1>
                    <div class="fila">
                        
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto1" >
                                <img src="img/tetraplijeco2.jpg" alt="">
                            </div>
                            <p class="descripcion">El increíble video que muestra a un tetrapléjico volver a caminar gracias a revolucionario dispositivo.</p>
                            <span class="precio" style="display: none;">Presenta la situación de Gert-Jan, de 40 años, que sufre una lesión medular en las vértebras cervicales tras un accidente de bicicleta que dejó él parapléjico. Gracias al puente digital recuperó el control de sus piernas. Para establecer este puente digital, son necesarios dos tipos de implantes electrónicos. “Implantamos dispositivos llamados WIMAGINE sobre la región del cerebro responsable de los movimientos de las piernas”, explica la neurocirujana Jocelyne Bloch. Este dispositivo desarrollado por el CEA permite decodificar las señales eléctricas que genera el cerebro cuando pensamos en caminar. Al mismo tiempo, se colocó un neuroestimulador conectado a un campo de electrodos sobre la región de la médula espinal que controla el movimiento de las piernas”.</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/Es cabeza.jpg" alt="">
                            </div>
                            <p class="descripcion" id>“Es cabeza, todo cabeza aquí”: el audio del VAR en el penal que Chile reclamó frente a Paraguay</p>
                            <span class="precio" style="display: none;">El delantero paraguayo Carlos González se eleva en área propia y despeja el balón. Los jugadores chilenos reclaman mano. El más efusivo es Arturo Vidal, quien levanta las manos, le advierte al juez colombiano Wilmar Roldán y lanza la pelota fuera del campo de juego para forzar la revisión por parte del VAR. El árbitro del encuentro se concentra en el audífono por el que se comunica con el VOR, la cabina que administra el videoarbitraje. Seguramente por indicación de sus colaboradores, opta por realizar la ya icónica señal del monitor y va al centro de la cancha. Para pesar de los intereses de la Roja, mantiene la decisión. No hubo tiro desde los doce pasos para Chile.</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/puerto 2.jpg" alt="">
                            </div>
                            <h3></h3>
                            <p class="descripcion">Chancay, el puerto que China construye en Perú y que amenaza a Chile</p>
                            <span class="precio" style="display: none;">Shanghái-Chancay-San Antonio. A 80 kilómetros al norte de Lima, un “megapuerto” como no se ha visto antes en Sudamérica se construye, siendo el primero de la naviera china Cosco Shipping en la región. Con una inversión de más de 3.000 millones de dólares, se especula que el recinto acaparará gran parte de los barcos con mercancías que lleguen al continente. El puerto, que según lo planificado estará operativo en el segundo semestre de 2024, debería significar un impacto enorme en la economía peruana, atendiendo el crecimiento de la demanda portuaria. A pesar de esto, sobre todo en Chile, hay quienes ven con preocupación la construcción de este coloso, temiendo que les haga sombra a puertos como el de San Antonio.</span>
                        </div>
                    </div>
                    <h1 class="Resumen-title">Deportes</h1>
                    <div class="fila">


                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/albert rivera.jpg" alt="">
                            </div>
                            <p class="descripcion">Albert Riera guía al Auckland City a su undécima Champions de Oceanía.</p>
                            <span class="precio" style="display: none;">Albert Riera Vidal guió al Auckland City neozelandés a su undécimo título de la Liga de Campeones de Oceanía, al imponerse este sábado al Suva fiyiano por 4-2 tras una prórroga en la final disputada en estadio Port Vila Freshwater (Vanuatu).Pese a marcharse al descanso con una ventaja de 2-0 con los tantos de Angus Kikolly (m.34) y Ryan de Vries (m.48+), la expulsión del centrocampista español Gerard Garriga (m.60) permitió al Suva reaccionar y forzar la prórroga con las dianas de Alex Saniel (m.66) y Marlon Tahioa (m.84)</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/celtics.jpg" alt="">
                            </div>
                            <p class="descripcion" id>Precedentes de una lucha entre los Celtics y la historia: derribar el muro del 3-0</p>
                            <span class="precio" style="display: none;">Hasta en 151 ocasiones una serie de playoffs NBA ha comenzado con un 3-0 a favor de uno de los dos equipos. Y, de momento, el récord de estos cruces es de 150-0 a favor del equipo que se hizo con esa ventaja. La 151 la firmó Miami Heat el pasado lunes 22 de mayo cuando selló su tercera victoria consecutiva para arrancar la serie ante unos Boston Celtics que partían con factor cancha. En su camino hacia las Finales de la Conferencia Este, los de Florida han dejado su huella en los libros de historia por ser el primer equipo de la historia del play-in en pasar de ronda en playoffs (le seguirían los Lakers) y el quinto conjunto que entra como octavo clasificado y elimina al primero.</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/gijon.jpg" alt="">
                            </div>
                            <h3></h3>
                            <p class="descripcion">Exito en Gijón del Circuito RPT - Marca Sub16 & Sub18</p>
                            <span class="precio" style="display: none;">Después del éxito obtenido en la primera edición celebrada el pasado año con la categoría Sub16, el Circuito Nacional RPT - Marca volvió a Gijón con dos categorías: Sub16 y Sub18, que ha culminado en un rotundo éxito, con la participación de un centenar de jugadores de diferentes regiones de España. Las magníficas instalaciones del Real Grupo de Cultura Covadonga acogieron una nueva prueba del XXVIII Circuito Nacional RPT - MARCA Jóvenes Promesas Sub16 y Junior Cup U18 by Wilson & Tennis Point, con el apoyo de la Federación de Tenis del Principado de Asturias, el Patronato Deportivo de Gijón y de la Real Federación Española de Tenis.</span>
                        </div>
                    </div>
                    <h1 class="Resumen-title">Negocios</h1>
                    <div class="fila">
                      
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/WeXchange.jpg" alt="">
                            </div>
                            <p class="descripcion">Startup chilena consigue ser finalista en WeXchange Women STEMpreneurs Competition 2023</p>
                            <span class="precio" style="display: none;">La competencia WeXchange Women STEMpreneurs Competition 2023 impulsada por el Grupo Banco Interamericano de Desarrollo, BID Lab, que conecta emprendedoras STEM (ciencias, tecnología, ingeniería y matemáticas, por sus siglas en inglés) de América Latina y el Caribe con mentores e inversores, y Google, anunciaron a las 15 compañías que fueron seleccionadas como finalistas. Dentro de este grupo de startups lideradas por mujeres, una es chilena. Se trata de Suncast, compañía de tecnología, encargada de proveer modelos predictivos para las energías renovables, fundada y dirigida por Constanza Levicán. La empresa fue elegida entre más 340 postulantes de 25 países con soluciones en los campos de edtech, healthtech, fintech, SaaS, biotech, climatetech, agtech e ecommerce, entre otras.</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/Startup Chilena.jpg" alt="">
                            </div>
                            <p class="descripcion" id>Startup chilena crea app que revoluciona los sistemas de arriendo de autos</p>
                            <span class="precio" style="display: none;">Frente a los cambios de hábitos del consumidor y sus formas de moverse, se han hecho cada vez más frecuentes las nuevas alternativas de ‘car sharing’: rápidas, fáciles de usar y sobre todo seguras. De esta manera, los ‘rent a car’ tradicionales han ido quedando un poco obsoletos. En este nuevo contexto, mucho más tecnológico y con personas más interesadas en cuidado del medio ambiente, la startup chilena Lolocar creó una aplicación para facilitar la vida a quienes necesitan de un vehículo, pero no pueden o no desean comprar. El fundador y CEO de la compañía, Enrique Cabo, señala que “las personas hoy en día buscan movilizarse de forma segura, económica y a largo plazo. Contar con un vehículo requiere mantenciones que pueden escapar de los presupuestos familiares”</span>
                        </div>
                        <div class="item" onclick="cargar(this)">
                            <div class="contenedor-foto">
                                <img src="img/clean.jpg" alt="">
                            </div>
                            <h3></h3>
                            <p class="descripcion">Cleanlight, la startup chilena de energía solar que avanza por Latinoamérica</p>
                            <span class="precio" style="display: none;">Esta cleantech nació de la fabricación de tecnologías innovadoras para el desarrollo, construcción y comercialización de torres de iluminación con paneles solares que cumplen con estándares de seguridad y funcionamiento óptimo para hacer frente a las adversas condiciones de la industria minera. Esto, dado que sus productos buscan reemplazar la generación de energía a través de un motor diésel, por la que proviene y se acumula en fuentes solares, aprovechada por paneles. A la fecha, Cleanlight ha instalado más de 3,5 megavatios de potencia fotovoltaica entre 2021 y 2022, lo que equivale a energizar una ciudad como Antofagasta. Además, la empresa está dando sus primeros pasos para expandirse por Latinoamérica y Estados Unidos, e incluso apuesta por incorporar la Inteligencia Artificial en sus servicios.</span>
                        </div>
                    </div>

                </div>
                <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
                <div class="seleccion" id="seleccion">
                    <div class="cerrar" onclick="cerrar()">
                        &#x2715
                    </div>
                    <div class="info">

                        <img src="img/tetraplijeco2.jpg"  id="img">
                        
                        <h2 id="modelo">titulo noticia</h2>
                        <p id="descripcion">Descripción </p>
        
                        <span class="precio" id="precio">$ 130</span>
        
                       
                        
                    </div>
                </div>
            </section>





































            <section>
                <div class="Noticias" id="Noticias" >
                    <div class="Noticias-body">
                        <div class="Noticias-info">
                            <h1 class="Noticias-title">Noticias</h1>
                            <div class="grid" > 
                                <div>
                                    
                                    <article class="bloque">
                                        <h3>El increíble video que muestra a un tetrapléjico volver a caminar gracias a revolucionario dispositivo.</h3>
                                        <h4>25 Mayo 2023</h4>
                                        <p>Presenta la situación de Gert-Jan, de 40 años, que sufre una lesión medular en las vértebras cervicales tras un accidente de bicicleta que dejó él parapléjico. Gracias al puente digital recuperó el control de sus piernas. Para establecer este puente digital, son necesarios dos tipos de implantes electrónicos. “Implantamos dispositivos llamados WIMAGINE sobre la región del cerebro responsable de los movimientos de las piernas”, explica la neurocirujana Jocelyne Bloch. Este dispositivo desarrollado por el CEA permite decodificar las señales eléctricas que genera el cerebro cuando pensamos en caminar. Al mismo tiempo, se colocó un neuroestimulador conectado a un campo de electrodos sobre la región de la médula espinal que controla el movimiento de las piernas”.</p>
                                        <video controls style="width: 250px; height: 250px;">
                                        <source src="videos/Video 1.mp4" type="video/mp4">
                                        </video>
                                        <h5>
                                        <a href="https://www.latercera.com/que-pasa/noticia/el-increible-video-que-muestra-a-un-tetraplejico-volver-a-caminar-gracias-a-revolucionario-dispositivo/GOOKB3THAFGWNB5MMU2QI4LOKQ/">Publicado por La Tercera</a>
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>“Es cabeza, todo cabeza aquí”: el audio del VAR en el penal que Chile reclamó frente a Paraguay</h3>
                                        <h4>25 Junio 2021</h4>
                                        <p>El delantero paraguayo Carlos González se eleva en área propia y despeja el balón. Los jugadores chilenos reclaman mano. El más efusivo es Arturo Vidal, quien levanta las manos, le advierte al juez colombiano Wilmar Roldán y lanza la pelota fuera del campo de juego para forzar la revisión por parte del VAR. El árbitro del encuentro se concentra en el audífono por el que se comunica con el VOR, la cabina que administra el videoarbitraje. Seguramente por indicación de sus colaboradores, opta por realizar la ya icónica señal del monitor y va al centro de la cancha. Para pesar de los intereses de la Roja, mantiene la decisión. No hubo tiro desde los doce pasos para Chile.</p>
                                        <audio controls>
                                        <source src="audio/Audio1.mp3" type="audio/mp3">
                                        </audio>
                                        <h5>
                                        <a href="https://www.latercera.com/el-deportivo/noticia/es-cabeza-todo-cabeza-aqui-el-audio-del-var-en-el-penal-que-chile-reclamo-frente-a-paraguay/CAJVHTUB7VHH7FGQTPTHZPF4GM/">Publicado por La Tercera</a>
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>Chancay, el puerto que China construye en Perú y que amenaza a Chile</h3>
                                        <h4>27 Mayo 2023</h4>
                                        <p>Shanghái-Chancay-San Antonio. A 80 kilómetros al norte de Lima, un “megapuerto” como no se ha visto antes en Sudamérica se construye, siendo el primero de la naviera china Cosco Shipping en la región. Con una inversión de más de 3.000 millones de dólares, se especula que el recinto acaparará gran parte de los barcos con mercancías que lleguen al continente. El puerto, que según lo planificado estará operativo en el segundo semestre de 2024, debería significar un impacto enorme en la economía peruana, atendiendo el crecimiento de la demanda portuaria. A pesar de esto, sobre todo en Chile, hay quienes ven con preocupación la construcción de este coloso, temiendo que les haga sombra a puertos como el de San Antonio.</p>
                                        <h5>
                                        <a href="https://www.latercera.com/la-tercera-sabado/noticia/chancay-el-puerto-que-china-construye-en-peru-y-que-amenaza-a-chile/WQHC5ZAUN5H33LXWKEQZDNN7EA/">Publicado por La Tercera</a>
                                        </h5>
            
                                    </article>
                                </div>
                                <div id="noticiasSection">
                                        <h2></h2>
                                        
                                        <ul id="noticiasList"></ul>
                                </div>
                                
                            </div>    
                        </div>
                    </div>    
                </div>
            </section>
            <section>
                <div class="Deportes" id="Deportes" >
                    <div class="Deportes-body">
                        <div class="Deportes-info">
                            <h1 class="Deportes-title">Deportes</h1>
                            <div class="grid" >
                                <div>
                                    <article class="bloque">
                                        <h3>Albert Riera guía al Auckland City a su undécima Champions de Oceanía</h3>
                                        <h4>Fútbol Internacional</h4>
                                        <p>Albert Riera Vidal guió al Auckland City neozelandés a su undécimo título de la Liga de Campeones de Oceanía, al imponerse este sábado al Suva fiyiano por 4-2 tras una prórroga en la final disputada en estadio Port Vila Freshwater (Vanuatu).Pese a marcharse al descanso con una ventaja de 2-0 con los tantos de Angus Kikolly (m.34) y Ryan de Vries (m.48+), la expulsión del centrocampista español Gerard Garriga (m.60) permitió al Suva reaccionar y forzar la prórroga con las dianas de Alex Saniel (m.66) y Marlon Tahioa (m.84).</p>
                                        <h5>
                                            <a href="https://www.marca.com/futbol/futbol-internacional/2023/05/27/6471cb03e2704ea3ba8b45a5.html">Marca.com</a>
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>Precedentes de una lucha entre los Celtics y la historia: derribar el muro del 3-0</h3>
                                        <h4>Basketball</h4>
                                        <p>Hasta en 151 ocasiones una serie de playoffs NBA ha comenzado con un 3-0 a favor de uno de los dos equipos. Y, de momento, el récord de estos cruces es de 150-0 a favor del equipo que se hizo con esa ventaja. La 151 la firmó Miami Heat el pasado lunes 22 de mayo cuando selló su tercera victoria consecutiva para arrancar la serie ante unos Boston Celtics que partían con factor cancha. En su camino hacia las Finales de la Conferencia Este, los de Florida han dejado su huella en los libros de historia por ser el primer equipo de la historia del play-in en pasar de ronda en playoffs (le seguirían los Lakers) y el quinto conjunto que entra como octavo clasificado y elimina al primero.</p>
                                        <h5>
                                            <a href="https://www.marca.com/baloncesto/nba/2023/05/27/6471119ae2704e954c8b457f.html">Marca.com</a>
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>Exito en Gijón del Circuito RPT - Marca Sub16 & Sub18</h3>
                                        <h4>Tennis</h4>
                                        <p>Después del éxito obtenido en la primera edición celebrada el pasado año con la categoría Sub16, el Circuito Nacional RPT - Marca volvió a Gijón con dos categorías: Sub16 y Sub18, que ha culminado en un rotundo éxito, con la participación de un centenar de jugadores de diferentes regiones de España. Las magníficas instalaciones del Real Grupo de Cultura Covadonga acogieron una nueva prueba del XXVIII Circuito Nacional RPT - MARCA Jóvenes Promesas Sub16 y Junior Cup U18 by Wilson & Tennis Point, con el apoyo de la Federación de Tenis del Principado de Asturias, el Patronato Deportivo de Gijón y de la Real Federación Española de Tenis.</p>
                                        <h5>
                                            <a href="https://www.marca.com/tenis/2023/05/27/647219aa22601d38698b459c.html">Marca.com</a>
                                        </h5>
                                    </article>
                                </div>
                                <div id="deportesSection">
                                    <h2></h2>
                                   
                                    <ul id="deportesList"></ul>
                                </div>
                                
                            </div>                           
                        </div>
                    </div>    
                </div> 
            </section>
            <section>
                <div class="Negocios" id="Negocios" >
                    <div class="Negocios-body">
                        <div class="Negocios-info">
                            <h1 class="Negocios-title">Negocios</h1>
                            <div class="grid">
                
                                <div>
                                    <article class="bloque">
                                        <h3>Startup chilena consigue ser finalista en WeXchange Women STEMpreneurs Competition 2023</h3>
                                        <h4>Emprendimiento</h4>
                                        <p>La competencia WeXchange Women STEMpreneurs Competition 2023 impulsada por el Grupo Banco Interamericano de Desarrollo, BID Lab, que conecta emprendedoras STEM (ciencias, tecnología, ingeniería y matemáticas, por sus siglas en inglés) de América Latina y el Caribe con mentores e inversores, y Google, anunciaron a las 15 compañías que fueron seleccionadas como finalistas. Dentro de este grupo de startups lideradas por mujeres, una es chilena. Se trata de Suncast, compañía de tecnología, encargada de proveer modelos predictivos para las energías renovables, fundada y dirigida por Constanza Levicán. La empresa fue elegida entre más 340 postulantes de 25 países con soluciones en los campos de edtech, healthtech, fintech, SaaS, biotech, climatetech, agtech e ecommerce, entre otras.</p>
                                        <h5>
                                            <a href="https://www.emol.com/noticias/Economia/2023/05/26/1096258/finalistas-wexchange-women-stempreneurs-competition.html">Emol.com</a>
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>Startup chilena crea app que revoluciona los sistemas de arriendo de autos</h3>
                                        <h4>Tecnología</h4>
                                        <p>Frente a los cambios de hábitos del consumidor y sus formas de moverse, se han hecho cada vez más frecuentes las nuevas alternativas de ‘car sharing’: rápidas, fáciles de usar y sobre todo seguras. De esta manera, los ‘rent a car’ tradicionales han ido quedando un poco obsoletos. En este nuevo contexto, mucho más tecnológico y con personas más interesadas en cuidado del medio ambiente, la startup chilena Lolocar creó una aplicación para facilitar la vida a quienes necesitan de un vehículo, pero no pueden o no desean comprar. El fundador y CEO de la compañía, Enrique Cabo, señala que “las personas hoy en día buscan movilizarse de forma segura, económica y a largo plazo. Contar con un vehículo requiere mantenciones que pueden escapar de los presupuestos familiares”</p>
                                        <h5>
                                            <a href="https://www.emol.com/noticias/Economia/2023/05/24/1096063/lolocar-app-para-rentar-autos.html">Emol.com</a> 
                                        </h5>
                                    </article>
                                </div>
                                <div>
                                    <article class="bloque">
                                        <h3>Cleanlight, la startup chilena de energía solar que avanza por Latinoamérica</h3>
                                        <h4>Sustentabilidad</h4>
                                        <p>Esta cleantech nació de la fabricación de tecnologías innovadoras para el desarrollo, construcción y comercialización de torres de iluminación con paneles solares que cumplen con estándares de seguridad y funcionamiento óptimo para hacer frente a las adversas condiciones de la industria minera. Esto, dado que sus productos buscan reemplazar la generación de energía a través de un motor diésel, por la que proviene y se acumula en fuentes solares, aprovechada por paneles. A la fecha, Cleanlight ha instalado más de 3,5 megavatios de potencia fotovoltaica entre 2021 y 2022, lo que equivale a energizar una ciudad como Antofagasta. Además, la empresa está dando sus primeros pasos para expandirse por Latinoamérica y Estados Unidos, e incluso apuesta por incorporar la Inteligencia Artificial en sus servicios.</p>
                                        <h5>
                                            <a href="https://www.emol.com/noticias/Economia/2023/05/22/1095592/camila-svec-cleantech-energia-solar.html">Emol.com</a>
                                        </h5>
                                    </article>
                                </div>
                                <div id="negociosSection">
                                    <h2></h2>
                                   
                                    <ul id="negociosList"></ul>
                                </div>
                                
                            </div>
                        </div>                           
                    </div>
                </div>    
            </section>
            <section>
                <form id="articleForm" class="formulario2">
                    <h2 class="formulario__titulo2">Nuevo Articulo</h2>
                    <input type="text" class="formulario__input2" id="title" required>
                    <label for="title"  class="formulario__label2">Título:</label>
                   
                    <textarea id="content" class="formulario__textarea" required></textarea>
                    <label for="content"  class="formulario__label2">Contenido:</label>
        
                    <label for="section">Sección:</label>
                    <select id="section" required>
                      <option value="">Seleccionar una sección</option>
                      <option value="noticias">Noticias</option>
                      <option value="deportes">Deportes</option>
                      <option value="negocios">Negocios</option>
                    </select>
                
                    <button class="formulario__submit2" type="submit">Agregar Artículo</button>
                  </form>
        
            </section>
        </main>


        <form action="/MiAplicacion/PHP/Model/Model_Contacto.php" id="Contacto" class="formulario2" method="post">
            <h2 class="formulario__titulo2">Contacto</h2>

        <input id="Nombre2" name="Nombre2" class="formulario__input2" type="text" autofocus required>
        <label for="" class="formulario__label2">Nombre</label>
        <input id="Mensaje" name="Mensaje" class="formulario__input2" type="text"autofocus required>
        <label for="" class="formulario__label2">Mensaje</label>
        
        <button class="formulario__submit2" type="submit">ENVIAR</button>
        </form>
        


        <form action="/MiAplicacion/PHP/Model/Model.php" id="Registro" class="formulario2" method="post">
            <h2 class="formulario__titulo2">Registro de cuenta</h2>

        <input id="Nombre" name="Nombre" class="formulario__input2" type="text" autofocus required>
        <label for="" class="formulario__label2">Nombre</label>
        <input id="Email" name="Email" class="formulario__input2" type="text" autofocus required>
        <label for="" class="formulario__label2">Email</label>
        <input id="Password" name="Password" class="formulario__input2" type="text" autofocus required>
        <label for="" class="formulario__label2">Password</label>
        
        <button class="formulario__submit2" type="submit">Crear</button>
        </form>
        









        
        <footer class="footer" >
            <div class="horizontal-padding vertical-padding">
                <section class="Final" id="Final">
                    <div class="Final-info">
                    <h1 class="Final-title">Gracias por visitar <br />El Faro<br />Periódico</h1>
                    <p class="Final-details"></p>
                    </div>
                    <span class="Final-img-section">
                        <img
                        class="Final-img"
                        src="img/Logo.jpeg";
                        alt="programador"
                        />
                        <div class="Final-img-line"></div>
                    </span>
                </section>
            </div>

            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Compañia</h4>
                        <ul>
                            <li><a href="#">Sobre nosotros</a></li>
                            <li><a href="#">Nuestros servicios</a></li>
                            <li><a href="#">Politica de privacidad</a></li>
                            <li><a href="#">Programa de afiliación</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Consigue ayuda</h4>
                        <ul>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Contactenos</a></li>
                            <li><a href="#">Contacto comercial</a></li>
                            <li><a href="#">Estado del pedido</a></li>
                            <li><a href="#">Terminos y condiciones></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Otros</h4>
                        <ul>
                            <li><a href="#">Avisos legales</a></li>
                            <li><a href="#">Tarifario Diario El Faro</a></li>
                            <li><a href="#">Remates</a></li>
                            <li><a href="#">Venta de suscripciones</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Siguenos</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </body>
</html>