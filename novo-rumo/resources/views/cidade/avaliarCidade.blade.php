@extends('layout.app')

@section('title', 'Avaliar Cidade')

@section('content')
<div class="estrutura">

    <div class="container-avaliacao">
        <h2 class="titulo-avaliacao">Avaliação da Cidade</h2>
    
        <form action="{{ route('avaliar.registrar', $cidade) }}" method="POST" class="form-avaliacao">
            @csrf
    
            <div class="form-group">
                <label for="caracteristicas">Características</label>
                <select name="caracteristicas[]" id="caracteristicas" multiple required>
                    @foreach ($caracteristicas as $caracteristica)
                        <option value="{{ $caracteristica->id }}">{{ $caracteristica->descricao }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="botoes">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#caracteristicas').select2({
            placeholder: "Selecione as Características",
            allowClear: true,
            width: '100%'
        });
    });
</script>
@endpush