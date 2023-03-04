//function to change the background color of the page

function changeColor(where,newColor){
    if (where == "background"){
      document.body.style.backgroundColor = newColor;
  
  }
  }
  function changeColor(){
      let color = document.getElementById('background').value;
      document.body.style.backgroundColor = color;    
  }

  function validateform(){  

//validating name
let name=document.feedback.Name.value;  
// to check if name is empty of not  
if (name==null || name==""){  
  alert("Name field is required");  
  return false; 
}

//validating email
let email=document.feedback.Email.value;  
// to check if name is empty of not  
if (email==null || email==""){  
  alert("Email field is required");  
  return false; 
}

// to ensure feedback cannot be more than 500 characters
let chkfeedback=document.feedback.Feedback.value;  
    if(feedback.length>500){  
        alert("Maximum words 500 only");  
        return false;
}

}