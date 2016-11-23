var like = document.getElementById('clike').value;
var imp = document.getElementById('cimp').value;
var g = document.getElementById('fml');
function cree(){
	var i=1, doc = document, docFrag = document.createDocumentFragment();
	for (; i <= like; i++){
     var elem = doc.createElement('input');
     elem.type = 'button';
     elem.value = i;
     elem.className = "btn btn-primary";
     elem.style.width = "50px";
     elem.style.height = "50px";
     docFrag.appendChild(elem);
     var d = "a"+i;
     document.getElementById(d).appendChild(docFrag);
	}
	
}


function changer(){
	//alert(arguments[0]);
}
function clearit(){
		elm = document.getElementById('a1');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a2');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a3');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a4');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a5');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a6');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
  		elm = document.getElementById('a7');
		while (elm.hasChildNodes())
  			elm.removeChild(elm.lastChild);
}
function gitt(){
	var a = arguments[0];
	var b = arguments[1];
	var c = arguments[2];
	if(c==0){

		return( (parseInt(a) + parseInt(b))-1);
	}else if (c==1){
		return((parseInt(a) + parseInt(b)));
	}else if (c==2){
		return((parseInt(a) * parseInt(b)));
	}else if (c==3){
		return((parseInt(a) ));
	}else {
		return((parseInt(b) ));
	}
}
function solve(){
	var key = g.selectedIndex;
	if(key==0){
		result = (parseInt(like)+ parseInt(imp)) - 1;
		mode =0;
		alert(result);
	}else if(key==1){
		result = parseInt(like)+parseInt(imp);
		mode = 1;
		alert(result);
	}else if(key==2){
		result = like*imp;
		mode = 2;
		alert(result);
	}else if(key==3){
		result = like;
		mode = 3;
		alert(result);
	}else{
		result = imp;
		mode = 4;
		alert(result);
	}
	//gitt(3,5,mode);
	
}
