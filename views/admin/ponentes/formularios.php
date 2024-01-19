<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Nombre Ponente" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="formulario__input" placeholder="Apellido Ponente" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" class="formulario__input" placeholder="Ciudad Ponente" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais</label>
        <input type="text" name="pais" id="pais" class="formulario__input" placeholder="Pais Ponente" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input type="file" name="imagen" id="imagen" class="formulario__input formulario__input--file">
    </div>

    <?php if(isset($ponente->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual: </p>
        <div class="formulario__imagen">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Imagen Ponente">
            </picture>
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Áreas de Experiencia (Separadas por coma)</label>
        <input type="text" id="tags_input" class="formulario__input" placeholder="Ej. Node.js, PHP, CSS, Laravel, UX / UI">
    </div>

    <div id="tags" class="formulario__listado"></div>
    <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>
    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-facebook"></i>
        </div>
        <input type="text" name="redes[facebook]" class="formulario__input formulario__input--sociales" placeholder="Facebook" value="<?php echo $redes->facebook ?? ''; ?>">
    </div>

    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-twitter"></i>
        </div>
        <input type="text" name="redes[twitter]" class="formulario__input formulario__input--sociales" placeholder="Twitter" value="<?php echo $redes->twitter ?? ''; ?>">
    </div>

    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-youtube"></i>
        </div>
        <input type="text" name="redes[youtube]" class="formulario__input formulario__input--sociales" placeholder="Youtube" value="<?php echo $redes->youtube ?? ''; ?>">
    </div>

    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-instagram"></i>
        </div>
        <input type="text" name="redes[instagram]" class="formulario__input formulario__input--sociales" placeholder="Instagram" value="<?php echo $redes->instagram ?? ''; ?>">
    </div>

    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-tiktok"></i>
        </div>
        <input type="text" name="redes[tiktok]" class="formulario__input formulario__input--sociales" placeholder="Tiktok" value="<?php echo $redes->tiktok ?? ''; ?>">
    </div>

    <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-github"></i>
        </div>
        <input type="text" name="redes[github]" class="formulario__input formulario__input--sociales" placeholder="Github" value="<?php echo $redes->github ?? ''; ?>">
    </div>
</fieldset>