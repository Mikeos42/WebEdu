function zeigeWert(was, wo) {
    document.getElementById(wo).innerHTML = document.getElementById(was).value;
}
function zeigeStartWert(wert1,ort1,wert2,ort2) {
    document.getElementById('myForm').reset();
    document.getElementById(ort1).innerHTML = document.getElementById(wert1).value;
    document.getElementById(ort2).innerHTML = document.getElementById(wert2).value;
}