@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin="" />

    <style>
        #map {
            height: 550px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justivy-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Map</div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([-7.003255132598819, 110.43697393564625], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        $(document).ready(function() {
            $.getJSON('/simple-map', function(data) {
                $.each(data, function(index) {
                    var address =
                        "Genuk, Semarang, Indonesia"; // Ganti dengan alamat yang diinginkan
                    //     [parseFloat(data[index].Alamat1)].
                    // ",".[parseFloat(data[index].Kecamatan2)].
                    // ", Indonesia";

                    // Gunakan OpenCage Geocoding API untuk mendapatkan koordinat dari alamat
                    L.Control.geocoder({
                            defaultMarkGeocode: false
                        })
                        .on('/data-store', function(e) {
                            var location = e.geocode.center;
                            L.marker(location).addTo(map);
                        })
                        .addTo(map)
                        .geocode(address)
                        .bindPopup(address)
                        .openPopup();

                    // L.marker([parseFloat(data[index].longitude), parseFloat(data[index].latitude)])
                    //     .addTo(map)
                    //     .bindPopup(
                    //         "<p class='text-center'><b>Zaky Zulfa Maulayya Ahmad</b><br>32602000065</p>"
                    //     ).openPopup();
                })
            });
        })
    </script>
@endpush
