<?php 
	$controller = ucwords($controller);
	$controllerFile = "Controllers/".$controller.".php";
	if(file_exists($controllerFile))
	{
		require_once($controllerFile);
		$controller = new $controller();//Cuando se requiere el controlador sea Home u otro como todos los controladores heredan de controllers se va a llamar controllers y llaman a loadModel y de ahí se llama a el controlador
		if(method_exists($controller, $method))
		{
			$controller->{$method}($params);
		}else{
			require_once("Controllers/Error.php");
		}
	}else{
		require_once("Controllers/Error.php");
	}

	// echo "<br>";
	// echo "controlador: ". $controller;
	// echo "<br>";
	// echo "método". $method;
	// echo "<br>";
	// echo "parametrs:".$params;
?>