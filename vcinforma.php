<!-- Template general backoffice Vía Central Comunicaciones -->
<?php require_once("templates/html_header.php"); ?>
<?php require_once("templates/navbar_top.php"); ?>
<?php require_once("templates/menu_vertical.php"); ?>
<?php require_once("templates/main_start.php"); ?>
<!-- Contenido principal de la pagina -->
<hr size=0>
<div class="row">
	<div class="col-12 col-xs-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
		<div class="card">
		  <div class="card-body">
		  	<h1 class="float-start">VÍA CENTRAL INFORMA</h1>
		  	<div class="d-grid gap-2 d-md-flex justify-content-md-end">		  		
				 <button class="btn btn-primary" type="button"><i class="fa-solid fa-plus"></i></button>
			</div>
			
		    <table class="table table-striped table-hover" style="font-size: 12px;">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Es noticia</th>
			      <th scope="col">Es tendencia</th>
			      <th scope="col">En foco</th>
			      <th scope="col">Mercados</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php for($x=1;$x<=10;$x++) { ?>
			    <tr>
			      <th scope="row"><?php echo $x; ?></th>
			      <td>20 04 2022</td>
			      <td>Violenta madrugada en Arauco...</td>
			      <td>#Liverpool</td>
			      <td>Convención deja en suspenso ...</td>
			      <td>Cobre: US$ 4,65</td>
			    </tr>
				<?php } ?>
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
<?php require_once("templates/main_end.php"); ?>
<?php require_once("templates/html_footer.php"); ?>