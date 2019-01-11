function toglamp() {
   var element = document.getElementById("_780833856");
      element.classList.toggle("fillamp");
      element.classList.toggle("fillampoff");

   var homeel = document.getElementById("homex");
		homeel.classList.toggle("dark");

   var homeel2 = document.getElementById("homex2");
		homeel2.classList.toggle("dark");
		homeel2.classList.toggle("clickof");

   var homeel2 = document.getElementById("notif");
		homeel2.classList.toggle("shownotiflamp");
};