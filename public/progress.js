
var like = document.getElementById("like");
var la = document.getElementById("la");
var lb = document.getElementById("lb");
var lc = document.getElementById("lc");
var ld = document.getElementById("ld");
var le = document.getElementById("le");
var lf = document.getElementById("lf");
var lg = document.getElementById("lg");
var wrap = document.getElementById("wrapper");
window.onload=function(){

	wrap.style.display = 'none';           // Hide
}
function disp(){
	
	var res = num(like.value);
	//setter(like.value);
	res+="px"
	document.getElementById("plike").style.width=res;
}
function def(){
	//Returning everything to default
	firstly();
	like.value = 5;
	disp();
	//le.style.color="green";

}
function show(){
	
	wrap.style.display = 'block';          // Show
	wrap.style.display = 'inline';         // Show
	wrap.style.display = 'inline-block';
	//When you get to edit page

	//Retreiving Likelihood
	newla=document.getElementById("a");
	newla.value = la.innerHTML;
	newlb=document.getElementById("b");
	newlb.value = lb.innerHTML;
	newlc=document.getElementById("c");
	newlc.value = lc.innerHTML;
	newld=document.getElementById("d");
	newld.value = ld.innerHTML;
	newle=document.getElementById("e");
	newle.value = le.innerHTML;
	newlf=document.getElementById("f");
	newlf.value = lf.innerHTML;
	newlg=document.getElementById("g");
	newlg.value = lg.innerHTML;

	//Retrieving Impact
	newia=document.getElementById("ai");
	newia.value = ia.innerHTML;
	newib=document.getElementById("bi");
	newib.value = ib.innerHTML;
	newic=document.getElementById("ci");
	newic.value = ic.innerHTML;
	newid=document.getElementById("di");
	newid.value = id.innerHTML;
	newie=document.getElementById("ei");
	newie.value = ie.innerHTML;
	newif=document.getElementById("fi");
	newif.value = iff.innerHTML;
	newig=document.getElementById("gi");
	newig.value = ig.innerHTML;
	
}
function firstly(){
	la.innerHTML="Almost Impossible ";
	lb.innerHTML="Highly Unlikely ";
	lc.innerHTML="Unlikely ";
	ld.innerHTML="Plausible ";
	le.innerHTML="Likely ";
	lf.innerHTML="Highly Likely ";
	lg.innerHTML="Almost Certain ";
	al.innerHTML="1";
	bl.innerHTML="2";
	cl.innerHTML="3";
	dl.innerHTML="4";
	el.innerHTML="5";
	fl.innerHTML="6";
	gl.innerHTML="7";

}
function change(){
	//Setting a new likelihood name
	newla=document.getElementById("a");
	var da = newla.value;
	da+=" ";
	la.innerHTML = da;
	newlb=document.getElementById("b");
	var db = newlb.value;
	db+=" ";
	lb.innerHTML = db;
	newlc=document.getElementById("c");
	var dc = newlc.value;
	dc+=" ";
	lc.innerHTML = dc;
	newld=document.getElementById("d");
	var dd = newld.value;
	dd+=" ";
	ld.innerHTML = dd;
	newle=document.getElementById("e");
	var de = newle.value;
	de+=" ";
	le.innerHTML = de;
	newlf=document.getElementById("f");
	var df = newlf.value;
	df+=" ";
	lf.innerHTML = df;
	newlg=document.getElementById("g");
	var dg = newlg.value;
	dg+=" ";
	lg.innerHTML = dg;
}
function num(like){
	if (like==3){
		la.innerHTML="Almost Impossible ";
		lb.innerHTML="Highly Unlikely ";
		lc.innerHTML="Unlikely ";
		ld.innerHTML="";
		le.innerHTML="";
		lf.innerHTML="";
		lg.innerHTML="";
		al.innerHTML="1";
		bl.innerHTML="2";
		cl.innerHTML="3";
		dl.innerHTML="";
		el.innerHTML="";
		fl.innerHTML="";
		gl.innerHTML="";
		return 270;
	}
	else if (like==4){
		la.innerHTML="Almost Impossible ";
		lb.innerHTML="Highly Unlikely ";
		lc.innerHTML="Unlikely ";
		ld.innerHTML="Plausible ";
		le.innerHTML="";
		lf.innerHTML="";
		lg.innerHTML="";
		al.innerHTML="1";
		bl.innerHTML="2";
		cl.innerHTML="3";
		dl.innerHTML="4";
		el.innerHTML="";
		fl.innerHTML="";
		gl.innerHTML="";
		return 370;
	}
	else if (like==5){
		la.innerHTML="Almost Impossible ";
		lb.innerHTML="Highly Unlikely ";
		lc.innerHTML="Unlikely ";
		ld.innerHTML="Plausible ";
		le.innerHTML="Likely ";
		lf.innerHTML="";
		lg.innerHTML="";
		al.innerHTML="1";
		bl.innerHTML="2";
		cl.innerHTML="3";
		dl.innerHTML="4";
		el.innerHTML="5";
		fl.innerHTML="";
		gl.innerHTML="";
		return 440;
	}
	else if (like==6){
		la.innerHTML="Almost Impossible ";
		lb.innerHTML="Highly Unlikely ";
		lc.innerHTML="Unlikely ";
		ld.innerHTML="Plausible ";
		le.innerHTML="Likely ";
		lf.innerHTML="Highly Likely ";
		lg.innerHTML="";
		al.innerHTML="1";
		bl.innerHTML="2";
		cl.innerHTML="3";
		dl.innerHTML="4";
		el.innerHTML="5";
		fl.innerHTML="6";
		gl.innerHTML="";
		return 530;
	}
	else if(like==7){
		la.innerHTML="Almost Impossible ";
		lb.innerHTML="Highly Unlikely ";
		lc.innerHTML="Unlikely ";
		ld.innerHTML="Plausible ";
		le.innerHTML="Likely ";
		lf.innerHTML="Highly Likely ";
		lg.innerHTML="Almost Certain ";
		al.innerHTML="1";
		bl.innerHTML="2";
		cl.innerHTML="3";
		dl.innerHTML="4";
		el.innerHTML="5";
		fl.innerHTML="6";
		gl.innerHTML="7";
		return 700;
	}else{
		def();
	}
}

