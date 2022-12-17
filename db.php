<?php

try {
    $dsn = 'mysql:host=localhost;dbname=videolibrary;charset=utf8';
    $user = 'root';
    $pass = '';

    $mysqlConnection = new PDO(
        $dsn,
        $user,
        $pass
    );


    $data = $mysqlConnection->prepare("SELECT * FROM `film` as f WHERE f.est_en_cours_de_projection = 1");
    $data->execute();

    $data_function = $mysqlConnection->prepare("SELECT * FROM `film` as f WHERE f.est_en_cours_de_projection = 1");
    $data_function->execute();

    $data2 = $mysqlConnection->prepare("SELECT f.* FROM `film` as f INNER JOIN Genre as g WHERE g.idGenre = f.idGenre and g.libelle  = 'Science-Fiction'");
    $data2->execute();

    $data_function_2 = $mysqlConnection->prepare("SELECT f.* FROM `film` as f INNER JOIN Genre as g WHERE g.idGenre = f.idGenre and g.libelle  = 'Science-Fiction'");
    $data_function_2->execute();

    $data3 = $mysqlConnection->prepare(" SELECT `titre` FROM `film` as f INNER JOIN programme as p WHERE p.idFilm = f.idFilm and p.num_salle = 5");
    $data3->execute();

    $data_function_3 = $mysqlConnection->prepare(" SELECT `titre` FROM `film` as f INNER JOIN programme as p WHERE p.idFilm = f.idFilm and p.num_salle = 5");
    $data_function_3->execute();
} catch (PDOException $ex) {
    echo "erreur" . $ex->getMessage() . "<br>";
}
