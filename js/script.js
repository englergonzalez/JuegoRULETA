
var negros = ["2","4","6","8","10","11","13","15","17","20","22","24","26","28","29","31","33","35"];
var rojos = ["1","3","5","7","9","12","14","16","18","19","21","23","25","27","30","32","34","36"];
var verdes = ["0","00"];
var tapete = ["1-2A1","2-2A1","3-2A1","PRIMEROS12","SEGUNDOS12","TERCEROS12","1A18","PARES","ROJOS",
                "NEGROS","IMPARES","19A36","28","9","26","30","11","7","20","32","17","5","22","34",
                "15","3","24","36","13","1","27","10","25","29","12","8","19","31","18","6","21","33",
                "16","4","23","35","14","2"];

var ficha = 0;
var casilla = 0;
var dinero = 0;

function capturarJugadas(fichas,casillas,dineros) 
{
        this.fichas = fichas;
        this.casillas = casillas;
        this.dineros = dineros;
}

var vectorJugadas = [];
var cantidad = 0;

function clickaction(n){
    
	// Accion por defecto para Buttons;
	switch( n.id ){
        // metodo para ocultar los botones
        case "100€":
            dineroAcumulado(100);
            document.getElementById("mensaje").style.fontSize = "30px";
            document.getElementById("mensaje").innerHTML = "<b>¡En hora buena!</b><br>Compra exitosa...";
            $('#box').bounceBoxToggle();
            document.getElementById("ventanaCompra").style.display = "none";
                 
            break;

        case "200€":
            dineroAcumulado(200);
            document.getElementById("mensaje").style.fontSize = "30px";
            document.querySelector("#mensaje").innerHTML = "<b>¡En hora buena!</b><br>Compra exitosa...";
            $('#box').bounceBoxToggle();
            document.getElementById("ventanaCompra").style.display = "none";

                break;

        case "500€":
            dineroAcumulado(500);
            document.getElementById("mensaje").style.fontSize = "30px";
            document.querySelector("#mensaje").innerHTML = "<b>¡En hora buena!</b><br>Compra exitosa...";
            $('#box').bounceBoxToggle();
            document.getElementById("ventanaCompra").style.display = "none";

                break;

        case "b1"://ficha de 20euro
            cerrarVentana(); 
            if(dinero>0){
                if(dinero<20){
                    avisoOtraFicha();
                }else{
                    ficha = 20;
                   
                }       
            }else{
                avisoComprarFicha();
            } 
                break;
        case "b5": 
            cerrarVentana(); 
            if(dinero>0){
                if(dinero<50){
                    avisoOtraFicha();
                }else{
                    ficha = 50;
                }       
            }else{
                avisoComprarFicha();
            }
        
                break;
        case "b10":  
            cerrarVentana();
            if(dinero<=0){
                avisoComprarFicha();
            }else  {
                ficha = 10;
            }  
            
                break;
        case "1-2A1":   
                    if(ficha!=0)
                    {      
                        insertarFicha(n.id,ficha);
                    }
                break;
	    case "2-2A1":
            if(ficha!=0)
            {
                insertarFicha(n.id,ficha);
            }
                break;
	    case "3-2A1":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "PRIMEROS12":  
        if(ficha!=0)
        {
            insertarFicha(n.id,ficha);
        }
                        break;
        case "SEGUNDOS12":  
        if(ficha!=0)
        {  
            insertarFicha(n.id,ficha);
        }
                        break;
        case "TERCEROS12":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "1A18":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "PARES":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "ROJOS":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "NEGROS":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "IMPARES":
                if(ficha!=0)
                {
                    insertarFicha(n.id,ficha);
                }
                        break;
        case "19A36":
                    if(ficha!=0)
                    {
                        insertarFicha(n.id,ficha);
                    }
                        break;
        default :
        if(ficha!=0)
        {
            for(var i=1; i<=36; i++)
            {
                if(n.id==i){
                    insertarFicha(i,ficha);
                    break;
                }
            }
        }else{
            error();
        }
    }
}
function insertarFicha(id,ficha) 
{
    
    if( document.getElementById(id).style.backgroundImage == ('url("../../img/'+ficha+'.png")') )
    {   
        dineroAcumulado(ficha);
        vectorJugadas.pop();
        ficha = 0;
        casilla = 0;
        quitarFicha(id);
        cantidad--;
    }
    else
    {
        if(dinero>=ficha)
        {
            casilla = id;
            jugadas = new capturarJugadas(ficha,casilla,dinero);
            //console.log(jugadas);

            vectorJugadas.push(jugadas);
           // console.log(vectorJugadas);
            document.getElementById(id).style.backgroundImage =  "url(../../img/"+ficha+".png)";
            //console.log(vectorJugadas.length);
            dineroAcumulado(-ficha);
            cantidad++;
        }else
        {
            avisoComprarFicha();
        }
    }
}

