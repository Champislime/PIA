function verHora() {
    let fecha = new Date();
    let hora = fecha.getHours().toString();
    let minuto = fecha.getMinutes().toString();
    if (minuto.length == 1) minuto = "0" + minuto;
    let segundo = fecha.getSeconds().toString();
    if (segundo.length == 1) segundo = "0" + segundo;

    document.forms[0].reloj.value = hora + ":" + minuto + ":" + segundo;
}

let r = setInterval("verHora()", 500);