<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project IRIS Development Documentation</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo $exe->url->asset('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<style type="text/css">
	.subnav
	{
		padding-left: 10px;
	}

	.list-sub > a
	{
		font-weight: bold;
	}

	.subnav li > a:hover
	{
		text-shadow: 0px 0px 50px black, 0px 0px 50px green;
		background: none;
	}
	.subnav li > a
	{
		padding: 5px 0 5px 20px;
	}

	.list-sub .active
	{
		text-shadow: 0px 0px 50px black, 0px 0px 50px green;
	}
	</style>
	<body>
		<div class="container" style="margin-bottom: 100px;">
			<div class="row" style="margin-top: 50px;">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<ul class='nav'>
						<?php foreach($menu as $name => $path):?>
							<?php if(is_string($path)):?>
							<?php $url = $exe->url->create('@doc.default', array('view' => $path));?>
								<li><a href='<?php echo $url;?>'><?php echo $name;?></a></li>
							<?php elseif(is_array($path)):
							$basePath = $path[0];
							?>
								<li class='list-sub'><a href='#'><?php echo $name;?></a>
									<ul class='nav subnav'>
										<?php foreach($path[1] as $subname => $subpath):
										$url = $exe->url->create('@doc.default', array('view' => $basePath.'/'.$subpath));
										?>
										<?php 
										if($exe->isRoute('@doc.default', array('view' => $basePath.'/'.$subpath)))
											$active = 'class="active"';
										else
											$active = '';?>

										<li><a <?php echo $active;?> href='<?php echo $url;?>';?><?php echo $subname;?></a></li>
										<?php endforeach;?>
									</ul>
								</li>
							<?php endif;?>
						<?php endforeach;?>
					</ul>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<?php echo $view->render();?>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="<?php echo $exe->url->asset('js/jquery.min.js');?>"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo $exe->url->asset('bootstrap/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript">
		$('pre code').each(function()
		{
			$(this).html($(this).html().trim());
		});
		</script>
	</body>
</html>