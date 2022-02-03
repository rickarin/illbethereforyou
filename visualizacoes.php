<?php include ("header.php");
      require_once 'banco-de-dados\banco-de-dados-visu.php'; ?>

<body>
    <div class="container temporada">
        <div class="row header">
            <div class="col-md-6">
                <img src="img/visualizacoes.png" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="titulo">Quantidade de visualizações</h2>
            </div>
        </div>
        <div class="content-temporada">
            <div class="accordion" id="accordionTemporada01">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="temporada01">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Temporada 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="temporada01" data-bs-parent="#accordionTemporada01">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações
                                        </th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($season1 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Temporada 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                                                                    <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season2 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            temporada 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                                                                    <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season3 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                                                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            temporada 4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season4 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            temporada 5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season5 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            temporada 6
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season6 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            temporada 7
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season7 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            temporada 8
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season8 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            temporada 9
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season9 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            temporada 10
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th>
                                            número
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                        <th>
                                            visualizações 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($season10 as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['num_in_season'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['us_viewers']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</body>
<?php include ("footer.php"); ?>
