<?php
function enviarDades($conn){
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $parameters = [$name, $email, $password];
        $sql = 'INSERT INTO "public"."user"(name,email,password) VALUES ($1, $2, $3)';
        $consulta = pq_query_parameters($conn,$sql,$parameters);
        pg_fetch_all($consulta);
        print_r("Dades enviats");
    }
}