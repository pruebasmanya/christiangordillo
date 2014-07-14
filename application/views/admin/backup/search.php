
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Lista Empleados</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			

				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->

				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">ID</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nombre</a></th>
					<th class="table-header-repeat line-left"><a href="">Apellido</a></th>
					<th class="table-header-repeat line-left"><a href="">Rol</a></th>
					<th class="table-header-repeat line-left"><a href="">Estado</a></th>
					<th class="table-header-options line-left"><a href="">Opciones</a></th>
				</tr>
				<div class="tabla_resultados">
				<?php 
					foreach ($items as $item) {
						echo '<tr>';
						echo '<td>'.$item['id'].'</td>';
						echo '<td>'.$item['nombre'].'</td>';
						echo '<td>'.$item['apellido'].'</td>';
						echo '<td>'.$item['area'].'</td>';
						echo '<td>'.$item['estado'].'</td>';
						echo '<td width="90">';
						echo '<a href="'.base_url().'admin/home/update_emp/'.$item['id'].'" title="Editar" class="icon-1 info-tooltip"></a>';
						echo '<a href="'.base_url().'admin/home/delete_emp/'.$item['id'].'" title="Eliminar" class="icon-2 info-tooltip"></a>';
						echo '</td>';
						echo '</tr>';
					}
				?>
				</div>
				</table>
				<!--  end product-table................................... --> 
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->

			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
