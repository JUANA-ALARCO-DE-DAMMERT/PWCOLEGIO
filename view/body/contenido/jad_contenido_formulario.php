
    <div class="login-form">
    	<div class="imagenlogo">
    		<img src="./img/formulario.png">
    	</div>
    		<h1>Ficha  de Matrícula 2021</h1>
    	<hr>
    	<form action="../query/registro.php" method="post" class="needs-validation" novalidate>
    		<div class="col-md-12 tipo">
    			<label for="validationCustom04"><h2>Tipo de Relacion del Titular o Apoderado</h2></label>
    			<div class="col-md-5 mb-3">
			      <select class="custom-select" id="validationCustom04" required>
			        <option selected disabled value="">Choose...</option>
			        <option value="value1">Value 1</option> 
					<option value="value2">Value 2</option>
					<option value="value3">Value 3</option>
			      </select>
			      <div class="invalid-feedback">
			        seleccione un dato
			      </div>
			    </div>
    		</div>
    		<div class="col-md-12 apode">
    			<h2>Datos del Titular o Apoderado</h2>
	    		<hr>
    			<div class="form-row">
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				      		<label for="validationCustom01"><p>Tipo de Documento</p></label>	
				    	</div>
				      <input type="text" class="form-control"  id="validationCustom01" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom02"><p>N° de Documento</p></label>
				    	</div>
				      <input type="text" name="dni" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom03"><p>Apellidos</p></label>
				    	</div>
				      <input type="text" name="apellidos" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom04"><p>Nombres</p></label>
				    	</div>
				      <input type="text" name="nombres" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom05"><p>Estado Civil</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom06"><p>Sexo</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom07"><p>Direccion</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom08"><p>Fecha de Nacimiento</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom09"><p>Contro de Labores</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom10"><p>Solvencia Economica</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom11"><p>Celular</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom12"><p>E-mail</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				</div>
    		</div>
    		<div class="col-md-12 alumno">
    			<h2>Datos del Alumno</h2>
	    		<hr>
    			<div class="form-row">
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				      		<label for="validationCustom01"><p>Tipo de Documento</p></label>	
				    	</div>
				      <input type="text" class="form-control"  id="validationCustom01" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom02"><p>N° de documento</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom03"><p>Apellidos</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom04"><p>Nombres</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom05"><p>Sexo</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom06"><p>Grado al que postula</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02"  required>
				    </div>
				    <div class="col-md-4 mb-3">
				    	<div class="contenido-titulo">
				    		<label for="validationCustom07"><p>Fecha de Nacimiento</p></label>
				    	</div>
				      <input type="text" class="form-control" id="validationCustom02" required>
				    </div>
				</div>
    		</div>
		  
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			      <label class="form-check-label" for="invalidCheck">
			        <p>Agree to terms and conditions</p>
			      </label>
			      <div class="invalid-feedback">
			        You must agree before submitting.
			      </div>
			    </div>
			  </div>
		 	 <button class="btn btn-primary" type="submit">Enviar Registro</button>
		 	 <button class="btn btn-info" id="limpiar">Limpiar</button>
		 	 <!-- <button id="limpiar">Limpiar</button> -->
		</form>
    </div>

