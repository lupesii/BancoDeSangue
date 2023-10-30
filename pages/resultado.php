<html>
<head>
    <title> Resultado </title>
    <link rel="stylesheet" href="CSSResultado/informacoes.css">
    <link rel="stylesheet" href="CSSResultado/Container.css">
    <link rel="stylesheet" href="CSSResultado/Footer.css">
    <link rel="stylesheet" href="CSSTeste/botao.css">
    <link rel="stylesheet" href="CSSTeste/SectionR.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');
header
{
    display: flex;
    justify-content: space-around;
    font-family: 'Noto Sans', sans-serif;
    background-color:#420203;
    color:#D7C0D0;
    font-size:80px;
    margin: 0.5% 0;
    padding: 10px;
    text-decoration:underline;
}


section{
    width:100%;;
}

@media (max-width:1200px){

    section{
        width: 100%;
    }

 /*Tipo de sangue inserido invalido*/
Invalido{
    padding:4%;
    font-family: 'Noto Sans', sans-serif;
    margin-left:20%;
    height:10%;
    font-size:100px;
    color:#E0000B;
    text-align: center;
    align-items: center;

}

arrumar{
    padding:4%;
    font-family: 'Noto Sans', sans-serif;
    margin-left:20%;
    height:10%;
    font-size:50px;
    color:#D7C0D0;
    text-align: center;
    align-items: center;

}
/*Ficha Tecnica*/
ficha{

    margin-top:-10%;
    margin-left:40%;
    align-items: center;

}

/*Imagem de Gota*/
tipo{
    width:1px;   
    margin-left:2%; 
    flex-direction:column   ;
    align-items: center;

}

/*Relatos de Doadores e Receptores de sangue*/

hist{
	padding:5%;
    flex-direction:column;
    align-items: center;
    margin-left:2%;

}

/*Informações sobre o tipo de Sangue*/

informações{
	padding:1%;
    flex-direction:column;
    align-items: center;
    justify-content:center;

}

/*Curiosidades sobre tipo de sangue*/

curiosidade{
    padding:4%;
    font-family: 'Noto Sans', sans-serif;
    margin-top:-2%;   
    height:10%;
    width:35%;
    font-size:23px;
    color:#420203;
    text-align: left;
    align-items: right;
    margin-left:-2%;

}

.button {
    margin:0px;
  padding: 20px;
  margin-top:10%;
  text-align: center;
  transition-duration: 0.4s;    
  font-family: 'Noto Sans', sans-serif;
  font-size:30px;
}}

    </style>    
</head>
<body>
    <header> Resultado </header>
    <section>

<div class="container">
<?php

	$ABO = $_GET["ABO"];
    $RH = $_GET["RH"];

 
/*GRUPO A*/
	 if ($ABO=="A" && $RH=="+"){
		Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/positivoa.png'></img></tipo>";
		Echo "<ficha><img src='IMAGENSRESULTADO/fichaA+.png'></img></ficha>";
        
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoi.png'></img></hist>";
        Echo"<curiosidade> O seu grupo sanguíneo tem 20% de chance de desenvolver câncer de estômago comparado com os tipos O e B, também tem um aumento de 5% de ter risco para doença cardíaca comparado com as pessoas com o tipo O  </curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/3infos.png'></img></informações>";
	}
    
    elseif ($ABO=="A" && $RH=="-"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/negativoa.png'></img></tipo>";
		Echo "<ficha><img src='IMAGENSRESULTADO/fichaA-.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoian.png'></img></hist>";
        Echo"<curiosidade> Tendo o tipo sanguíneo A você tem mais chances de ter vários tipos de câncer, como por exemplo o de pâncreas; pessoas do mesmo grupo que você são menos atrativos para os mosquitos.</curiosidade>";  
        Echo "<informações><img src='IMAGENSRESULTADO/3infosnegativo.png'></img></informações>";
    }

    elseif ($ABO=="A" && $RH=="" or $RH=="NULO"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/douradoa.png'></img></tipo>";
		Echo "<ficha><img src='IMAGENSRESULTADO/fichaA.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoinulo.png'></img></hist>";
        Echo"<curiosidade><br> O sangue com RH nulo, também conhecido como SANGUE DOURADO é o sangue mais raro do mundo inteiro, encontrado pela primeira vez em 1961 em uma mulher indígena australiana, esse tipo de sangue é praticamente impossível de ser achado, tendo um estoque desconhecido desse tipo de sangue em hospitais.</curiosidade>";  
        Echo "<informações><img src='IMAGENSRESULTADO/3infosnuloA.png'></img></informações>";
	}
