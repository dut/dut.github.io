var clicks = 0;
function onClick() {
clicks += 1;
document.getElementById("clicks").innerHTML = clicks;
document.getElementById("spoiler").style.display = "block";

if (clicks == 5){
  document.getElementById("uselessbutton").innerHTML = "Arrête stp";
} else if (clicks == 10) {
  document.getElementById("uselessbutton").innerHTML = "Vraiment. Stop.";
} else if (clicks == 15) {
  document.getElementById("uselessbutton").innerHTML = "S'il te plait c'est chiant là.";
} else if (clicks == 20) {
  document.getElementById("uselessbutton").innerHTML = "ARRÊTE.";
} else if (clicks == 25) {
  document.getElementById("uselessbutton").innerHTML = "C'est du harcellement là.";
} else if (clicks == 30) {
  document.getElementById("uselessbutton").innerHTML = "Qu'est-ce que je t'ai fais ???";
} else if (clicks == 40) {
  document.getElementById("uselessbutton").innerHTML = "AAAAAH";
} else if (clicks == 45) {
  document.getElementById("uselessbutton").innerHTML = "Arrête";
} else if (clicks == 50) {
  document.getElementById("uselessbutton").innerHTML = "Bon ok continue.";
} else if (clicks == 60) {
  document.getElementById("uselessbutton").innerHTML = "Un peu plus vers la gauche stp";
} else if (clicks == 62) {
  document.getElementById("uselessbutton").innerHTML = "Ahhh là ça fait du bien !";
} else if (clicks == 70) {
  document.getElementById("uselessbutton").innerHTML = "Merci tu peux partir :)";
} else if (clicks == 80) {
  document.getElementById("uselessbutton").innerHTML = "Pars maintenant.";
} else if (clicks == 90) {
  document.getElementById("uselessbutton").innerHTML = "Serieusement arrête là.";
} else if (clicks == 100) {
  document.getElementById("uselessbutton").innerHTML = "Ok au prochain clic je pars.";
} else if (clicks == 101) {
  document.getElementById("uselessbutton").style.display = "None";
  document.write("Bravo tu as cliqué 100 fois. J'espère que tu es content parce que le bouton fait la gueule maintenant.");
}
//else if (clicks == 20) {
//  document.getElementById("uselessbutton").innerHTML ="Vraiment. Arrête.");
//}

//else if (clicks >= 30) {
//  document.getElementById("message").innerHTML = "STOP.";
//}
//else if(clicks >= 100) {
//  document.write("Bravo tu as cliqué 100 fois. J'espère que tu es content.");
//
//}
};
