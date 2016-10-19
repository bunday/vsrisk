
var like = document.getElementById("like");
var la = document.getElementById("la");
var lb = document.getElementById("lb");
var lc = document.getElementById("lc");
var ld = document.getElementById("ld");
var le = document.getElementById("le");
var lf = document.getElementById("lf");
var lg = document.getElementById("lg");

function disp(){
	var res = num(like.value);
	setter(like.value);
	res+="px"
	document.getElementById("plike").style.width=res;
}
function def(){
	firstly();
	like.value = 5;
	disp();
	le.style.color="green";

}
function show(){
	newla=document.getElementById("a");
	newla.value = la.innerHTML;
	newlb=document.getElementById("b");
	newlb.value = lb.innerHTML;
	var first = document.getElementById("likeremark");
	var second = document.getElementById("act");
	var a=document.getElementById("a");
	a.value=first.innerHTML;
	alert("hi");
}
function firstly(){
	la.innerHTML="Almost Impossible||";
	lb.innerHTML="Highly Unlikely||";
	lc.innerHTML="Unlikely||";
	ld.innerHTML="Plausible||";
	le.innerHTML="Likely||";
	lf.innerHTML="Highly Likely||";
	lg.innerHTML="Almost Certain"

}
function change(){
	newla=document.getElementById("a");
	la.innerHTML = a.value;
	newlb=document.getElementById("b");
	lb.innerHTML = b.value;
}
function num(like){
	if (like==1)
		return 100;
	else if (like==2)
		return 200;
	else if (like==3)
		return 300;
	else if (like==4)
		return 400;
	else if (like==5)
		return 500;
	else if (like==6)
		return 600;
	else
		return 700;
}
function setter(like){
	if(like==1){
		la.style.color="green";
		lb.style.color="blue";
		lc.style.color="blue";
		ld.style.color="blue";
		le.style.color="blue";
		lf.style.color="blue";
		lg.style.color="blue";
	}

	else if(like==2){
		la.style.color="blue";
		lb.style.color="green";
		lc.style.color="blue";
		ld.style.color="blue";
		le.style.color="blue";
		lf.style.color="blue";
		lg.style.color="blue";
	}
	else if(like==3){
		la.style.color="blue";
		lc.style.color="green";
		lb.style.color="blue";
		ld.style.color="blue";
		le.style.color="blue";
		lf.style.color="blue";
		lg.style.color="blue";
	}
	else if(like==4){
		ld.style.color="green";
		la.style.color="blue";
		lb.style.color="blue";
		lc.style.color="blue";
		le.style.color="blue";
		lf.style.color="blue";
		lg.style.color="blue";
	}
	else if(like==5){
		le.style.color="green";
		la.style.color="blue";
		lb.style.color="blue";
		lc.style.color="blue";
		ld.style.color="blue";
		lf.style.color="blue";
		lg.style.color="blue";	
	}
	else if(like==6){
		lf.style.color="green";
		la.style.color="blue";
		lb.style.color="blue";
		lc.style.color="blue";
		ld.style.color="blue";
		le.style.color="blue";
		lg.style.color="blue";
	}
	else{
		lg.style.color="green";
		la.style.color="blue";
		lb.style.color="blue";
		lc.style.color="blue";
		ld.style.color="blue";
		le.style.color="blue";
		lf.style.color="blue";
	}

}


var imp = document.getElementById("imp");
function dispi(){
	var im = numi(imp.value);
	setteri(imp.value);
	im+="px"
	document.getElementById("pimp").style.width=im;
}
function defi(){
	imp.value = 5;
	dispi();
	remarki=document.getElementById("impremark");
	remarki.style.color="blue";

}
function numi(imp){
	if (imp==1)
		return 100;
	else if (imp==2)
		return 200;
	else if (imp==3)
		return 300;
	else if (imp==4)
		return 400;
	else if (imp==5)
		return 500;
	else if (imp==6)
		return 600;
	else
		return 700;
}
function setteri(imp){
	remarki=document.getElementById("impremark");
	if(imp==1){
		remarki.innerHTML="< 1 day";
		remarki.style.color="green";
		ac=document.getElementById("ac");
		ac.innerHTML = "";
	}

	else if(imp==2){
		remarki.style.color="blue";
		remarki.innerHTML="< 1 day ||";
		ac=document.getElementById("ac");
		ac.innerHTML = "1 - 3 days";
		ac.style.color="green";
	}
	else if(imp==3){
		remarki.innerHTML="< 1 day || 1 - 3 days || ";
		ac=document.getElementById("ac");
		ac.innerHTML = "4 - 7 days";
		ac.style.color="green";
	}
	else if(imp==4){
		remarki.innerHTML="< 1 day  || 1 - 3 days || 4 - 7 days || ";
		ac=document.getElementById("ac");
		ac.innerHTML = "8 - 14 days";
		ac.style.color="green";
	}
	else if(imp==5){
		remarki.innerHTML="< 1 day  || 1 - 3 days || 4 - 7 days || 8 - 14 days || ";
		ac=document.getElementById("ac");
		ac.innerHTML = "15 - 21 days";
		ac.style.color="green";
	}
	else if(imp==6){
		remarki.innerHTML="< 1 day || 1 - 3 days || 4 - 7 days || 8 - 14 days || 15 - 21 days || ";
		ac=document.getElementById("ac");
		ac.innerHTML = "22 - 28 days";
		ac.style.color="green";
	}
	else{
		remarki.innerHTML="< 1 day || 1 - 3 days || 4 - 7 days || 8 - 14 days || 15 - 21 days || 22 - 28 days || ";
		ac=document.getElementById("ac");
		ac.innerHTML = "28 days +";
		ac.style.color="green";
	}

}