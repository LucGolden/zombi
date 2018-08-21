/*------------------------------ 
        La concaténation 
--------------------------------*/

var DebutDePhrase = "Aujourd' hui ";
var DebutDeJour = new Date();
var SuiteDePhrase = ", sont pésent : ";
var NombreDeStagiaire = 10;
var FinDePhrase = " apprenants. <br>";

// document.write("<h2>" + DebutDePhrase + DebutDeJour + SuiteDePhrase + NombreDeStagiaire + FinDePhrase + "</h2>");

// ------Correction----------
document.write("<h2>" + DebutDePhrase + DebutDeJour.getDate() + '/' + (DebutDeJour.getMonth() + 1) + '/' + DebutDeJour.getFullYear() + SuiteDePhrase + NombreDeStagiaire + FinDePhrase + "</h2>");

