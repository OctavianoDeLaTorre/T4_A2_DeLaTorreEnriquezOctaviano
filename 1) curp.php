<!DOCTYPE html>
<html>
<head>
	<title>Generador de CURP</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body>
	<div id="div_color">

	</div>
	<div id="div_form">
		<h1>Generador de CURP</h1>
		<form action="php/generar_curp.php" method="POST">
		<div class="form-group">
			<input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder = "Ingresa nombre" required>
		</div>
		<div class="form-group">
			<input type="text" name="txt_p_ap" id="txt_p_ap" class="form-control" placeholder = "Ingresa primer apellido" required>
		</div>
		<div class="form-group">
			<input type="text" name="txt_s_ap" id="txt_s_ap" class="form-control" placeholder = "Ingresa segundo apellido" required>
		</div>
		<div class="form-group">
			<input type="radio" name="rb_sexo" id="rb_h" value="H">
		 	 <label class="form-check-label" for="rb_h">Hombre</label>
		 	 <input type="radio" name="rb_sexo" id="rb_m" required value="M">
		 	 <label class="form-check-label" for="rb_m">Mujer</label>
		</div>
		<div class="form-group">
			<label for="fecha_nacimiento">Fecha nacimiento:</label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" step="1" min="1900-01-01" max="2100-12-31" id="fecha_nacimiento" value="2018-10-09">

		</div>
		<div class="form-group">
			<label>Estado origen:</label>
			<select class="form-control" name="cb_estados" id="cb_estados">
			   <option value="0">AGUASCALIENTES </option>
                <option value="1">BAJA CALIFORNIA NTE. </option>
                <option  value="2">BAJA CALIFORNIA SUR </option>
                <option  value="3">CAMPECHE </option>
                <option  value="4">COAHUILA </option>
                <option value="5">COLIMA </option>
                <option value="6">CHIAPAS </option>
                <option value="7">CHIHUAHUA </option>
                <option value="8">DISTRITO FEDERAL </option>
                <option value="9">DURANGO </option>
                <option value="10">GUANAJUATO </option>
                <option value="11">GUERRERO </option>
                <option value="12">HIDALGO </option>
                <option value="13">JALISCO </option>
                <option value="14">MEXICO </option>
                <option value="15">MICHOACAN </option>
                <option value="16">MORELOS </option>
                <option value="17">NAYARIT </option>
                <option  value="18">NUEVO LEON </option>
                <option  value="19">OAXACA </option>
                <option  value="20">PUEBLA </option>
                <option  value="21">QUERETARO </option>
                <option  value="22">QUINTANA ROO </option>
                <option  value="23">SAN LUIS POTOSI </option>
                <option  value="24">SINALOA </option>
                <option  value="25">SONORA </option>
                <option  value="26">TABASCO </option>
                <option  value="27">TAMAULIPAS </option>
                <option  value="28">TLAXCALA </option>
                <option  value="29">VERACRUZ </option>
                <option  value="30">YUCATAN </option>
                <option  value="31">ZACATECAS </option>
                <option  value="32">SERV. EXTERIOR MEXICANO </option>
                <option  value="33">NACIDO EN EL EXTRANJERO </option>
			</select>

		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary mb-2" id="btn_generar" name="btn_generar"  >GENERAR CURP</button>
		</div>
		</form>
	</div>



</body>
</html>
