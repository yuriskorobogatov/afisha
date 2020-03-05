<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
 <body class="wide">
<?php $this->beginBody() ?>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
	<header id="header-container" class="fullwidth">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Left Side Content -->
				<div class="left-side">

					<!-- Logo -->
					<div id="logo">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>

					<!-- Main Navigation -->
					<nav id="navigation">
						<ul id="responsive">

							<li><a href="#">Афиша</a>
								<ul class="dropdown-nav">
									<li><a href="#">Главная</a></li>
									<li><a href="#">Список</a></li>
									<li><a href="#">Категории</a>
										<ul class="dropdown-nav">
											<li><a href="#">Кино</a></li>
											<li><a href="#">Спорт</a></li>
											<li><a href="#">Концерты</a></li>
											<li><a href="#">Игры</a></li>
											<li><a href="#">Прогулки</a></li>
										</ul>
									</li>
									<li><a href="#">Предложить афишу</a>
								</ul>
							</li>

							<li style="margin-top: 3px;"><a href="#">Лента</a></li>

						</ul>
					</nav>
					<div class="clearfix"></div>
					<!-- Main Navigation / End -->

				</div>
				<!-- Left Side Content / End -->

				<!-- Right Side Content / End -->
				<div class="right-side">

					<div class="header-notifications hide-on-mobile add-poster">
						<div class="header-notifications-trigger">
							<a href="#" class="button ripple-effect"><i class="icon-feather-plus"></i> Создать афишу</a>
						</div>
					</div>
					<!--  User Notifications -->
					<div class="header-widget hide-on-mobile">

						<!-- Notifications -->
						<div class="header-notifications">

							<!-- Trigger -->
							<div class="header-notifications-trigger">
								<a href="#"><i class="icon-feather-heart"></i><span>4</span></a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<div class="header-notifications-headline">
									<h4>Участие в событиях</h4>
									<button class="mark-as-read ripple-effect-dark" title="Ближайшие по времени участие в собитиях" data-tippy-placement="left">
										<i class="icon-material-outline-info"></i>
									</button>
								</div>

								<div class="header-notifications-content">
									<div class="header-notifications-scroll" data-simplebar>
										<ul>

											<li class="notifications-not-read">
												<a href="dashboard-manage-candidates.html">
													<span class="notification-icon"><img src="https://i00.eu/img/578/1200x800/9ksdj57d/2615.jpg"></span>
													<span class="notification-text">
													<span class="color">Название события</span>
													<p> <i class="icon-line-awesome-calendar-check-o"></i>21 ноября 2019</p>
												</span>
												</a>
											</li>


											<li class="notifications-not-read">
												<a href="dashboard-manage-candidates.html">
													<span class="notification-icon"><img src="https://i00.eu/img/578/1200x800/9ksdj57d/2615.jpg"></span>
													<span class="notification-text">
													<span class="color">Название события</span>
													<p> <i class="icon-line-awesome-calendar-check-o"></i>21 ноября 2019</p>
												</span>
												</a>
											</li>


											<li class="notifications-not-read">
												<a href="dashboard-manage-candidates.html">
													<span class="notification-icon"><img src="https://i00.eu/img/578/1200x800/9ksdj57d/2615.jpg"></span>
													<span class="notification-text">
													<span class="color">Название события</span>
													<p> <i class="icon-line-awesome-calendar-check-o"></i>21 ноября 2019</p>
												</span>
												</a>
											</li>


											<li class="notifications-not-read">
												<a href="dashboard-manage-candidates.html">
													<span class="notification-icon"><img src="https://i00.eu/img/578/1200x800/9ksdj57d/2615.jpg"></span>
													<span class="notification-text">
													<span class="color">Название события</span>
													<p> <i class="icon-line-awesome-calendar-check-o"></i>21 ноября 2019</p>
												</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">Посмотреть все участия в событиях<i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>

						</div>

						<!-- Messages -->
						<div class="header-notifications">
							<div class="header-notifications-trigger">
								<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<div class="header-notifications-headline">
									<h4>Сообщения</h4>
									<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
										<i class="icon-feather-check-square"></i>
									</button>
								</div>

								<div class="header-notifications-content">
									<div class="header-notifications-scroll" data-simplebar>
										<ul>
											<!-- Notification -->
											<li class="notifications-not-read">
												<a href="dashboard-messages.html">
													<span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
													<div class="notification-text">
														<strong>Человек Человечище</strong>
														<p>Привет</p>
														<span class="color">4 часа назад</span>
													</div>
												</a>
											</li>

											<!-- Notification -->
											<li class="notifications-not-read">
												<a href="dashboard-messages.html">
													<span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
													<div class="notification-text">
														<strong>Человек Человечище</strong>
														<p>Здорово</p>
														<span class="color">Вчера в 11:00</span>
													</div>
												</a>
											</li>

											<!-- Notification -->
											<li class="notifications-not-read">
												<a href="dashboard-messages.html">
													<span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
													<div class="notification-text">
														<strong>Человек Человечище</strong>
														<p>Дратуйте </p>
														<span class="color">Вчера в 11:00</span>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>

								<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">Посмотреть все сообщения<i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>

					</div>
					<!--  User Notifications / End -->

					<!-- User Menu -->
					<div class="header-widget">

						<!-- Messages -->
						<div class="header-notifications user-menu">
							<div class="header-notifications-trigger">
								<a href="#"><div class="user-avatar status-online"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeeL49JWOEVF31AHgWVOTmy2BQjkAZWVNy2RHge1MYlcVyq4tC&s" alt=""></div></a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<!-- User Status -->
								<div class="user-status">

									<!-- User Name / Avatar -->
									<div class="user-details">
										<div class="user-avatar status-online"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeeL49JWOEVF31AHgWVOTmy2BQjkAZWVNy2RHge1MYlcVyq4tC&s" alt=""></div>
										<div class="user-name">	Человек Человечище
												<span>Человек Человечище</span>
										</div>
									</div>

									<!-- User Status Switcher -->
									<div class="status-switch" id="snackbar-user-status">
										<label class="user-online current-status">Онлайн</label>
										<label class="user-invisible">Оффлайн</label>
										<!-- Status Indicator -->
										<span class="status-indicator" aria-hidden="true"></span>
									</div>
								</div>

								<ul class="user-menu-small-nav">
									<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Профиль</a></li>
									<li><a href="dashboard.html"><i class="icon-line-awesome-search"></i> О проекте</a></li>
									<li><a href="dashboard.html"><i class="icon-line-awesome-bold"></i> Баллы  <span class="nav-tag" style="color:limegreen">238</span></a></li>
									<li><a href="dashboard.html"><i class="icon-material-outline-help-outline"></i> Вопрос / Ответ</a></li>
									<li><a href="dashboard-settings.html"><i class="icon-feather-settings"></i> Настройки</a></li>
									<li><a href="index-logged-out.html"><i class="icon-line-awesome-power-off"></i> Выйти</a></li>
								</ul>

							</div>
						</div>

					</div>
					<!-- User Menu / End -->

					<!-- Mobile Navigation Button -->
					<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

				</div>
				<!-- Right Side Content / End -->

			</div>
		</div>
		<!-- Header / End -->

	</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



        <?= $content ?>
 



