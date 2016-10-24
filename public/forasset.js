var expanded = false;
function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
    } else {
        checkboxes.style.display = "none";
        expanded = false;
    }
}

var show = false;
function showTextBox() {
    var textBox = document.getElementById("textBox");
    if(!show) {
        textBox.style.display='block';
        document.getElementById("somenote").style.visibility="hidden";
        document.getElementById("somenote").style.opacity=0;
        show = true;
    } else {
        textBox.style.display = "none";
        var added = document.getElementById('textBox').value;
        if(added == "") {
            document.getElementById("somenote").style.visibility="visible";
            document.getElementById("somenote").style.opacity=1;
        }
        show = false;
    }
}

var c = false;
function changeConf() {
    if(!c) {
        document.getElementById("setconf").style.display="block";
        c = true;
    } else {
        document.getElementById("setconf").style.display="none";
        c = false;
    }
}

var n = false;
function changeInt() {
    if(!n) {
        document.getElementById("setint").style.display="block";
        n = true;
    } else {
        document.getElementById("setint").style.display="none";
        n = false;
    }
}

var q = false;
function changeAv() {
    if(!q) {
        document.getElementById("setava").style.display="block";
        q = true;
    } else {
        document.getElementById("setava").style.display="none";
        q = false;
    }
}

function setConf(num){
	document.getElementById("roundconf").innerHTML=num;
}

function setInt(num){
	document.getElementById("roundint").innerHTML=num;
}

function setAva(num){
	document.getElementById("roundava").innerHTML=num;
}

var form_user = false;
function userManage() {
    var formNewUser = document.getElementById("form-new-user");
    if(!form_user) {
        if(del == true) {
            document.getElementById("form-delete").style.display="none";
        }
        formNewUser.style.display='block';
        form_user = true;
    } else {
        formNewUser.style.display = "none";
        form_user = false;
    }
}

var io = false;
function addAsset() {
    var assA = document.getElementById("ass");
    if(!io) {
        assA.style.display='block';
        io = true;
    } else {
        assA.style.display = "none";
        io = false;
    }
}

var del = false;
function deleteAsset() {
    var assD = document.getElementById("form-delete");
    if(!del) {
        if (form_user == true) {
            document.getElementById("form-new-user").style.display="none";
        }
        assD.style.display='block';
        del = true;
    } else {
        assD.style.display = "none";
        del = false;
    }   
}
//function toggleState(item){
  //  if(item.className == "on") {
   //     item.className="off";
    //} else {
      //  item.className="on";
   // }
//}