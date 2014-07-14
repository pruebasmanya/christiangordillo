<div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Editar Empleado</h1></div>


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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Editar Empleado</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<form method="post" id="form1" action="">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Nombre:</th>
			<td><input type="text" class="inp-form" name="nombre" value="<?php echo $items['nombre'] ?>" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Apellido:</th>
			<td><input type="text" class="inp-form" name="apellido" value="<?php echo $items['apellido'] ?>" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Rol:</th>
			<td>
			<?php 
				$rol1 ="";
				$rol2 ="";
				$rol3 ="";
				$rol4 ="";
				if ($items['area']=="Diseñador") {
					$rol1 = "selected";
				}elseif ($items['area']=="Programador") {
					$rol2 = "selected";
				}elseif ($items['area']=="Director de Arte") {
					$rol3 = "selected";
				}elseif ($items['area']=="Secretario(a)") {
					$rol4 = "selected";
				}
			?>	
			<select  class="styledselect_form_1"  name="rol">
				<option value="Diseñador" <?php echo $rol1; ?>>Diseñador</option>
				<option value="Programador"  <?php echo $rol2; ?>>Programador</option>
				<option value="Director de Arte" <?php echo $rol3 ?>>Director de Arte</option>
				<option value="Secretario(a)" <?php echo $rol4 ;?>>Secretario(a)</option>
			</select>
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Estado:</th>
			<td>
			<?php 
				$estado1 ="";
				$estado2 ="";
				$estado3 ="";
				$estado4 ="";
				if ($items['estado']=="Activo") {
					$estado1 = "selected";
				}elseif ($items['estado']=="Suspendido") {
					$estado2 = "selected";
				}elseif ($items['estado']=="Prueba") {
					$estado3 = "selected";
				}elseif ($items['estado']=="Retirado") {
					$estado4 = "selected";
				}
			?>
			<select  class="styledselect_form_1" name="estado">
				<option value="Activo" <?php echo $estado1 ;?>>Activo</option>
				<option value="Suspendido" <?php echo $estado2;?>>Suspendido</option>
				<option value="Prueba" <?php echo $estado3 ;?>>Prueba</option>
				<option value="Retirado" <?php echo $estado4 ;?>>Retirado</option>
			</select>
			</td>
			<td></td>
		</tr>

	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->
	</form>
	</td>

</tr>
<tr>
<td><img src="<?php echo base_url(); ?>images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>