<?php include ("header.php"); ?>

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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            The One with Ross's New Girlfriend
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            The One with Ross's New Girlfriend
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            The One with Ross's New Girlfriend
                                        </td>
                                    </tr>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include ("footer.php"); ?>
