function resetForm(){
    for(let tag of document.getElementsByTagName('INPUT')){
        if(tag.type != 'radio' && tag.type != 'submit') {
            tag.value=''; 
        }else if(tag.type == 'radio') {
            tag.checked = false;
        }
    }
}

function checkForm(event){
    if(!/^\S+@\S+$/.test(document.getElementsByName("user")[0].value)){
        alert("invalid email");
        return false;
    }

    if(document.getElementsByName("pwd")[0].value.length == 0){
        alert("password cannot be empty");
        return false;
    }

    if(document.getElementsByName("sm")[0].value == "" || document.getElementsByName("sm")[0].value<0 || 
       document.getElementsByName("md")[0].value == "" || document.getElementsByName("md")[0].value<0 ||
       document.getElementsByName("lg")[0].value == "" || document.getElementsByName("lg")[0].value<0){
        alert("quantities cannot be blank or negative")
        return false;
    }

    if(!(document.getElementsByName("ship")[0].checked || document.getElementsByName("ship")[1].checked || document.getElementsByName("ship")[2].checked) ){
        alert("Please select a shipping option");
        return false;
    }

    return true;
}