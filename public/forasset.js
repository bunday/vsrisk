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

var table_user = false;
function userTable() {
    var tab = document.getElementById("ass");
    if(!table_user) {
        tab.style.display='block';
        if(io == true){
            document.getElementById("addass").style.display="none";
        }
        table_user = true;
    } else {
        tab.style.display = "none";
        table_user = false;
    }
}

var io = false;
function addAsset() {
    var assA = document.getElementById("addass");
    if(!io) {
        assA.style.display='block';
        if(table_user == true){
            document.getElementById("ass").style.display="none";
        }
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
        assD.style.display='block';
        del = true;
    } else {
        assD.style.display = "none";
        del = false;
    }   
}

var au = false;
function addUser() {
    var form_user = document.getElementById("form-new-user");
    if(!au) {
        form_user.style.display="block";
        document.getElementById("gone").style.display="none";
        au = true;
    } else {
        form_user.style.display="none";
        au = false;
    }
}


//function toggleState(item){
  //  if(item.className == "on") {
   //     item.className="off";
    //} else {
      //  item.className="on";
   // }
//}