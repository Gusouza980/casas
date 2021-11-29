@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    Listagem de Imóveis
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" href="{{ route('painel.imoveis.cadastro') }}" role="button">Novo Imóvel</a>
@endsection

@section('conteudo')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="min-height: 70vh;">
                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                        <thead>
                            <tr>
                                <th style="width: 5%;"></th>
                                <th style="width: 5%;">Código</th>
                                <th style="width: 45%;">Nome</th>
                                <th style="width: 38%;">Lista</th>
                                <th style="width: 7%;">Top</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imoveis as $imovel)
                                <tr>
                                    <td class="text-center">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fas fa-bars" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item py-3"
                                                    href="{{ route('painel.imoveis.editar', ['imovel' => $imovel]) }}"
                                                    role="button">
                                                    <i class="bx bx-edit-alt"></i> Editar
                                                </a>
                                                <a class="dropdown-item py-3"
                                                    href="{{ route('painel.imoveis.imagens', ['imovel' => $imovel]) }}"
                                                    role="button">
                                                    <i class="bx bx-image-alt"></i> Imagens
                                                </a>
                                                <a class="dropdown-item py-3"
                                                    href="{{ route('painel.imoveis.editar', ['imovel' => $imovel]) }}"
                                                    role="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDefineTop{{ $imovel->id }}">
                                                    <i class="fas fa-trophy"></i> Definir como Top
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $imovel->codigo }}</td>
                                    <td>{{ $imovel->nome }}</td>
                                    <td>{{ config('globals.listas')[$imovel->lista] }} @if ($imovel->prioridade_lista) (Prioridade) @endif</td>
                                    <td>
                                        @if ($imovel->id == $configuracao->top1)
                                            Top 1
                                        @elseif($imovel->id == $configuracao->top2)
                                            Top 2
                                        @elseif($imovel->id == $configuracao->top3)
                                            Top 3
                                        @elseif($imovel->id == $configuracao->top4)
                                            Top 4
                                        @elseif($imovel->id == $configuracao->top5)
                                            Top 5
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    @foreach ($imoveis as $imovel)
        <div class="modal fade" id="modalDefineTop{{ $imovel->id }}" tabindex="-1" role="dialog"
            aria-labelledby="modalDefineTop{{ $imovel->id }}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ route('painel.imoveis.top', ['imovel' => $imovel]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="posicao">Posição</label>
                                    <select class="form-control" name="posicao" id="">
                                        <option value="1">Top 1:
                                            @if ($configuracao->top1_imovel)
                                                {{ $configuracao->top1_imovel->nome }}
                                            @else
                                                Vazio
                                            @endif
                                        </option>
                                        <option value="2">Top 2:
                                            @if ($configuracao->top2_imovel)
                                                {{ $configuracao->top2_imovel->nome }}
                                            @else
                                                Vazio
                                            @endif
                                        </option>
                                        <option value="3">Top 3:
                                            @if ($configuracao->top3_imovel)
                                                {{ $configuracao->top3_imovel->nome }}
                                            @else
                                                Vazio
                                            @endif
                                        </option>
                                        <option value="4">Top 4:
                                            @if ($configuracao->top4_imovel)
                                                {{ $configuracao->top4_imovel->nome }}
                                            @else
                                                Vazio
                                            @endif
                                        </option>
                                        <option value="5">Top 5:
                                            @if ($configuracao->top5_imovel)
                                                {{ $configuracao->top5_imovel->nome }}
                                            @else
                                                Vazio
                                            @endif
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net/js/language.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: language_ptbr
            });
        });
    </script>
@endsection
