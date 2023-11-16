<?php
    function getCategories($connexio){
        $sql = 'SELECT * FROM "public"."categories"';
        $consulta = pg_query($connexio, $sql);
        $res = pg_fetch_all($consulta);
        return $res;
    }
/*
    function getProductsByCategory($connexio, $category_id){
        // Preparar la consulta SQL con el ID de categoría
        $sql = 'SELECT 
                    p.id, 
                    p.Nom, 
                    p.Imatge, 
                    p.Descripcio, 
                    p.Preu, 
                    p.Actiu
                FROM 
                    productes p
                INNER JOIN 
                    categories c ON p.Categoria_id = c.id
                WHERE 
                    c.id = $1'; 
    
        // Preparar y ejecutar la consulta con el ID de categoría
        $consulta = pg_prepare($connexio, "query", $sql);
        $consulta = pg_execute($connexio, "query", array($category_id));
    
        // Obtener y devolver los resultados
        $res = pg_fetch_all($consulta);
        return $res;
    }
*/