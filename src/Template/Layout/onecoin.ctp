<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		 Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link					http://cakephp.org CakePHP(tm) Project
 * @since				 0.10.0
 * @license			 http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= 'One Coin: ひさしぶりに犬の散歩しませんか？' ?>
	</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Tempus - Modern Landing Page">
		<meta name="author" content="Shy Design">

		<!-- Le styles -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!--[if lt IE 10]>
			<link rel="stylesheet" href="css/ie-fix.css">
		<![endif]-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!--[if IE 7]>
			<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="img/ico/favicon.png">

</head>
<body>
	<?= $this->Flash->render() ?>
	<div class="header">
		<div class="container">
			<div class="row-fluid">

				<div class="span12">
					<div class="description-texts">
						<h1 class="site-slogan"><span>Lost time is never found again</span></h1>

						<p class="app-description">
							<span>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae.</span><br>
							<span>Vivamus elementum semper nisi. eleifend ac, enim elementum semper.</span><br>
							<span>Aenean leo ligula, porttitor eu, consequat vitae. </span>
						</p>

						<div class="app-buttons">
							<a href="#" class="header-btn">Join now</a>
						</div>
					</div>
				</div> <!-- /span7 -->

			</div> <!-- /row-fluid -->
		</div> <!-- /container -->
	</div><!-- /header -->


	<div class="grid-features">
		<div class="container">
			<div class="row-fluid">

				<div class="span4 text-center grid-feature">
					<div class="shape darkblue">
						<i class="icon-html5"></i>
					</div>
					<h3 class="title">html 5</h3>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
				</div><!-- /span4 -->

				<div class="span4 text-center grid-feature">
					<div class="shape pink">
						<i class="icon-tablet"></i>
					</div>
					<h3 class="title">responsive</h3>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
				</div><!-- /span4 -->

				<div class="span4 text-center grid-feature">
					<div class="shape lightblue">
						<i class="icon-css3"></i>
					</div>
					<h3 class="title">css 3</h3>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
				</div><!-- /span4 -->

			</div> <!-- /row-fluid -->
		</div> <!-- /container -->
	</div><!-- /grid-features -->


	<div class="testimonials">
		<div class="container">
			<div class="row-fluid">

				<div class="span2">
					<div class="testimonail" id="dog1">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="span2">
					<div class="testimonail" id="dog2">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="span2">
					<div class="testimonail" id="dog3">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="span2">
					<div class="testimonail" id="dog4">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="span2">
					<div class="testimonail" id="dog5">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="span2">
					<div class="testimonail" id="dog6">
						<div class="testimonail-text">
							<blockquote>
								<div class="textimonial-image">
									<img class="img-circle" src="/img/avatar.png" width="100" height="100" alt="avatar image"/>
								</div>
								<p><i class="icon-quote-left"></i> Donec aliquet mattis libero, ac porttitor leo ultricies nec. <i class="icon-quote-right"></i><p>
								<h5 class="title"><a href="#">Loki luck</a></h5>
							</blockquote>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div><!-- /pricing-table -->

	<div class="contact">

		<?= $this->fetch('content') ?>

	</div><!-- /contact -->

	<div class="footer">
		<div class="container">
			<div class="row-fluid">
				<h3 class="footer-title pull-left"><a href="#"><i class="icon-time"></i> Tempus</a></h3>
				<p class="pull-right footer-copyright">&copy; All Right Reserved.</p>
			</div> <!-- /row-fluid -->
		</div> <!-- /container -->
	</div> <!-- /footer -->

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">ご登録ありがとうございました</h3>
		</div>
		<div id="myModalBody" class="modal-body">
			<style>
			.share .twitter, .share .facebook {
			  display: inline-block;
			  vertical-align: top;
			}
			.share .facebook {
			  width: 90px;
			  overflow: hidden;
			}
			.share .twitter {
			  width: 100px;
			  overflow: hidden;
			}
			</style>

			<p>リリース時期が近づいて参りましたらまたご連絡させて頂きます。よろしければOneCoinをぜひお友達にシェアください。</p>

			<div class="share pull-right">
				<div class="facebook">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-share-button" data-href="https://onecoin-dog.herokuapp.com" data-layout="button_count"></div>
				</div>
				<div class="twitter">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://onecoin-dog.herokuapp.com" data-lang="ja">ツイート</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="custom-btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>

</body>
</html>
