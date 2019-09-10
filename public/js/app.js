
function imprimirElemento(elemento) {
    var ventana = window.open('', 'PRINT', 'height=600,width=1200');
    ventana.document.write('<html><head><title>' + document.title + '</title>');
    ventana.document.write('<link rel="stylesheet" href="public/css/bootstrap.css">');
    ventana.document.write('<link rel="stylesheet" href="public/css/jquery.bootgrid.css">');
    ventana.document.write('<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">');
    ventana.document.write('<link rel="stylesheet" href="public/css/w3.css">');
    ventana.document.write('<link rel="stylesheet" href="public/css/app.css">');
    ventana.document.write('</head><body >');
    ventana.document.write(elemento.innerHTML);
    ventana.document.write('</body></html>');
    ventana.document.close();
    ventana.focus();
    ventana.onload = function() {
      ventana.print();
      ventana.close();
    };
    return true;
  }
  
  document.querySelector("#print").addEventListener("click", function() {
    var div = document.querySelector("#imprimible");
    imprimirElemento(div);
  });