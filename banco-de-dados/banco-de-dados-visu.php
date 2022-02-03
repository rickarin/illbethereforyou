<?php

    $pdo = new PDO('mysql:dbname=cantinhodaprog;host=mysql.cantinhodaprogramacao.com.br', 'cantinhoda_add5', 'Gr33nd4y');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $pdo->prepare("SELECT * from tbl_episodios where tbl_temporada_id_temporada = :temporada");
    $sql->bindValue(":temporada", 1);
    $sql->execute();
    $season1 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 2);
    $sql->execute();
    $season2 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 3);
    $sql->execute();
    $season3 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 4);
    $sql->execute();
    $season4 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 5);
    $sql->execute();
    $season5 = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    $sql->bindValue(':temporada', 6);
    $sql->execute();
    $season6 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $sql->bindValue(':temporada', 7);
    $sql->execute();
    $season7 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $sql->bindValue(':temporada', 8);
    $sql->execute();
    $season8 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $sql->bindValue(':temporada', 9);
    $sql->execute();
    $season9 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $sql->bindValue(':temporada', 10);
    $sql->execute();
    $season10 = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>