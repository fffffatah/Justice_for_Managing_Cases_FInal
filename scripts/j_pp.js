function getElement(id){
    return document.getElementById(id);
}
function registrationValidation(){
    refreshReg();
    var pp=getElement("pp");
    var err_pp=getElement("err_pp");

  if(pp.value==""){
      hasError=true;
      err_pp.innerHTML="* Profile Picture Required.";
      pp.focus();
      pp.style.border="2px solid red";
  }

  function refreshReg(){
      var err_pp=getElement("err_pp");
      var pp=getElement("pp");
    }

err_pp.innerHTML="";
pp.style.border="2px solid black";
}
