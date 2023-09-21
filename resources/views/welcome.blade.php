@extends('layout.app')

@section('title', 'Rosatur')

@section('links_src')
    <link rel="stylesheet" href="./css/efeitos/parallax.css">
    {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
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
                <h2 class="parallax_title fs-1"> Exploque novos lugares! </h2>
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
                /* overflow-y: hidden;
                                                            overflow-x: scroll; */
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
                    <h2 class="cards_title">
                        Aracaju
                    </h2>
                    <p class="cards_text">
                        Aracaju é um desses lugares que despertam no forasteiro a sensação de ter descoberto um lugar onde
                        morar
                        pode ser ainda mais interessante do que visitar.
                    </p>
                    <button class="btnG btnG-fill-yellowColor cards_btn">
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
                    <button class="btnG btnG-fill-yellowColor cards_btn">
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
                    <button class="btnG btnG-fill-yellowColor cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>

            <button class="btnG btnG-border-yellowColor mx-auto mb-5" style="width: 200px;"> OUTRAS OFERTAS </button>
        </div>
    </section>


    <style>
        .container_oferts {
            width: 100%;
            gap: 1rem;
        }

        .container_oferts_title {
            margin-top: 1rem;
            margin-bottom: .5rem;
            text-align: center;
            font-weight: 600;
            color: rgb(var(--quin-color));
        }

        .div_oferts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin: 1rem auto;
            width: 80vw;
        }

        .oferts {
            background-color: rgba(var(--dark-color), .05);
            ;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            position: relative;
            gap: 2rem;
            margin: 1rem 0;
            padding: .5rem;
        }

        .oferts_img {
            width: 400px;
            overflow: hidden;
        }

        .oferts_img img {
            height: auto;
            width: 100%;
        }

        .oferts_info {
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-around;
        }

        .oferts_title {
            font-weight: 500;
            color: rgb(var(--quin-color));
        }

        .oferts_text {}

        .oferts_info .btnG {}
    </style>
    {{-- class="mb-5" --}}
    <section class="container_oferts">
        <h2 class="container_oferts_title">
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
                    <button class="btnG btnG-fill-yellowColor cards_btn">
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
                    <button class="btnG btnG-fill-yellowColor cards_btn">
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
                    <button class="btnG btnG-fill-yellowColor cards_btn">
                        VER MAIS
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="efeito_parallax"
        style="height: 35rem; margin: 5rem 0; background-image: url('./img/silhueta-de-tres-pessoas.jpg');">
        <div class="parallax_text">
            <p class="parallax_paragraph fs-5">Realize a viagem dos seus sonhos. Descubra o diferente!</p>
            <h2 class="parallax_title fs-1"> Exploque novos lugares! </h2>
            <button class="btnG btnG-border-light parallax_btn">
                Clique Aqui
            </button>
        </div>
    </div>

    <section class="container_whyUs">
        <h2> Porque escolher agente?!? </h2>
        <div class="div_whyUs" style="margin: 5rem 0;">
            <div class="div_whyUs_part1">
                <img src="" alt="">
            </div>
            <div class="div_whyUs_part2">

            </div>
        </div>
    </section>

@endsection

<script src="./lib/scrollreveal.js"></script>
