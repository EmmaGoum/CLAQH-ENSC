var details = document.getElementsByClassName("modeDetaille")[0];
var soutenance = document.getElementsByClassName("modeSoutenance")[0];
var details2 = document.getElementsByClassName("modeDetaille")[1];
var soutenance2 = document.getElementsByClassName("modeSoutenance")[1];
var boutonS = document.getElementsByClassName("Lien1")[0];
var boutonD = document.getElementsByClassName("Lien2")[0];


window.ChangeMode = function(){
    soutenance.style.display = (soutenance.style.display === "block") ? "none" : "block";
    details.style.display = (details.style.display === "none") ? "block" : "none";
    soutenance2.style.display = (soutenance2.style.display === "block") ? "none" : "block";
    details2.style.display = (details2.style.display === "none") ? "block" : "none";
    boutonD.style.display = (boutonD.style.display === "block") ? "none" : "block";
    boutonS.style.display = (boutonS.style.display === "none") ? "block" : "none";
}