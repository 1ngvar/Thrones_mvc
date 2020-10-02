<?php
/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		// default controller and action
		$controller_name = 'Main';
		$action_name = 'index';

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// getting controller name from address
		if ( !empty($routes[2]) )
		{	
			$controller_name = $routes[2];
		}
		
		// get the action name
		if ( !empty($routes[3]) )
		{
			$action_name = $routes[3];
		}

		// adding prefixes
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;


		// packing them into $GLOBALS to display their values in sidebar
		// P.S. I would never do this in production – I'm not dumb ok
		$GLOBALS['model_name '] = $model_name;
		$GLOBALS['controller_name '] = $controller_name;
		$GLOBALS['action_name '] = $action_name;


		// подцепляем файл с классом модели (файла модели может и не быть)
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			 Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].BASE_URL;
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'/404');
    }
    
}
