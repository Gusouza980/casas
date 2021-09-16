@include('site.includes.head')

<body id="details">
    <div class="container-fluid s_details">
        <div class="container-fav">
            <div class="_info">
                <div class="_Name">
                    <div class="_Text">
                        <h1>Casa com garagem</h1>
                        <p class="_ID">#0001</p>
                    </div>
                    <div class="_logo">
                        <a href="/"><img src="{{ asset('site/img/_logo85.png') }}" alt="" /></a>
                    </div>
                </div>

                <div class="_Endereco">
                    <div class="_icon">
                        <img src="{{ asset('site/img/pin.svg') }}" alt="Ícone de Pin" />
                    </div>
                    <p>Rua General Costa Campos, 470 Centro - Alfenas 37130-131</p>
                </div>
            </div>

            <div class="_showcase">
                <div class="_mainPic">
                    <img src="{{ asset('site/img/example_mainPic.jpg') }}" alt="Imagem da casa" />
                </div>

                <div class="_othersPic">
                    <img src="{{ asset('site/img/example_otherPics-1') }}.jpg" alt="Imagem da casa" />
                    <img src="{{ asset('site/img/example_otherPics-2') }}.jpg" alt="Imagem da casa" />
                    <img src="{{ asset('site/img/example_otherPics-3') }}.jpg" alt="Imagem da casa" />
                    <img src="{{ asset('site/img/example_otherPics.jpg') }}" alt="Imagem da casa" />
                </div>
            </div>

            <main>
                <div class="_content">
                    <div class="_top">
                        <h3>Casa com garagem hospedada por Tainá</h3>
                        <div class="_status">
                            <p>4 Quartos • 2 Banheiros • 2 Garagens</p>
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
                                    <p>Ela é bem grande, linda e bonita</p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/pin@x2') }}.svg" alt="Ícone de pin" />
                                </div>
                                <div class="_text">
                                    <span>Localização</span>
                                    <p>
                                        Ela se localiza na Rua João Cezário, Jardim América- 180. Na rua do Lava Jato
                                        do Pelé.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/airFreshener.svg') }}" alt="Ícone" />
                                </div>
                                <div class="_text">
                                    <span>Limpeza</span>
                                    <p>Bem limpinha, tinindo, brilhando.</p>
                                </div>
                            </li>
                            <li>
                                <div class="_icon">
                                    <img src="{{ asset('site/img/swimmer.svg') }}" alt="Ícone de casa" />
                                </div>
                                <div class="_text">
                                    <span>Piscina</span>
                                    <p>Conta com piscina higienizada e grande.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="_description">
                        <p>
                            Que tal uma volta ao passado? A Fazenda Casa Branca foi construída em meados de 1720
                            pelos Jesuítas, a casa feita de taipa reserva grandes surpresas e muita história!
                            <br /><br />
                            Venha compartilhar com quem você ama um espaço de 100 hectares de muita paz em meio
                            natureza ✨💫🌿
                            <br />
                            <br />
                            Fazenda Casa Branca “Mantendo nossas tradições e história para construir às suas”
                        </p>
                    </div>
                </div>
                <div class="_agent">
                    <div class="_box">
                        <div class="_pic">
                            <img src="{{ asset('site/img/pic_Corretor.jpg') }}" alt="Pessoa Corretora" />
                        </div>
                        <span>Tainá Silva</span>
                        <p>Converse aqui com a hóspede da casa para marcar e negociar o valor.</p>
                        <span class="_crc"><strong>CRC:</strong> 123124124-214</span>

                        <button>
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

    <section class="container-fluid s_list gray">
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
    </section>

    @include('site.includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>
