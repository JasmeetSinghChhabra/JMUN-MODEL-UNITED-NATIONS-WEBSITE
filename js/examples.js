$(function()
{
   $('#map').gMap();
   
   $('#map_controls').gMap(
   {
        latitude: 28.522884,
        longitude: 77.364939,
        maptype: 'TERRAIN', // 'HYBRID', 'SATELLITE', 'ROADMAP' or 'TERRAIN'
        zoom: 8,
        controls: {
            panControl: true,
            zoomControl: false,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
   });
   
   $('#map_addresses').gMap({
        address: "Quito, Ecuador",
        zoom: 5,
		markers:[
			{
				latitude: 28.522884,
				longitude: 77.364939,
				html: "_latlng"
			},
			{
				address: "Guayaquil, Ecuador",
				html: "My Hometown",
				popup: true
			},
			{
				address: "Galapagos, Ecuador",
				html: "_address"
			}
		]
    });

	$("#map_extended").gMap({
		controls: false,
		scrollwheel: true,
		maptype: 'TERRAIN',
		markers: [
			{
				latitude: 28.522884,
				longitude: 77.364939,
				icon: {
					image: "images/gmap_pin_orange.png",
					iconsize: [26, 46],
					iconanchor: [12,46]
				}
			},
	        {
				latitude: 28.522884,
				longitude: 77.364939
			},
			{
				latitude: 28.522884,
				longitude: 77.364939,
				icon: {
					image: "images/gmap_pin_grey.png",
					iconsize: [26, 46],
					iconanchor: [12,46]
				}
			}
		],
		icon: {
			image: "images/gmap_pin.png", 
			iconsize: [26, 46],
			iconanchor: [12, 46]
		},
		latitude: 28.522884,
		longitude: 77.364939,
		zoom: 10
	});
	
	// Detect user location
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position)
		{
			$('#map_controls').gMap('addMarker', {
				latitude: position.coords.latitude,
				longitude: position.coords.longitude,
				content: 'You are here!',
				icon: {
					image: "images/gmap_pin.png", 
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			});
			$('#map_controls').gMap('centerAt', {
				latitude: position.coords.latitude,
				longitude: position.coords.longitude,
				zoom: 8
			});
		}, function()
		{
			//console.log('Couldn\'t find you :(');
		});
	}
});