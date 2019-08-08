<?php $origem = (@$_GET['utm_source'])?$_GET['utm_source']:'Landing Page';?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TopWay English School</title>
        <!-- SEO META TAGS -->
        <meta name="keywords" content="topway, escola, ingles, curso, curso de ingles, escola de ingles" />
        <meta name="description" content="Aqui na TopWay English School você aprende inglês em apenas 18 meses e ainda prioriza sua rotina podendo escolher o horário de cada aula conforme as opções!" />
        <!-- FACEBOOK META TAGS -->
        <meta property="og:image" content="https://www.topwayschool.com/assets/img/aprender-ingles.jpg"/>
        <meta property="og:title" content="Quer aprender Inglês? Comece agora! TopWay English School"/>
        <meta property="og:site_name" content="TopWay English School"/>
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="Aqui na TopWay English School você aprende inglês em apenas 18 meses e ainda prioriza sua rotina podendo escolher o horário de cada aula conforme as opções!" />
        <!-- TWIITER META TAGS -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@TopWaySchool">
        <meta name="twitter:creator" content="@TopWaySchool">
        <meta name="twitter:title" content="Quer aprender Inglês? Comece agora! TopWay English School">
        <meta name="twitter:description" content="Aqui na TopWay English School você aprende inglês em apenas 18 meses e ainda prioriza sua rotina podendo escolher o horário de cada aula conforme as opções!">
        <meta name="twitter:image" content="https://www.topwayschool.com/assets/img/aprender-ingles.jpg">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font Icons CSS -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Magnific-popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Animation -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Favicon  -->
        <link rel="shortcut icon" href="https://www.topwayschool.com/favicon.ico" />
        <!-- m9 -->
        <link rel="stylesheet" type="text/css" href="assets/css/m9.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/integracao.css">
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" id="mehr" ng-controller="Lead">

        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader -->

        <!-- navbar -->
        <?php include_once 'includes/header.php'; ?>
        <!-- end navbar -->

        <!-- home -->
        <?php include_once 'includes/banner.php'; ?>
        <!-- end home -->

        <!-- sobre -->
        <section id="sobre" class="section">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center wow fadeInUp">
                            <div class="title-box-icon">
                                <h3 class="title">Lorem</h3>
                                <p class="text-muted sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, perspiciatis optio officia quisquam doloribus commodi suscipit delectus autem amet iste tempora!</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-4 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Missão</h4>
                            <p class="">Ensinar inglês com excelência e foco em resultado, tornando o aluno mais conectado com o mundo.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-eye fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Visão</h4>
                            <p class="">Ser referência no ensino da língua inglesa e expandir a marca em mercados potenciais, gerando lucratividade para os nossos parceiros e comunidade local.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-balance-scale fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Valores</h4>
                            <p class="">Empatia, Responsabilidade e comprometimento, Trabalho em equipe e Responsabilidade social.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about-story bg-light">
                <div class="col-md-6 wow slideInLeft">
                    <img src="assets/img/sobre.png" alt="TopWay Escola de Inglês" class="img-responsive">
                </div>
                <div class="col-md-6 wow slideInRight">
                    <div class="contdainer">
                        <div class="about-story-content">
                            <h1 class=" bold">TopWay Escola de Inglês</h1>
                            <hr>
                            <p class="story-text justificado">
                                Por nossa determinação em buscar novos resultados no ensino do Inglês, fundamos nossa primeira unidade em 2004, em Pelotas/RS. Hoje, nossa determinação se tornou referência através de mais de 24 escolas, distribuídas entre RS, SC e PR.
                            </p>
                            <p class="story-text justificado">Mas é claro, não teríamos alcançado essa referência sem a peça-chave durante esses mais de 10 anos: a sua confiança.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sobre -->

        <!-- vantagens -->
        <section id="features" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-trophy fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">TopWay Curso de Inglês</h4>
                            <p class="">Nossa missão é ensinar Inglês em 18 meses. Para isso, utilizamos o método ESL (English as a Second Language).</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-address-card fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Matrícula</h4>
                            <p class="">Para nós, cada aluno é único. E daremos todo o suporte necessário para que em 18 meses você esteja falando Inglês.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Material</h4>
                            <p class="">Contamos com o Life, um aplicativo multiplataforma acessível de qualquer lugar, a qualquer hora, até mesmo offline. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center wow flipInY">
                        <div class="icon-box">
                            <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
                            <h4 class="service-heading bold">Eventos e workshops</h4>
                            <p class="">Colocamos em prática tudo o que foi visto em sala de aula através de eventos temáticos, com o intuito de simular vivências no exterior.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end vantagens -->

        <!-- video -->
        <!-- <section id="features" class="section">
            <div class="row about-story bg-light">
                <div class="col-md-6 wow slideInLeft">
                    <div class="contdainer">
                        <div class="about-story-content">
                            <h1>Lorem</h1>
                            <hr>
                            <p class="story-bold">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quisquam accusamus iste, asperiores beatae sed.
                            </p>
                            <p class="story-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis amet consequatur incidunt, alias odit quisquam laborum nemo nisi, vel, tempora eligendi enim voluptate accusamus libero voluptas commodi ex rerum dolorem!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow slideInRight">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/wuTTk11evP4" frameborder="0" allowfullscreen class="margin">
                    </iframe>
                </div>
            </div>
        </section> -->
        <!-- end video -->

        <!-- footer -->
        <?php include_once 'includes/footer.php'; ?>
        <!-- end footer -->

        <!-- Back to top -->
        <div class="scroll-indicator go-top" id="back-to-top"> <a href="#mehr"><i class="fa fa-angle-double-up"></i></a></div>
        <!-- end Back to top -->

        <!-- modal fale agora -->
        <?php include_once 'includes/modal.php'; ?>
        <!-- end modal fale agora -->
    </body>
        <!-- Javascript files -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Jquery easing -->
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.min.js"></script>
        <!--sticky header-->
        <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
        <!-- OWL Carousel -->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <!--Magnific popup-->
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- contact form -->
        <script type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="assets/js/typed.min.js"></script>
        <!-- wowjs -->
        <script src="assets/js/wow.min.js"></script>
        <!--common script for all pages-->
        <script src="assets/js/custom.js"></script>
        <!-- integracao -->
        <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
        <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
        <script type="text/javascript">
            angular.module('app', ['ngMask', 'ngDialog'])
                .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
                   $log.warn($location.host());
                   $scope.enviarwpp = false;
                   $scope.load = false;
                   $scope.load1 = false;
                   $scope.dados = {};
                   var host = 'http://crm2.marketingmidia9.com.br'
                   var registra_acesso = function() {
                       $http.get(host + '/api/registraAcesso/svBG5kXF23mhO5iu_DtiUp28aZkFU5JYr-gwsPKf_GM')
                       .success(function(result){
                           $log.info(result);
                           $scope.request = result.data;
                       });

                       $http.get('http://ipv4.myexternalip.com/json')
                       .success(function(result) { 
                         $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
                         .success(function(data){
                             /*$log.info(data);*/
                             $scope.meta = data;
                         })
                       });
                   }

                   $scope.enviarLead = function(dados, tmp = null) {
                        $scope.load = true;
                        dados.LE_CodigoTipo = 2;
                        // dados.LE_Descricao = 'empresa: '+dados.tmp.empresa ;
                        // delete dados.tmp;
                        // dados.EMP_Key = $scope.request.EMP_Key;
                        dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
                        dados.LE_MetaDado = $scope.meta;
                        $log.info(dados);

                        $http({
                           method: 'POST',
                           url: host + '/api2/registraLead',
                           data:  $httpParamSerializerJQLike(dados),
                           headers: {
                             'Content-Type': 'application/x-www-form-urlencoded'
                           }
                         })
                        .success(function(retorno){
                           $scope.load = false;
                            $scope.googleEvent();
                           if (!retorno.error) {
                             swal({
                               title: "Obrigado!",
                               text: "suas informações foram enviadas com sucesso, um de nossos consultores irá lhe contactar em breve",
                               type: "success",
                               confirmButtonColor: "#DD6B55",
                               confirmButtonText: "Ok",
                               closeOnConfirm: false
                             },
                             function(){
                              if ($scope.enviarwpp == true) {
                                window.location.href = "https://api.whatsapp.com/send?phone=558599917739&text=Olá, me chamo  "+dados1.LE_Nome+"   e gostaria de mais informações sobre o curso de Inglês?";
                              }
                              else {
                                window.location.href = "";
                              }
                             });
                           }
                           else {
                             swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
                           }
                         })
                         .error(function(retorno){
                           $scope.load = false;
                           $log.error(retorno);
                         });
                     }

                   $scope.openForm = function(template, tipo) {
                     $scope.dados.LE_CodigoTipo = tipo;
                     ngDialog.openConfirm({
                       template:template,
                       scope: $scope,
                       /*width: '100%',*/
                       showClose: false,
                       closeByDocument: true,
                       closeByEscape: true
                     });
                   }
                   registra_acesso();
                });
        </script>
</html>