function verificar() {
  let num1 = document.getElementById("papa").ariaValueMax;
  if (num1<0 || num1>5) {
    alert("Error... el papa debe ser un valor entre 0 y 5 !!!")
  }
}