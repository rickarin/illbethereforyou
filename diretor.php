<?php include ("header.php");
      require_once "banco-de-dados\banco-de-dados-diretor.php"; ?>

<body>
    <div class="container temporada">
        <div class="row header">
            <div class="col-md-6">
                <img src="img/diretor.png" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="titulo">diretor</h2>
            </div>
        </div>
        <div class="content-temporada">
            <div class="accordion" id="accordionTemporada01">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="temporada01">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Pamela Fryman
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
                                    <?php foreach ($diretor_Pamela as $value) : ?>
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
                            Arlene Sanford
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
                                    <?php foreach ($diretor_Arlene as $value) : ?>
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
                            Peter Bonerz
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
                                    <?php foreach ($diretor_Peter as $value) : ?>
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
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Dean Holland
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                                    <?php foreach ($diretor_Dean as $value) : ?>
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
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            David Schwimmer
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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
                                    <?php foreach ($diretor_David as $value) : ?>
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
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Kevin S. Bright
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
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
                                    <?php foreach ($diretor_Kevin as $value) : ?>
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