/*GRUPO B*/
    elseif ($ABO=="B" && $RH=="+"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/positivob.png'></img></tipo>";
		Echo "<ficha><img src='IMAGENSRESULTADO/fichaB+.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoi.png'></img></hist>";
        Echo"<curiosidade> Curiosamente, o sangue tipo B+ possui antígenos específicos que o diferenciam dos outros tipos sanguíneos. Esses antígenos são marcadores genéticos fascinantes que ajudam a identificar a tipagem sanguínea de um indivíduo.
        </curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/3infosB.png'></img></informações>";

    }
    
    elseif ($ABO=="B" && $RH=="-"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/negativob.png'></img></tipo>";
		Echo "<ficha><img src='IMAGENSRESULTADO/fichaB-.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoian.png'></img></hist>";
        Echo "<curiosidade> A genética por trás do sangue tipo B- é fascinante. É o resultado de heranças genéticas específicas, destacando a diversidade genética humana e como as populações evoluíram ao longo do tempo para desenvolver diferentes tipos sanguíneos.</curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/3infoBn.png'></img></informações>";

	}

    elseif ($ABO=="B" && $RH==""){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/douradob.png'></img></tipo>";
        Echo "<ficha><img src='IMAGENSRESULTADO/fichaB.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoinulo.png'></img></hist>";
        Echo"<curiosidade><br> O sangue com RH nulo, também conhecido como SANGUE DOURADO é o sangue mais raro do mundo inteiro, encontrado pela primeira vez em 1961 em uma mulher indígena australiana, esse tipo de sangue é praticamente impossível de ser achado, tendo um estoque desconhecido desse tipo de sangue em hospitais.</curiosidade>";  
        Echo "<informações><img src='IMAGENSRESULTADO/3infosnuloA.png'></img></informações>";

	}
/*GRUPO O*/    
    elseif ($ABO=="O" && $RH=="+"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/positivoo.png'></img></tipo>";
        Echo "<ficha><img src='IMAGENSRESULTADO/fichaO+.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoi.png'></img></hist>";
        Echo "<curiosidade> O sangue O+ é um dos sangues mais procurados no mundo quando se precisa de uma transfusão sem saber o ABO mas saber o RH, é conhecido como doador universal, ficando atrás apenas do O- </curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/3infoO+.png'></img></informações>";

    

	}

    elseif ($ABO=="O" && $RH=="-"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/negativoo.png'></img></tipo>";
        Echo "<ficha><img src='IMAGENSRESULTADO/fichaO-.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoian.png'></img></hist>";
        Echo "<curiosidade>As pessoas que tem o sangue O- são conhecidas como doares universais, podendo doar para todas as pessoas independente do ABO e do RH, é considerado 'comum' por ser um sangue tipo O, porém é mais dificil de encontrar</curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/infoonegativo.png'></img></informações>";
    
    }

    elseif ($ABO=="O" && $RH==""){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/douradoO.png'></img></tipo>";  
        Echo "<ficha><img src='IMAGENSRESULTADO/Oouro.png'></img></ficha>";     
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoinulo.png'></img></hist>";
        Echo"<curiosidade><br> O sangue com RH nulo, também conhecido como SANGUE DOURADO é o sangue mais raro do mundo inteiro, encontrado pela primeira vez em 1961 em uma mulher indígena australiana, esse tipo de sangue é praticamente impossível de ser achado, tendo um estoque desconhecido desse tipo de sangue em hospitais.</curiosidade>";  
        Echo "<informações><img src='IMAGENSRESULTADO/3infosnuloA.png'></img></informações>";

    }
        
