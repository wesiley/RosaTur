<style>
    footer {
        width: 100%;
        margin: 0;
        margin-top: 5rem;
        padding: .5rem;

    }

    footer a{
        color: rgb(var(--dark-color));
    }

    .footer_section {
        width: 100%;
        margin: .5rem;
        padding: .5rem;
        display: flex;
        justify-content: space-around;
    }

    .footer_div {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .footer_div>div {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        color: rgb(var(--dark-color));
    }

    .footer_div .footer_list {
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: start;
    }

    .footer_div:nth-child(2)::after,
    .footer_div:nth-child(2)::before {
        content: "";
        position: absolute;
        width: 4px;
        height: 100%;
        top: 5px;
        right: 0;
        background-color: rgb(var(--tert-color));
    }

    .footer_div:nth-child(2)::before {
        left: -50px;
    }

    .footer_div:nth-child(2)::after {
        right: -50px;
    }

    .footer_socialMedia .bi{
        font-size: 15pt;
        color: rgb(var(--sec-color));
    }

    .footer_section .copyright {
        font-size: 9pt;
    }
    .footer_section .copyright a {
        color: rgb(var(--tert-color));
    }
</style>

<footer>


    <div class="footer_section">
        <div class="footer_div">
            <h4 class="footer_title title_green_dark"> Ofertas de viagens </h4>
            <div class="footer_oferts">
                <ul class="footer_list">
                    <a href="">
                        <li>Aracaju</li>
                    </a>
                    <a href="">
                        <li>Porto de Galinhas</li>
                    </a>
                    <a href="">
                        <li>Dunas do Rio São Francisco</li>
                    </a>
                    <a href="">
                        <li>Outras ofertas</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="footer_div">
            <h4 class="footer_title title_green_dark"> Porque escolher agente </h4>
            <div class="footer_whyUs">
                <ul class="footer_list">
                    <a href="">
                        <li>Correspondencia personalizada</li>
                    </a>
                    <a href="">
                        <li>Atendimento qualificado</li>
                    </a>
                    <a href="">
                        <li>Preços acessiveis</li>
                    </a>
                    <a href="">
                        <li>Variedade de passeios</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="footer_div">
            <h4 class="footer_title title_green_dark"> Siga nossas Redes Sociais </h4>
            <div class="footer_socialMedia flex-row">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-pinterest"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="footer_section">
        <div class="copyright">
            <span> &copy;2023 RosaTour | <a href="#">Termos e condições</a> | <a href="#">Politica de
                    privacidade</a> </span>
        </div>
    </div>


</footer>
