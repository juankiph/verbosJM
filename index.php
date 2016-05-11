
<html>
    <head>
        <title>Tets de Verbos Irregulares</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

<!--        <link rel="stylesheet" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css" />-->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/jquery.raty.css" />
        <link rel="stylesheet" href="css/flags.css" />
        <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot" />
        
        <script src="js/jquery.js"></script>
<!--        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.raty.js"></script>
        <script src="js/jquery.cookie.js"></script>

        <script>

            
 /////////["sew","sewed","sewn/sewed","coser"], 
            var verbos = [
["be","was","been","ser/estar"," ","were"," "],
["beat","beat","beaten","golpear"," "," "," "],
["become","became","become","convertirse en"," "," "," "],
["begin","began","begun","empezar"," "," "," "],
["break","broke","broken","romper"," "," "," "],
["bring","brought","brought","traer"," "," "," "],
["build","built","built","construir"," "," "," "],
["burn","burnt","burnt","quemar(se)"," "," "," "],
["buy","bought","bought","comprar"," "," "," "],
["catch","caught","caught","coger"," "," "," "],
["choose","chose","chosen","elegir"," "," "," "],
["come","came","come","venir"," "," "," "],
["cost","cost","cost","costar"," "," "," "],
["cut","cut","cut","cortar"," "," "," "],
["do","did","done","hacer"," "," "," "],
["draw","drew","drawn","dibujar"," "," "," "],
["drink","drank","drunk","beber"," "," "," "],
["drive","drove","driven","conducir"," "," "," "],
["eat","ate","eaten","comer"," "," "," "],
["fall","fell","fallen","caer(se)"," "," "," "],
["feel","felt","felt","sentirse"," "," "," "],
["find","found","found","encontrar"," "," "," "],
["fly","flew","flown","volar"," "," "," "],
["forget","forgot","forgotten","olvidar(se)"," "," "," "],
["forgive","forgave","forgiven","perdonar"," "," "," "],
["get","got","got","conseguir"," "," "," "],
["give","gave","given","dar"," "," "," "],
["go","went","gone","irse"," "," "," "],
["grow","grew","grown","crecer"," "," "," "],
["hang out","hung out","hung out","colgar"," "," "," "],
["have","had","had","haber, tener"," "," "," "],
["hear","heard","heard","escuchar"," "," "," "],
["hide","hid","hidden","esconder(se)"," "," "," "],
["hit","hit","hit","golpear"," "," "," "],
["hurt","hurt","hurt","hacer daÃ±o"," "," "," "],
["keep","kept","kept","guardar"," "," "," "],
["know","knew","known","saber, conocer"," "," "," "],
["lay","laid","laid","poner"," "," "," "],
["learn","learnt","learnt","aprender"," ","learned","learned"],
["leave","left","left","dejar"," "," "," "],
["let","let","let","permitir"," "," "," "],
["lie","lay","lain","echarse"," "," "," "],
["lose","lost","lost","perder"," "," "," "],
["make","made","made","hacer"," "," "," "],
["mean","meant","meant","significar"," "," "," "],
["meet","met","met","encontrar(se)"," "," "," "],
["pay","paid","paid","pagar"," "," "," "],
["put","put","put","poner"," "," "," "],
["read","read","read","leer"," "," "," "],
["ride","rode","ridden","montar"," "," "," "],
["ring","rang","rung","sonar"," "," "," "],
["run","ran","run","correr"," "," "," "],
["say","said","said","decir"," "," "," "],
["see","saw","seen","ver"," "," "," "],
["sell","sold","sold","vender(se)"," "," "," "],
["send","sent","sent","enviar"," "," "," "],
["set up","set up","set up","poner"," "," "," "],
["shine","shone","shone","brillar"," "," "," "],
["shoot","shot","shot","disparar"," "," "," "],
["show","showed","shown","mostrar"," "," "," "],
["sing","sang","sung","cantar"," "," "," "],
["sit","sat","sat","sentar(se)"," "," "," "],
["sleep","slept","slept","dormir"," "," "," "],
["speak","spoke","spoken","hablar"," "," "," "],
["speed","sped","sped","acelerar"," "," "," "],
["spell","spelt","spelt","deletrear"," "," "," "],
["spend","spent","spent","pasar, gastar"," "," "," "],
["split up","split up","split up","dividir, separar"," "," "," "],
["stand up","stood up","stood up","ponerse en pie"," "," "," "],
["steal","stole","stolen","robar"," "," "," "],
["swim","swam","swum","nadar"," "," "," "],
["take","took","taken","tomar(se)"," "," "," "],
["teach","taught","taught","enseñar"," "," "," "],
["tell","told","told","contar, decir"," "," "," "],
["think","thought","thought","pensar"," "," "," "],
["understand","understood","understood","entender"," "," "," "],
["wake up","woke up","woken up","despertar(se)"," "," "," "],
["wear","wore","worn","llevar (puesto)"," "," "," "],
["win","won","won","ganar"," "," "," "],
["write","wrote","written","escribir"," "," "," "],
["arise","arose","arisen","surgir"," "," "," "],
["awake","awoke","awoken","despertar(se)"," "," "," "],
["bear","bore","borne","soportar"," "," "," "],
["bid","bid","bid","pujar"," "," "," "],
["bind","bound","bound","unir"," "," "," "],
["bleed","bled","bled","sangrar"," "," "," "],
["breed","bred","bred","criar"," "," "," "],
["bend","bent","bent","doblar(se)"," "," "," "],
["bet","bet","bet","apostar"," "," "," "],
["bite","bit","bitten","morder"," "," "," "],
["blow","blew","blown","soplar"," "," "," "],
["cast","cast","cast","tirar"," "," "," "],
["cling","clung","clung","aferrarse"," "," "," "],
["dream","dreamt","dreamt","soñar"," "," "," "],
["grind","ground","ground","moler"," "," "," "],
["lean","leant","leant","apoyarse"," "," "," "],
["leap","leapt","leapt","brincar"," "," "," "],
["overcome","overcame","overcome","vencer"," "," "," "],
["saw","sawed","sawn","serrar"," "," "," "],
["shear","sheared","shorn","esquilar"," "," "," "],
["smell","smelt","smelt","oler"," "," "," "],
["sow","sowed","sown","sembrar"," "," "," "],
["spill","spilt","spilt","derramar"," "," "," "],
["spoil","spoilt","spoilt","estropear(se)"," "," "," "],
["strive","strove","striven","esforzarse"," "," "," "],
["tread","trod","trodden","pisar"," "," "," "],
["undergo","underwent","undergone","sufrir"," "," "," "],
["upset","upset","upset","afligir"," "," "," "],           
["wind","wound","wound","enrollar"," "," "," "],
["withdraw","withdrew","withdrawn","retirar(se)"," "," "," "],
["wring","wrung","wrung","torcer"," "," "," "],
["broadcast","broadcast","broadcast","difundir"," "," "," "],
["creep","crept","crept","arrastrar"," "," "," "],
["deal","dealt","dealt","tratar"," "," "," "],
["dig","dug","dug","cavar"," "," "," "],
["feed","fed","fed","alimentar"," "," "," "],
["fight","fought","fought","pelearse"," "," "," "],
["flee","fled","fled","huir"," "," "," "],
["forbid","forbade","forbidden","prohibir"," "," "," "],
["freeze","froze","frozen","helar(se)"," "," "," "],
["hold","held","held","agarrar(se)"," "," "," "],
["kneel","knelt","knelt","arrodillarse"," "," "," "],
["lead","led","led","llevar"," "," "," "],
["lend","lent","lent","prestar"," "," "," "],
["light","lit","lit","encender(se)"," "," "," "],
["rise","rose","risen","levantarse"," "," "," "],
["seek","sought","sought","buscar"," "," "," "],
["shake","shook","shaken","agitar"," "," "," "],
["shrink","shrank","shrunk","encoger(se)"," "," "," "],
["shut","shut","shut","cerrar(se)"," "," "," "],    
["sink","sank","sunk","hundir(se)"," "," "," "],
["slide","slid","slid","resbalar"," "," "," "],
["spit","spat","spat","escupir"," "," "," "],
["spread","spread","spread","extender(se)"," "," "," "],
["spring","sprang","sprung","saltar"," "," "," "],
["stick","stuck","stuck","pegar(se)"," "," "," "],
["sting","stung","stung","picar"," "," "," "],
["stink","stank","stunk","apestar"," "," "," "],
["strike","struck","struck","golpear"," "," "," "],
["swear","swore","sworn","jurar"," "," "," "],
["sweep","swept","swept","barrer"," "," "," "],
["swing","swung","swung","balancear(se)"," "," "," "],
["tear","tore","torn","romper(se)"," "," "," "],
["throw","threw","thrown","lanzar"," "," "," "],
["weave","wove","woven","tejer"," "," "," "],
["weep","wept","wept","llorar"," "," "," "]
            ];
            
  //            $(function() {
