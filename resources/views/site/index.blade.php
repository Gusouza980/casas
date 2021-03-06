@include('site.includes.head')

<title>Casas Temporada Alfenas - A casa ideal para seu evento</title>

<body class="home">
    <header class="container-fluid">
        <div class="container-fav">
            <div class="_logo">
                <img src="{{ asset('site/img/_logo85.png') }}" alt="Logo Casas Temporada" />
            </div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=5535988326287&text=">
                <img src="{{ asset('site/img/whatsapp_circle.svg') }}" alt="Whatsapp Button" />
            </a>
        </div>
    </header>

    <section class="container-fluid s-hero">
        <div class="container-fav">
            <div class="_left">
                <h1>Procurando um lugar para ficar em Alfenas e região?</h1>
                <p>Não apenas alugue, crie histórias! ⛳</p>
                <button name="toWhats">Vem com a gente</button>
            </div>
            <div class="_right">
                <picture class="_hero-imgs">
                    <source media="(max-width: 465px)" srcset="{{ asset('site/img/header_group_mobile.png') }}">
                    <img src="{{ asset('site/img/header_group.png') }}" alt="" />
                </picture>
            </div>
        </div>
    </section>

    <section class="container-fluid searchbar">
        <div class="container-fav">
            {{-- <select class="js-example-basic-single" name="pesquisa-casa">
                <option value="">Encontrar casa</option>
                @foreach ($imoveis as $imovel)
                <option value="{{ $imovel->id }}" slug="{{ $imovel->slug }}">{{ $imovel->nome }}
                    #{{ $imovel->codigo }}</option>
                @endforeach
            </select> --}}

            <input type="text" style="
            height: 100%;
            width: 100%;
            background: #e5e5e5;
            border-radius: 23px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #3D677E;" name="pesquisa-casa" placeholder="Encontrar casa">



            <picture onclick="tryCatch()" for="pesquisa-casa">
                <img src="{{ asset('site/img/search.svg') }}" alt="">
            </picture>
        </div>
    </section>


    {{-- <section class="container-fluid s_topfive">
        <div class="container-fav">
            <div class="_title">
                <h2>As 5 mais alugadas</h2>
            </div>
            <div class="_top">
                <a href="{{ route('site.detalhe', ['slug' => $configuracao->top1_imovel->slug]) }}" class="_fivecase">
                    <div class="number"><img src="{{ asset('/site/img/1 (Stroke).svg') }}" alt=""></div>
                    <div class="_image">
                        <img src="{{ $configuracao->top1_imovel->imagem1 }}" alt="" />
                    </div>
                </a>
                <a href="{{ route('site.detalhe', ['slug' => $configuracao->top2_imovel->slug]) }}" class="_fivecase">
                    <div class="number"><img src="{{ asset('/site/img/2 (Stroke).svg') }}" alt=""></div>
                    <div class="_image">
                        <img src="{{ $configuracao->top2_imovel->imagem1 }}" alt="" />
                    </div>
                </a>
                <a href="{{ route('site.detalhe', ['slug' => $configuracao->top3_imovel->slug]) }}" class="_fivecase">
                    <div class="number"><img src="{{ asset('/site/img/3 (Stroke).svg') }}" alt=""></div>
                    <div class="_image">
                        <img src="{{ $configuracao->top3_imovel->imagem1 }}" alt="" />
                    </div>
                </a>
                <a href="{{ route('site.detalhe', ['slug' => $configuracao->top4_imovel->slug]) }}" class="_fivecase">
                    <div class="number"><img src="{{ asset('/site/img/4 (Stroke).svg') }}" alt=""></div>
                    <div class="_image">
                        <img src="{{ $configuracao->top4_imovel->imagem1 }}" alt="" />
                    </div>
                </a>
                <a href="{{ route('site.detalhe', ['slug' => $configuracao->top5_imovel->slug]) }}" class="_fivecase">
                    <div class="number"><img src="{{ asset('/site/img/5 (Stroke).svg') }}" alt=""></div>
                    <div class="_image">
                        <img src="{{ $configuracao->top5_imovel->imagem1 }}" alt="" />
                    </div>
                </a>
            </div>
        </div>
    </section> --}}

    <section class="container-fluid s_list">
        <div class="container-fav">
            <div class="_title">
                <h2>{{ config('globals.listas')[0] }}</h2>
                <div class="_buttons">
                    <div class="_back">
                        <img src="{{ asset('site/img/arrow_toLeft.svg') }}" alt="" />
                    </div>
                    <div class="_next">
                        <img src="{{ asset('site/img/arrow_toRight.svg') }}" alt="" />
                    </div>
                </div>
            </div>
            <div class="_cases">
                @foreach ($imoveis->where('lista', 0)->sortByDesc('prioridade_lista') as $imovel)
                <a href="{{ route('site.detalhe', ['slug' => $imovel->slug]) }}" class="_case">
                    <div class="_img">
                        <img src="{{ asset($imovel->imagem1) }}" alt="" />
                    </div>
                    <div class="_name">{{ $imovel->nome }} #{{ $imovel->codigo }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    @for ($i = 1; $i < count(config('globals.listas')); $i++) <section class="container-fluid s_list">
        <div class="container-fav">
            <div class="_title">
                <h2>{{ config('globals.listas')[$i] }}</h2>
                <div class="_buttons">
                    <div class="_back">
                        <img src="{{ asset('site/img/arrow_toLeft.svg') }}" alt="" />
                    </div>
                    <div class="_next">
                        <img src="{{ asset('site/img/arrow_toRight.svg') }}" alt="" />
                    </div>
                </div>
            </div>
            <div class="_cases">
                @foreach ($imoveis->where('lista', $i)->sortByDesc('prioridade_lista') as $imovel)
                <a href="{{ route('site.detalhe', ['slug' => $imovel->slug]) }}" class="_case">
                    <div class="_img">
                        <img src="{{ asset($imovel->imagem1) }}" alt="" />
                    </div>
                    <div class="_name">{{ $imovel->nome }} #{{ $imovel->codigo }}</div>
                </a>
                @endforeach
            </div>
        </div>
        </section>
        @endfor

        {{-- <section class="container-fluid s_list">
            <div class="container-fav">
                <div class="_title">
                    <h2>Para refrescar</h2>
                    <div class="_buttons">
                        <div class="_back">
                            <img src="{{ asset('site/img/arrow_toLeft.svg') }}" alt="" />
                        </div>
                        <div class="_next">
                            <img src="{{ asset('site/img/arrow_toRight.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="_cases">
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                </div>
            </div>
        </section>

        <section class="container-fluid s_list">
            <div class="container-fav">
                <div class="_title">
                    <h2>Aquele evento show ?</h2>
                    <div class="_buttons">
                        <div class="_back">
                            <img src="{{ asset('site/img/arrow_toLeft.svg') }}" alt="" />
                        </div>
                        <div class="_next">
                            <img src="{{ asset('site/img/arrow_toRight.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="_cases">
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                    <a href="/" class="_case">
                        <div class="_img">
                            <img src="{{ asset('site/img/list_case_1.png') }}" alt="" />
                        </div>
                        <div class="_name">Lorem Impsum</div>
                    </a>
                </div>
            </div>
        </section> --}}


        <section class="container-fluid s_create">
            <div class="container-fav">
                <div class="_ilustration">
                    <img src="{{ asset('site/img/ilustration.png') }}" alt="Desenho pessoa procurando casa" />
                </div>
                <div class="_text">
                    <div class="_title">
                        <div class="_icon">
                            <img src="{{ asset('site/img/icon_door.svg') }}" alt="Ícone de porta" />
                        </div>
                        <span>Não apenas alugue, crie histórias!</span>
                    </div>
                    <p>
                        Disponibilizamos imóveis para temporada diferenciados, aliados a um atendimento totalmente personalizado que garantem uma estadia confortável e especial.
                        <br>
                        <br>
                        Nós proporcionamos muito mais que apenas uma locação de imóvel, nossa experiência proporciona todo cuidado que você merece, garantindo que terá uma ótima experiência em
                        qualquer um
                        dos nossos espaços, nos quais zelamos pela limpeza, conforto e segurança!
                    </p>
                    <button>Buscar</button>
                </div>
            </div>
        </section>




        @include('site.includes.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
        <script src="{{ asset('site/js/jquery.min.js') }}"></script>
        <script src="{{ asset('site/js/jquery-ui.js') }}"></script>

        <script src="{{ asset('site/js/main.js') }}"></script>
        {{-- <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script> --}}

        <script>
            var imoveis = new Array();

            @foreach ($imoveis as $imovel)
                imoveis.push({!! $imovel !!})
            @endforeach

            $('input[name=pesquisa-casa]').focus(() => {
                $('input[name=pesquisa-casa]').val('');
            })

            function searchCasa(){
                    var id = $('input[name=pesquisa-casa]').val();
                    var imovel = imoveis.find(element => element.codigo == id);

                    window.location.href = `/detalhe/${imovel.slug}`;
    
                
            }
            

            var tryCatch = () =>{
                try {
                    searchCasa()
                }
                catch (e) {
                    $('input[name=pesquisa-casa]').val('Casa não encontrada');

                }
                
            }
            
        </script>




</body>

</html>