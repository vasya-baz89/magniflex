ymaps.ready(init(zoomIndex, coordLatitude, coordLongitude))

function init(zoomIndex, coordLatitude, coordLongitude) {
	var zoom = zoomIndex || 10
	var latitude = coordLatitude || 55.73
	var longitude = coordLongitude || 37.64

	return function() {
		var myMap = new ymaps.Map('map', {
				center: [latitude, longitude],
				zoom: zoom
			}),
			// Создаем геообъект с типом геометрии "Точка".

			myGeoObject = new ymaps.GeoObject(
				{
					// Описание геометрии.
					geometry: {
						type: 'Point',
						coordinates: [55.73701478, 37.616189]
					},
					// Свойства.
					properties: {
						// Контент метки.
						iconContent: 'Шоу-рум',
						balloonContent: 'г. Москва, Космодамианская набережная, дом 36'
					}
				},
				{
					// Опции.
					// Иконка метки будет растягиваться под размер ее содержимого.
					preset: 'islands#redStretchyIcon',
					// Метку можно перемещать.
					draggable: true
				}
			)

		myMap.geoObjects
			.add(myGeoObject)

			.add(
				new ymaps.Placemark(
					[55.73701478, 37.616189],
					{
						iconContent: 'Флагманский шоу-рум Magniflex',
						balloonContent:
							'<b>Флагманский шоу-рум Magniflex</b> <br />Бродников переулок, д.10, к.2	<br />Время работы: пн-пт: 9:30 - 21:00, сб-вс: 10:00 - 21:00 <br />тел. +7 (495) 771 01 10'
					},
					{
						preset: 'islands#redStretchyIcon'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[43.51830031, 39.85562651],
					{
						balloonContent: '<b>"Palazzo"</b> <br />г. Сочи, ул. Пластунская, дом 70<br /> Ежедневно: 10:00 - 20:00<br />Тел.: +7 (988) 236-00-66'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.666599, 37.552148],
					{
						balloonContent:
							'<b>"Италмания"</b> <br />ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж <br />Время работы: пн-сб: 10:00 - 20:00, вс: 10:00 - 18:00 <br />тел. +7 (495) 718-73-88, +7 (495) 718-76-31'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.709992, 37.654287],
					{
						balloonContent:
							'<b>Салон "Алло! Матрас!"</b> <br />ул. Ленинская Слабода, д. 26, корп."А", Бизнес-центр "Омега-2", офис №451, 4 этаж. <br />Время работы: с 10 до 19-30 ежедневно <br />тел. +7(495) 278-02-40, 8-800-555-48-25'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.864217, 37.682152],
					{
						balloonContent:
							'<b>"Матрасы и Аксессуары"</b> <br />Анадырский проезд, дом 17/1, к. 1, помещение 1, 1 этаж <br />Время работы: пн-вс: 10:00 - 19:00 <br />тел. 8 (499) 184-38-81, 8 (903) 762-80-80'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.660531, 37.741827],
					{
						balloonContent:
							'<b>"Матрас-на-заказ"</b> <br />ул. Люблинская 151, Деловой центр "Марьино" <br />Время работы: пн-пт: 11:00 - 19:00 сб-вс: выходные <br />тел. +7(495) 640-62-35, +7 (495)220-44-95, доб. 193'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.811685, 37.729404],
					{
						balloonContent: '<b>Салон</b> <br />ул. Бульвар Рокосовского, дом 6, 2 этаж <br />Время работы: с 11:00 до 20:00 ежедневно <br />тел. +7(499) 169-02-41, +7(963) 750-41-44'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.807921, 37.57351],
					{
						balloonContent:
							'<b>Салон мебельной фабрики «Зал Свобода»</b> <br />ул. Тимирязевская, д.2/3, ТЦ "Парк-11", 3 этаж <br />Время работы: с 10-00 до 20-00 ежедневно <br />тел. +7(499) 130-06-68, +7(925) 198-54-30'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.723582, 37.672962],
					{
						balloonContent:
							'<b>Салон «Мебель Италии»</b> <br />1-я Дубровская ул, д.13, 1 этаж <br />Время работы: с 10-00 до 19-30 ежедневно <br />тел. +7(495) 795-54-06, +7(966) 144-29-60'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.681372, 37.848781],
					{
						balloonContent:
							'<b>Салон «Мебель Италии»</b> <br />ул. Привольная, дом 65/32, 1 этаж <br />Время работы: с 10-00 до 19-30 ежедневно <br />тел. +7(495) 704-47-01, +7(929) 659-75-75'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.65272, 37.63562],
					{
						balloonContent: '<b>Шатура-Мебель</b> <br />1-ий Котляковский переулок, д.1С - 99; офис №212 <br />Время работы: пн-сб: 10:00 - 19:00 <br />тел. 8 (495) 660-83-78 (доб. 101)'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.748356, 37.571543],
					{
						balloonContent:
							'<b>Салон «Мебель, свет, интерьеры»</b> <br />Набережная Тараса Шевченко, д.3, 1 этаж <br />Время работы: пн-пт: 10:00 - 20:00 сб,вс: выходной <br />тел. +7(499) 243-60-00, +7(916) 650-86-37'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.701694, 37.604044],
					{
						balloonContent: '<b>Салон «Берлускони»</b> <br />5-ый Донской проезд, дом 23, ТД "Семь", 1 этаж <br />Время работы: с 10-00 до 19-30 ежедневно <br />тел. +7(495) 795-71-50'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.720611, 37.610359],
					{
						balloonContent:
							'<b>«Мебель Италии»</b> <br />"Дом Мебели". ул. Шаболовка, д. 31, 1 этаж <br />Время работы: с 10:00 до 20:00 ежедневно <br />тел. +7(499) 236-84-28, +7(499) 233-83-09'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.759973, 37.631056],
					{
						balloonContent:
							'<b>Салон «Гледиз»</b> <br />ул. Мясницкая, дом 8/2, стр. 1 <br />Время работы: пн-сб: 09:30 - 20:00 вс: 11:00 – 18:00 <br />тел. +7(495) 624-15-63, +7(495)624-59-21, +7(495)624-52-53'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.639664, 37.824194],
					{
						balloonContent:
							'<b>ООО «Гранде Мебель»</b> <br />ТЦ «Интерьер Плаза», 8 этаж, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А <br />Время работы: 10:00 - 21:00 ежедневно <br />тел. +7(495)780-35-35, доб. 805'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.788965, 37.591108],
					{
						balloonContent:
							'<b>Магазин "Матрас ОК Кровати"</b> <br />ул. Новослободская, дом 67/69 <br />Время работы: пн-сб: 10:00 - 20:00 вс: 11:00 - 17:00 <br />тел. +7(499) 973-16-65, +7(499) 973-17-19'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.741161, 37.860603],
					{
						balloonContent: '<b>Магазин «Мебель»</b> <br />ул. Новокосинская д.23 <br />Время работы: пн-пт: 10:00 - 20:00 сб: 11:00 - 18:00 вс: 11:00 - 16:00 <br />тел. +7(495)701-22-60'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.05485678, 82.9115545],
					{
						balloonContent:
							'<b>Салон «Матрасы и кровати»</b> <br />ул. Красный проспект, 99<br />Время работы: пн-пт: 10:00 - 20:00 сб: 11:00 - 18:00 вс: 11:00 - 16:00 <br />тел. +7(495)701-22-60'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[45.021239, 41.91602],
					{
						balloonContent:
							'<b>Салон «Матрасы и кровати»</b> <br />ул. Красный проспект, 99<br />Время работы: пн-пт: 10:00 - 20:00 сб: 11:00 - 18:00 вс: 11:00 - 16:00 <br />тел. +7(495)701-22-60'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.677935, 37.531622],
					{
						balloonContent:
							'<b>Магазин «Инвирд»</b> <br />Ленинский пр-кт 89/2, цокольный этаж <br />Время работы: пн-пт: 10-00 - 20-00 сб-вс: 11-00 - 19-00 <br />тел. +7(499)132-03-44, +7(495) 132-15-38'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.670133, 37.552427],
					{
						balloonContent:
							'<b>Салон Orthosleep в ТЦ «Черемушки»</b> <br />г. Москва, ул. Профсоюзная, д.56, 3-й этаж, линия 3Ж <br />Время работы: ежедневно с 10:00 до 21:00 <br />тел. +7(495) 558-61-63'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.681087, 37.622953],
					{
						balloonContent: '<b>ООО «Ортик»</b> <br />Варшавское шоссе, д.32 <br />Время работы: пн-сб: 10:00 - 19:00 вс: выходной <br />тел. +7(495) 558-61-63'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.749907, 37.773771],
					{
						balloonContent: '<b>Cалон Мебели «Адель»</b> <br />Зеленый проспект, дом 3А, ТЦ "Ваш Дом", 2 этаж <br />Время работы: с 10-30 до 20-00 ежедневно <br />тел. +7(966) 121-29-16'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.778699, 37.512371],
					{
						balloonContent:
							'<b>Салон Мебели «Дольче Вита»</b> <br />ул. Зорге, дом 1, стр. 2, магазин "Дом для Дома", 2 этаж <br />Время работы: с 10-00 до 20-00 ежедневно <br />тел. +7(495) 969-45-19, +7(926) 216-30-58'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.782572, 37.531936],
					{
						balloonContent:
							'<b>Салон «Мебель Италии»</b> <br />ул. Гризадубовой, дом 2, 2 этаж, правое крыло <br />Время работы: с 11-00 до 19-00 ежедневно <br />тел. +7(495) 752-69-14, +7 (495) 752-45-29'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.615904, 37.607915],
					{
						balloonContent:
							'<b>Салон «Итальянская Коллекция»</b> <br />МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж <br />Время работы: с 10-00 до 20-00 ежедневно <br />тел. +7(495) 781-11-11 доб. 24-14; +7(925) 589-72-89'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)
			.add(
				new ymaps.Placemark(
					[55.615904, 37.607915],
					{
						balloonContent:
							'<b>Салон «Мебель Румынии»</b> <br />МТК "Армада" ул. Кировоградская, д 11, стр. 1, 4 этаж <br />Время работы: с 10-00 до 20-00 ежедневно <br />тел. +7(909) 921-99-40, +7(925) 507-69-05'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.674813, 37.567617],
					{
						balloonContent:
							'<b>Салон «Мобиле Арт»</b> <br />Нахимовский проспект, дом 47, офис 1214 <br />Время работы: пн-пт: 10:00 - 20:00 сб-вс: выходной <br />тел. +7(495) 232-55-14, +7(495) 232-55-12, +7(495) 124-53-46'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.672021, 37.583895],
					{
						balloonContent:
							'<b>«Мебель Италии и Испании»</b> <br />Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд <br />Время работы: пн-пт: 10:00 - 20:00 сб-вс: выходной <br />тел. +7(495) 803-41-70, +7(495) 557-47-54, +7(910) 441-67-51'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.636711, 37.442226],
					{
						balloonContent:
							'<b>Дизайн-студия, интерьеры</b> <br />Бизнес Парк "Румянцево", стр.1, к."А", вход №2, эт.2, павильон № 228 "А" <br />Время работы: с 10-00 до 19-30 ежедневно <br />тел. +7(499) 550-29-15, +7(985) 923-77-83'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.788965, 37.591108],
					{
						balloonContent:
							'<b>Магазин «Матрас ОК Кровати»</b> <br />ул. Новослободская, дом 67/69 <br />Время работы: пн-сб: 10:00 - 20:00 вс: 11:00 - 17:00 <br />тел. +7(499) 973-16-65, +7(499) 973-17-19'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.719536, 37.628146],
					{
						balloonContent:
							'<b>Ортопедический салон «Пассивная Терапия»</b> <br />ул. Павловская, владение №7, этаж 1 <br />Время работы: с 10-30 до 20-00 ежедневно <br />тел. +7(495) 648-61-15, +7(905) 777-01-96'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.677935, 37.531622],
					{
						balloonContent:
							'<b>Магазин «Инвирд»</b> <br />Ленинский пр-кт 89/2, цокольный этаж <br />Время работы: пн-пт: 10-00 - 20-00 сб-вс: 11-00 - 19-00 <br />тел. +7(499)132-03-44, +7(495) 132-15-38'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.720611, 37.610359],
					{
						balloonContent: '<b>«Мебель Италии»</b> <br />«Дом Мебели», ул. Шаболовка, д. 31, 1 этаж <br />с 10:00 до 20:00 ежедневно <br />тел. +7(499) 236-84-28, +7(499) 233-83-09'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.759476, 37.761527],
					{
						balloonContent:
							'<b>«Мебель Румынии»</b> <br />Шоссе Энтузиастов, д.54, ТЦ «Мебель Уюта», 4 этаж <br />пн-сб: 11:00—19:00 вс: 11:00—18:00 <br />тел. +7(925) 589-01-51, +7(925) 510-85-09'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.61464, 37.60672],
					{
						balloonContent:
							'<b>Салон «Итальянская Коллекция»</b> <br />МТК «Армада», ул. Кировоградская, д 11, стр. 1, 4 этаж <br />с 10-00 до 20-00 ежедневно <br />тел. +7(495) 781-11-11, доб. 24-14; +7(925) 589-72-89'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.782441, 37.702822],
					{
						balloonContent:
							'<b>«Мебель из массива»</b> <br />ТЦ «Мебель России», ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17 <br />с 10-00 до 19-30 ежедневно <br />тел. +7(495) 510-95-46, +7(495) 727-05-90'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.71489, 37.568628],
					{
						balloonContent:
							'<b>Салон "Абрис"</b> <br />г. Москва, Лужнецкая набережная, д. 10а, стр. 12, <br />7 минут пешком от ст. метро "Воробьевы горы". <br />Пн. - Пт. с 10.00 до 19.00 <br />(в выходные - по договоренности)	 <br />тел. 8-495-788-31-91 доб. 103'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.786974, 37.594371],
					{
						balloonContent:
							'<b>Салон "Митос"</b> <br />г. Москва, ул. Новослободская, д.50/1, строение 2 <br />Пн. - Пт: 10:00 - 20:00 <br />Сб. - Вс: 11:00 - 19:00<br />тел. (495) 937-66-12, (499) 972-05-96'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.782201, 37.707935],
					{
						balloonContent: '<b>«Квартал Здоровья»</b> <br />г. Москва, ул. Большая Семеновская, дом 32 <br />тел. +7 (495) 215 58 87'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.681235, 37.623018],
					{
						balloonContent: '<b>«Mr. Sleep»</b> <br />г. Москва, Варшавское шоссе, дом 32 <br /> ежедневно с 9:00 до 21:00 <br> тел. +8 (495) 191 43 55'
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.810918, 37.012833],
					{
						balloonContent:
							'<b>Салон «Valest»</b> <br />г. Москва МО, Новорижское шоссе, 23 км,<br> д. Покровское, ул. Центральная, 27 ТК «Покровский»<br> 8 (800) 500-56-79 valest@mebel-vip.ru http://valest-russia.com '
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)

			.add(
				new ymaps.Placemark(
					[55.6342359, 37.4379625],
					{
						balloonContent:
							'<b>Салон «Valest»</b> <br /> г. Москва, Киевское шоссе 1,<br> 500 м от МКАД в область, Корпус А, вход №3, 2 этаж<br> 8 (800) 500-56-79 valest@mebel-vip.ru http://valest-russia.com '
					},
					{
						preset: 'islands#StretchyIcon',
						iconColor: '#1faee9'
					}
				)
			)
	}
}
