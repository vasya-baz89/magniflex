var true_zoom = google_zoom
var true_Firstcenter = google_FirstCenter
var true_Secondcenter = google_SecondCenter

function initMap() {
	var isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/))
	// массив координатов станций метро
	var ds_dynamic_markers = [
		{
			polianka: { lat: 55.737029, lng: 37.6182929 },
			babushkinskaia: { lat: 55.8682256, lng: 37.6612078 },
			bratislavskaia: { lat: 55.6588442, lng: 37.7479035 },
			bootirskaia: { lat: 55.8131839, lng: 37.60113 },
			kotlu: { lat: 55.6857264, lng: 37.6110441 },
			dmitrovskaia: { lat: 55.8075055, lng: 37.579427 },
			dobruninskaia: { lat: 55.72898, lng: 37.6203403 },
			domodedovskaia: { lat: 55.6100587, lng: 37.7162778 },
			dubrovka: { lat: 55.7178615, lng: 37.6744451 },
			zhulebino: { lat: 55.6842625, lng: 37.8526408 },
			kievskaia: { lat: 55.7437638, lng: 37.5654053 },
			kotelniki: { lat: 55.6749029, lng: 37.8565579 },
			leninskii: { lat: 55.7077801, lng: 37.5843192 },
			lubianka: { lat: 55.7592634, lng: 37.625959 },
			liublino: { lat: 55.675739, lng: 37.7596024 },
			mariino: { lat: 55.6491196, lng: 37.7422822 },
			mendeleevskaia: { lat: 55.7816595, lng: 37.5967113 },
			nagatinska: { lat: 55.6838833, lng: 37.6214167 },
			cheremushki: { lat: 55.6659931, lng: 37.5271216 },
			novogireevo: { lat: 55.7515923, lng: 37.81484 },
			novoslobodskaia: { lat: 55.7796266, lng: 37.5992519 },
			novokosino: { lat: 55.742879, lng: 37.8832183 },
			novokuzneckaia: { lat: 55.7358182, lng: 37.6301631 },
			oktiabrskaia: { lat: 55.7301506, lng: 37.6099724 },
			paveleckaia: { lat: 55.7310093, lng: 37.6341684 },
			pobedu: { lat: 55.7358848, lng: 37.5153037 },
			perovo: { lat: 55.7513163, lng: 37.784205 },
			polezhaevskaia: { lat: 55.7794742, lng: 37.5206896 },
			prazhskaia: { lat: 55.612275, lng: 37.6020812 },
			proletarskaia: { lat: 55.7313549, lng: 37.6616898 },
			profsoiuznaia: { lat: 55.6770876, lng: 37.5597708 },
			rumiantcevo: { lat: 55.6329645, lng: 37.4395072 },
			savelovskaia: { lat: 55.7941848, lng: 37.5866717 },
			salarevo: { lat: 55.6219677, lng: 37.4224673 },
			semenovskaia: { lat: 55.7830917, lng: 37.7172666 },
			serpuhovskaia: { lat: 55.7268419, lng: 37.6230551 },
			smolenskaia: { lat: 55.7486879, lng: 37.5798543 },
			strogino: { lat: 55.803723, lng: 37.4008943 },
			tulskaia: { lat: 55.7095962, lng: 37.6204635 },
			turgenevskaia: { lat: 55.7656411, lng: 37.6345799 },
			cska: { lat: 55.786537, lng: 37.5310083 },
			entuziastov: { lat: 55.7584079, lng: 37.7494742 },
			iuzhnaia: { lat: 55.6223352, lng: 37.6066517 },
			elektrozavodskaia: { lat: 55.7820971, lng: 37.7031118 },
			shchelkovskaia: { lat: 55.8086597, lng: 37.7963107 },
			vdnh: { lat: 55.824018, lng: 37.6366095 },
			vodnuistadion: { lat: 55.8383855, lng: 37.4811572 },
			myakinino: { lat: 55.8119433, lng: 37.3868553 }
		}
	]
	// смена центра карты при выборе станции
	$(function() {
		var find_marker = ''
		$('.ds_metro_filter').change(function() {
			$('.ds_metro_filter option').each(function() {
				if ($(this).is(':selected')) {
					find_marker = $(this).attr('classatr')
					return find_marker
				}
			})
			map.setCenter(ds_dynamic_markers[0][find_marker])
			map.setZoom(13)
		})
	})

	if ($('#google-map').length > 0) {
		var center
		var zoom
		zoom = true_zoom
		var FirstCenter = true_Firstcenter
		var SecondCenter = true_Secondcenter
		center = new google.maps.LatLng(FirstCenter, SecondCenter)

		var styles = [
			{
				featureType: 'administrative',
				elementType: 'all',
				stylers: [
					{
						saturation: '-100'
					}
				]
			},
			{
				featureType: 'administrative.province',
				elementType: 'all',
				stylers: [
					{
						visibility: 'off'
					}
				]
			},
			{
				featureType: 'landscape',
				elementType: 'all',
				stylers: [
					{
						saturation: -100
					},
					{
						lightness: 65
					},
					{
						visibility: 'on'
					}
				]
			},
			{
				featureType: 'poi',
				elementType: 'all',
				stylers: [
					{
						saturation: -100
					},
					{
						lightness: '50'
					},
					{
						visibility: 'simplified'
					}
				]
			},
			{
				featureType: 'road',
				elementType: 'all',
				stylers: [
					{
						saturation: '-100'
					}
				]
			},
			{
				featureType: 'road.highway',
				elementType: 'all',
				stylers: [
					{
						visibility: 'simplified'
					}
				]
			},
			{
				featureType: 'road.arterial',
				elementType: 'all',
				stylers: [
					{
						lightness: '30'
					}
				]
			},
			{
				featureType: 'road.local',
				elementType: 'all',
				stylers: [
					{
						lightness: '40'
					}
				]
			},
			{
				featureType: 'transit',
				elementType: 'all',
				stylers: [
					{
						saturation: -100
					},
					{
						visibility: 'simplified'
					}
				]
			},
			{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [
					{
						hue: '#ffff00'
					},
					{
						lightness: 0
					},
					{
						saturation: -97
					}
				]
			},
			{
				featureType: 'water',
				elementType: 'labels',
				stylers: [
					{
						lightness: 0
					},
					{
						saturation: -100
					}
				]
			}
		]

		var map = new google.maps.Map(document.getElementById('google-map'), {
			zoom: zoom,
			center: center,
			styles: styles,			
			disableDefaultUI: true,
			zoomControl: true,
		})

		/*    var iconColor = new google.maps.MarkerImage('../../img/gmarker-color.png'    /* Color marker
	    );

      var iconBlack = new google.maps.MarkerImage('../../img/gmarker-black.png'    /* Color marker
      );
      var iconBlackB = new google.maps.MarkerImage('../../img/gmarker-blackb.png'    /* Color marker
      );
      var iconGrey = new google.maps.MarkerImage('../../img/gmarker-grey.png'    /* Color marker
      );
      var iconGreyG = new google.maps.MarkerImage('../../img/gmarker-greyG.png'    /* Color marker
      );
       var iconBlue = new google.maps.MarkerImage('../../img/gmarker-blue.png'    /* Color marker
      );
       var iconViolet = new google.maps.MarkerImage('../../img/gmarker-violet.png'    /* Color marker
      );  */

		//var icon = new google.maps.MarkerImage('../../img/gmarker-final.png');
		
		//var icon = new google.maps.MarkerImage('/img/shops.png')
		//var iconRed = new google.maps.MarkerImage('/img/showroom.png')
		var icon = {url:'https://www.magniflex.ru/img/shops.svg', scaledSize: new google.maps.Size(30, 43) };
		var iconRed = {url:'https://www.magniflex.ru/img/showroom.svg', scaledSize: new google.maps.Size(30, 54) };
		
		var icon_hover = {url:'https://www.magniflex.ru/img/shops_selected.svg', scaledSize: new google.maps.Size(30, 43) };
		var iconRed_hover = {url:'https://www.magniflex.ru/img/showroom_selected.svg', scaledSize: new google.maps.Size(30, 54) };

		markersArray = []

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.7216977, lng: 37.6293021 },
			title: 'г.Москва, Партийный переулок, д.1,к.3,с.57, галерея интерьеров Твинстор, павильон В-31',
			icon: icon,
			map: map
		}))
		


		markersArray.push(new google.maps.Marker({
			position: { lat: 55.841442, lng: 37.4872864 },
			title: 'Кронштадтский бульвар, д. 9, стр. 3, ТЦ Крон-Парк',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.824325, lng: 37.6323582 },
			title: 'ул.1-я Останкинская, д.55, ТЦ ВДНХ',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.6092649, lng: 37.603991 },
			title: 'ул. Кировоградская, д. 15, ТЦ Электронный рай',
			icon: icon,
			map: map
		}))
		

		var marker = new google.maps.Marker({
			position: { lat: 55.73701478, lng: 37.616189 },
			title: 'Флагманский шоу-рум Magniflex, Бродников переулок, д.10, к.2',
			icon: iconRed,
			map: map
		})
		
		google.maps.event.addListener(marker, 'mouseover', function() {
			marker.setIcon(iconRed_hover);
		});
		google.maps.event.addListener(marker, 'mouseout', function() {
			marker.setIcon(iconRed);
		});
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.50806428, lng: 37.1164025 },
			title: 'г. Алексин, ул. Тульская, 136Д, ТЦ «Слобода», бутик 9.',
			icon: icon,
			map: map
		}))
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 56.8239839, lng: 60.7015372 },
			title: 'г. Екатеринбург, ул. 40 лет Комсомола, 38н, ТЦ "Гулливер"',
			icon: icon,
			map: map
		}))
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 56.8506581, lng: 60.6590504 },
			title: 'г. Екатеринбург, ул. Студенческая, дом 11, МЦ Галерея',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 52.02269179, lng: 47.8294495 },
			title: 'г. Балаково, Саратовская обл, ул. Трнавская 24',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 52.03161279, lng: 47.7919905 },
			title: 'г. Балаково, Саратовская обл, ул. Факел Социализма 24.',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 50.59978829, lng: 36.6032755 },
			title: 'г. Белгород, ул.Белгородского Полка, дом 62',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 47.2286712, lng: 39.7602404 },
			title: 'ИП Драгунов',
			icon: icon,
			map: map
		}))
		


		markersArray.push(new google.maps.Marker({
			position: { lat: 57.9183807, lng: 59.981858 },
			title: 'ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 47.2286712, lng: 39.7602404 },
			title: 'г. Ростов-на-Дону, ул. Закруткина 2/2',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 47.2302066, lng: 39.6997612 },
			title: 'г. Ростов-на-Дону, пр.Буденновский, 81',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 50.5695066, lng: 36.5737056 },
			title: 'г. Белгород, ул. Шаландина, 4, к. 1',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.0343898, lng: 44.6655475 },
			title: 'г. Владикавказ, пр. Коста 180',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.67975479, lng: 39.1872615 },
			icon: icon,
			title: 'г. Воронеж, ул. Урицкого, д.128.',
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.6708473, lng: 39.187251 },
			icon: icon,
			title: 'г. Воронеж, Плехановская, 41 — 1 этаж',
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.66961279, lng: 39.2575995 },
			icon: icon,
			title: 'г. Воронеж, ул. Димитрова, д. 74',
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.841186, lng: 60.629626 },
			title: 'г.Екатеринбург, проспект Ленина д.56',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.4798033, lng: 43.5964535 },
			title: 'г. Нальчик, ул. Головко 12а',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.4925058, lng: 43.5976035 },
			title: 'г. Нальчик, ул. Ногмова 80',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.4905173, lng: 43.6095685 },
			title: 'г. Нальчик, ул. Пачева 50',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.5032038, lng: 43.6151205 },
			title: 'г. Нальчик, ул. Богдана Хмельнинского 4',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.7558753, lng: 44.0233505 },
			title: 'г. Прохладный, ул. Ленина 72',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.4845658, lng: 44.1415155 },
			title: 'г. Терек, ул. Ленина 37',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.67379948, lng: 43.544621 },
			title: 'г. Баксан, ул. Ленина 5',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.5620448, lng: 43.8597495 },
			title: 'г. Нарткала, ул. Шекихачева 3',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 58.60059026, lng: 49.6795215 },
			title: 'г. Киров, ул. Герцена 9',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.9147138, lng: 39.3417805 },
			title: 'Краснодарский край, поселок Лазаревский, ул. Калараш, дом 145',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 45.101846, lng: 38.983578 },
			title: 'г. Краснодар, ул. Дзержинского 100, Мегацентр «Красная Площадь», 3 этаж, секция С-167',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 45.0904021, lng: 38.9970962 },
			title: 'г. Краснодар, г. Краснодар, ул.Тополиная, д.36',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.7353841, lng: 20.4707621 },
			title: 'г. Калининград, ул. Красная 115 ',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.99744678, lng: 92.8110965 },
			title: 'г. Красноярск, ул. Красной Звезды, д. 1б',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 44.9746348, lng: 34.1012785 },
			title: 'Республика Крым, Симферополь, ул. Кечкеметская, 13',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.36030028, lng: 86.0619725 },
			title: 'г. Кемерово, проспект Советский д.25А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.325342, lng: 86.1467823 },
			title: 'г. Кемерово, ул.Терешковой, дом 41',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 52.63459729, lng: 39.663153 },
			title: 'г. Липецк, пл. Заводская, д. 1',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 57.9183559, lng: 59.9787505},
		//   title: "ул. Октябрьской революции, дом 66, ЦУМ, 5 этаж, МАТРАС-ЦЕНТР",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.33024077, lng: 43.9961855 },
			title: 'г. Нижний Новгород, ул. Рождественская, д. 13',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.32867377, lng: 43.9539115 },
			title: 'г. Нижний Новгород, б. Мира, д. 17а',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.05485678, lng: 82.9115545 },
			title: 'г. Новосибирск, ул. Красный проспект, 99, Центр Здорового Сна',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.99758478, lng: 82.828541 },
			title: 'г. Новосибирск, ул. Станционная, д. 62, Салон Матрасы и Кровати',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.08172478, lng: 82.9328715 },
			title: 'г. Новосибирск, ул. Светлановская, д. 50',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.75332128, lng: 37.8577725 },
			title: 'г. Реутов, ул. Ленина д.1А.',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.01234978, lng: 37.4820525 },
			title: 'г. Лобня, ул. Ленина д.9',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.48193378, lng: 37.564446 },
			title: 'г. Подольск, проспект юны ленинцев, дом 61',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.93884378, lng: 37.5176165 },
			title: 'г. Долгопрудный, ул. Первомайская д.54',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.00359778, lng: 37.198104 },
			title: 'г. Зеленоград, Панфиловский пр-кт. д. 1 ',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.92949478, lng: 37.750541 },
			title: "г. Нижний Новгород, ул. Рождественская, дом 13, БЦ 'Муравей', 2-ой этаж",
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.83416328, lng: 37.30106 },
			title: 'г. Красногорск, ул. Ленина, дом 45',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.84653728, lng: 37.1946635 },
			title: 'Красногорский район, поселок Нахабино, ул. Советская, дом 73А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.88659478, lng: 37.4185055 },
			title: 'г. Химки, Юбилейный проспект, дом 7А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.8904375, lng: 37.4290546 },
			title: 'г. Химки, Бутаково 4',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.91053828, lng: 37.7096945 },
			title: 'г. Мытищи, ул. Юбилейная, дом 24А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.85140428, lng: 38.4632285 },
			title: 'Ногинский район, поселок Черноголовка, ул. Березовая, дом 24',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.84277229, lng: 55.1198985 },
			title: 'г. Оренбург, Шарлыкское шоссе, 1',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.774748, lng: 55.216944 },
			title: 'МОЛЛ Армада 2, центральный атриум. г. Оренбург, Нежинское шоссе, д. 2, 1 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 53.19935729, lng: 45.0104645 },
			title: 'г. Пенза, ул. Плеханова, д. 34',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 57.9962451, lng: 56.201661 },
			title: 'г. Пермь, ул. Кронштадская, дом 29',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		// 	position: { lat: 59.9220237, lng: 30.3441653 },
		// 	title: 'г. Санкт-Петербург, ул. Марата, д.61',
		// 	icon: icon,
		// 	map: map
		// })

		// markersArray.push(new google.maps.Marker({
		// 	position: { lat: 59.881505, lng: 30.3090029 },
		// 	title: 'г. Санкт-Петербург, ул. Варшавская, д.3, 4 этаж, секция 433',
		// 	icon: icon,
		// 	map: map
		// })

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.607468, lng: 39.736357 },
			title: 'г. Сочи, ул. Пластунская, дом 70Э',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.5183003, lng: 39.8556265 },
			title: 'г. Сочи, Хоста, ул. Шоссейная 2',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 43.6053918, lng: 39.7499665 },
			title: 'г. Сочи, ул. Транспортная, 28',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 45.021239, lng: 41.91602 },
			title: 'г. Ставрополь, ул. Шпаковская 100',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 45.0423238, lng: 41.9860975 },
			title: 'г. Ставрополь, ул. Ленина 127',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.31679679, lng: 37.9037395 },
			title: 'г. Старый Оскол, мкр. Надежда, дом 5',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 52.70515279, lng: 41.4705365 },
			title: 'г. Тамбов, ул. Советская, д. 34',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.49526577, lng: 84.9692625 },
			title: 'г. Томск, ул. Яковлева, 23',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.18487228, lng: 37.6032625 },
			title: 'г. Тула, ул. Л.Толстого, д. 91-А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.20058078, lng: 37.6015915 },
			title: 'г. Тула, ул. Коминтерна, д.24',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 57.15009927, lng: 65.5625975 },
			title: 'г. Тюмень, ул. Максима Горького, 68',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 57.13226377, lng: 65.5564625 },
			title: 'г. Тюмень, ул.30 лет Победы д.7, стр. 5',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 57.15396627, lng: 65.4465625 },
			title: 'г. Тюмень, ул. Авторемонтная д.45, стр. 4',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.33145728, lng: 48.4018835 },
			title: 'г. Ульяновск, ул. Радищева 100',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.3337062, lng: 48.3689013 },
			title: 'г. Ульяновск, ул. Урицкого, д. 58',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.3139086, lng: 48.3503076 },
			title: 'г. Ульяновск, ул. Пушкарева, д.11, корпус 2',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.584679, lng: 37.724131 },
			title: 'Пересечение Каширского шоссе и 24 км МКАД, ТК "Твой Дом", 2 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.2927637, lng: 48.2848252 },
			title: 'г. Ульяновск, ул. Промышленная, д. 2',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.17908228, lng: 61.317007 },
			title: 'г. Челябинск, ул. Бр. Кашириных, 102-83',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 59.1217437, lng: 37.9276892 },
			title: 'г. Череповец, Советский пр. дом 16',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 44.4936534, lng: 34.1255413 },
			title: 'Республика Крым, г. Ялта, ул. Большевистская 10, ТЦ Конфетти',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.63504028, lng: 37.61132950},
		//   title: "г. Москва, Сумской проезд, дом 8, корпус 3",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.73701478, lng: 37.61618900},
		//   title: "г. Москва, м. Полянка, Бродников переулок, д.10, к.2",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.67721978, lng: 37.5331935 },
			title: 'г. Москва, Ленинский пр-кт 89/2',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.87922778, lng: 37.63497250},
		//   title: "г. Москва, ул. Полярная д. 21",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.72146278, lng: 37.61092450},
		//   title: "г. Москва, ул. Шаболовская, д. 29",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.78244028, lng: 37.7028225 },
			title: 'г. Москва, ул. Большая Семеновская, д.10',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.74990628, lng: 37.77377150},
		//   title: "г. Москва, Зеленый проспект, дом 3А",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.74116028, lng: 37.86060250},
		//   title: "г. Москва, ул. Новокосинская д.23",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.68732472, lng: 37.4144945 },
			title: 'г. Москва, 51 км МКАД',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.78244028, lng: 37.70282250},
		//   title: "г. Москва, ул. Большая Семёновская, д. 10",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.72061078, lng: 37.61035850},
		//   title: "г. Москва, ул. Шаболовка, д. 31",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.61660028, lng: 37.60776250},
		//   title: "г. Москва, ул. Кировоградская, д 11, стр. 1",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.81168478, lng: 37.72940350},
		//   title: "г. Москва, Бульвар Маршала Рокосовского д. 6",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.75947628, lng: 37.76152750},
		//   title: "г. Москва, Шоссе Энтузиастов, дом 54",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.72629928, lng: 37.70045950},
		//   title: "г. Москва, ул. Скотопрогонная, дом 35/2, стр. 8",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.84306528, lng: 37.36681650},
		//   title: "г. Москва, ул. Митинская, дом 19",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.68142728, lng: 37.84947250},
		//   title: "г. Москва, ул. Привольная, дом 65/32",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.54856828, lng: 37.55323500},
		//   title: "г. Москва, Бульвар Адмирала Ушакова, дом 2",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.77829978, lng: 37.51163400},
		//   title: "г. Москва, ул. Зорге, дом 1, стр. 2",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.86421728, lng: 37.6821525 },
			title: 'г. Москва, Анадырский проезд, дом 17/1, к. 1',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.86243878, lng: 37.60885850},
		//   title: "г. Москва, ул. Декабристов, дом 20, к. 2",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.70169378, lng: 37.6040435 },
			title: 'г. Москва, 5-ый Донской проезд, дом 23',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.71953578, lng: 37.62814550},
		//   title: "г. Москва, ул. Павловская, владение 7",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.78896528, lng: 37.591108 },
			title: 'г. Москва, Новослободская улица, 67/69',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.759524, lng: 37.7594054 },
			title: 'Шоссе Энтузиастов, д.54, ТЦ «Мебель Уюта», 4 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 59.98167676, lng: 30.3583315 },
			title: 'г. САНКТ-ПЕТЕРБУРГ, Мебельный центр Аквилон ул. Новолитовская 15В эт-5. секция-164',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 46.9397093, lng: 142.7338005 },
			title: 'САХАЛИНСКАЯ ОБЛАСТЬ, ЮЖНО-САХАЛИНСК, ЛЕНИНА, 321/1',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.751364, lng: 37.65424 },
			title: '23 октября мы открываем новый приемный пункт по адресу :Земляной вал,дом 50 А стр.3, БЦ «РТС»',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 50.559463293104045, lng: 36.5786345 },
			title: 'г. Белгород, ул. Щорса 45 Д',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		// 	position: { lat: 59.922212, lng: 30.2487996 },
		// 	title: "ИП Викерас Я.С., ул. Кожевенная линия д.30, МЦ 'Грейт', 1 этаж",
		// 	icon: icon,
		// 	map: map
		// })

		markersArray.push(new google.maps.Marker({
			position: { lat: 51.741148, lng: 36.197282 },
			title: 'г. Курск, ул. Мирная, д.11',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.666599, lng: 37.552148 },
			title: 'г. Москва, ул. Профсоюзная, д. 45, ТЦ «Царское село», 2 этаж',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.709992, lng: 37.654287},
		//   title: "г. Москва, ул. Ленинская Слабода, д. 26",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.660531, lng: 37.741827 },
			title: 'г. Москва, ул. Люблинская, дом 151, Деловой центр "Марьино", 1 этаж.',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.811685, lng: 37.729404},
		//   title: "г. Москва, ул. Бульвар Рокосовского, дом 6, 2 этаж",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.807921, lng: 37.57351 },
			title: 'г. Москва, ул. Тимирязевская, д.2/3, ТЦ Парк-11, 3 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.723582, lng: 37.672962 },
			title: 'г. Москва, 1-я Дубровская ул, д.13, 1 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.681372, lng: 37.848781 },
			title: 'г. Москва, ул. Привольная, дом 65/32, 1 этаж',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.652720, lng: 37.635620},
		//   title: "г. Москва, 1-ий Котляковский переулок, д.1С - 99; офис №212",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.705023, lng: 37.6188053 },
			title: 'г.Москва, ул.Большая Тульская, 46, 3-й этаж.',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.701694, lng: 37.604044},
		//   title: "г. Москва, 5-ый Донской проезд, дом 23, ТД Семь, 1 этаж",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.720611, lng: 37.610359},
		//   title: "г. Москва, Дом Мебели. ул. Шаболовка, д. 31, 1 этаж",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.639664, lng: 37.824194 },
			title: 'г. Москва, ТЦ «Интерьер Плаза», 8 этаж, МКАД 16-ый км внешняя сторона. г. Дзержинский, ул. Энергетиков, д. 14А',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.741161, lng: 37.860603 },
			title: 'г. Москва, ул. Новокосинская д.23',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.677935, lng: 37.531622 },
			title: 'г. Москва, Ленинский пр-кт 89/2, цокольный этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.670133, lng: 37.552427 },
			title: 'г. Москва, ул. Профсоюзная, д.56, 3-й этаж, линия 3Ж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.681087, lng: 37.622953 },
			title: 'г. Москва, Варшавское шоссе, д.32',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.749907, lng: 37.773771},
		//   title: "г. Москва, Зеленый проспект, дом 3А, ТЦ Ваш Дом, 2 этаж",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.778699, lng: 37.512371},
		//   title: "г. Москва, ул. Зорге, дом 1, стр. 2, магазин Дом для Дома, 2 этаж",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.615904, lng: 37.607915},
		//   title: "г. Москва, МТК Армада ул. Кировоградская, д 11, стр. 1, 4 этаж",
		//   icon : icon,
		//   map: map
		// });

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.674813, lng: 37.567617},
		//   title: "г. Москва, Нахимовский проспект, дом 47, офис 1214",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.672021, lng: 37.583895 },
			title: 'г. Москва, Нахимовский проспект, д. 24, ЦДиИ «Экспострой», павильон 1, 28 стенд',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.636711, lng: 37.442226},
		//   title: "г. Москва, Бизнес Парк Румянцево, стр.1, к. А, вход №2, эт.2, павильон № 228 А",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.719536, lng: 37.628146 },
			title: 'г. Москва, ул. Павловская, владение №7, этаж 1',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.61464, lng: 37.60672 },
			title: 'г. Москва, МТК «Армада», ул. Кировоградская, д 11, стр. 1, 4 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.782441, lng: 37.702822 },
			title: 'г. Москва, ТЦ «Мебель России», ул. Большая Семёновская, д. 10 центральный вход, 1 этаж, павильон Д-1-17',
			icon: icon,
			map: map
		}))
		

		// markersArray.push(new google.maps.Marker({
		//   position: {lat: 55.714890, lng: 37.568628},
		//   title: "г. Москва, Лужнецкая набережная, д. 10а, стр. 12",
		//   icon : icon,
		//   map: map
		// });

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.786974, lng: 37.594371 },
			title: 'г. Москва, ул. Новослободская, д.50/1, строение 2',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.782201, lng: 37.707935 },
			title: 'г. Москва, ул. Большая Семеновская, дом 32',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.681235, lng: 37.623018 },
			title: 'г. Москва, Варшавское шоссе, дом 32',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.810918, lng: 37.012833 },
			title: 'г. Москва МО, Новорижское шоссе, 23 км',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.6342359, lng: 37.4379625 },
			title: ' г. Москва, Киевское шоссе 1, 500 м от МКАД в область',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.7029895, lng: 37.3537347 },
			title: ' Московская обл., Одинцовский р-н, Новоивановское пгт, ул. Луговая, 1, 3 этаж',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 54.982228, lng: 73.3266 },
			title: ' г. Омск, ул. Конева, д.14',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.8109501, lng: 37.5123983 },
			title: 'г.Москва, ул.Балтийская, д. 15',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.8172731, lng: 37.3855734 },
			title: 'г. Красногорск, ул. Международная, д.6, корпус 4',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.8171978, lng: 37.3856768 },
			title: 'г. Красногорск, ул. Международная, д.6, корпус 4',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.9167858, lng: 37.7565717 },
			title: 'г. Мытищи, Шараповский проезд, владение 2, строение 4, ТЦ Красный Кит',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 56.83295, lng: 60.5856723 },
			title: 'г. Екатеринбург, ул.Малышева,15',
			icon: icon,
			map: map
		}))
		

		markersArray.push(new google.maps.Marker({
			position: { lat: 55.70502, lng: 37.6188053 },
			title: 'г. Москва, ул. Большая Тульская, 46, 3-й этаж.',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.764464, lng: 37.8426923 },
			title: 'МО, г. Реутов, 2 км МКАД, д.2',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.750457, lng: 37.8675933 },
			title: 'г. Реутов, Юбилейный проспект, д.30/2, ТЦ Студия Интерьера.',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.721925, lng: 37.6304153 },
			title: 'г. Москва, ТЦ Твинстор, 1 Щипковский переулок, дом 4, Галлерея, 1 этаж.',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.81099, lng: 37.5124393 },
			title: 'г. Москва, ул. Балтийская, д. 15',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.8134737, lng: 37.601465 },
			title: 'г. Москва, Огородный проезд, дом 10, ТЦ "Зеленый".',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.607608, lng: 37.7137324 },
			title: 'г. Москва, Каширское шоссе, д. 61,корп. 4, стр. 1, этаж 1',
			icon: icon,
			map: map
		}))
		
		
		markersArray.push(new google.maps.Marker({
			position: { lat: 55.7098504, lng: 37.6522715 },
			title: 'г. Москва, ул. Ленинская Слобода, д. 26, этаж 1, В138,1',
			icon: icon,
			map: map
		}))
		
		for(var i = 0; i < markersArray.length; i++){
			if(typeof markersArray[i].icon.url != 'undefined'){
				if(markersArray[i].icon.url == icon.url){
					google.maps.event.addListener(markersArray[i], 'mouseover', (function(marker) {
						return function() {
							marker.setIcon(icon_hover);
						};
					})(markersArray[i]));
					google.maps.event.addListener(markersArray[i], 'mouseout', (function(marker) {
						return function() {
							marker.setIcon(icon);
						};
					})(markersArray[i]));
				}
			}
			
		}

		var clusterOptions = {
			imagePath: '/img/m',
			cssClass: 'ama-cluster',
			onMouseoverCluster: function (clusterIcon, event) { alert('mouse over'); },
			onMouseoutCluster: function (clusterIcon, event) { alert('mouse out'); },
			styles: [
				{
					textColor: 'white',
					url: '/img/plus_map_a.svg',
					height: 30,
					width: 30,
				},
			],
		}

		markerCluster = new MarkerClusterer(map, markersArray, clusterOptions);

		markerCluster.setCalculator(function (markers, numStyles) {
			var index = 0;
			var count = markers.length;
			var dv = count;
			while (dv !== 0) {
				dv = parseInt(dv / 10, 10);
				index++;
			}
		
			index = Math.min(index, numStyles);
			return {
				text: "", 
				index: index
			};
		});
		
		
		/*
		google.maps.event.addListener(markerCluster, "mouseover", function(c,a,b) {
			var cur_styles = c.getMarkerClusterer().getStyles();
			cur_styles[0].url = '/img/plus_map_r.svg';
			sfaa = c.getMarkerClusterer();
			console.log();
			//c.getMarkerClusterer().setStyles(cur_styles);
		});
		
		google.maps.event.addListener(markerCluster, "mouseout", function(c) {
			var cur_styles = c.getMarkerClusterer().getStyles();
			cur_styles[0].url = '/img/plus_map_a.svg';
			c.getMarkerClusterer().setStyles(cur_styles);
		});
		*/
		
	}
}