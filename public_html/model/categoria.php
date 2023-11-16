<?php
    function getCategories($connexio){
        $sql = 'SELECT * FROM "public"."categories"';
        $consulta = pg_query($connexio, $sql);
        $res = pg_fetch_all($consulta);
        return $res;
    }