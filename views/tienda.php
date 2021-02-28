<?php include '../jspf/nevbar.php';?>
    <div class="row justify-content-center m-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias</button>

            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Opcion 1</a>
                <a class="dropdown-item" href="#">Opcion 2</a>
                <a class="dropdown-item" href="#">Opcion 3</a>
                <a class="dropdown-item" href="#">Opcion 4</a>
                <a class="dropdown-item" href="#">Opcion 5</a>
                <a class="dropdown-item" href="#">Opcion 6</a>
                <a class="dropdown-item" href="#">Opcion 7</a>
                <a class="dropdown-item" href="#">Opcion 8</a>
                <a class="dropdown-item" href="#">Opcion 9</a>
                <a class="dropdown-item" href="#">Opcion 10</a>
                <a class="dropdown-item" href="#">Opcion 11</a>
            </div>
        </div>
    </div>
    <div class="container-fluid w-100">   
    <div class="row justify-content-center justify-content-md-between">
       <?php
            for ($i = 0; $i < 8; $i++) {
                print '
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 ">
                        <div class="card h-200 w-200 border border-dark">
                        <img class="card-img-top" src="https://agriculturers.com/wp-content/uploads/2020/06/Como-se-clasifican-las-plantas.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Nombre del producto</h4>
                            <p class="card-text">Descipcion del producto</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Añadir a la cesta</a>
                        </div>
                        </div>
                    </div>
                ';
            }
            ?>
    </div>
  </div>  

<?php include '../jspf/footer.php';?>