<!-- Footer
================================================== -->
<!-- xxx Footer xxx -->
<footer>
	<div class="widget-footer">
		<div class="container-footer">
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<div class="footer-dark">
						<div class="text-footer">
							<div class="footer-logo"><img src="images/logo.png" alt=""></div>
							<div><a href="#">MIO афиша</a> здесь собраны лучшие и проверенные мероприятия со всех городов. Вы можете ознакомиться с информацией, стать участником события, голосовать и оставлять комментарии к событию</div>

							<div class="social-icons footer">
								<ul>
									<li><a data-original-title="Twitter" title="" data-toggle="tooltip" href="#"><i class="icon-brand-facebook-f"></i></a></li>
									<li><a data-original-title="Facebook" title="" data-toggle="tooltip" href="#"><i class="icon-brand-twitter"></i></a></li>
									<li><a data-original-title="Pinterest" title="" data-toggle="tooltip" href="#"><i class="icon-brand-google-plus-g"></i></a></li>
									<li><a data-original-title="Google Plus" title="" data-toggle="tooltip" href="#"><i class="icon-brand-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8">
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<div class="sidebar-head"><span>Полезные ссылки</span></div>
							<ul class="category">
								<li>
									<a class="btn-border-round btn-mini col-sm-12 text-center" href="#" data-toggle="tooltip" title="" data-original-title="Button Mini">Связаться с нами</a>
								</li>
								<li>
									<a class="btn-border-round btn-mini col-sm-12 text-center" href="#" data-toggle="tooltip" title="" data-original-title="Button Mini">Помощь новичку</a>
								</li>
								<li>
									<a class="btn-border-round btn-mini col-sm-12 text-center" href="#" data-toggle="tooltip" title="" data-original-title="Button Mini">Стать партнёром &nbsp;</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="sidebar-head"><span>Последнее в ленте активности</span></div>
							<div class="">
								<ul class="sidebar-post">
									<li>
										<div class="post-text">
											<h4><a href="#">Планы на будущие</a></h4>
											<p>Очередное обновление не заставит вас ждать..</p>
											<div class="post-date">
												<i class="icon-feather-clock"></i> 18 ноября 2019
											</div>
											<div class="post-date">
												<a href="#"><i class="icon-line-awesome-comments"></i>15</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-text">
											<h4><a href="#">Открытие раздела "афиши"</a></h4>
											<p>Наступил долгожданое открытие..</p>
											<div class="post-date">
												<i class="icon-feather-clock"></i> 18 ноября 2019
											</div>
											<div class="post-date">
												<a href="#"><i class="icon-line-awesome-comments"></i>15</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-inner">
		<div class="container text-center">
			<div>© 2019 - MIO Project.</div>
		</div>
	</div>
</footer>
<!-- xxx Footer End xxx -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
