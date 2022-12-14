document.addEventListener('DOMContentLoaded', function (){
    if(!('geolocation' in navigator)){
        alert("Navegador não tem suporte para esta API")
    } else {
        navigator.geolocation.getCurrentPosition(showPosition)
    }
})

function showPosition(local){
    let latitude = local.coords.latitude
    let longitude = local.coords.longitude

    /* Adicona as informações de latitude e longitude
    no ID Location */
    document.getElementById("location").innerHTML = "<span>Latitude: </span>"
    + latitude + " <span>Longitude: </span>" + longitude

    // Criando as opções do mapa
    var mapOption = {
        center: [latitude, longitude],
        zoom: 16
    }

    // Criando o objeto mapa
    var map = new L.map('map', mapOption);

    // Criando a camada do mapa
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')

    // Adicionando a camada ao mapa
    map.addLayer(layer)

    // Adicionando o Marcador
    var marker = new L.Marker([latitude, longitude])
    marker.addTo(map)
    .bindPopup('Você está aqui!')
    .openPopup()
}