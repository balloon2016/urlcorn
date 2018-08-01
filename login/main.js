window.onclick = function(e) {
	if(e.path[0].className=="dropbtn") {
		var c, k=document.getElementsByClassName('dropdown-content');
		var dropdowns = e.path[0].nextElementSibling;
		for(c=0; c<k.length; c++) {
			if(k[c]==dropdowns) 
				switch(k[c].classList.contains("show")) {
						case true: k[c].classList.remove("show"); break;
						case false: k[c].classList.add("show"); break;
				}
			else 
				k[c].classList.remove("show");
		}
	}
}