function quitarFicha(id) 
{
    document.getElementById(id).style.backgroundImage =  "url()";
}
function girar()
{  
  //  if (dinero >= 10){
       // dinero = dinero - ficha;
       //if(dinero>=0)
     //   {
            let rand = Math.random()*7000;
        //  audio.play();
            calcular(rand);
     /*  }else
        {
           // dinero = dinero + ficha;
            avisoUtilizarOtraFicha();
            
        }
    }
    else 
    {
        avisoComprarFicha();
    }*/
}
function avisoOtraFicha()
{
    document.getElementById("mensaje").style.fontSize = "35px";
    document.querySelector("#mensaje").innerHTML = "<b>Sólo tienes: "
    +dinero+"€ </b>¡Intenta con otra ficha!";
    $('#box').bounceBoxToggle();
}
function avisoComprarFicha(){
    document.getElementById("mensaje").style.fontSize = "30px";
    document.querySelector("#mensaje").innerHTML = "<b>¡Uups!</b>No tienes suficiente dinero<br>Compra fichas...";
    document.getElementById("ventanaCompra").style.display = "block";
    $('#box').bounceBoxToggle();
}
function dineroAcumulado(d)//dinero que tengo disponible para jugar
{
    dinero = dinero + d;
    //document.querySelector("#dinero").innerHTML = dinero+"€";
    document.getElementById("dinero").innerHTML = dinero+"€";
}

