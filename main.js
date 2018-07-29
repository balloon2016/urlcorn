const title="URLCORN";

window.onload=function() {
	var t=document.getElementsByTagName('a');
	var c;
	for(c=0; c<t.length; c++) {
		if(t[c].innerText.indexOf(title)>=0) {
			t[c].href=location.origin;
		}
	}
}