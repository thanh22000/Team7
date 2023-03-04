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
  