var gana = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
function dineroApuesta(dineroFicha,n)//operaciones del juego
{
    var gananciaTotal = 0;
    for(var j=0; j<vectorJugadas.length; j++){
    for(var i=0; i<negros.length; i++)
    {
        if( (vectorJugadas[j].casillas==negros[i] || vectorJugadas[j].casillas==rojos[i]) && n==vectorJugadas[j].casillas  )
        {
            gana[j]=dineroFicha*35+dineroFicha;
            //console.log(gana[j]);
            break;
        }
    }}

    for(var j=0; j<vectorJugadas.length; j++){
    for(var i=0; i<negros.length; i++)
    {
        if( (vectorJugadas[j].casillas=="NEGROS") && n==negros[i] )
        {
            gana[j]=dineroFicha*2;
            break;
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    for(var i=0; i<rojos.length; i++)
    {
        if( (vectorJugadas[j].casillas=="ROJOS") && n==rojos[i] )
        {
            gana[j]=dineroFicha*2;
            break;
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="PARES")
    {
        if(n%2==0 && (n!="00" || n!="0") )
        {
            gana[j]=dineroFicha*2;
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="IMPARES")
    {
        if(n%2!=0 && (n!="00" || n!="0") )
        {
            gana[j]=dineroFicha*2;
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="1A18")
    {
        for(var i=1;i<=18;i++)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="19A36")
    {
        for(var i=19;i<=36;i++)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="PRIMEROS12")
    {
        for(var i=1;i<=12;i++)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="SEGUNDOS12")
    {
        for(var i=13;i<=24;i++)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="TERCEROS12")
    {
        for(var i=25;i<=36;i++)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="1-2A1")
    {
        for(var i=1;i<=34;i=i+3)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="2-2A1")
    {
        for(var i=2;i<=35;i=i+3)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
    if(vectorJugadas[j].casillas=="3-2A1")
    {
        for(var i=3;i<=36;i=i+3)
        {
            if(i==n)
            {
                gana[j]=dineroFicha*2+dineroFicha;
            }
        }
    }}
    for(var j=0; j<vectorJugadas.length; j++){
        gananciaTotal = gananciaTotal + gana[j];
    }
    ganaPierde(gananciaTotal,n);
}
function ganaPierde(gananciaTotal,n)
{   
    dineroAcumulado(gananciaTotal);
    document.getElementById('ventanaGanaPierde').style.display = "block";
    var mensaje = '<div id="cerrar"> <a href="javascript:cerrarVentana()"><img src="../../img/cancel.png"></a> </div>';

    for(var i=0; i<vectorJugadas.length; i++)
    {   
       // console.log(gana[i]);
        if(gana[i] == 0)
        {
            //perdió
            mensaje = mensaje +'<br>¡PERDISTE!<br>Apuesta de: '+vectorJugadas[i].fichas+'€ en: '+vectorJugadas[i].casillas+'<br>';
           
        }
        else
        {
            //Ganó
            mensaje = mensaje +'<br>¡GANASTE!<br>Apuesta de: '+vectorJugadas[i].fichas+'€ en: '+vectorJugadas[i].casillas+'<br>';
        }
        
    }
    mensaje = mensaje +'<br><br>Numero resultado: '+n+'<br>Tenías: '+(vectorJugadas[0].dineros)+'€<br>Ahora tienes: '+dinero+'€' ;
    document.getElementById('ventanaGanaPierde').innerHTML = mensaje;
    for(var i=0;i<48;i++)
    {
        quitarFicha(tapete[i]);
    }
    casilla=0;
    ficha=0;
    while(vectorJugadas.length > 0){
        vectorJugadas.pop();
        gana.pop();
    }
    gana = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    numeroResultado("¿?");
}
function cerrarVentana()
{
    document.getElementById('ventanaGanaPierde').style.display = "none";
}
function numeroResultado(n)
{
        for(var i=0;i<18;i++)
        {
            if(n==negros[i])
            {
                document.getElementById('bola').style.color = "#000";
                break;
            }
        }
        for(var i=0;i<18;i++)
        {
            if(n==rojos[i])
            {
                document.getElementById('bola').style.color = "red";
                break;
            }
        }
        if(n=="0" || n=="00")
        {
            document.getElementById('bola').style.color = "rgb(11, 253, 71)";
        }
        if (!/^([0-9])*$/.test(n))
        {

        }else if(n=="00" || n=="0")
        {
            dineroApuesta(ficha,n);
        }else
        {   
            dineroApuesta(ficha,n);
        }
        document.querySelector("#bola").innerHTML = n;
}
//Calcular en que angulo se detuvo la ruleta para así determinar el numero resultado
function calcular(rand){
    valor = rand / 360;
    valor = (valor - parseInt(valor.toString().split(".")[0])) * 360;//queda en valores entre 0-360
    document.getElementById('bola').style.color = "rgb(11, 253, 71)";
    numeroResultado("¿?");
    ruleta.style.transform = "rotate("+rand+"deg)";
    ruleta.detenerRotacionRuleta;
    setTimeout(()=>{
    switch(true){
        case valor > 4.736842105263 && valor <= 14.210526315763:
            numeroResultado(31);
            break;
    	case valor > 14.210526315763 && valor <= 23.684210526263:
        	numeroResultado(19);
        	break;
        case valor > 23.684210526263 && valor <= 33.157894736763:
             numeroResultado(8);
             break;
        case valor > 33.157894736763 && valor <= 42.631578947263:
            numeroResultado(12);
            break;
        case valor > 42.631578947263 && valor <= 52.105263157763:
            numeroResultado(29);
            break;
        case valor > 52.105263157763 && valor <= 61.578947368263:
            numeroResultado(25);
            break;
        case valor > 61.578947368263 && valor <= 71.052631578763:
            numeroResultado(10);
            break;
        case valor > 71.052631578763 && valor <= 80.526315789263:
            numeroResultado(27);
            break;
        case valor > 80.526315789263 && valor <= 89.999999999763:
            numeroResultado("00");
            break;
        case valor > 89.999999999763 && valor <= 99.473684210263:
            numeroResultado(1);
            break;
        case valor > 99.473684210263 && valor <= 108.947368420763:
            numeroResultado(13);
            break;
        case valor > 108.94736842076 && valor <= 118.42105263126:
            numeroResultado(36);
            break;
        case valor > 118.42105263126 && valor <= 127.89473684176:
            numeroResultado(24);
            break;
        case valor > 127.89473684176 && valor <= 137.36842105226:
            numeroResultado(3);
            break;
        case valor > 137.36842105226 && valor <= 146.84210526276:
            numeroResultado(15);
            break;
        case valor > 146.84210526276 && valor <= 156.31578947326:
            numeroResultado(34);
            break;
        case valor > 156.31578947326 && valor <= 165.78947368376:
            numeroResultado(22);
            break;
        case valor > 165.78947368376 && valor <= 175.26315789426:
            numeroResultado(5);
            break;
        case valor > 175.26315789426 && valor <= 184.73684210476:
            numeroResultado(17);
            break;
        case valor > 184.73684210476 && valor <= 194.21052631526:
            numeroResultado(32);
            break;
        case valor > 194.21052631526 && valor <= 203.68421052576:
            numeroResultado(20);
            break;
        case valor > 203.68421052576 && valor <= 213.15789473626:
            numeroResultado(7);
            break;
        case valor > 213.15789473626 && valor <= 222.63157894676:
            numeroResultado(11);
            break;
        case valor > 222.63157894676 && valor <= 232.10526315726:
            numeroResultado(30);
            break;
        case valor > 232.10526315726 && valor <= 241.57894736776:
            numeroResultado(26);
            break;
        case valor > 241.57894736776 && valor <= 251.05263157826:
            numeroResultado(9);
            break;
        case valor > 251.05263157826 && valor <= 260.52631578876:
            numeroResultado(28);
            break;
        case valor > 260.52631578876 && valor <= 269.99999999926:
            numeroResultado(0);
            break;
        case valor > 269.99999999926 && valor <= 279.47368420976:
            numeroResultado(2);
            break;
        case valor > 279.47368420976 && valor <= 288.94736842026:
            numeroResultado(14);
            break;
        case valor > 288.94736842026 && valor <= 298.42105263076:
            numeroResultado(35);
            break;
        case valor > 298.42105263076 && valor <= 307.89473684126:
            numeroResultado(23);
            break;
        case valor > 307.89473684126 && valor <= 317.36842105176:
            numeroResultado(4);
            break;
        case valor > 317.36842105176 && valor <= 326.84210526226:
            numeroResultado(16);
            break;
        case valor > 326.84210526226 && valor <= 336.31578947276:
            numeroResultado(33);
            break;
        case valor > 336.31578947276 && valor <= 345.78947368326:
            numeroResultado(21);
            break;
        case valor > 345.78947368326 && valor <= 355.26315789376:
            ruleta.detenerRotacionRuleta;
            numeroResultado(6);
            break;
        case (valor > 355.2631578937 && valor <=360) || (valor >0 &&  valor <= 4.7368421052631):
            numeroResultado(18);
            break;
    }},800);
        
}   
           
$(document).ready(function(){

	/*Convirtiendo el #box div en un bounceBox: */
    $('#box').bounceBox();

	/* Escuchar el evento de clic y alternar la casilla: */
	$('#tablero').click(function(e){
        if(ficha==0){
		$('#box').bounceBoxToggle();
        e.preventDefault();
        }
        else{
            $('#box').bounceBoxHide();
        }
    });
    $('#tablero2').click(function(e){
        if(ficha==0){
		$('#box').bounceBoxToggle();
        e.preventDefault();
        }
        else{
            $('#box').bounceBoxHide();
        }
    });
    $('#tablero3').click(function(e){
        if(ficha==0){
		$('#box').bounceBoxToggle();
        e.preventDefault();
        }
        else{
            $('#box').bounceBoxHide();
        }
    });
    $('#jugar').click(function(e){
        cerrarVentana();
        if(ficha==0){
            error();
            e.preventDefault();   
        }else if(casilla==0){
            error();
            e.preventDefault();  
        }else{
                for(var i=0; i<48; i++){
                    if(tapete[i]==casilla)
                    {
                        
                        girar();
                        break;
                    }
                }
            }
	});
	/*Cuando haga clic en el cuadro, escóndelo: */
	$('#box').click(function(){
		$('#box').bounceBoxHide();
    });
    $('#ventanaGanaPierde').click(function(){
		cerrarVentana();
    });
    //cerrar 
   
});
//DECLARO ENTER
var teclas = {
    ENTER: 13,
    ESC: 27
};
//OBTENGO LA CAPTURA DEL TECLADO Y LLAMO a mi funcion
document.addEventListener("keydown",botonCerrarIniciar);
function botonCerrarIniciar(evento)
{
    switch(evento.keyCode)
    {
        case teclas.ESC:
            if( (document.getElementById('ventanaGanaPierde').style.display = "block")  )
            {
                cerrarVentana();
            }    
         break;
         case teclas.ENTER:
            if( (ficha==0) && ( document.getElementById('ventanaGanaPierde').style.display = "none" ) )
                    {
                        error();
                        evento.preventDefault();   
                    }else if(casilla==0)
                    {
                        error();
                        evento.preventDefault();  
                    }else{
                            for(var i=0; i<48; i++)
                            {
                                if(tapete[i]==casilla)
                                {
                                    girar();
                                    break;
                                }
                            }
                        }
        break;
    }
}
function error()
{
    document.getElementById("mensaje").style.fontSize = "20px";
    document.querySelector("#mensaje").innerHTML = "<b>¡Falta algo!</b>1. Seleciona una ficha<br>2. Haz tu apuesta en el tablero<br>3. ¡jugar!";
    $('#box').bounceBoxToggle();
}
/*
<audio id="audio" controls>
<source type="audio/wav" src="audio.wav">
</audio>

#audio{
display: none
}
*/