ymaps.ready(init(zoomIndex, coordLatitude, coordLongitude));

function init (zoomIndex, coordLatitude, coordLongitude) {
	var zoom = zoomIndex || 3;
	var latitude = coordLatitude || 57.51683274;
	var longitude = coordLongitude || 57.39184972;
	
	return function(){
		var myMap = new ymaps.Map('map', {
				center: [latitude, longitude],
				zoom: zoom
			}),
			objectManager = new ymaps.ObjectManager({
				// Чтобы метки начали кластеризоваться, выставляем опцию.
				clusterize: true,
				geoObjectOpenBalloonOnClick: false,
				clusterOpenBalloonOnClick: false
			});

		myMap.geoObjects.add(objectManager);

		$.ajax({
			url: "/template/js/data2.json?v=2"
		}).done(function(data) {
			objectManager.add(data);
		});

		function onObjectEvent (e) {
			var objectId = e.get('objectId');
			if (e.get('type') == 'mouseenter') {
				// Метод setObjectOptions позволяет задавать опции объекта "на лету".
				objectManager.objects.setObjectOptions(objectId, {
					preset: 'islands#yellowIcon'
				});
			} else {
				objectManager.objects.setObjectOptions(objectId, {
					preset: 'islands#blueIcon'
				});
			}
		}

		function onClusterEvent (e) {
			var objectId = e.get('objectId');
			if (e.get('type') == 'mouseenter') {
				objectManager.clusters.setClusterOptions(objectId, {
					preset: 'islands#yellowClusterIcons'
				});
			} else {
				objectManager.clusters.setClusterOptions(objectId, {
					preset: 'islands#blueClusterIcons'
				});
			}
		}

		objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
		objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
	}
};

