<?php
require_once 'class/autoload.php';
    
MakeHTML::html_start("Connexion");
      ?>
    <div class="form_upload">
        <h2>Envoyer des fichiers</h2>

        <form action="#" method="post" enctype="multipart/form-data" id="upload">

            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                <input type="file" name="files[]" id="file" multiple="multiple" title="Message d'erreur" />
            </div>
            <input type="submit" name="submit" value="Envoyer" />

        </form>
    </div>
    <?php
MakeHTML::html_end();