function validateform(){  

    //validating name
    let fullname=document.feedback.fullname.value;  
    // to check if name is empty of not  
      if (fullname==null || fullname==""){  
        alert("Name field is required");  
      return false; 
    }
    
    //validating email
    let emailaddress=document.feedback.emailaddress.value;  
    // to check if name is empty of not  
      if (emailaddress==null || emailaddress==""){  
        alert("Email field is required");  
      return false; 
    }
    
    // to ensure feedback cannot be more than 500 characters
    let chkfeedback=document.feedback.Feedback.value;  
        if(chkfeedback.length>300){  
            alert("Maximum words 500 only");  
        return false;
    }

}


function formContact(){
    // to ensure Message cannot be more than 1000 characters
    let Message=document.form2.Message.value;  
    if(Message.length<1000){  
        alert("Maximum words 1000 only");  
        return false;
    }

}


    //check the lenghth of the phone number
function checknum(){
      let phonenum=(document.form1.phonenum.value).trim();
 if(phonenum.length<10){
      alert("Enter 10 digits phone number");
    return false;
  }
  else if(phonenum.length>10){
      alert("Enter 10 digits phone number");
    return false;
    }
    // check the maximum num of guests
    let noguest=(document.form1.noguest.value);
    if(noguest.value>12){
      alert ("Maximum number of guest must be 12.")
    }
}