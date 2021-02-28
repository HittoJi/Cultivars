<?php include 'jspf/nevbar.php';?>

<header class="jumbotron text-center blue-grey lighten-5">
      <h1 class="display-3">Mensaje o oferta al entrar a la web </h1>
      <p class="lead">Descripcion si es una oferta</p>
      <a href="#" class="btn btn-primary btn-lg">Realizar alguna accion</a>
</header>

<h2  class="text-center">Productos destacados</h2>
<div class="container-fluid w-100">   

    <div class="d-flex justify-content-between overflow-auto">
       <?php
            for ($i = 0; $i < 10; $i++) {
                print '
                <div class="col-lg-2 col-md-4 col-sm-4 col-10 mb-4">
                        <div class="card h-200 w-200">
                        <img class="card-img-top" src="https://agriculturers.com/wp-content/uploads/2020/06/Como-se-clasifican-las-plantas.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Nombre del producto</h4>
                            <p class="card-text">Descipcion del producto</p>
                        </div>
                        </div>
                    </div>
                ';
            }
            ?>
    </div>
</div>  

<?php include 'jspf/footer.php';?>
