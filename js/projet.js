var details = document.getElementsByClassName("modeDetaille")[0];
var soutenance = document.getElementsByClassName("modeSoutenance")[0];
var boutonS = document.getElementsByClassName("Lien1")[0];
var boutonD = document.getElementsByClassName("Lien2")[0];


window.ChangeMode = function(){
    soutenance.style.display = (soutenance.style.display === "block") ? "none" : "block";
    details.style.display = (details.style.display === "none") ? "block" : "none";
    boutonD.style.display = (boutonD.style.display === "block") ? "none" : "block";
    boutonS.style.display = (boutonS.style.display === "none") ? "block" : "none";
}