//                $("#movible").draggable();
//                $("#droppable").droppable({
//                    drop: function(event, ui) {
//                        $(this)
//                                .css({"background":"#ffe"})
//                                .find("p")
//                                .html(verbos[50][0]);
//                    }
//                });
//            });
//            $(window).resize(function(){
//  $('#container').css({
//    position:'absolute',
//    left: ($(window).width() - $('#container').outerWidth())/2,
//    top: ($(window).height() - $('#container').outerHeight())/2
//  });
//});
            
        </script>
<script>
var contador = 0;
var contadorEstrellas =0; 
var numeroEstrellas = contadorEstrellas + 3;
var siguiente = 0; 
var numeroCaja = 0;
var numeroVerbos = 0;
function desordena(o){ //v1.0
        for(var ja, xa, ia = o.length; ia; ja = Math.floor(Math.random() * ia), xa = o[--ia], o[ia] = o[ja], o[ja] = xa);
        return o;
};
    
function sigue(){
    
    if (contador < 10){
        contador+= 0.50;
        $('#progreso').raty({ readOnly: true, score: contador, number:10 });
        
            
            
        }
        else {
            contadorEstrellas++;
            cambiaEstrellasGrandes(contadorEstrellas);
            //$('#estrellas').raty({ readOnly: true, score: contadorEstrellas, number:contadorEstrellas, halfShow : false, starType : 'i'});
            
            contador = 0;
            $.cookie('estrellasGrandes'+numeroVerbos, contadorEstrellas, {expires:365});   
        }
    cambiaBotones();
}
function cambiaBotones(){
    $('#boton1, #boton2, #boton3, #boton4').remove();
    $('#caja').remove(); 
    $('#comprobar').append('<button id="boton4"  class="btn btn-primary centrado" style="margin-right: auto;">Comprueba</button>');
    siguiente = Math.floor((Math.random() * numeroVerbos) );
    numeroCaja = Math.floor((Math.random() * 3) );
    switch(numeroCaja){
        case 0:{
            $('#botones').append('<input id="caja" class="input-small" style="margin-bottom: 0px; width:33%;">');
            $('#botones').append('<button id="boton2"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
            $('#botones').append('<button id="boton3"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
        }; break;
        case 1:{
            $('#botones').append('<button id="boton1"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
            $('#botones').append('<input id="caja" class="input-small" style="margin-bottom: 0px; width:33%;">');
            $('#botones').append('<button id="boton3"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
        }; break;
        case 2:{
            $('#botones').append('<button id="boton1"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
            $('#botones').append('<button id="boton2"  class="btn btn-warning " style="margin-bottom: 0px; width:33%;"></button>');
            $('#botones').append('<input id="caja" class="input-small" style="margin-bottom: 0px; width:33%;">');
        }; break;
    }
    var verboDoble = (verbos[siguiente][4] === " ")? verbos[siguiente][0]: verbos[siguiente][0]+" / "+verbos[siguiente][4];
    $('#boton1').html(verboDoble);
    verboDoble = (verbos[siguiente][5] === " ")? verbos[siguiente][1]: verbos[siguiente][1]+" / "+verbos[siguiente][5];
    $('#boton2').html(verboDoble);
    verboDoble = (verbos[siguiente][6] === " ")? verbos[siguiente][2]: verbos[siguiente][2]+" / "+verbos[siguiente][6];
    $('#boton3').html(verboDoble);
    $('#traducido').html(verbos[siguiente][3]);
    
    $('#boton4').click( function() {
        comprueba();
    });
    $('#caja').focus().keypress(function (e) {
        if (e.which === 13) {  //si se pulsa la tecla enter
            comprueba();
            return false;   
        }
    });
}

function comprueba(){
            $('#boton4').unbind();
            $('#caja').unbind();
            var verboLeido=$('#caja').val().toUpperCase();
            var verboSolucion = verbos[siguiente][numeroCaja].toUpperCase();
            var verboSolucion2 = verbos[siguiente][numeroCaja+4].toUpperCase();
            if( (( verboLeido === verboSolucion) || ( verboLeido === verboSolucion2)) &&  (verboLeido !== " "))
            //if ( 1 === 1)
            { 
                $('#boton4').html("BIEN!");
                $('#boton4').removeClass( "btn-primary" ).addClass( "btn-success" ).fadeOut("slow").fadeIn("slow",function() {
                                                            sigue();
                                                            });
                
            }
            else {
                $('#boton4').html(verboSolucion);
                
                $('#boton4').removeClass( "btn-primary" ).addClass( "btn-danger" ).click( function() {
                        $('#progreso').raty({ readOnly: true, score: 0, number:10 });
                        contador = 0;
                        cambiaBotones();
                      });
            }
}
function cambiaEstrellasGrandes(numEstrellas){
        $('#estrellas').raty({ readOnly: true, score: numEstrellas, number:numEstrellas, halfShow : false, starType : 'i'});   
        switch (numeroVerbos){ 
            case 10:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-smile-o fa-3x");}break;
            case 20:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-bolt fa-3x");}break;
            case 30:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-star fa-3x");}break;
            case 40:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-thumbs-up fa-3x");}break;  
            case 50:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-trophy fa-3x");}break;
            case 60:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-sun-o fa-3x");}break;
            case 70:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-university fa-3x");}break;
            case 80:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-rebel fa-3x");}break;
            case 140:{$('#estrellas').find('i').removeClass("star-on-png").addClass("fa fa-graduation-cap fa-3x");}break;
        }   
        
}

function nivel(v){
        numeroVerbos = v; 
        $('#estrellas').show();
        $('#progreso').show();
        $('#botones').show();
        $('#comprobar').show();
        contador = 0;
        $('#progreso').raty({ readOnly: true, score: 0, number:10 });
        
        $('#niveles').hide();
        
        contadorEstrellas = $.cookie('estrellasGrandes'+v);
        if (isNaN (contadorEstrellas)) {
            $.cookie('estrellasGrandes'+v, 0, {expires:365});
            contadorEstrellas = 0;
        }
        
        if( contadorEstrellas > 0){
                cambiaEstrellasGrandes(contadorEstrellas);

                     
        }
        else {
            $('#estrellas').html(" ");
            
        }
        cambiaBotones();
        $('#numNivel').html("Nivel: "+numeroVerbos+" ");
}

function muestraNiveles(){
    $('#niveles').toggle();
}

$(document).ready(function(){
    
    $('#estrellas').hide();
    $('#progreso').hide();
    $('#botones').hide();
    $('#comprobar').hide();
    cambiaBotones();
    $('#progreso').raty({ readOnly: true, score: 0, number:10, halfShow : true});

});
                  
</script>
<style>
    .centrado2{ text-align: center;}
    .centrado {
display: block;
margin-right: auto;
margin-left: auto;
}
.miniBoton {
    min-width: 50px;
    max-width: 50px;
}
.btn-large {
padding: 11px 11px;
font-size: 20px;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
}
</style>
    </head>
    <body>
        
        
        <div  id="home-page">

            <div  data-position="fixed">
                <div id="numNivel" class="btn btn-primary centrado disabled" style="color: #FFB800;"></div>
                <h2 class="btn btn-navbar centrado disabled" style="margin-top: 0px;">
                    <img src="img/" class="flag flag-gb" alt="" /> Test Verbos Irregulares
                    <img src="img/Blank.gif" class="flag flag-gb" alt="" />
                </h2>
                <div id="estrellas" class="btn btn-primary centrado disabled " style="color: #FFB800;"></div>
            </div><!-- /header -->
            
            <div id="progreso" class="btn btn-primary centrado disabled" ></div>
            <div  id="botones" class="btn-group centrado" > 
                <div id="traducido" class="btn disabled centrado"> </div>

            </div>
            
            <div  id="comprobar"> 
                <br>
            </div>
            <br>
             <div  id="cambiaNivel"> 
                <button class="btn btn-primary centrado" style="margin-right: auto;" onclick="muestraNiveles();">Cambia de Nivel</button>
            </div>
        </div>
        


        <div id="niveles" class="btn-toolbar centrado2">
            <div  class="btn disabled centrado"> Elige el número de verbos:</div><br>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(10)">10</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(20)">20</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(30)">30</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(40)">40</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(50)">50</button> </div>      
            <p></p>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(60)">60</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(70)">70</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(80)">80</button> </div>
            <div class="miniBoton btn-group"> <button class="miniBoton btn-large  btn-primary " onclick="nivel(140)">140</button> </div>
        </div>
        
    </body>
</html>