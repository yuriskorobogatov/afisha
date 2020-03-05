<?php

$this->title = 'MIO > Афиша';
?>
<!-- Page Content
================================================== -->
<div class="poster container">
	<div class="row">



		<div class="col-xl-9 col-lg-9 content-left-offset" style="margin: auto;">

		<div class="container">
		<div class="row">

			<div id="BlockFiltr" class="notification inform closeable margin-top-15 margin-bottom-0 col-xl-12 col-lg-12">
				<p>
					<button data-toggle="collapse" data-parent=".acc" data-target="#FiltrPoster" class="button ripple-effect collapsed"><i class="icon-feather-settings"></i> Настроить афишу</button>
				</p>
				<a class="close"></a>
			</div>



				<div class="collapse col-xl-12 col-lg-12 padding-top-0" id="FiltrPoster">

					<div class="col-xl-12 col-lg-12 col-sm-12 padding-bottom-20 padding-top-5 head">
						<strong class="padding-right-10">Настройка ленты</strong> <strong><a id="FiltrPosterALL" href="#">Выделить всё</a></strong>
					</div>

					<div class="container padding-left-25 padding-top-20">
						<div class="row padding-bottom-20">


						<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
							<input type="checkbox" id="chekcbox1">
							<label for="chekcbox1"><span class="checkbox-icon"></span> <img src="images/25377.png"> Маркертинг</label>
						</div>

						<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
							<input type="checkbox" id="chekcbox2">
							<label for="chekcbox2"><span class="checkbox-icon"></span> <img src="images/25377.png"> Сервисы</label>
						</div>

						<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
							<input type="checkbox" id="chekcbox3">
							<label for="chekcbox3"><span class="checkbox-icon"></span> <img src="images/25377.png"> Техника</label>
						</div>



								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox4">
									<label for="chekcbox4"><span class="checkbox-icon"></span> <img src="images/25377.png"> Личный опыт</label>
								</div>

								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox5">
									<label for="chekcbox5"><span class="checkbox-icon"></span> <img src="images/25377.png"> Соцсети</label>
								</div>

								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox6">
									<label for="chekcbox6"><span class="checkbox-icon"></span> <img src="images/25377.png"> Карьера</label>
								</div>




								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox7">
									<label for="chekcbox7"><span class="checkbox-icon"></span> <img src="images/25377.png"> Будущее</label>
								</div>

								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox8">
									<label for="chekcbox8"><span class="checkbox-icon"></span> <img src="images/25377.png"> Дизайн</label>
								</div>

								<div class="checkbox col-xl-4 col-lg-6 col-sm-6">
									<input type="checkbox" id="chekcbox9">
									<label for="chekcbox9"><span class="checkbox-icon"></span> <img src="images/25377.png"> Медия</label>
								</div>



						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-sm-12 padding-top-20 footer">
						<button class="button ripple-effect">Сохранить</button>
					</div>

				</div>




			<div class="block-filtr-pnc margin-top-15 col-xl-7 col-lg-7 padding-left-0 padding-right-0">
				<div class="notify-box">

					<div class="filter-container row">
						<div class="tag col-xl-4 col-lg-6 col-sm-4">
							<input type="radio" name="TypePosters" id="TypePosters1">
							<label for="TypePosters1">Популярные</label>
						</div>
						<div class="tag col-xl-3 col-lg-6 col-sm-3">
							<input type="radio" name="TypePosters" id="TypePosters2">
							<label for="TypePosters2">Новое</label>
						</div>
						<div class="tag col-xl-3 col-lg-6 col-sm-3">
							<input type="radio" name="TypePosters" id="TypePosters3">
							<label for="TypePosters3">Обсуждаемые</label>
						</div>
					</div>

				</div>
			</div>

			<div class="block-filtr-day margin-top-15 col-xl-5 col-lg-5 padding-right-0">
				<div class="notify-box">

					<div class="filter-container row">
						<div class="tag col-xl-3 col-lg-6 col-sm-3">
							<input type="radio" name="DatePosters" id="DatePosters1">
							<label for="DatePosters1">День</label>
						</div>
						<div class="tag col-xl-4 col-lg-6 col-sm-4">
							<input type="radio" name="DatePosters" id="DatePosters2">
							<label for="DatePosters2">Неделя</label>
						</div>
						<div class="tag col-xl-3 col-lg-6 col-sm-3">
							<input type="radio" name="DatePosters" id="DatePosters3">
							<label for="DatePosters3">Месяц</label>
						</div>
					</div>

				</div>
			</div>

		</div>
		</div>

			<!-- Tasks Container -->
			<div class="tasks-list-container margin-top-35">
				
				<!-- Афиша -->
				<div class="task-listing afisha-listing">

					<div class="task-listing-details-head">
						<span class="blog-item-tag"><a href="#">Кино</a></span>
						<span><a href="#">Артур Идрисов</a></span>
						<span>Вчера в 23:11</span>
						<a class="tag" href="#"><i class="icon-feather-hash"></i>гонки</a>
						<a class="tag" href="#"><i class="icon-feather-hash"></i>фильм</a>

						<!-- Кнопка -->
						<div class="header-notifications comment-button">
							<div class="header-notifications-trigger">
								<a href="#" class="reply"><i class="icon-feather-more-horizontal"></i></a>
							</div>
							<!-- Список -->
							<div class="header-notifications-dropdown">
								<div class="header-notifications-content">
									<div class="header-notifications" data-simplebar>
										<ul>

											<li class="notifications-not-read">
												<a href="#" class="padding-top-5 padding-bottom-5">
													<span class="notification-icon"><i class="icon-feather-crosshair"></i></span>
													<span class="notification-text">Пожаловаться</span>
												</a>
											</li>

											<li class="notifications-not-read">
												<a href="#" class="padding-top-5 padding-bottom-5">
													<span class="notification-icon"><i class="icon-feather-upload"></i></span>
													<span class="notification-text">Поделиться</span>
												</a>
											</li>

										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>

					<!-- Постер + категория -->
					<div class="blog-post-thumbnail margin-top-50">
						<div class="blog-post-thumbnail-inner">
							<span class="age r18">18+</span>
							<img src="https://i00.eu/img/578/1200x800/9ksdj57d/2615.jpg" alt="">
						</div>
					</div>

					<!-- Блок детали афишы -->
					<div class="afisha-listing-details">

						<!-- Описание -->
						<div class="task-listing-description">
							<h2 class="afisha-listing-title">Михаэль Шумахер</h2>
							<ul class="afisha-icons">
								<li><i class="icon-material-outline-location-on"></i> Ноябрьск</li>
							</ul>
							<ul class="afisha-icons">
								<li><i class="icon-line-awesome-calendar-check-o"></i>21 ноября - 30 декабря</li>
							</ul>
							<p class="task-listing-text">Мало текста о офише. Мало текста о офише. Мало текста о офише... <a href="#">еще</a></p>
							<div class="afisha-comment">
								<i class="icon-line-awesome-comments"></i> 15
							</div>
						</div>

					</div>

					<div class="task-listing-bid afisha-listing-bid">
						<span class="star bookmark-icon"></span>
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>700 - 1000<i class="icon-line-awesome-ruble"></i></strong>
							</div>
							<span class="button button-sliding-icon ripple-effect">Пойду <i class="icon-material-outline-arrow-right-alt"></i></span>
							<div class="afisha-people-go margin-top-16">
								<strong>20 человек пойдут</strong>
							</div>
						</div>
					</div>
				</div>

				<!-- Афиша -->
				<a href="single-task-page.html" class="task-listing">

					<!-- Постер + категория -->
					<div class="blog-post-thumbnail">
						<div class="blog-post-thumbnail-inner">
							<span class="blog-item-tag">Отдых</span>
							<span class="age r0">0+</span>
							<img src="https://potokmedia.ru/wp-content/uploads/2019/08/shutterstock_402920080.jpg" alt="">
						</div>
					</div>

					<!-- Блок детали афишы -->
					<div class="task-listing-details">

						<!-- Описание -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">Прогулка в парке</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-on"></i> Ноябрьск</li>
								<li><i class="icon-line-awesome-calendar-check-o"></i>25 ноября 2019</li>
							</ul>
							<p class="task-listing-text">Прогулка — это хождение на свежем воздухе, совершаемое ради удовольствия и отдыха. Пойти на прогулку ...</p>
							<div class="task-tags">
								<span><i class="icon-feather-hash"></i> Для детей</span>
								<span><i class="icon-feather-hash"></i> Бесплатно</span>
								<span><i class="icon-feather-hash"></i> На свежем воздухе</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<span class="love bookmark-icon"></span>
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>Бесплатно<i class="icon-line-awesome-ruble"></i></strong>
							</div>
							<span class="button button-sliding-icon ripple-effect">Пойду <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>

				<!-- Афиша -->
				<a href="single-task-page.html" class="task-listing">

					<!-- Постер + категория -->
					<div class="blog-post-thumbnail">
						<div class="blog-post-thumbnail-inner">
							<span class="blog-item-tag">Музыка</span>
							<span class="age r16">16+</span>
							<img src="https://s1.funon.cc/img/orig/201606/15/5761d81b86ebb.jpg" alt="">
						</div>
					</div>

					<!-- Блок детали афишы -->
					<div class="task-listing-details">

						<!-- Описание -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">EDM концерт</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-on"></i> Ноябрьск</li>
							</ul>
							<ul class="task-icons">
								<li><i class="icon-line-awesome-calendar-check-o"></i> 30 ноября 2019</li>
								<li><i class="icon-line-awesome-calendar-check-o"></i> 7 декабря 2019</li>
							</ul>
							<p class="task-listing-text">Электронная танцевальная музыка представляет собой широкий спектр жанров и сти ...</p>
							<div class="task-tags">
								<span><i class="icon-feather-hash"></i> Теги</span>
								<span><i class="icon-feather-hash"></i> Теги</span>
								<span><i class="icon-feather-hash"></i> Теги</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<span class="love bookmark-icon"></span>
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>5000 - 7000<i class="icon-line-awesome-ruble"></i></strong>
							</div>
							<span class="button button-sliding-icon ripple-effect">Пойду <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>



				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-30 margin-bottom-60">
							<nav class="pagination">
								<ul>
									<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
									<li><a href="#" class="ripple-effect">1</a></li>
									<li><a href="#" class="current-page ripple-effect">2</a></li>
									<li><a href="#" class="ripple-effect">3</a></li>
									<li><a href="#" class="ripple-effect">4</a></li>
									<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!-- Pagination / End -->
                <div class="add-material-mobile"><a href="#" class="button ripple-effect"><i class="icon-feather-plus"></i> Создать афишу</a></div>
			</div>
			<!-- Tasks Container / End -->

		</div>
	</div>
</div>


</div>
<!-- Wrapper / End -->
