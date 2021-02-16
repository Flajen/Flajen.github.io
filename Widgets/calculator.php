<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet"> <!-- Шрифт -->
<link href="calculator.css" rel="stylesheet">

<div class="widget-wrapper">
	<div class="widget">
		<h1 class="widget-title">Калькулятор</h1>

		<div class="widget-workspace">
			<p class="widget-subtitle">Укажите тип события</p>
			<div>
				<div class="events">
					<label>
						<div>
							<input type="radio" name="event" class="event-radio">
							<span class="event-radio_btn"></span>
						</div>
						<p>пожар</p>
					</label>
					<label>
						<div>
							<input type="radio" name="event" class="event-radio">
							<span class="event-radio_btn"></span>
						</div>
						<p>залив</p>
					</label>
					<label>
						<div>
							<input type="radio" name="event" class="event-radio input_radio">
							<span class="event-radio_btn"></span>
						</div>
						<p>своё</p>
					</label>
				</div>
				<input type="text" class="event-input_radio-help" placeholder="Событие">
			</div>

			<p class="widget-subtitle" style="margin-top: 5px;">Количество повреждённых помещений: <span>0</span></p>
			<button type="button" class="widget-add_premises">Добавить</button>

			<div class="widget-blackout" style="display: block;"></div>
			<div class="widget-popup" style="display: block;">
				<h2 class="popup_title">Помещение № <span class="popup_close"></span></h2>

				<p class="widget-subtitle">Укажите вид отделки</p>
				<ul>
					<li class="popup_block">
						<p class="popup_block-title">Стены:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">окраска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">обои</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">декоративная штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Пол:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">ламинат + подложка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">линолеум</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">плитка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">паркетная доска, инженерная доска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">паркет</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Потолок:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">окраска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">обои</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">натяжной</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>ПВХ (Россия)</option>
									<option>ПВХ (Зарубеж.)</option>
									<option>Тканевый</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">подвесной ГКЛ(ГВЛ)</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>одноуровневый</option>
									<option>2-уровневый</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">реечный алюм. (туалет)</p>
							</li>
						</ul>
					</li>
				</ul>

				<p class="widget-subtitle">Укажите размеры помещения</p>
				<ul>
					<li><input type="text" placeholder="Длина" class="popup_block"></li>
					<li><input type="text" placeholder="Ширина" class="popup_block"></li>
					<li><input type="text" placeholder="Высота" class="popup_block"></li>
				</ul>

				<p class="widget-subtitle">Укажите количество проемов</p>
				<ul style="border: 1px solid #2224;">
					<li>
						<p class="popup_block-title">дверной</p>
						<ul>
							<li><input type="text" placeholder="Высота" class="popup_block"></li>
							<li><input type="text" placeholder="Ширина" class="popup_block"></li>
						</ul>
					</li>
					<li>
						<p class="popup_block-title">оконный</p>
						<ul>
							<li><input type="text" placeholder="Высота" class="popup_block"></li>
							<li><input type="text" placeholder="Ширина" class="popup_block"></li>
						</ul>
					</li>
				</ul>

				<p class="widget-subtitle">Наличие плинтусов </p>
				<ul>
					<li class="popup_block">
						<p class="popup_block-title">Напольный</p>
						<ul>
							<li>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>дерево</option>
									<option>пластик</option>
									<option>пенопласт</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Потолочный</p>
						<ul>
							<li>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>дерево</option>
									<option>пластик</option>
									<option>пенопласт</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Напольный</p>
						<ul>
							<li>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>
						</ul>
					</li>
				</ul>

				<p class="widget-subtitle">Светильники</p>
				<input type="text" placeholder="кол-во" class="popup_block">

				<p class="widget-subtitle">Выключатели/розетки</p>
				<input type="text" placeholder="кол-во" class="popup_block">

				<p class="widget-subtitle">Износ</p>
				<div>
					<p>Дата последнего ремонта</p>
					<input type="date">
				</div>
				<div>
					<p>Дата события</p>
					<input type="date">
				</div>

				<p class="widget-subtitle">Нормативный срок эксплуатации</p>
				<ul>
					<li class="popup_block">
						<p class="popup_block-title">Стены:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">окраска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">обои</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">декоративная штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Пол:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">ламинат + подложка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">линолеум</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">плитка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">паркетная доска, инженерная доска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">паркет</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простой</option>
									<option>улучшенный</option>
									<option>высококачественный</option>
								</select>
							</li>
						</ul>
					</li>

					<li class="popup_block">
						<p class="popup_block-title">Потолок:</p>
						<ul>
							<li>
								<p style="margin-left: 15px;">окраска</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">обои</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">штукатурка</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>простая</option>
									<option>улучшенная</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">натяжной</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>ПВХ (Россия)</option>
									<option>ПВХ (Зарубеж.)</option>
									<option>Тканевый</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">подвесной ГКЛ(ГВЛ)</p>
								<select style="margin-left: 25px; border: 1px solid #222;">
									<option>одноуровневый</option>
									<option>2-уровневый</option>
									<option>высококачественная</option>
								</select>
							</li>

							<li>
								<p style="margin-left: 15px;">реечный алюм. (туалет)</p>
							</li>
						</ul>
					</li>
				</ul>

				<button type="button" class="popup-btn">Сохранить</button>
			</div>

			<div class="widget-data">
				<h3 class="data_title">Помещение №.<span class="data_number">1</span> (<span class="data_name">Название</span>)</h3>
				<div class="data_btn">
					<button class="data_change">Редактировать</button>
					<button class="data_delete">Удалить</button>
				</div>
			</div>

			<button type="button" class="widget-calculate">Рассчитать стоимость</button>

		</div>
	</div>
</div>

<script src="calculator.js"></script>
<script src="js/jquery.min.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>