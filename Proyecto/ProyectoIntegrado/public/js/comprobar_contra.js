alert("Esta mierda carga");


function comprobarContra(){
  console.log("Esto carga");
  var p1 = document.getElementById("contrasenya").value;
  var p2 = document.getElementById("re_contrasenya").value;

  console.log("var1"+ p1 +"var2"+p2);
  if (p1 != p2) {
    alert("Las passwords deben de coincidir");
    location.href ="../html/registerTrabajador.html";
  } else {
    alert("Todo esta correcto");
  }

}
