


ID=window.setTimeout("Update();",1000);
function Update() {
 compteur--;
  
   var res = decompteur(compteur);
   //document.getElementById("Zeit").childNodes[0].nodeValue= res;

   document.getElementById("UHR").value= res;
	   
   //document.TEST.UHR.value= res;
// détermine un pause à répéter avant chaque actualisation
   ID=window.setTimeout("Update();",1000);
}

function decompteur(seconde) {
       Resultat = " ";
if ( seconde >= 0)
{
       ts = seconde;     
	   
	   hours = Math.floor((ts/3600));
        if(hours<10) {
                Resultat += "0" + hours + ":";
        } else {
                Resultat += hours + ":";
        }
              
        ts = ts - (hours*3600);
		minutes = Math.floor((ts/60));
        if(minutes<10) {
                Resultat += "0" + minutes + "     ";
        } else {
                Resultat += minutes + "     ";
        }

        ts = ts - (minutes*60);
        fseconde = Math.floor(ts);
        if(fseconde<10) {
                // Resultat += "0" + fseconde + ""
        } else {
               // Resultat += fseconde + " "
        }

        return Resultat
}
else
{
Resultat = "Beendet";
return Resultat
}
}