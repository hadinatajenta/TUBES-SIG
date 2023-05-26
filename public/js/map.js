//LEAFLET
const map = L.map("map").setView([-2.9795, 104.7442], 13);
const tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
}).addTo(map);

$(document).ready(function () {
    $.getJSON("/json", function (data) {
        console.log(data); // untuk debug

        var myIcon = L.icon({
            iconUrl: "/img/hospital.png",
            iconSize: [38, 38],
            popupAnchor: [0, -28],
            iconAnchor: [21, 38],
            shadowUrl: "my-icon-shadow.png",
        });

        $.each(data, function (index, value) {
            const marker = L.marker([value.latitude, value.longitude], {
                icon: myIcon,
            });
            marker.bindPopup(
                "<b>Nama Tempat : </b>" +
                    value.nama_marker +
                    "<br>" +
                    "<b>Jenis: </b>" +
                    value.jenis_bangunan +
                    "<br>" +
                    "<b>Alamat Website: </b><a href='http://" +
                    value.alamat_website +
                    "'target='_blank'>" +
                    value.alamat_website +
                    "</a><br>" +
                    "<b>Nomor Telepon: </b>" +
                    value.nomor_telepon +
                    "<br><br>" +
                    "<a href='/informasi-rumah-sakit/" +
                    value.nama_marker +
                    "' class='btn btn-primary'>Detail</a>"
            );
            marker.addTo(map);
        });
    });

    //Menambahkan layer Kota Palembang dari G
    $.getJSON("/js/satu.geojson", function (data) {
        var geojsonLayer = L.geoJSON(data, {
            style: function (feature) {
                return {
                    color: "#3388ff",
                    weight: 2,
                    opacity: 0.7,
                };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup("<b>" + "Kota Palembang" + "</b>");
            },
        }).addTo(map);
    });
});
