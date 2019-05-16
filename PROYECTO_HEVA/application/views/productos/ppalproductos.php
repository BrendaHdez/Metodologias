<head><style>
 rosa{
  color:red;
 } 
</style>
</head>

<body style="width:100%;height:100px;overflow:auto;">
  
  <br>
  <center><div class="container" style="margin-top: 100px;margin-bottom: 100px;margin-left: 100px;border: black 4px outset;"><BR>
    <h1 class="rosa">PRODUCTOS</h1>
    <BR><BR>
  </div>
</center>
   <br>

  <main role="main">
      <div class="container" style="margin-top: 100px;">
        <?php
                if($DATA_PRODUCTOS!=false)
                {
                  foreach ($DATA_PRODUCTOS->result() as $row) 
                  {
                      echo '<div class="row featurette ">';
                      echo '<div class="col-md-7">';
                        echo '<h2 class="featurette-heading text-danger">';
                        echo $row->nombre;
                        echo '</h2>';
                        echo'<p class="lead">';
                        echo $row->descripcion;
                        echo '</p>';
                        echo'<p class="lead">Porciones: ';
                        echo $row->porciones;
                        echo '</p>';
                        echo'<p class="lead">Precio: $';
                        echo $row->precio;
                        echo '</p>';
                        echo '<p><a class="btn btn-secondary" href="'.base_url().'index.php/productos/pedido/'.$row->id_producto.'" role="button">Ordenar &raquo;</a></p>';
                      echo '</div>';
                      echo '<div class="col-md-5">';
                      echo '<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 400px; height: 400px;" src="'.$row->imagen.'">';
                      echo '</div>';
                      echo '</div>';
                      echo' <hr> ';

                  }
                }
              ?>
      </div> <!-- /container -->
    </main>
</body>
