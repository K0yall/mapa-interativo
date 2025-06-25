@extends('layout.app')
@section('title', 'Municípios | Descubra o Vale')
@section('content')
    
    <div class="cidades-section">
        <h2>Municípios do Alto Vale</h2>
        <div class="cidades-grid">
            @foreach ($cidades as $cidade)
            <div class="cidade-card expandivel" data-bandeira="{{ $cidade->identificador_alias }}">
                <div class="card-header">
                    <h3>{{ $cidade->nome }}</h3>
                </div>
                <input type="checkbox" id="toggle-{{ $cidade->identificador_alias }}" class="toggle-info" />
                <div class="caracteristicas">
                    @foreach ($caracteristicasPorCidade[$cidade->id] ?? [] as $caracteristica)
                        <div class="caracteristica avaliacao-{{ $caracteristica->avaliacao }}">{{ $caracteristica->descricao }}({{ $caracteristica->quantidade_total }})</div>
                    @endforeach
                </div>
                <label for="toggle-{{ $cidade->identificador_alias }}" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: {{ $cidade->populacao }}</p>
                    <p>Custo de vida: {{ $cidade->custo_vida }}</p>
                    <p>Atrativos: {{ $cidade->atrativos }}</p>
                    <p>Descrição: {{ $cidade->descricao }}</p>
                    <!-- ainda não desenvolvido -->
                    <a href="#" class="veja-mais">Veja mais</a>
                    <a href="{{ route('avaliar.form', $cidade->id) }}" class="botao-avaliar">Avaliar</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection

