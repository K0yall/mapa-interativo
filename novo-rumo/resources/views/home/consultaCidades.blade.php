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
                    @foreach ($cidade->caracteristicas as $caracteristica)
                        <div class="caracteristica">{{ $caracteristica->descricao }}</div>
                    @endforeach
                </div>
                <label for="toggle-{{ $cidade->identificador_alias }}" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: {{ $cidade->populacao }}</p>
                    <p>Custo de vida: {{ $cidade->custo_vida }}</p>
                    <p>Atrativos: {{ $cidade->atrativos }}</p>
                    <p>Descrição: {{ $cidade->descricao }}</p>
                    <!-- ainda não desenvolvido -->
                    <a href="{{ route('cidade.mostrar', $cidade->id) }}" class="btn btn-primary" > Veja mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
