<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TSTK5XG');
    </script>
    <!-- End Google Tag Manager -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Safe Investimentos</title>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSTK5XG" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#home">
                <img src="./img/logo.png" alt="Logo Safe Investimentos" class="img-fluid" width="200px" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-evenly" id="nav">
                <div class="d-flex justify-content-end">
                    <ul class="nav-menu navbar-nav">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#diversifique">Vantagens</a>
                        </li>
                        <li>
                            <a href="#investir">Quero Investir</a>
                        </li>
                        <li>
                            <a href="#porque">Porque Investir?</a>
                        </li>
                    </ul>
                    <div class="buttons d-flex">
                        <a href="">
                            <button type="button" class="btn accent-bg text-white rounded-pill f10">Abrir conta</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-outline rounded-pill f10">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class=" container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="Logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    <ul class="nav-menu navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#diversifique">Vantagens</a>
                        </li>
                        <li>
                            <a href="#investir">Quero Investir</a>
                        </li>
                        <li>
                            <a href="#porque">Porque Investir?</a>
                        </li>
                    </ul>
                    <div class="buttons d-flex">
                        <a href="">
                            <button type="button" class="btn accent-bg text-white rounded-pill f10">Abrir conta</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-outline rounded-pill f10">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="header" id="home">
        <div class="container h-100 pig-background">
            <div class="row h-100 d-flex justify-content-lg-between justify-content-md-center align-items-center">
                <div class="col-lg-8 col-md-12 p-0">
                    <div class="header-container">
                        <h1 class="header-title">TENHA SUA<br><span class="accent-text">FONTE DE RENDA</span><br>PASSIVA
                        </h1>
                        <p class="header-text mb-5">Contrate nossa equipe de especialistas e veja seu patrimônio crescer
                        </p>

                        <a href="#diversifique" class="mt-5">
                            <button type="button" class="btn btn-accent rounded-pill">QUERO SABER MAIS</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-0">
                    <div class="d-flex justify-content-end">
                        <form method="POST" action="/mail.php" class="text-center form-container">
                            <h3 class="accent-text">Dê valor <br /> ao seu dinheiro!</h3>
                            <p class="text-italic mb-4">É Rápido, Fácil e sem custos!</p>
                            <input class="form-control m-auto mb-3" type="text" placeholder="Digite seu nome" name="name" required />
                            <input class="form-control m-auto mb-3" type="email" name="email" placeholder="Digite seu melhor email" required />
                            <input class="form-control m-auto mb-3" type="text" placeholder="DDD + Celular" name="number" required />
                            <p class="text-italic">Preecha todos os campos*</p>
                            <button class="btn btn-accent rounded-pill mb-2" type="submit">ABRIR SUA
                                CONTA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="pt-5" id="diversifique">
        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <div class="benefits w-100">
                <h1 class="benefits-title">Diversifique seus</h1>
                <h1 class="benefits-title-alt mb-3">INVESTIMENTOS</h1>
                <p class="text-italic mb-5">Invista com maior rentabilidade e ajude negócios locais.</p>
                <div class="row benefits-row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="benefits-card">
                            <div class="benefits-card-img">
                                <img src="./img/1.png" alt="" width="120" class="mb-3">
                            </div>
                            <p class="benefits-text"> <span class="benefits-spot">Retornos líquidos</span> que
                                <br />
                                podem chegar a mais <br /> de <span class="benefits-spot">25% ao ano.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="benefits-card">
                            <div class="benefits-card-img">
                                <img src="./img/2.png" alt="" width="120" class="mb-3">
                            </div>
                            <p class="benefits-text">Você quem <span class="benefits-spot">analisa <br /> e
                                    escolhe</span> os <br />
                                investimentos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="benefits-card">
                            <div class="benefits-card-img">
                                <img src="./img/3.png" alt="" width="120" class="mb-3">
                            </div>
                            <p class="benefits-text"><span class="benefits-spot">100% online </span> e<br /> sem
                                comissão.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="benefits-card">
                            <div class="benefits-card-img">
                                <img src="./img/4.png" alt="" width="120" class="mb-3">
                            </div>
                            <p class="benefits-text">Maior liquidez <br /> com <span class="benefits-spot">recebimentos
                                    <br /> mensais.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="invest" id="investir">
        <div class="background d-flex justify-content-center align-items-center">
            <div class="container invest-container text-center">
                <h1 class="m-0">MAIS RENTABILIDADE</h1>
                <p class="m-0">Receba até 1% ao dia de segunda a sexta, podendo <br /> chegar até 20% ao mês.</p>
                <button type="button" class="btn btn-accent rounded-pill m-0">ABRIR SUA CONTA</button>
            </div>
        </div>
    </section>

    <section class="trade" id="porque">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center">
                    <div class="trade-section">
                        <div class="trade-box">
                            <h2 class="mb-3 accent-text-alt">Saia do Convencional</h2>
                            <p class="mb-5 text-italic">Você não precisa fazer nenhuma análise de ativos ou sequer
                                entender de investimentos. Tudo é feito por nossa equipe de especialistas</p>
                        </div>
                        <div class="trade-box">
                            <h2 class="mb-3 accent-text">Satisfação Garantida</h2>
                            <p class="mb-5 text-italic">Se em 180 dias, o resultado for negativo, nós cobrimos o
                                prejuízo e devolvemos todo o valor investido.</p>
                        </div>
                        <button type="button" class="btn btn-accent rounded-pill m-0">ABRIR SUA CONTA</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="p-5">
                        <div class="h-75 w-75 m-auto">
                            <img src="./img/phone.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-logo">
                    <img src="./img/logo.png" alt="Logo" width="80%">
                    <p>Aprenda a investir e tenha <br />mais liberdade financeira <br /> para a sua vida!</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6>MENU</h6>
                    <ul class="m-0">
                        <li class="mb-2">
                            <a href="#">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="#diversifique">Vantagens</a>
                        </li>
                        <li class="mb-2">
                            <a href="#investir">Quero Investir</a>
                        </li>
                        <li>
                            <a href="#porque">Porquê Investir?</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <ul class="m-0">
                        <li class="mb-2">
                            <a href="">TERMOS DE USO</a>
                        </li>
                        <li>
                            <a href="">POLÍTICA DE PRIVACIDADE</a>
                        </li>
                    </ul>
                    <div class="d-flex social-icons align-items-center">
                        <a href="https://instagram.com/safeintermedia?utm_medium=copy_link">
                            <i class="fab fa-instagram mx-2 text-white"></i></a>
                        <a href=""><i class="fab fa-facebook-f mx-2 text-white"></i></a>
                        <!-- <a href=""><i class="fab fa-linkedin-in mx-2 text-white"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p class="font-bold">Invista em você, cuide do seu <br /> futuro e de quem você ama.
                        <br />Investir é a melhor forma de<br />rentabilizar os seus ganhos.
                    </p>
                    <button type="button" class="btn btn-accent rounded-pill">ABRIR SUA CONTA</button>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>