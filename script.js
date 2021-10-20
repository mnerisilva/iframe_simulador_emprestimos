(function(){
    
    //var tipo = '<?php echo $minhavariavle; ?>';
     
    console.log(window.tipo);
    
    const config = {
        valor_inicial_emprestimo: "5000000",
        quantidade_inicial_de_prestacoes: 12
    }
    
    var inputQtoVocePrecisa = document.querySelector('#qtovoceprecisa');
    var classSimulador = document.querySelector('.simulador');
    //var valorDoEmprestimo = classSimulador.dataset.valor_inicial;
    
    console.log('valor do emprestimo da div class simulador: '+config.valor_inicial_emprestimo)
    
    
    inputQtoVocePrecisa.value = config.valor_inicial_emprestimo;
    
    var vezes = config.quantidade_inicial_de_prestacoes;
    calcula();
    
    function formatReal( int ) {
            var tmp = int+'';
            var neg = false;
            if(tmp.indexOf("-") == 0)
            {
                neg = true;
                tmp = tmp.replace("-","");
            }

            if(tmp.length == 1) tmp = "0"+tmp

            tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
            if( tmp.length > 6)
                tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");

            if( tmp.length > 9)
                tmp = tmp.replace(/([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g,".$1.$2,$3");

            if( tmp.length > 12)
                tmp = tmp.replace(/([0-9]{3}).([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g,".$1.$2.$3,$4");

            if(tmp.indexOf(".") == 0) tmp = tmp.replace(".","");
            if(tmp.indexOf(",") == 0) tmp = tmp.replace(",","0,");

        return (neg ? '-'+tmp : tmp);
    }
//alert(formatReal(-99999999999999));  
    
    function calcula(){
        // here we do something
        //console.log('entrando com texto');
        console.log('entrou no calcula');
        var totalEmprestimo = parseFloat(document.querySelector('#qtovoceprecisa').value);
        var prestacao = ((totalEmprestimo/parseInt(vezes))/100).toFixed(2);
        prestacao.toString();   
        var teste = prestacao.replace('.','');
        console.log(teste);
        console.log(typeof teste);
        prestacao =  teste;
        console.log(prestacao);
        console.log(typeof prestacao); 

        $('.resultado').html('R$&nbsp;'+formatReal(prestacao));         
    }
    
    
    var li = document.querySelectorAll('.vezes');
    console.log(li);
    
    li.forEach(function(el){
        el.addEventListener('click', function(){
            vezes = el.dataset.value;
        console.log('Entrou aqui: '+vezes);
            li.forEach(function(el){
                el.classList.remove('selected');
            });
            calcula();
            el.classList.add('selected');
        });
    });
    
    
    
    
    
    inputQtoVocePrecisa.addEventListener("keyup", calcula); 
    
    
    
    
    
    
})()