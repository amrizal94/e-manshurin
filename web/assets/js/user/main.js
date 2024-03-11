let tempName;
let temp = {};
let editeds = {};
let isEdited = {};

function editHandle(id) {
  if (!document.getElementById("btn_edit_" + id).classList.contains("d-none")) {
    fullName = document.getElementById(id).value;
    const key = "temp_" + id;
    temp[key] = document.getElementById("temp_" + id).value;
    document.getElementById(id).removeAttribute("readonly");
    document.getElementById(id).focus();
    document.getElementById(id).value = "";
    document.getElementById(id).value = fullName;
    document.getElementById("btn_edit_" + id).classList.add("d-none");
    document.getElementById("info_" + id).classList.remove("d-none");
  } else {
    document.getElementById("btn_edit_" + id).classList.remove("d-none");
    document.getElementById("info_" + id).classList.add("d-none");
    document.getElementById(id).setAttribute("readonly", false);
  }
}

function textEditHandle(event, id) {
  const key = "temp_" + id;

  if (event.keyCode === 13) {
    event.preventDefault();
    event.target.blur();
    return;
  }

  if (
    event.target.value != temp[key] &&
    !document.getElementById(id).classList.contains("border-bottom-warning")
  ) {
    document.getElementById(id).classList.add("border-bottom-warning");
    document.getElementById("btn_edit_" + id).classList.remove("btn-primary");
    document.getElementById("btn_edit_" + id).classList.add("btn-warning");
    const key = "is_" + id + "_edited";
    isEdited[key] = true;
    btnSave(isEdited);
  } else if (event.target.value == temp[key]) {
    document.getElementById(id).classList.remove("border-bottom-warning");
    document.getElementById("btn_edit_" + id).classList.add("btn-primary");
    document.getElementById("btn_edit_" + id).classList.remove("btn-warning");
    const key = "is_" + id + "_edited";
    isEdited[key] = false;
    btnSave(isEdited);
  }
}

function editStatusAkun(event) {
  if (event.target.value == event.target.checked) {
    btnSave({ isStatusAkun: false });
    return;
  }
  btnSave({ isStatusAkun: true });
}

function btnSave(edited) {
  const key = Object.keys(edited);
  editeds[key] = Object.values(edited)[0];
  if (Object.values(editeds).every((v) => v === false)) {
    document.getElementById("btnSave").setAttribute("disabled", false);
    return;
  }
  document.getElementById("btnSave").removeAttribute("disabled");
}