/*GRUPO AB*/
    elseif ($ABO=="AB" && $RH=="+"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/positivoAB.png'></img></tipo>";
        Echo "<ficha> <img src='IMAGENSRESULTADO/ab.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoi.png'></img></hist>";
        Echo "<curiosidade> O tipo sanguíneo AB positivo é conhecido como receptor universal, pois pode receber sangue de qualquer tipo sanguíneo (A, B, AB ou O) sem reações adversas. No entanto, eles só podem doar para indivíduos com o mesmo tipo de sangue AB, o que limita suas opções de doação.</curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/tipoabinfo+.png'></img></informações>";
    }                

    elseif ($ABO=="AB" && $RH=="-"){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/negativoAB.png'></img></tipo>";
        Echo "<ficha> <img src='IMAGENSRESULTADO/fichanb.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoian.png'></img></hist>";
        Echo "<curiosidade> O tipo sanguíneo AB negativo é incomun, permitindo que essas pessoas sejam doadoras universais de plasma e plaquetas. Eles podem receber sangue de vários tipos, exceto O positivo. Além disso, há pesquisas que indicam um possível risco ligeiramente menor de certas doenças em indivíduos com sangue AB negativo.</curiosidade>";
        Echo "<informações><img src='IMAGENSRESULTADO/infonbb.png'></img></informações>";

    }                
    elseif ($ABO=="AB" && $RH==""){
        Echo "<tipo><img src='IMAGENSRESULTADO/Gotas/douradoab.png'></img></tipo>";
        Echo "<ficha> <img src='IMAGENSRESULTADO/abOURO.png'></img></ficha>";
        Echo "<hist><img src='IMAGENSRESULTADO/oqfoinulo.png'></img></hist>";
        Echo"<curiosidade><br> O sangue com RH nulo, também conhecido como SANGUE DOURADO é o sangue mais raro do mundo inteiro, encontrado pela primeira vez em 1961 em uma mulher indígena australiana, esse tipo de sangue é praticamente impossível de ser achado, tendo um estoque desconhecido desse tipo de sangue em hospitais.</curiosidade>";  
        Echo "<informações><img src='IMAGENSRESULTADO/3infosnuloA.png'></img></informações>";

    }     
        /*invalido*/
    else{
        Echo "<Invalido> TIPO DE SANGUE INVALIDO </Invalido>";
        Echo "<arrumar> Volte para a página de teste e insira novamente: </arrumar>";  

    };

?>

    </div>
    <Center><a href="teste.php"> <button class="button button1"> Refazer </button> </a></center> 
<br>
    </section>
<footer>
    <div class="container-footer">
        <div class="row-footer">
            <div class="footer-col">
                <h4> Escola </h4>
                <ul>
                    <li> <a href="https://www.etecsjcampos.com.br/"> Etec Ilza Nascimento Pintus</a></li>
                    <li> <a href="https://www.cps.sp.gov.br/"> Centro Paula Souza</a></li>
                    <li> <a href="https://www.google.com/search?sa=X&sca_esv=577540296&rlz=1C1VDKB_pt-PTBR1081BR1081&sxsrf=AM9HkKka-nqXZf_u1Fu6nmzZdk6jrJnAFA:1698554152772&q=Escola+T%C3%A9cnica+Estadual+Professora+Ilza+Nascimento+Pintus&ved=2ahUKEwiskqGnt5qCAxXxrZUCHfYAD-oQuzF6BAgYEAI&biw=1536&bih=835&dpr=1.25"> Horario de Funcionamento</a></li>
                    <li> <a href=""> Homepage ETEC</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4> Sobre Nós </h4>
                <ul>
                    <li> <a href="https://github.com/JoaoMNobre12"> João Marcos Nobre</a></li>
                    <li> <a href="https://github.com/lupesii"> Lucas Silva</a></li>
                    <li> <a href=""> Iris Vitória</a></li>
                </ul>
        </div>

        
        <div class="footer-col">
                <h4> Fontes </h4>
                <ul>
                    <li> <a href="https://g1.globo.com/bemestar/noticia/2011/10/quase-90-da-populacao-brasileira-tem-sangue-dos-tipos-e-o.html"> Raridade</a></li>
                    <li> <a href="https://cidadeverde.com/noticias/260353/saiba-o-que-o-seu-tipo-sanguineo-a-b-ab-ou-o-diz-sobre-voce"> Curiosidades </a></li>
                    <li> <a href="https://revistapesquisa.fapesp.br/agulha-no-palheiro/#:~:text=Um%20Rh%20nulo%20s%C3%B3%20pode,deles%20%C3%A9%20conhecido%20como%20RhD."> Sangue Dourado </a> </li>
                    <li> <a href="https://www.hemocentro.df.gov.br/estoque-de-sangue/"> Fontes </a> </li>

                </ul>
        </div>
        <div class="footer-col">
                <h4> Como Doar </h4>
                <ul>
                    <li> <a href="https://www.shhsjc.com.br/"> Hemocentro de SJC</a></li>
                    <li> <a href="https://www.sjc.sp.gov.br/"> Prefeitura</a></li>
                </ul>
        </div>
    </div>

    </footer>
    
    </body>
</html>