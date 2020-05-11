<?php
namespace Classes;

class ClassLayout{

    //Definição das tags do head

    public static function setHeader($title = 'Bem vindo', $description = "", $author = 'YgReJo'){
        $html = "<!DOCTYPE html>\n";
        $html .= "<html lang='pt-br'>\n";
        $html .= "<head>\n";
        $html .= "    <title>".NAME." - $title</title>\n\n";

        $html .= "    <meta charset='utf-8'>\n";
        $html .= "    <meta name='viewport' content='width=device-width'>\n";
        $html .= "    <meta name='description' content='$description'>\n";
        $html .= "    <meta name='author' content='$author'>\n\n";

        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRCSS."reset.css\n'>";
        $html .= "    <link rel='shortcut icon' href='".DIRIMG."personal-favicon.png'>\n";
        $html .= "    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>";
        $html .= "    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css' rel='stylesheet'>\n";
        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/index.css'>\n";
        $html .= "</head>\n\n";
        $html .= "<body>\n";
        $html .= "    <header>\n\n";
		$html .= "        <nav class='navbar navbar-dark style-navbar'>\n\n" ;
        $html .= "            <section class='container-navbar'>\n\n";
		$html .= "                <a class='navbar-brand' href='#'></a>\n";
		$html .= "                <ul class='menu'>\n";
		$html .= "                    <li><a class='cor-padrao' href='<?php echo DIRPAGE; ?>'>Home</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='<?php echo DIRPAGE.'personal'; ?>'>O Personal</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='consultoria'>A Consultoria</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='planos'>Planos</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='como-funciona'>Como funciona?</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='por-que-contratar'>Por que contratar?</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='blog'>Blog</a></li>\n";
		$html .= "                    <li><a class='cor-padrao' href='loja'>Loja</a></li>\n";
		$html .= "              </ul>\n\n";
		$html .= "            </section>\n\n";
		$html .= "        </nav>\n\n";
	    $html .= "    </header>\n\n\n";
	    $html .="    <main>\n\n";

        return $html;
    }
    //Definição das tags do footer
    public static function setFooter(){

        $html = "
        </main>
            <!-- Footer -->
            <footer class='page-footer font-small mdb-color lighten-3 pt-4'>
        
              <!--Imagens-->
              <div class='container'>
        
                <div class='contatos'>
        
                    <ul class='duvidas'>
                        <li class='icon-contato'>&#9993;</li>
                        <li class='caracter-do-contato'>Você ainda tem dúvidas ?<br>ygor-renan-joalison@gmail.com</li>
                    </ul>
        
                    <ul class='duvidas'>
                        <li class='icon-contato'>&#9743;</li>
                        <li class='caracter-do-contato'>Telefone<br>(21) 9999-9999</li>
                    </ul>
                </div>
        
                <div class='row'>
        
        
                  <div class='col-lg-2 col-md-12 mb-4'>
                    <div class='view overlay z-depth-1-half'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4'>
                    <div class='view overlay z-depth-1-half'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4'>
                    <div class='view overlay z-depth-1-half'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                  <div class='col-lg-2 col-md-12 mb-4'>
                    <div class='view overlay z-depth-1-half'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
        
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4'>
                      <div class='view overlay z-depth-1-half'>
                        <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg' class='img-fluid'
                          alt=''>
                        <a href=''>
                          <div class='mask rgba-white-light'></div>
                        </a>
                      </div>
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4'>
                    <div class='view overlay z-depth-1-half'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                </div>
              </div>
        
              <!--Redes sociais-->
              <div class='col-md-6 mb-3 col-lg-7 text-center text-md-right'>
        
        
                <a class='fb-ic' href='https://www.facebook.com/ygor.regato.5'>
                  <i class='fab fa-facebook-f white-text mr-4'> </i>
                </a>
        
                <a class='tw-ic'>
                  <i class='fab fa-twitter white-text mr-4'> </i>
                </a>
        
                <a class='li-ic'>
                  <i class='fab fa-linkedin-in white-text mr-4'> </i>
                </a>
        
                <a class='ins-ic'>
                  <i class='fab fa-instagram white-text mr-4'> </i>
                </a>
        
                <a class='ins-ic'>
                  <i class='fab fa-youtube'></i> </i>
                </a>
        
              </div>
        
              <!--Copyright-->
              <div class='footer-copyright text-center py-3'>©Copyright 2020 |
                <a href='https://mdbootstrap.com/'> José Personal. Todos os Direitos Reservados. Criado pela equipe YgReJo</a>
              </div>
        
            </footer>
        
            <script src='views/js/jquery.js'></script>
            <script src='views/js/index.js'></script>
        
        
        </body>
        </html>
        ";
        return $html;
    }
}