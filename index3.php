<?php
    var_dump($_GET);
    //print_r($_GET);
    echo 'teste = '.$_GET['tipo'];
    die();
    //$tipo = $_GET['tipo'];
    //echo '<script>window.tipo = '.$tipo.'</script>';
?>


<html lang="pt-BR"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="style3.css">

    <title>Simulador empréstimo</title>
  </head>
    <body>
        <div class="container-fluid">
            <!--<div>
                <label for="valor-emprestimo">Valor do Empréstimo</label>
                <input type="text" name="valor-emprestimo" id="valor-emprestimo" />
            </div>
            <div>
                <label for="numero-parcelas">Número de Parcelas</label>
                <input type="text" name="numero-parcelas" id="numero-parcelas" />
            </div>
            <br />
            <input type="button" value="Calcula" class="btnCalcula" />-->
              <!--<div class="form-group row">
                <label for="valor-emprestimo" class="col-lg-4 col-md-4 col-sm-4 col-form-label">Valor do empréstimo</label>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <input type="text" class="form-control" id="valor-emprestimo" maxlength="20">
                </div>
              </div>
              <div class="form-group row">
                <label for="numero-parcelas" class="col-lg-4 col-md-4 col-sm-4 col-form-label">Número de parcelas</label>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <input type="text" class="form-control" id="numero-parcelas" maxlength="20">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <button type="button" class="btn btn-success btnCalcula">Calcular</button>
                </div>
              </div>               
            <h1>Valor da prestação:</h1>
            <h1 class="prestacao"></h1>-->
            
            
            
            
<!--<div class="section-simulator">
    <span class="simulator-title">Simule um valor</span>
    <div class="simulator-wrapper">
        <div class="simulator">
            <div class="simulator-how-much">
                <label class="label-title">De quanto você precisa?</label>
                <input class="how-much-input" placeholder="R$" type="text" value="R$50.000">
                <div class="simulator-error"><span class="simulator-error-text"></span></div>
            </div>
            <hr>
            <div class="simulator-portion">
                <label class="label-title">Em quantas parcelas?</label>
                <div class="portion-wrapper">
                <div class="portion-button selected"><label><input value="12"><span>12x</span></label></div><div class="portion-button "><label><input value="18"><span>18x</span></label></div><div class="portion-button "><label><input value="24"><span>24x</span></label></div><div class="portion-button "><label><input value="30"><span>30x</span></label></div><div class="portion-button "><label><input value="36"><span>36x</span></label></div></div>
            </div>
            <hr>
            <div class="simulator-value-wrapper">
                <p class="simulator-value-title">Parcelas a partir de:¹</p>
                <p class="simulator-value">R$ <span>3.058,45</span></p>
            </div>
        </div>
        <div class="simulator-footer">
            <a href="https://conta.lendico.com.br/cadastro">Quero uma análise completa</a>
            <div class="simulator-footer-text-wrapper">
                <p><strong>Esta é uma simulação.</strong> Na Lendico cada pessoa tem uma análise individual</p>
                <p>Para conhecer a sua, faça uma análise completa.</p>
            </div>
        </div>
    </div>
</div> -->          
           
        <div class="simulador" data-valor_inicial="">
            <div class="wrapper-simulator row">
                <p class="title-simule">Simule um valor</p>
                <div class="wrapper-content row">
                    <div class="coluna1 col-lg-3 col-md-3 col-sm-3">
                        <p>DE QUANTO VOCÊ PRECISA?</p>
                        <input type="text" value="" maxlength="9" placeholder="R$" id="qtovoceprecisa" />
                    </div>
                    <div class="coluna2 col-lg-6 col-md-6 col-sm-6">
                        <p class="p-coluna2-title">EM QUANTAS PARCELAS?</p>
                        <ul>
                            <li class="vezes selected" data-value="12">12x</li>
                            <li class="vezes" data-value="18">18x</li>
                            <li class="vezes" data-value="24">24x</li>
                            <li class="vezes" data-value="30">30x</li>
                            <li class="vezes" data-value="36">36x</li>
                        </ul>
                        <div class="button_paragraph">
                            <button class="btn btn-success">QUERO UMA ANÁLISE COMPLETA</button>
                            <p><strong>Lorem ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="coluna3 col-lg-3 col-md-3 col-sm-3">
                        <p>Parcelas a partir de:</p>
                        <p class="resultado">R$ --</p>
                    </div>
                </div>
            </div>
        </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script>
            /*(function(){
                var inputValorEmprestimo = document.querySelector('#valor-emprestimo');
                var inputNumeroParcelas = document.querySelector('#numero-parcelas');
                var h1Prestacao = document.querySelector('.prestacao');
                var parcela = 0;
                var btnCalcula = document.querySelector('.btnCalcula');
                    btnCalcula.addEventListener('click', function(){
                        console.log(inputValorEmprestimo.value);
                        console.log(inputNumeroParcelas.value);
                        parcela = parseInt(inputValorEmprestimo.value)/parseInt(inputNumeroParcelas.value);
                        h1Prestacao.innerHTML = parcela;
                    });
                    
            })();*/
            
        </script>
    
</body></html>