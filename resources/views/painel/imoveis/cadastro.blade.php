@extends('painel.template.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('titulo')
    Cadastro de Imóvel
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

                    <form action="{{ route('painel.imoveis.cadastrar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 col-lg-10 mb-3">
                                <label for="nome">Nome *</label>
                                <input type="text" class="form-control" name="nome" id="nome" maxlenght="255" required>
                            </div>
                            <div class="form-group col-12 col-lg-2 mb-3">
                                <label for="codigo">Código *</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" maxlenght="4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-4">
                                <label for="">Lista</label>
                                <select class="form-control" name="lista" id="">
                                    @foreach (config('globals.listas') as $key => $lista)
                                        <option value="{{ $key }}">{{ $lista }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-8 py-lg-2 mt-3 mt-lg-0">
                                <div class="form-check form-check-primary mt-lg-4 mb-2">
                                    <input class="form-check-input" type="checkbox" name="prioridade_lista"
                                        id="autoSizingCheck">
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
                                <input type="text" class="form-control" name="titulo" id="titulo" maxlenght="100"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-12 mb-3">
                                <label for="subtitulo">Endereço</label>
                                <input type="text" class="form-control" name="subtitulo" id="subtitulo" maxlenght="100">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-12 mb-3">
                                <label for="">Conteúdo</label>
                                <textarea class="form-control" name="descricao" id="summernote" rows="10"></textarea>
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
                                    maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone2_texto">Texto do Ícone 2</label>
                                <input type="text" class="form-control" name="icone2_texto" id="icone2_texto"
                                    maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone3_texto">Texto do Ícone 3</label>
                                <input type="text" class="form-control" name="icone3_texto" id="icone3_texto"
                                    maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone4_texto">Texto do Ícone 4</label>
                                <input type="text" class="form-control" name="icone4_texto" id="icone4_texto"
                                    maxlenght="70">
                            </div>
                            <div class="form-group col-12 col-lg-6 mb-3">
                                <label for="icone5_texto">Texto do Ícone 5</label>
                                <input type="text" class="form-control" name="icone5_texto" id="icone5_texto"
                                    maxlenght="70">
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <h4 class="card-title mt-4 mb-4">Imagens</h4>
                        </div>

                        <div class="row mt-3">
                            @for ($i = 1; $i <= 5; $i++)
                                <div class="col-12 col-lg-4 mb-3 caixa-imagem">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h4 class="card-title mb-4 mt-4">Imagem {{ $i }}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center justify-content-center"
                                            style="height: 320px;">
                                            <img id="banner-preview-{{ $i }}"
                                                src="{{ asset('admin/images/thumb-padrao.png') }}"
                                                style="max-height: 300px; max-width: 100%;" alt="">
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-12 text-center mt-2">
                                            <small style="color: red; font-size: 12px">Tamanho recomendado: 1920x500</small>
                                        </div>
                                    </div> --}}
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <label class="btn btn-primary"
                                                for="banner-upload-{{ $i }}">Escolher</label>
                                            <input name="imagem{{ $i }}" id="banner-upload-{{ $i }}"
                                                style="display: none;" type="file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            {{-- <small style="color: red;">* Importante: Utilize imagens quadradas para garantir uma melhor visualização no site.</small> --}}
                                        </div>
                                    </div>
                                </div>
                            @endfor
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
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400,
            });

            var inp = document.getElementById('banner-upload-1');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview-1').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            var inp = document.getElementById('banner-upload-2');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview-2').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            var inp = document.getElementById('banner-upload-3');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview-3').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            var inp = document.getElementById('banner-upload-4');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview-4').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            var inp = document.getElementById('banner-upload-5');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview-5').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

        });
    </script>
@endsection
