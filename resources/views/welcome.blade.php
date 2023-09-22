@extends('layout.app')

@section('title', 'Rosatur')

@section('links_src')
    <link rel="stylesheet" href="./css/classes/legend.css">
    <link rel="stylesheet" href="./css/layouts/sectionWhyUs.css">
    <link rel="stylesheet" href="./css/layouts/sectionBestOferts.css">
    <link rel="stylesheet" href="./css/efeitos/parallax.css">
    {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

<style>
    nav.navbar {
        background-color: rgba(var(--quin-color), .75) !important;
    }

    .efeito_parallax {
        /* background-image: url("./img/jericoacoara_ponto_turistico_ceara.jpg"); */
        height: 42rem;
    }
</style>

@section('content')

    <style>
        .efeito_parallax:nth-child(1) {
            background-image: url("./img/jericoacoara_ponto_turistico_ceara.jpg");
        }

        .efeito_parallax:nth-child(2) {
            background-image: url("./img/silhueta-de-tres-pessoas.jpg");
        }
    </style>

    <section style="background-color: rgba(var(--dark-color), .05); margin: 5rem 0;">
        <div class="efeito_parallax"
            style="
            background-attachment: local; 
            margin-top: -15em;
            ">
            {{-- margin-top: calc(10vh * -1); --}}
            {{-- position: absolute; --}}
            <div class="parallax_text">
                <p class="parallax_paragraph fs-5">Realize a viagem dos seus sonhos. Descubra o diferente!</p>
                <h2 class="parallax_title title_light"> Exploque novos lugares! </h2>
                <button class="btnG btnG-border-light parallax_btn">
                    Clique Aqui
                </button>
            </div>
        </div>

        <style>
            .div_cards {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                gap: 4rem;
                height: 400px;
                padding: 0 2rem;
            }

            .div_cards .cards {
                position: relative;
                height: 100%;
                min-width: 175px !important;
                background-image: url("./img/travel_photos/praia_de_aracaju.jpg");
                background-position: center;
                background-size: cover;
                color: #eee;
                padding: 25px;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: space-evenly;
                /* border: 5px solid rgb(var(--dark-color)) */
                box-shadow: .5px .5px 2.5px 1px rgb(var(--dark-color))
            }

            .div_cards .cards::after {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                translate: -25px 0;
                background-color: rgba(var(--dark-color), 0.4);
                z-index: 1;
            }

            .div_cards .cards * {
                z-index: 9;
            }
        </style>

        <div class="div_best_travel_deals mb-5 d-flex flex-column justify-content-center">
            <div class="div_cards mb-1" style="translate: 0 -30px;">
                <div class="cards">


                    ao invés de cards de viagens, colocar as diversões por trás tipo:
                    Férias na praia;
                    Passeio de Carro nas dunas;
                    Férias nas serras;


                    <h2 class="cards_title">
                        Aracaju
                    </h2>
                    <p class="cards_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
                <div class="cards">
                    <h2 class="cards_title title_light">
                        Aracaju
                    </h2>
                    <p class="cards_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
                <div class="cards">
                    <h2 class="cards_title">
                        Aracaju
                    </h2>
                    <p class="cards_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>

            <button class="btnG btnG-border-main mx-auto mb-5" style="width: 200px;"> OUTRAS OFERTAS </button>
        </div>
    </section>

    {{-- class="mb-5" --}}
    <section class="container_oferts">
        <h2 class="container_oferts_title title2">
            Melhores Ofertas
        </h2>
        <div class="div_oferts">
            <div class="oferts">
                <div class="oferts_img">
                    <img src="./img/lecois_maranhenses.jpg" alt="">
                </div>
                <div class="oferts_info">
                    <h2 class="oferts_title">
                        Lençois maralhenses
                    </h2>
                    <p class="oferts_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>
            <div class="oferts">
                <div class="oferts_img">
                    <img src="./img/lecois_maranhenses.jpg" alt="">
                </div>
                <div class="oferts_info">
                    <h2 class="oferts_title">
                        Lençois maralhenses
                    </h2>
                    <p class="oferts_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>
            <div class="oferts">
                <div class="oferts_img">
                    <img src="./img/lecois_maranhenses.jpg" alt="">
                </div>
                <div class="oferts_info">
                    <h2 class="oferts_title">
                        Lençois maralhenses
                    </h2>
                    <p class="oferts_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-main cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="efeito_parallax"
        style="height: 35rem; margin: 5rem 0; background-image: url('./img/silhueta-de-tres-pessoas.jpg');">
        <div class="parallax_text">
            <p class="parallax_paragraph title_light">Realize a viagem dos seus sonhos. Descubra o diferente!</p>
            <h2 class="parallax_title fs-1"> Exploque novos lugares! </h2>
            <button class="btnG btnG-border-light parallax_btn">
                Clique Aqui
            </button>
        </div>
    </div>

    <section class="container_whyUs">
        <div class="div_whyUs">
            <div class="div_whyUs_part1">
                <div class="whyUs_informs">
                    <h2 class="whyUs_title title2"> Porque escolher agente?!? </h2>
                    <div id="carouselExample" class="splide splideWhyUs">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="splide_content">
                                        <div class="d-flex gap-3 align-items-start">
                                            <i class="bi bi-virus fs-4"></i>
                                            <div class="splide_informs">
                                                <h4 class="splice_title">Slide 01 </h4>
                                                <p class="splice_text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero
                                                    assumenda
                                                    quas
                                                    repellat nulla sit nesciunt molestias consectetur id nobis? Possimus
                                                    error
                                                    voluptas
                                                    minima rem
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                                    sequi expedita alias natus corporis deserunt laboriosam! Minus molestias
                                                    modi ullam voluptatum, nihil vero maiores temporibus nesciunt
                                                    voluptatibus, impedit tempora perferendis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide_content">
                                        <div class="d-flex gap-3 align-items-start">
                                            <i class="bi bi-virus fs-4"></i>
                                            <div class="splide_informs">
                                                <h4 class="splice_title">Slide 02 </h4>
                                                <p class="splice_text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero
                                                    assumenda
                                                    quas
                                                    repellat nulla sit nesciunt molestias consectetur id nobis? Possimus
                                                    error
                                                    voluptas
                                                    minima rem
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide_content">
                                        <div class="d-flex gap-3 align-items-start">
                                            <i class="bi bi-virus fs-4"></i>
                                            <div class="splide_informs">
                                                <h4 class="splice_title">Slide 03 </h4>
                                                <p class="splice_text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero
                                                    assumenda
                                                    quas
                                                    repellat nulla sit nesciunt molestias consectetur id nobis? Possimus
                                                    error
                                                    voluptas
                                                    minima rem
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img src="./img/customers/mulher-segurando-smartphone-sem-fundo.png" alt="" style="left: 0;">
                <img src="./img/customers/homem-e-mulher-com-celular-sem-fundo.png" alt="" style="right: 0;">
            </div>
            <div class="div_whyUs_part2">

            </div>
        </div>
    </section>

    <section class="section_tripsMade my-5">
        <h2 class="title2 text-center"> Sobre nossas viagens </h2>
        <div class="content container_card">
            <div class="img_card" style="background-image: url('./img/silhueta-de-tres-pessoas.jpg');">
                <div class="card_info">
                    <div class="card_title"> lorem </div>
                    <div class="card_text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur natus
                        quaerat dolor. Consectetur, voluptatem nemo aperiam totam quasi maiores minima dicta facilis animi
                        neque, optio fugiat, sunt aut illo pariatur! </div>
                    <div class="card_btnG">
                        <button> butão </button>
                    </div>
                </div>
            </div>
            <div class="img_card" style="background-image: url('./img/silhueta-de-tres-pessoas.jpg');">
                <div class="card_info">
                    <div class="card_title"> lorem </div>
                    <div class="card_text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur natus
                        quaerat dolor. Consectetur, voluptatem nemo aperiam totam quasi maiores minima dicta facilis animi
                        neque, optio fugiat, sunt aut illo pariatur! </div>
                    <div class="card_btnG">
                        <button> butão </button>
                    </div>
                </div>
            </div>
            <div class="img_card" style="background-image: url('./img/silhueta-de-tres-pessoas.jpg');">
                <div class="card_info">
                    <div class="card_title"> lorem </div>
                    <div class="card_text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur natus
                        quaerat dolor. Consectetur, voluptatem nemo aperiam totam quasi maiores minima dicta facilis animi
                        neque, optio fugiat, sunt aut illo pariatur! </div>
                    <div class="card_btnG">
                        <button> butão </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .section_atendimento {
            width: 100%;
            margin: 5rem 0;
        }

        .banner {
            width: 100%;
            /* height: 10rem; */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            gap: 1rem;
            background-color: rgb(var(--sec-color))
        }

        .banner_img {
            height: 12rem;
            position: relative;
        }

        .banner_img img {
            height: 100%;
            width: auto;
        }

        .banner_info {}

        .banner_info .banner_title {
            color: rgb(var(--tert-color));
            text-shadow: 0.1px 0.1px rgba(var(--tert-color), .5);
        }

        .banner_info .banner_text {
            color: rgb(var(--light-color));
        }
    </style>

    <section class="section_atendimento my-5">
        <div class="banner">
            <div class="banner_img">
                <img src="./img/customers/contato_com_cliente_imageVetorial.svg" />
                <a href="https://br.freepik.com/vetores-gratis/ilustracao-plana-de-suporte-ao-cliente_13184991.htm#query=contato&position=8&from_view=search&track=sph"
                    class="legend" style="bottom: 8px;">Freepik</a>
            </div>
            <div class="banner_info">
                <h4 class="banner_title"> Entre em contato conosco </h4>
                <p class="banner_text">
                    Fale conosco pelo WhatsApp para estar por dentro das viagens do momento!
                </p>
            </div>
        </div>
    </section>

    {{-- <section class="section_atendimento my-5">
        <div class="banner">
            <div class="banner_img"></div>
            <div class="banner_info">
                <h4 class="banner_title"></h4>
                <h4 class="banner_text"></h4>
            </div>
        </div>
    </section> --}}

@endsection

@section('links_script')
    <script src="./lib/scrollreveal.js"></script>
    <script src="./lib/splide.js"></script>
@endsection
