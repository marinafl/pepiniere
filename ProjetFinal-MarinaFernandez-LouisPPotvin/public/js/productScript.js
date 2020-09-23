const burg = document.getElementsByClassName('burger')[0]
const navbarLinks = document.getElementsByClassName('uLinks')[0]

burg.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})


localStorage.setItem("click", 0);


//Change theme
function changeFont(){
	var click = localStorage.getItem("click");
	console.log(click);
	if (click % 2 ==0){
		var all = document.getElementsByTagName("*");
		for (var i=0, max=all.length; i < max; i++) {
			 all[i].style.color = "#C47A45";
		}
		//#C47A45
		//8A8A8A
		var ho = document.getElementsByClassName("textHover");
		for (var i=0, max=ho.length; i < max; i++) {
			 ho[i].style.backgroundColor = "#153A2D";
		}
		document.getElementById("navB").style.backgroundColor="#205951";
		document.getElementById("con").style.backgroundColor="#41B3A3";
		document.getElementById("myPied").style.backgroundColor="#205951";
		var ulink = document.getElementsByClassName("uLinks");
		for (var i=0, max=ulink.length; i < max; i++) {
			 ulink[i].style.backgroundColor = "#205951";
		}
	}else {

		var all = document.getElementsByTagName("*");
		for (var i=0, max=all.length; i < max; i++) {
			all[i].style.color = "black";
		}
		var ho = document.getElementsByClassName("textHover");
		for (var i=0, max=ho.length; i < max; i++) {
			 ho[i].style.backgroundColor = "white";
		}
		document.getElementById("navB").style.backgroundColor="#BADCAD";
		document.getElementById("con").style.backgroundColor="#ECE7DF";
		document.getElementById("myPied").style.backgroundColor="#153A2D";
		var ulink = document.getElementsByClassName("uLinks");
		for (var i=0, max=ulink.length; i < max; i++) {
			 ulink[i].style.backgroundColor = "#BADCAD";
		}
		
	}
	click++;
	localStorage.setItem("click", click);
};



