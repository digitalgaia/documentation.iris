<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new \Exedra\Application(__DIR__.'/../');

$app->map->middleware(function($exe)
{
	$exe->view->setDefaultData('exe', $exe);

	if($exe->request->getMethod() == 'GET')
		$exe->addParam($exe->request->getQueryParams());
	else
		$exe->addParam($exe->request->getParsedBody());

	return $exe->next($exe);
});

$app->map->addRoutes(array(
	'login' => array(
		'uri' => 'auth',
		'execute' => function($exe)
			{
				if($exe->request->isMethod('post'))
				{
					if(md5(md5($exe->param('passcode'))) == "1f32aa4c9a1d2ea010adcf2348166a04")
					{
						$exe->session->set('logged', true);
						return $exe->redirect->to('@doc');
					}
				}

				return $exe->view->create('auth')->render();
			}
		),
	'doc' => array(
		'module' => 'doc',
		'middleware' => function($exe)
		{
			if(!$exe->session->has('logged'))
				return $exe->redirect->to('@login');

			$exe->view->setDefaultData('exe', $exe);
			
			$exe->layout = $exe->view->create('layout');

			$exe->layout->set('menu', json_decode($exe->app->path['app']->getContents('model/menu.json'), true));

			return $exe->next($exe);
		},
		'uri' => '',
		'subroutes' => array(
			'default' => array(
				'uri' => '[*:view?]',
				'execute' => function($exe)
				{
					$view = $exe->param('view');

					if($view == '')
						$view = 'iris/introduction';

					$view = $exe->view->create($view);

					return $exe->layout->set('view', $view)->render();
				}
				)
			)
	)));

return $app;