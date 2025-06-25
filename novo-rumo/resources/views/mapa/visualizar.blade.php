@extends('layout.app')
@section('title', 'Mapa')

@section('content')
<div class="mapa-page">
    <div id="map"></div>
</div>
@endsection

@push('styles')
<style>
    .mapa-page {
        min-height: 100vh;
        padding: 20px;
    }

    .mapa-page #map {
        width: 100%;
        height: 600px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-top: 20px;
    }

    .mapa-page .map-area {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .mapa-page .map-area table {
        border-collapse: collapse;
        width: 60%;
        height: 2%;
    }

    .mapa-page th,
    .mapa-page td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        background-image: url(https://static.vecteezy.com/ti/vetor-gratis/p3/2431825-orientacao-da-estrada-que-leva-ao-oceano-na-vertical-vetor.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .mapa-page .map-and-table {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .mapa-page table {
        width: 100%;
        border-collapse: collapse;
        overflow-x: scroll;
    }

    .mapa-page .table-container {
        width: 55%;
        height: 1000px;
        overflow-y: auto;
    }

    .mapa-page .table-container table {
        width: 100%;
        border-collapse: collapse;
    }

    @media screen and (max-width: 768px) {
        .mapa-page td,
        .mapa-page th {
            text-align: center;
            padding: 10px;
        }

        .mapa-page table {
            width: 100%;
            margin-bottom: 20px;
        }

        .mapa-page #map {
            height: 400px;
        }
    }
</style>
@endpush

@push('scripts')
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const map = L.map('map').setView([-27.1, -49.6], 9); // ajuste para o Alto Vale

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Exemplo de marcador
        L.marker([-27.1, -49.6]).addTo(map)
            .bindPopup('Centro do Alto Vale')
            .openPopup();
    });
</script>
@endpush

