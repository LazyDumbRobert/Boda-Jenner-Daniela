<section class="content" style="margin-bottom: 2rem;">
    <div class="content__text">
        <p>Uno solo puede ser vencido, pero dos pueden resistir.</p>
        <p>¡La cuerda de tres hilos no se rompe facilmente!</p>
        <p>Ecle 4:12</p>
    </div>

    <div>
        <p style="margin-bottom: 2rem;">¡Escuchame!</p>
        <audio id="audio" controls>
            <source src="/uploads/background-sound.mp3" type="audio/mpeg">
        </audio>
    </div>
</section>
<section>
        <div class="content__image" >
            <img src="/build/img/img1.JPG" alt="Imagen Boda 1" data-aos="fade-down-right">
            <img src="/build/img/img2.JPG" alt="Imagen Boda 2" data-aos="fade-down-left">
            <img src="/build/img/img3.JPG" alt="Imagen Boda 3" data-aos="fade-up-right">
        </div>
    </section>
<div class="contenido_principal" style="padding:2rem;">
    <section class="datos">
        <div class="cards">
            <div class="dato" data-aos="zoom-in-right">
                <p class="dato__texto title_font">CEREMONIA</p>
                <img class="dato__icon" src="/build/img/ceremonia.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--bold">Club Baika</p>
                <p class="dato__texto">3:30 PM</p>
                <div class="ubicacion">
                    <div class="ubicacion__container">
                        <img class="ubicacion__img" src="/build/img/maps.png.png" alt="Maps Icon">
                        <a class="dato__texto dato__texto--ubicacion" href="https://www.google.com/maps?gs_lcrp=EgZjaHJvbWUqDQgBEC4YrwEYxwEYgAQyCggAEAAY4wIYgAQyDQgBEC4YrwEYxwEYgAQyCAgCEAAYFhgeMggIAxAAGBYYHjIICAQQABgWGB4yCAgFEAAYFhgeMggIBhAAGBYYHjIICAcQABgWGB4yCggIEAAYgAQYogQyCggJEAAYgAQYogTSAQg0ODY4ajFqN6gCALACAA&um=1&ie=UTF-8&fb=1&gl=gt&sa=X&geocode=KRPLCP4ybYmFMXI19Vqpab_F&daddr=2+Avenida+11-104,+Chimaltenango" target="_blank">
                            Ubicación
                        </a>
                    </div>

                    <div >
                        <i class="fa-regular fa-hand-point-up icon_awsome"></i>
                        <p class="icon_awsome--text">Haz click aquí para ver la ubicación</p>
                    </div>


                </div>
                <p class="dato__texto dato__texto--textsm">Tu puntualidad es un obsequio maravilloso</p>
            </div>

            <div class="dato" data-aos="zoom-out-up">
                <p class="dato__texto title_font">CELEBRACIÓN</p>
                <img class="dato__icon" src="/build/img/plates.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--bold">Club Baika</p>
                <p class="dato__texto">5:30 PM</p>
            </div>

            <div class="dato" data-aos="zoom-out-down">
                <p class="dato__texto title_font">REGALOS</p>
                <img class="dato__icon" src="/build/img/regalo.png" alt="Image Wedding">
                <p class="dato__texto dato__texto--textsm">Estamos emocionados de contar con tu presencia ya que es un regalo en si. Pero si estas considerando un obsequio te sugerimos pueda ser en efectivo, esto nos ayudará a iniciar nuestra vida juntos, por ello muy agradecidos.</p>
                <br>
                <br>
                <p class="dato__texto dato__texto--textsm">Habrán sobres en el ingreso del evento para que puedas bendecirnos.</p>
            </div>

            <div class="dato" data-aos="zoom-out-left">
                <p class="dato__texto title_font">VESTIMENTA</p>
                <div style="display: flex; flex-direction:row;"> 
                    <img class="dato__icon dato__icon--vestimenta" src="/build/img/vestimenta.png" alt="Image Wedding">
                </div>
                <p class="dato__texto dato__texto--bold dato__texto--textsm ">Formal</p>
                <p class="dato__texto dato__texto--textsm">Evita el color blanco.</p>
                <p class="dato__texto dato__texto--textsm">Todos los demás colores están disponibles</p>
            </div>
        </div>
    </section>

    <section class="formulario">
        <div>
            <form class="formulario__form" action="/api/registrar" method="POST" id="formulario">
                <div class="campo">
                    <label for="invitado">Nombre del invitado:</label>
                    <input type="text" name="invitado" placeholder="Nombre del invitado" id="invitado" autocomplete="off">
                </div>

                <div class="campo">
                    <label for="numero_invitados">Número de invitados según invitación:</label>
                    <input type="number" name="numero_invitados" placeholder="Número de invitados" id="numero_invitados" autocomplete="off">
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
            <p>Guarda este recuerdo tomandote muchas fotos con nosotros.</p>
        </div>
    </section>
</div>