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
            alert("Maximum words 300 only");  
        return false;
    }

}


function formContact()
{
  let Name=document.form2.Name.value;  
    // to check if name is empty of not  
      if (Name==null || Name==""){  
        alert("Name field is required");  
      return false; 
    } 
}
   

    //check the lenghth of the phone number
function checknum(){
      let phonenum=(document.form1.phonenum.value).trim();
 if(phonenum.length<10){
      alert("Please enter a valid contact number. Shoud be 10 digits");
    return false;
  }
  else if(phonenum.length>10){
      alert("Please enter a valid contact number. Shoud be 10 digits");
    return false;
    }
    
}