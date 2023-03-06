function validate(){
    let phonenum=(document.form1.phonenum.value).trim();
 if(phonenum.length<10){
      alert("Enter 10 digits phone number");
    return false;
  }
  else if(phonenum.length>10){
      alert("Enter 10 digits phone number");
    return false;
}
}