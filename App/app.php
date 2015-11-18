<?php
$exedra = require_once __DIR__.'/../exedra';

return $exedra->build('App', function($app)
{
	$app->registry->addMiddleware(function($exe)
	{
		$exe->view->setDefaultData('exe', $exe);

		return $exe->next($exe);
	});

	$app->map->addRoutes(array(
		'login' => array(
			'uri' => 'auth',
			'execute' => function($exe)
				{
					if($exe->request->isMethod('post'))
					{
						if(md5(md5($exe->request->post('passcode'))) == "1f32aa4c9a1d2ea010adcf2348166a04")
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
				$exe->layout->set('menu', json_decode($exe->app->loader->getContents('model/menu.json'), true));

				return $exe->next($exe);
			},
			'uri' => '',
			'subroutes' => array(
				'default' => array(
					'uri' => '[**:view?]',
					'execute' => function($exe)
					{
						$view = implode('/', $exe->param('view'));

						if($view == '')
							$view = 'iris/introduction';

						$view = $exe->view->create($view);

						return $exe->layout->set('view', $view)->render();
					}
					)
				)
		)));
});