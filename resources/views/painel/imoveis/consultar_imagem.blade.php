@extends('painel.template.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('conteudo')

    @include('painel.includes.errors')

<style type="text/css">
    .label_deletar {
        padding: 0 5px;
        width: 10%;
        position: absolute;
        bottom: 0;
        right: 0;
        text-align: center;
    }
    
    .label_deletar a {
        color: red !important;
    }
</style>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4 class="card-title mt-4 mb-4">Imagens</h4>
                        </div>
                        <div class="col-lg-3" style="margin-top: 15px">
                            <label class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionar_imagem">Nova Imagem</label>
                        </div>
                    </div>

                    <div class="modal inmodal" id="adicionar_imagem" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <h4 class="modal-title">Inserção de Imagem</h4>
                                    <small style="color: red; font-size: 12px">Tamanho recomendado: 1920x500</small>
                                </div>
                                <form action="{{ route('painel.imoveis.imagens.salvar', 1) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input name="imagem" type="file">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        @foreach ($imagens as $imagem)
                            <div class="col-12 col-lg-4 mb-3 caixa-imagem">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h4 class="card-title mb-4 mt-4">Imagem</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center"
                                        style="height: 220px;">

                                        <img id="banner-preview" src="{{ asset($imagem->imagem) }}" style="max-height: 300px; max-width: 100%;" alt="">

                                        <label class="label_deletar">
                                            <a href="{{ route('painel.imoveis.imagens.deletar', ['imagem' => $imagem]) }}">
                                                x
                                            </a>
                                        </label>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <small style="color: red; font-size: 12px">Tamanho recomendado: 1920x500</small>
                                    </div>
                                </div> --}}
                                {{-- <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary"
                                            for="banner-upload-{{ $i }}">Escolher</label>
                                        <input name="imagem{{ $i }}" id="banner-upload-{{ $i }}"
                                            style="display: none;" type="file">
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{-- <small style="color: red;">* Importante: Utilize imagens quadradas para garantir uma melhor visualização no site.</small> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection