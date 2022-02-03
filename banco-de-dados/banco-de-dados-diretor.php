<?php 

    $pdo = new PDO('mysql:dbname=cantinhodaprog;host=mysql.cantinhodaprogramacao.com.br', 'cantinhoda_add5', 'Gr33nd4y');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("SELECT * FROM tbl_episodios inner join tbl_temporada on tbl_temporada_id_temporada = id_temporada where directed_by = :diretor;");
    $sql->bindValue(':diretor', 'Pamela Fryman');
    $sql->execute();
    $diretor_Pamela = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':diretor', 'Arlene Sanford');
    $sql->execute();
    $diretor_Arlene = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':diretor', 'Peter Bonerz');
    $sql->execute();
    $diretor_Peter = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':diretor', 'Dean Holland');
    $sql->execute();
    $diretor_Dean = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':diretor', 'David Schwimmer');
    $sql->execute();
    $diretor_David = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':diretor', 'Kevin S. Bright');
    $sql->execute();
    $diretor_Kevin = $sql->fetchAll(PDO::FETCH_ASSOC);