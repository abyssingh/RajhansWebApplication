function funct() {
    // alert('hello');
    let r1 = document.getElementById('Radios1'); //Residential
    let r2 = document.getElementById('Radios2');
    let d1 = document.getElementById("PropertyTypeCommercial");
    let d2 = document.getElementById("PropertyTypeResidential");
    let d3 = document.getElementById("FlatType");
    if (r1.checked) {
        d1.style.display = "none"; //Commercial Display not
        d2.style.display = "block";
        d3.style.display = "block";

    } else if (r2.checked) {
        d1.style.display = "block"; //Commercial Display
        d2.style.display = "none";
        d3.style.display = "none";
    }
}
//**********Changing Based on Buy/Rent***** */
// window.onload = function () {



function jsFunction(value) {

    let price1 = document.getElementById("PR1");
    let price2 = document.getElementById("PR2");
    if (value == "Rent") {
        price2.style.display = "block"; //Rent K display
        price1.style.display = "none";
    } else if (value == "Buy") {
        price2.style.display = "none";
        price1.style.display = "block";
    }


}