@extends('layout.app')

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $cidade->nome }}</title>
    <link rel="stylesheet" href="{{ asset('css/cidade.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $cidade->nome }}</h1>
       @if($cidade->imagens->isNotEmpty())
    <div class="slideshow-container">
        <div class="slide-grid">
            @foreach ($cidade->imagens as $imagem)
                <div class="slide fade">
                    <img src="{{ asset($imagem->caminho) }}" alt="Imagem da cidade">
                </div>
            @endforeach
        </div>
    </div>
@endif




     
<div class="grid-container">

    <div class="card">
        <h2 class="subtitulo">População</h2>
        <ul>
            @foreach ($cidade->populacoes as $item)
                <li>Ano {{ $item->ano }}: {{ number_format($item->populacao, 0, ',', '.') }} habitantes</li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h2 class="subtitulo">Educação</h2>
        <ul>
            @foreach ($cidade->educacoes as $item)
                <li>Ano {{ $item->ano }}: Taxa de escolarização - {{ number_format($item->taxa_escolarizacao, 1, ',', '.') }}%</li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h2 class="subtitulo">Economia</h2>
        <ul>
            @foreach ($cidade->economias as $item)
                <li>
                    Ano {{ $item->ano }}: PIB R$ {{ number_format($item->pib, 2, ',', '.') }},
                    PIB per capita R$ {{ number_format($item->pib_per_capita, 2, ',', '.') }}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h2 class="subtitulo">Saúde</h2>
        <ul>
            @foreach ($cidade->saudes as $item)
                <li>Ano {{ $item->ano }}: {{ $item->estabelecimentos_sus }} estabelecimentos do SUS</li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h2 class="subtitulo">Trabalho e Rendimento</h2>
        <ul>
            @foreach ($cidade->trabalhoRendimentos as $item)
                <li>
                    Ano {{ $item->ano }}: Rendimento médio R$ {{ number_format($item->rendimento_medio, 2, ',', '.') }},
                    Ocupação: {{ number_format($item->taxa_ocupacao, 1, ',', '.') }}%,
                    Desocupados: {{ number_format($item->desocupados, 0, ',', '.') }}
                </li>
            @endforeach
        </ul>
    </div>

</div>

       


    </div>
    
</body>
@push('scripts')
<script src="{{ asset('js/slideshowCity.js') }}"></script>
@endpush


</html>
