<?php
function enviarDades($conn){
    if(isset($_POST["submit"])){
        $nom = $_POST["name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $adress = $_POST["adress"];
        $town = $_POST["town"];
        $CodiPostal =$_POST["codiPostal"];
        $parameters = [$nom, $email, $password, $adress, $town, $CodiPostal];
        $sql = 'INSERT INTO "public"."user"(nom,email,password,adress,town,codiPostal) VALUES ($1, $2, $3, $4, $5, $6)';
        $consulta = pq_query_parameters($conn,$sql,$parameters);
        pg_fetch_all($consulta);
        print_r("Dades enviats");
    }
}