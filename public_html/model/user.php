<?php
function enviarDades($conn) {
    if (isset($_POST["Registrar"])) {
        $nom = isset($_POST["nom"]) ? $_POST["nom"] : null;
        $correu = isset($_POST["correu"]) ? $_POST["correu"] : null;
        $contrasenya = isset($_POST["contrasenya"]) ? password_hash($_POST["contrasenya"], PASSWORD_DEFAULT) : null;
        $adreca = isset($_POST["adreca"]) ? $_POST["adreca"] : null;
        $poblacio = isset($_POST["poblacio"]) ? $_POST["poblacio"] : null;
        $CodiPostal = isset($_POST["codiPostal"]) ? $_POST["codiPostal"] : null;

        if ($nom && $correu && $contrasenya && $poblacio) {
            $params = [$nom, $correu, $contrasenya, $adreca, $poblacio, $CodiPostal];
            $sql = 'INSERT INTO "public"."Usuari"(nom, email, password, adreca, poblacio, codi_postal) VALUES ($1, $2, $3, $4, $5, $6)';

            $consulta = pg_query_params($conn, $sql, $params);

            if ($consulta === false) {
                die('Error en la consulta SQL: ' . pg_last_error($conn));
            }

            print_r("dades enviades");
        } else {
            print_r("Falten dades obligatòries");
        }
    }
}