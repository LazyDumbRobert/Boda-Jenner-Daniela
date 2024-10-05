<section class="nombres">
    <div class="side1"></div>
    <div class="nombres__container">
        <p class="nombres__texto nombres__texto--marcaAgua">
            <img src="/build/img/logo.png" alt="Logo Boda">
        </p>
        <p class="nombres__texto">Jenner y Daniela</p>
    </div>

    <div class="side2"></div>
</section>

<section class="content">
    <div class="content__text">
        <p>Uno solo puede ser vencido, pero dos pueden resistir.</p>
        <p>¡La cuerda de tres hilos no se rompe facilmente!</p>
        <p>Ede 4:12</p>
    </div>

    <audio id="audio" controls>
    <source src="/uploads/background-sound.mp3" type="audio/mpeg">
        Tu navegador no soporta el elemento de audio.
    </audio>

</section>
<section>
        <div class="content__image" >
            <img src="/build/img/img1.JPG" alt="Imagen Boda 1" data-aos="fade-down-right">
            <img src="/build/img/img2.JPG" alt="Imagen Boda 2" data-aos="fade-down-left">
            <img src="/build/img/img3.JPG" alt="Imagen Boda 3" data-aos="fade-up-right">
        </div>
    </section>
<div class="contenido_principal">
   
    <section class="datos">
        <div class="cards">
            <div class="dato" data-aos="zoom-in-right">
                <p class="dato__texto">CEREMONIA</p>
                <img class="dato__icon" src="/build/img/ceremonia.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--bold">Club Baika</p>
                <p class="dato__texto">3:30 PM</p>
                <div class="ubicacion">
                    <img class="ubicacion__img" src="/build/img/maps.png.png" alt="Maps Icon">
                    <a class="dato__texto" href="https://www.google.com/maps?gs_lcrp=EgZjaHJvbWUqDQgBEC4YrwEYxwEYgAQyCggAEAAY4wIYgAQyDQgBEC4YrwEYxwEYgAQyCAgCEAAYFhgeMggIAxAAGBYYHjIICAQQABgWGB4yCAgFEAAYFhgeMggIBhAAGBYYHjIICAcQABgWGB4yCggIEAAYgAQYogQyCggJEAAYgAQYogTSAQg0ODY4ajFqN6gCALACAA&um=1&ie=UTF-8&fb=1&gl=gt&sa=X&geocode=KRPLCP4ybYmFMXI19Vqpab_F&daddr=2+Avenida+11-104,+Chimaltenango" target="_blank">
                        Ubicación
                    </a>
                </div>
                <p class="dato__texto dato__texto--textsm">Tu puntualidad es un obsequio maravilloso</p>
            </div>

            <div class="dato" data-aos="zoom-out-up">
                <p class="dato__texto">CELEBRACIÓN</p>
                <img class="dato__icon" src="/build/img/plates.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--bold">Club Baika</p>
                <p class="dato__texto">5:30 PM</p>
            </div>

            <div class="dato" data-aos="zoom-out-down">
                <p class="dato__texto">CELEBRACIÓN</p>
                <img class="dato__icon" src="/build/img/regalo.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--textsm">Estamos emocionados de contar con tu presencia ya que es un regalo en si. Pero si estas considerando un obsequio te sugerimos pueda ser de forma monetaria, esto nos ayudará a iniciar nuestra vida jutnos, por ello muy agradecidos.</p>
                <br>
                <br>
                <p class="dato__texto dato__texto--textsm">Habrán sobres en el ingreso del evento para que puedas bendecirnos.</p>
            </div>

            <div class="dato" data-aos="zoom-out-left">
                <p class="dato__texto">VESTIMENTA</p>
                <div style="display: flex; flex-direction:row; padding:2rem;"> 
                    <img class="dato__icon" src="/build/img/vestimenta.png" alt="Image Wedding">
                </div>
                <p class="dato__texto dato__texto--textsm">El blanco es un color hermoso, pero en nuestra boda es exclusivo para la NOVIA.</p>
                <p class="dato__texto dato__texto--textsm">Todos los demás colores están disponibles</p>
            </div>
        </div>
    </section>

    <section class="formulario">
        <div>
            <form class="formulario__form" action="/api/registrar" method="POST" id="formulario">

                <div class="campo">
                    <label for="invitado">Nombre del invitado:</label>
                    <input type="text" name="invitado" placeholder="Nombre del invitado" id="invitado">
                </div>

                <div class="campo">
                    <label for="departe_de">¿De parte de que familia vienes?</label>

                    <select name="departe_de" id="departe_de">
                        <option value selected disabled>--SELECIONE UNA OPCIÓN--</option>
                        <option value="1">Novio</option>
                        <option value="2">Novia</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="felicitacion">Deja tus felicitaciones aquí:</label>
                    <textarea name="felicitacion" id="felicitacion">

                    </textarea>
                </div>
                <div style="display:flex; justify-content:flex-end;">
                    <input type="submit" class="btn" value="¡Click aquí si asistirás!">
                </div>
            </form>
        </div>
    </section>

    <section class="content content__last" data-aos="zoom-out-up">
        <div class="content__image">
            <img src="/build/img/img4.JPG" alt="Imagen Boda 3">
        </div>
        <div class="despedida">
            <p>¡Agradecidos con DIOS y contigo que nos acompañas en esta importante etapa!</p>
            <p>Guarda este recuerdo tomandote muchas fotos con nostros.</p>
        </div>
    </section>
</div>