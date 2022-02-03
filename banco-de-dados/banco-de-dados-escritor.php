<?php

    $pdo = new PDO('mysql:dbname=cantinhodaprog;host=mysql.cantinhodaprogramacao.com.br', 'cantinhoda_add5', 'Gr33nd4y');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    
    $sql = $pdo->prepare("SELECT * FROM tbl_episodios INNER JOIN tbl_temporada ON tbl_temporada_id_temporada = id_temporada WHERE written_by = :escritor;");
    $sql->bindValue(':escritor',"Adam Chase");
    $sql->execute();
    $escritor_Adam = $sql->fetchAll(PDO::FETCH_ASSOC);


    $sql->bindValue(':escritor', 'Jeffrey Astrof & Mike Sikowitz');
    $sql->execute();
    $escritor_Jeffrey = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':escritor', 'Jeffrey Astrof & Mike Sikowitz');
    $sql->execute();
    $escritor_Mike = $sql->fetchAll(PDO::FETCH_ASSOC);