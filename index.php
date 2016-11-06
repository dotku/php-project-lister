<?php
	require_once "../vendor/autoload.php";
	use Lead\Dir\Dir;
	// require_once "../vendor/crysalead/dir/src/Dir.php"; 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DotKu Dev</title>
		<link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="/lib/angular/angular.js"></script>
		<script src="/lib/jquery/dist/jquery.min.js"></script>
		<script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
		<style>
			.container {max-width: 800px;}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>DotKu Dev</h1>
			<p>Welcome to my dev machine</p>
			<?php
				$dirs = array();
				$dirs = Dir::scan('projects', [
					'type' 		=> 'dir', 
					'skipDots' 	=> true,
					'recursive' => false
				]);
			?>
			<?php if (is_array($dirs) && !empty($dirs)) { ?>
				<div class="list-group">
					<?php foreach($dirs as $key => $val) { ?>
						<a href="<?php echo $val; ?>" class="list-group-item">
							<h4 class="list-group-item-heading"><?php echo pathinfo($val)['basename']; ?></h4>
							<p class="list-group-item-text"></p>
						</a>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="alert alert-info" role="alert">Powered by <a href="https://github.com/dotku/php-project-lister">PHP Project Lister</a></div>
		</div>
		<script>
			var projectList = [
				{'name': 'lib', 'description': '前端代码库'},
				{'name': 'kiwich', 'description': '基于地理位置的社交网址'},
				{'name': 'fnmili', 'description': '全球直邮代购商城'},
				{'name': 'tencentyun', 'description': '基于腾讯云的项目'},
				{'name': 'lab', 'description': '研究中的项目'},
        {'name': 'referral', 'description': '用于放置优惠券，推广码'}
			];
			$('.list-group-item').each(function(i, o){
				for(var i = 0; i < projectList.length; i++) {
					if (projectList[i].name == $(o).find('.list-group-item-heading').html()) {
						// console.log(projectList[i].name, $(o).find('.list-group-item-heading').html());
						$(o).find('.list-group-item-text').html(projectList[i].description);
					} else {
						// console.log(projectList[i].name, $(o).find('.list-group-item-heading').html());
					}
				}
			})
		</script>
	</body>
</html>
