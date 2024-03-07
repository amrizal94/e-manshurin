let tempName;
let tempUsername;
let editeds = {};
function editName(){
    if (!document.getElementById("btnEditName").classList.contains("d-none")) {
        fullName = document.getElementById("name").value;
        tempName = document.getElementById("tempName").value;
        document.getElementById("name").removeAttribute("readonly");
        document.getElementById("name").focus();
        document.getElementById("name").value="";
        document.getElementById("name").value=fullName;
        document.getElementById("btnEditName").classList.add("d-none");
    }else{
        document.getElementById("btnEditName").classList.remove("d-none");
        document.getElementById("name").setAttribute("readonly", false);
    }
}

function textEditName(event){
    if (event.keyCode === 13) {
        event.preventDefault();
        event.target.blur();
        return
    }
    if (event.target.value != tempName && !document.getElementById("name").classList.contains("border-bottom-warning")) {
    document.getElementById("name").classList.add("border-bottom-warning");
    document.getElementById("btnEditName").classList.remove("btn-primary");
    document.getElementById("btnEditName").classList.add("btn-warning");
    btnSave ({isNameEdited: true});
    }else if(event.target.value == tempName){
    document.getElementById("name").classList.remove("border-bottom-warning");
    document.getElementById("btnEditName").classList.add("btn-primary");
    document.getElementById("btnEditName").classList.remove("btn-warning");
    btnSave ({isNameEdited: false});
    }
}

function editUsername(){
    if (!document.getElementById("btnEditUsername").classList.contains("d-none")) {
        fullName = document.getElementById("username").value;
        tempName = document.getElementById("tempUsername").value;
        document.getElementById("username").removeAttribute("readonly");
        document.getElementById("username").focus();
        document.getElementById("username").value="";
        document.getElementById("username").value=fullName;
        document.getElementById("btnEditUsername").classList.add("d-none");
        document.getElementById("infoUsername").classList.remove("d-none");
    }else{
        document.getElementById("btnEditUsername").classList.remove("d-none");
        document.getElementById("infoUsername").classList.add("d-none");
        document.getElementById("username").setAttribute("readonly", false);
    }
}

function textEditUsername(event){
    if (event.keyCode === 13) {
        event.preventDefault();
        event.target.blur();
        return
    }

    if (event.target.value != tempUsername && !document.getElementById("username").classList.contains("border-bottom-warning")) {
    document.getElementById("username").classList.add("border-bottom-warning");
    document.getElementById("btnEditUsername").classList.remove("btn-primary");
    document.getElementById("btnEditUsername").classList.add("btn-warning");
    btnSave ({isUsernameEdited: true});
    }else if(event.target.value == tempName){
    document.getElementById("username").classList.remove("border-bottom-warning");
    document.getElementById("btnEditUsername").classList.add("btn-primary");
    document.getElementById("btnEditUsername").classList.remove("btn-warning");
    btnSave ({isUsernameEdited: false});
    }
}

function editStatusAkun(event){
    if (event.target.value == event.target.checked) {
    btnSave ({isStatusAkun: false});
    return
    }
    btnSave ({isStatusAkun: true});
}

function btnSave(edited){
const key = Object.keys(edited)
editeds[key] = Object.values(edited)[0];
if(Object.values(editeds).every((v) => v === false)){
    document.getElementById("btnSave").setAttribute("disabled", false);
    return
}
    document.getElementById("btnSave").removeAttribute("disabled");
}

