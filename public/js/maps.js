  var markers = [
    
        {
        "title": '',
        "lat": '-29.561294268973857',
        "lng": '-50.79954024039762',
        "description": 'Vinicio Jair Wallauer - 13/10/2015<br>Status: <strong>Em Andamento</strong><br>Categoria: <strong>Lâmpada queimada</strong>',
        "type": 'Em Andamento'
    },
    
      
];

 window.onload = function () {

        var mapOptions = {
            center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var latlngbounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var i = 0;
        var interval = setInterval(function () {
            var data = markers[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var icon = "";
            switch (data.type) {
                case "Nova":
                    icon = "icon_vermelho";
                    break;
                case "Concluido":
                    icon = "icon_verde";
                    break;
                case "Em Andamento":
                    icon = "icon_laranja";
                    break;
                
            }
            icon = "http://www.falaigrejinha.com.br/imagens/" + icon + ".png";
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title,
                animation: google.maps.Animation.DROP,
                icon: new google.maps.MarkerImage(icon)
            });
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    infoWindow.setContent(data.description);
                    infoWindow.open(map, marker);
                });
            })(marker, data);
            latlngbounds.extend(marker.position);
            i++;
            if (i == markers.length) {
                clearInterval(interval);
                var bounds = new google.maps.LatLngBounds();
                map.setCenter(latlngbounds.getCenter());
                map.fitBounds(latlngbounds);
            }
        }, 80);
    }
