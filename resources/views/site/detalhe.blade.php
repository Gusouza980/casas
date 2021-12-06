@include('site.includes.head')
<title>{{ $imovel->nome }} - Casas Temporada Brasil</title>

<body id="details">
    <div class="container-fluid s_details">
        <div class="container-fav">
            <div class="_info">
                <div class="_Name">
                    <div class="_Text">
                        <h1>{{ $imovel->nome }}</h1>
                        <p class="_ID">#{{ $imovel->codigo }}</p>
                    </div>
                    <div class="_logo">
                        <a href="/"><img src="{{ asset('site/img/_logo85.png') }}" alt="" /></a>
                    </div>
                </div>

                <div class="_Endereco">
                    <div class="_icon">
                        <img src="{{ asset('site/img/pin.svg') }}" alt="Ícone de Pin" />
                    </div>
                    <p>{{ $imovel->subtitulo }}</p>
                </div>
            </div>

            <div class="_showcase">
                <div class="_mainPic">
                    <img src="{{ asset($imovel->imagem1) }}" alt="Imagem da casa" />
                </div>

                <div class="_othersPic">
                    <img src="{{ asset($imovel->imagem2) }}" alt="Imagem da casa" />
                    <img src="{{ asset($imovel->imagem3) }}" alt="Imagem da casa" />
                    <img src="{{ asset($imovel->imagem4) }}" alt="Imagem da casa" />
                    <img src="{{ asset($imovel->imagem5) }}" alt="Imagem da casa" />
                </div>
            </div>

            <main>
                <div class="_content">
                    <div class="_top">
                        <h3>{{ $imovel->titulo }}</h3>
                        <div class="_status">
                            <p>{{ $imovel->subtitulo }}</p>
                        </div>
                    </div>

                    <div class="_list">
                        <ul>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/home.svg') }}" alt="Ícone de casa" />
                                </div>
                                <div class="_text">
                                    <span>Tamanho da Casa</span>
                                    <p>{{ $imovel->icone1_texto }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/pin@x2') }}.svg" alt="Ícone de pin" />
                                </div>
                                <div class="_text">
                                    <span>Localização</span>
                                    <p>
                                        {{ $imovel->icone2_texto }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/airFreshener.svg') }}" alt="Ícone" />
                                </div>
                                <div class="_text">
                                    <span>Limpeza</span>
                                    <p>{{ $imovel->icone3_texto }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/swimmer.svg') }}" alt="Ícone de casa" />
                                </div>
                                <div class="_text">
                                    <span>Piscina</span>
                                    <p>{{ $imovel->icone4_texto }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="_description">
                        {!! $imovel->descricao !!}
                    </div>
                </div>
                <div class="_agent">
                    <div class="_box">
                        <div class="_pic">
                            <img src="{{ asset('site/img/pic_Corretor.jpg') }}" alt="Pessoa Corretora" />
                        </div>
                        <span>Raphael Augusto<br> de Lima Barbosa</span>
                        <p>Converse aqui para marcar e negociar o valor.</p>
                        {{-- <span class="_crc"><strong>CRC:</strong> 123124124-214</span> --}}

                        <button name="toWhats">
                            Tenho interesse
                            <div class="_icon">
                                <img src="{{ asset('site/img/whatsapp_white.svg') }}" alt="" />
                            </div>
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <section class="fullscreen-image">
        <div>
            <button><img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" /></button>
            <button><img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" /> </button>

        </div>
        <picture>
            <button class="close"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="svg-inline--fa fa-times-circle fa-w-16"
                    role="img" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z" />
                </svg></button>
            <img src="{{ asset('site/img/galeria_Pic (1).jpg')}} " alt="">
        </picture>

        <span></span>
    </section>


    <section class="container-fluid s_propaganda">
        <div class="container-fav">
            <picture><img src="{{ asset('site/img/publi_hyp8.png')}}" alt="Publicidade hyp8"></picture>
            <picture><img src="{{ asset('site/img/publi_paladar.png')}}" alt="Publicidade Paladar"></picture>
            <picture><img src="{{ asset('site/img/publi_teixeira.png')}}" alt="Publicidade Teixeira"></picture>
            <picture><img src="{{ asset('site/img/publi_gelocar.png')}}" alt="Publicidade Gelocar"></picture>
        </div>
    </section>

    <section class="container-fluid s_list gray">
        <div class="container-fav">
            <div class="_title">
                <h2>{{ config('globals.listas')[$imovel->lista] }}</h2>
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
                @foreach (\App\Models\Imovel::where([['lista', $imovel->lista], ['id', '<>', $imovel->id]])->orderBy('prioridade_lista', 'DESC')->get()
                    as $recomendado)
                    <a href="{{ route('site.detalhe', ['slug' => $recomendado->slug]) }}" class="_case">
                        <div class="_img">
                            <img src="{{ asset($recomendado->imagem1) }}" alt="" />
                        </div>
                        <div class="_name">{{ $recomendado->nome }} #{{ $recomendado->codigo }}</div>
                    </a>
                    @endforeach
            </div>
        </div>
    </section>

    @include('site.includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('site/js/main.js') }}"></script>


    <script>
        $('button[name="toWhats"]').click(()  => {
            window.open(`https://wa.me/5535988326287/?text=Oi+tenho+interesse+na+casa+numero+{{ $imovel->codigo }}`)
        })
    </script>
</body>

</html>