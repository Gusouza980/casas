@include('site.includes.head')

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
                <div class="_hero-imgs">
                    <img src="{{ asset('site/img/header_group.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid searchbar">
        <div class="container-fav">
            <select class="js-example-basic-single" name="pesquisa-casa">
                <option value="">Encontrar casa</option>
                <option value="2323">Casa 2323</option>
                <option value="2323">Casa 2323</option>
                <option value="2323">Casa 2323</option>
                <option value="2323">Casa 2323</option>
              </select>

              <picture for="pesquisa-casa">
                  <img src="{{ asset('site/img/search.svg') }}" alt="">
              </picture>
        </div>
    </section>


    <section class="container-fluid s_topfive">
        <div class="container-fav">
            <div class="_title">
                <h2>As 5 mais alugadas</h2>
            </div>
            <div class="_top">
                <a href="" class="_fivecase">
                    <div class="number">1</div>
                    <div class="_image">
                        <img src="{{ asset('site/img/topfive_01.jpg') }}" alt="" />
                    </div>
                </a>
                <a href="" class="_fivecase">
                    <div class="number">2</div>
                    <div class="_image">
                        <img src="{{ asset('site/img/topfive_02.jpg') }}" alt="" />
                    </div>
                </a>
                <a href="" class="_fivecase">
                    <div class="number">3</div>
                    <div class="_image">
                        <img src="{{ asset('site/img/topfive_03.jpg') }}" alt="" />
                    </div>
                </a>
                <a href="" class="_fivecase">
                    <div class="number">4</div>
                    <div class="_image">
                        <img src="{{ asset('site/img/topfive_04.jpg') }}" alt="" />
                    </div>
                </a>
                <a href="" class="_fivecase">
                    <div class="number">5</div>
                    <div class="_image">
                        <img src="{{ asset('site/img/topfive_05.jpg') }}" alt="" />
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid s_list">
        <div class="container-fav">
            <div class="_title">
                <h2>Ideal pra quem quer aproveitar</h2>
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
                    <span>Não apenas alugue, cire histórias!</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. <br /><br />

                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
                <button>Buscar</button>
            </div>
        </div>
    </section>

    <section class="container-fluid s_list">
        <div class="container-fav">
            <div class="_title">
                <h2>Pra quem é mais do campo</h2>
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
    </section>

    @include('site.includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('site/js/main.js') }}"></script>
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
</body>

</html>