//Impact
var imp = document.getElementById("imp");
var ia = document.getElementById("iad");
var ib = document.getElementById("ibd");
var ic = document.getElementById("icd");
var id = document.getElementById("idd");
var ie = document.getElementById("ied");
var iff = document.getElementById("iff");
var ig = document.getElementById("igd");


function dispi(){
	var kes = numi(imp.value);
	//setter(like.value);
	kes+="px"
	document.getElementById("pimp").style.width=kes;
	//alert("here");
}
function defi(){
	//Returning everything to default
	firstlyimp();
	imp.value = 5;
	dispi();
	//le.style.color="green";

}
function showimp(){
	//When you get to edit page
	
}

function firstlyimp(){
	ia.innerHTML="< 1 day";
	ib.innerHTML="1 - 3 days";
	ic.innerHTML="4 - 7 days";
	id.innerHTML="8 - 14 days";
	ie.innerHTML="15 - 21 days";
	iff.innerHTML="22 - 28 days";
	ig.innerHTML="28 days+";
	aid.innerHTML="1";
	bid.innerHTML="2";
	cid.innerHTML="3";
	did.innerHTML="4";
	eid.innerHTML="5";
	fid.innerHTML="6";
	gid.innerHTML="7";

}
function changeimp(){
	wrap.style.display = 'none';           // Hide
	change();
	//Setting a new likelihood name
	newia=document.getElementById("ai");
	var dai = newia.value;
	dai+=" ";
	ia.innerHTML = dai;
	newib=document.getElementById("bi");
	var dbi = newib.value;
	dbi+=" ";
	ib.innerHTML = dbi;
	newic=document.getElementById("ci");
	var dci = newic.value;
	dci+=" ";
	ic.innerHTML = dci;
	newid=document.getElementById("di");
	var ddi = newid.value;
	ddi+=" ";
	id.innerHTML = ddi;
	newie=document.getElementById("ei");
	var dei = newie.value;
	dei+=" ";
	ie.innerHTML = dei;
	newif=document.getElementById("fi");
	var dfi = newif.value;
	dfi+=" ";
	iff.innerHTML = dfi;
	newig=document.getElementById("gi");
	var dgi = newig.value;
	dgi+=" ";
	ig.innerHTML = dgi;
}
 
function numi(imp){
	if (imp==1){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="";
		ic.innerHTML="";
		id.innerHTML="";
		ie.innerHTML="";
		iff.innerHTML="";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="";
		cid.innerHTML="";
		did.innerHTML="";
		eid.innerHTML="";
		fid.innerHTML="";
		gid.innerHTML="";
		return 100;
	}
	else if (imp==2){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="";
		id.innerHTML="";
		ie.innerHTML="";
		iff.innerHTML="";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="";
		did.innerHTML="";
		eid.innerHTML="";
		fid.innerHTML="";
		gid.innerHTML="";
		return 170;
	}
	else if (imp==3){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="4 - 7 days";
		id.innerHTML="";
		ie.innerHTML="";
		iff.innerHTML="";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="3";
		did.innerHTML="";
		eid.innerHTML="";
		fid.innerHTML="";
		gid.innerHTML="";
		return 270;
	}
	else if (imp==4){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="4 - 7 days";
		id.innerHTML="8 - 14 days";
		ie.innerHTML="";
		iff.innerHTML="";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="3";
		did.innerHTML="4";
		eid.innerHTML="";
		fid.innerHTML="";
		gid.innerHTML="";
		return 370;
	}
	
	else if (imp==5){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="4 - 7 days";
		id.innerHTML="8 - 14 days";
		ie.innerHTML="15 - 21 days";
		iff.innerHTML="";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="3";
		did.innerHTML="4";
		eid.innerHTML="5";
		fid.innerHTML="";
		gid.innerHTML="";
		return 460;
	}
	
	else if (imp==6){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="4 - 7 days";
		id.innerHTML="8 - 14 days";
		ie.innerHTML="15 - 21 days";
		iff.innerHTML="22 - 28 days";
		ig.innerHTML="";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="3";
		did.innerHTML="4";
		eid.innerHTML="5";
		fid.innerHTML="6";
		gid.innerHTML="";
		return 600;
	}
	else if(imp==7){
		ia.innerHTML="less than 1 day";
		ib.innerHTML="1 - 3 days";
		ic.innerHTML="4 - 7 days";
		id.innerHTML="8 - 14 days";
		ie.innerHTML="15 - 21 days";
		iff.innerHTML="22 - 28 days";
		ig.innerHTML="28 days+";
		aid.innerHTML="1";
		bid.innerHTML="2";
		cid.innerHTML="3";
		did.innerHTML="4";
		eid.innerHTML="5";
		fid.innerHTML="6";
		gid.innerHTML="7";
		return 700;
	}
	else{
		defi();
	}
}

