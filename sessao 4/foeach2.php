		<form>

			<input type = "text" name="nome">
			<input type = "date" name = "nascimento">
			<input type = "submit" value= "ok">
		<!-- como eu nao coloquei o action o padrao é a propria pagina, como eu nao coloquei o method o padrão é GET-->
		</form>
		<?php
		//chave do array ($key) - é o nome dos inputs,ou seja, dos campos. O que a pessoa digitou (name) é o $value.
		//$_GET - array superglobal

		if (isset($_GET)){

		foreach ($_GET as $key => $value){

			echo "Nome do campo: ".$key."<br>";

			echo "Valor do campo: ".$value."<br>";

			echo "<hr>";
		}
	}

	?>
