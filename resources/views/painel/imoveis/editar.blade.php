@extends('painel.template.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('titulo')
    Editando Imóvel: {{ $imovel->nome }}
@endsection

@section('conteudo')

    @include('painel.includes.errors')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-left my-3" style="color:red;">
                            * Campos obrigatórios
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Informações Básicas</h4>

                    <form action="{{ route('painel.imoveis.salvar', ['imovel' => $imovel]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 col-lg-10 mb-3">
                                <label for="nome">Nome *</label>
                                <input type="text" class="form-control" name="nome" id="nome" maxlenght="255"
                                    value="{{ $imovel->nome }}" required>
                            </div>
                            <div class="form-group col-12 col-lg-2 mb-3">
                                <label for="codigo">Código *</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" maxlenght="4"
                                    value="{{ $imovel->codigo }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-4">
                                <label for="">Lista</label>
                                <select class="form-control" name="lista" id="">
                                    @foreach (config('globals.listas') as $key => $lista)
                                        <option value="{{ $key }}" @if ($imovel->lista == $key) selected @endif>{{ $lista }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-8 py-lg-2 mt-3 mt-lg-0">
                                <div class="form-check form-check-primary mt-lg-4 mb-2">
                                    <input class="form-check-input" type="checkbox" name="prioridade_lista"
                                        id="autoSizingCheck" @if ($imovel->prioridade_lista) checked @endif>
                                    <label class="form-check-label" for="autoSizingCheck">
                                        Prioridade na Lista
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h4 class="card-title mt-4 mb-4">Detalhes</h4>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-12 mb-3">
                                <label for="titulo">Título *</label>
                                <input type="text" class="form-control" name="titulo" id="titulo"
                                    value="{{ $imovel->titulo }}" maxlenght="100" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-12 mb-3">
                                <label for="subtitulo">Endereço</label>
                                <input type="text" class="form-control" name="subtitulo" id="subtitulo"
                                    value="{{ $imovel->subtitulo }}" maxlenght="100">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-12 mb-3">
                                <label for="">Conteúdo</label>
                                <textarea class="form-control" name="descricao" id="summernote"
                                    rows="10">{{ $imovel->descricao }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h4 class="card-title mt-4 mb-4">Ícones</h4>
                        </div>

                        <div class="row">
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone1_texto">Texto do Ícone 1</label>
                                <input type="text" class="form-control" name="icone1_texto" id="icone1_texto"
                                    value="{{ $imovel->icone1_texto }}" maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone2_texto">Texto do Ícone 2</label>
                                <input type="text" class="form-control" name="icone2_texto" id="icone2_texto"
                                    value="{{ $imovel->icone2_texto }}" maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone3_texto">Texto do Ícone 3</label>
                                <input type="text" class="form-control" name="icone3_texto" id="icone3_texto"
                                    value="{{ $imovel->icone3_texto }}" maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone4_texto">Texto do Ícone 4</label>
                                <input type="text" class="form-control" name="icone4_texto" id="icone4_texto"
                                    value="{{ $imovel->icone4_texto }}" maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone5_texto">Texto do Ícone 5</label>
                                <input type="text" class="form-control" name="icone5_texto" id="icone5_texto"
                                    value="{{ $imovel->icone5_texto }}" maxlenght="70">
                            </div>
                        </div>

                        <hr>
                        <div class="row mt-3">
                            <div class="form-group col-12 mb-3 text-end">
                                <button type="submit" class="btn btn-primary px-4">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
