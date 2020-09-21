var true_zoom = google_zoom
var true_Firstcenter = google_FirstCenter
var true_Secondcenter = google_SecondCenter

function closeMarkerWindow(){
	$('.marker_window').removeClass('active');
}

function initMap(){
	if(sessionStorage['mapdata_json'] && false){
		initMapEx(JSON.parse(sessionStorage['mapdata_json']));
	}
	else{
		$.get('/map_shop_json.php', function(mapdata_json){
			sessionStorage['mapdata_json'] = JSON.stringify(mapdata_json);
			initMapEx(mapdata_json);
		});
	}
}

function initMapEx(mapdata) {

	var isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/))
	// массив координатов станций метро
	
	mapdata = mapdata;
	ds_dynamic_markers = [mapdata.ds_dynamic_markers];
	
	// смена центра карты при выборе станции
	$(function() {
		var find_marker = ''
		$('.ds_metro_filter').change(function() {
			find_marker = $(this).val();
			if(find_marker){
				map.setCenter(ds_dynamic_markers[0][find_marker]);
				map.setZoom(13);
			}
			else {
				map.setCenter({lat: google_FirstCenter, lng: google_SecondCenter});
				map.setZoom(google_zoom);
			}
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


		var icon = {url:'https://www.magniflex.ru/img/shops.svg', scaledSize: new google.maps.Size(30, 43) };
		var iconRed = {url:'https://www.magniflex.ru/img/showroom.svg', scaledSize: new google.maps.Size(30, 54) };
		
		var icon_hover = {url:'https://www.magniflex.ru/img/shops_selected.svg', scaledSize: new google.maps.Size(30, 43) };
		var iconRed_hover = {url:'https://www.magniflex.ru/img/showroom_selected.svg', scaledSize: new google.maps.Size(30, 54) };
		
		marker_info = mapdata.shops['show-room'];
		
		markers_info = mapdata.shops;
		delete markers_info['show-room'];
		markers_info = Object.values(markers_info); //object to arr
		
		markersArray = [];
		
		function initMarkerWindow(){
			var markerWindow = '\
			<div class="marker_window">\
				<img class="marker_window_img" src="" alt="Матрасы Magniflex в" />\
				<div class="marker_window_name"></div><br>\
				<div class="marker_window_address"></div>\
				<div class="marker_window_metro"></div><br>\
				<!--<div class="marker_window_working_time"></div><br>-->\
				<div class="marker_window_contacts"></div><br>\
				<div class="marker_window_exposition"></div><br>\
				<a class="marker_window_url" target="_blank" href="#">Подробнее</a>\
				<div class="marker_window_close" onclick="closeMarkerWindow();" title="Закрыть">x</div>\
			</div>\
			';
			$('#google-map').append(markerWindow);
		}
		function openMarkerWindow(data){
			closeMarkerWindow();
			
			$('.marker_window_img').attr('src', data.small_img || '/img/shops/magni_common.jpg');
			$('.marker_window_img').attr('alt', 'Матрасы Magniflex в ' + (data.name || ''));
			$('.marker_window_name').html(data.name || '');
			$('.marker_window_address').html(data.address || data.marker_title || '');
			$('.marker_window_metro').html(data.metro || '');
			//$('.marker_window_working_time').html(data.working_time || '');
			$('.marker_window_contacts').html(data.contacts || '');
			$('.marker_window_exposition').html(data.exposition || '');
			$('.marker_window_url').attr('href', data.url || '#');
			
			$('.marker_window').addClass('active');
		}
		
		for(var i = 0; i < markers_info.length; i++){
			if(markers_info[i].premium_icon){
				var tmp_marker = new google.maps.Marker({
					position: markers_info[i].position,
					title: markers_info[i].marker_title,
					icon: iconRed,
					map: map,
				});
			} else {
				var tmp_marker = new google.maps.Marker({
					position: markers_info[i].position,
					title: markers_info[i].marker_title,
					icon: icon,
					map: map,
				});
			}
			tmp_marker.addListener('click', function(local_info) {
				return function() {
					openMarkerWindow(local_info);
				}
			}(markers_info[i]));
			markersArray.push(tmp_marker);
		}
		
		
		var marker = new google.maps.Marker({
			position: marker_info.position,
			title: marker_info.marker_title,
			icon: iconRed,
			map: map
		})
		
		marker.addListener('click', function() {
			openMarkerWindow(marker_info);
		});
		
		google.maps.event.addListener(marker, 'mouseover', function() {
			marker.setIcon(iconRed_hover);
		});
		google.maps.event.addListener(marker, 'mouseout', function() {
			marker.setIcon(iconRed);
		});

		
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
		
		initMarkerWindow();
		
	}
}