<style type="text/css">
	body{
		background: url(./img/foto1.jpg);
		background-size: cover;
		background-attachment: fixed;
		margin-top: 20px;
		margin-bottom: 20px;

	}

	.formulario-matricula{
		background: :url(./img/foto1.jpg);
	}

	.login-form {
	    width: 75%;
	    margin: 0 auto;
	    background: #000;
	    background-size: cover;
	    background-position: center;
	    padding: 30px 33px 67px;
	    border-top: 10px solid #000;
	    box-shadow: 0px 35px 44px -22px rgba(0, 0, 0, 0.72);
	    opacity: .8;
	    border-radius: 25px;
	}

	h1 {
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    margin-top: 24px;
    margin-bottom: 26px;
    color: #fff;
	}

	h2 {

    font-size: 25px;
    font-weight: bold;
    margin-top: 20px;
    margin-bottom: 1px;
    color: #fff;
	}

	h3 {

    font-size: 25px;
    font-weight: bold;
    margin-top: 20px;
    margin-bottom: 1px;
    color: #fff;
	}

	form p {
    font-size: 15px;
    margin-top: 1px;
    padding: 0.3px;
    color: #fff;
	}

	.imagenlogo{
		text-align: center;
	}

	.transpa {
    background-color: transparent;
    border: 1px solid #fff;
    border-bottom: 1px solid #efb810;
    font-size: 1em;
    color: #fff;
    width: 200px; 
    height: 30px;
	}

	.form-control {
		background-color: transparent;
		border: :1px solid #fff;
		border-bottom: 1px solid #efb810;
		font-size: 1em;
		color: #fff;
	}

	.form-control:focus {
		background-color: transparent;
		border: :1px solid #fff;
		border-bottom: 1px solid #efb810;
		font-size: 1em;
		color: #fff;
	}

	.custom-select{
		background-color: transparent;
		border: :1px solid #fff;
		border-bottom: 1px solid #efb810;
		font-size: 1em;
		color: #fff;
	}

	.custom-select:focus{

	}

	.transpacombo  {
    background-color: transparent;
    border: 1px solid #fff;
    border-bottom: 1px solid #efb810;
    margin-bottom: 20px;
    margin-top: 20px;
    font-size: 1em;
    color: #fff;
    width: 400px;
    height: 30px;
	}

	.apode{
		border: 1px solid #fff;
		border-radius: 20px;
	}

	.alumno{
		margin-top: 20px;
		border: 1px solid #fff;
		margin-bottom: 20px;
		border-radius: 20px;
	}

	.tipo{
		margin-top: 20px;
		border: 1px solid #fff;
		margin-bottom: 20px;
		border-radius: 20px;
	}

	.contenido-titulo p:hover{
	  color: #efb810;
	}

	.contenido-titulo p{
	  display: inline-block;
	  padding: 0 1px;
	  color: #fff;
	  text-decoration: none;
	  font-weight: 500;
	  font-size: 0.875rem;
	  letter-spacing: 0;
	  line-height: 1.5em;
	  transition: all .3s ease;
	  margin-bottom: 15px;
	}

	textarea:focus,select:focus, input:focus, input[type]:focus {
     border-color: rgb(255, 144, 0);

     outline: 0 none;
     font-size: 1em;
     color: #fff;
	}

	option { 
	 color:#fff; 
	 background-color:black; 
	}


</style>

<body>
<?php include "./body/contenido/jad_contenido_formulario.php"?>
<?php include "./body/database/bd_pwcolegio.php" ?>

<?php include "./referencias/jad_js.php";?>
</body>

