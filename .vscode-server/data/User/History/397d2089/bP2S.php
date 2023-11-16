<?php
    require_once __DIR__.'/../model/conectatBD.php';
    require_once __DIR__.'/../model/user.php';

    $connexio = connectaBD();
    enviarDades($connexio);

    include __DIR__. '/../view/quiz.php';