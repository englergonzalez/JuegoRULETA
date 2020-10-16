
var d = document.getElementById('juego');
var lienzo = d.getContext("2d");
var lineas = 700;

var t = document.getElementById('juego');
var tab = t.getContext('2d');

tab.beginPath('tablero');

for(l=0;l<lineas;l++)
{
  dibujarLinea("#fff",0,10*l,10*(l+1),700);
}
dibujarLinea("#fff",1,1,1,699);
dibujarLinea("#fff",1,699,1499,699);
function dibujarLinea(color,xInicial,yInicial,xFinal,yFinal)
{
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.moveTo(xInicial,yInicial);
  lienzo.lineTo(xFinal,yFinal);
  lienzo.stroke();
  lienzo.closePath();
}
