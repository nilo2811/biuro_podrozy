function czas(){
    var data = new Date();
    var godziny = data.getHours();
    var minuty = data.getMinutes();
    var sekundy = data.getSeconds();
    var dzien = data.getDate();
    var miesiac = data.getMonth();
    var rok = data.getFullYear();
    miesiac=miesiac+1;
    if(godziny<10)
        godziny = "0" + godziny;

    if(minuty<10)
        minuty = "0" + minuty;

    if(sekundy<10)
        sekundy = "0" + sekundy;

    if(dzien<10)
        dzien = "0" + dzien;

    if(miesiac<10)
        miesiac = "0" + miesiac;

    document.getElementById('czas1').innerHTML = dzien +"."+ miesiac +"."+ rok;
    document.getElementById('czas2').innerHTML = godziny + ":" + minuty + ":" + sekundy;
}

setInterval('czas()',1000);

function czas3() {
    var data = new Date();
    var godziny = data.getHours();
    var minuty = data.getMinutes();
    var sekundy = data.getSeconds();
    let days = [
        "Niedziela",
        "Poniedziałek",
        "Wtorek",
        "Środa",
        "Czwartek",
        "Piątek",
        "Sobota"
      ];
      
  
    if (godziny >= 12) {
      middayValue = "PM";
    }
  
    if (godziny < 10) godziny = "0" + godziny;
    if (minuty < 10) minuty = "0" + minuty;
    if (sekundy < 10) sekundy = "0" + sekundy;
    if (dzien < 10) dzien = "0" + dzien;
    if (miesiac < 10) miesiac = "0" + miesiac;
  
    var dayIndex = data.getDay();
    var dayName = days[dayIndex];
  
    document.getElementById('day').innerHTML = dayName;
    document.getElementById('time').innerHTML = godziny + ":" + minuty + ":" + sekundy;
  }
  
  setInterval('czas3', 1000);
