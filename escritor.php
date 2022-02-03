<?php include ("header.php");
      require_once 'banco-de-dados\banco-de-dados-escritor.php'; ?>

<body>
    <div class="container temporada">
        <div class="row header">
            <div class="col-md-6">
                <img src="img/escritor.png" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="titulo">escritor</h2>
            </div>
        </div>
        <div class="content-temporada">
            <div class="accordion" id="accordionTemporada01">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="temporada01">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Adam Chase
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="temporada01" data-bs-parent="#accordionTemporada01">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th> 
                                            temporada
                                        </th>
                                        <th>
                                            episodio
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($escritor_Adam as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['temporada'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['original_air_day']; ?>
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
                            Jeffrey Astrof
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th> 
                                            temporada
                                        </th>
                                        <th>
                                            episodio
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($escritor_Jeffrey as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['temporada'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['original_air_day']; ?>
                                      </td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Mike Sikowitz
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="episodios">
                                <thead>
                                    <tr>
                                        <th> 
                                            temporada
                                        </th>
                                        <th>
                                            episodio
                                        </th>
                                        <th>
                                            nome
                                        </th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($escritor_Mike as $value) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['temporada'] ; ?> 
                                        </td>
                                        <td>
                                            <?php echo $value['title']; ?>
                                        </td>
                                       <td>
                                        <?php echo $value['original_air_day']; ?>
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
</body>
<?php include ("footer.php"); ?>
