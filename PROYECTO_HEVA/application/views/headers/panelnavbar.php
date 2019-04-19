	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
		
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navarSupportedContent" aria-controls="navarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
 
		<div class="navbar-nav-scroll collapse navbar-collapse" id="navarSupportedContent">
	    		<ul class="navbar-nav flex-row">
	    			<li>
	    				<a class="navbar-brand" href="<?=base_url()?>index.php/"><img src="http://localhost:8080/PROYECTO/img/logobl.png" width="30" height="30"  alt="pastel">INICIO</a>
	    			</li>
	    			<li class="nav-item">
			        	<a class="nav-link" href="<?=base_url()?>index.php/usuarios/">Usuarios</a>
			     	 </li>
			     	 <li class="nav-item">
			        	<a class="nav-link" href="<?=base_url()?>index.php/productos/">Productos</a>
			     	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="<?=base_url()?>index.php/clientes/">Clientes</a>
			     	</li>
			     	<li class="nav-item">
			        	<a class="nav-link" href="<?=base_url()?>index.php/sucursales/">Sucursales</a>
			     	</li>
			     	<li class="nav-item">
			        	<a class="nav-link" href="<?=base_url()?>index.php/pedidos/">Pedidos</a>
			     	</li>
	    		</ul>

	  	</div>
	  	<form class="form-inline">

   			 <a href="<?=base_url()?>index.php/login/cerrar_sesion" class="btn btn-outline-danger my-2 my-sm-0" role="button" aria-pressed="true">Cerrar Sesion</a>
  		</form>
	 </nav> 		