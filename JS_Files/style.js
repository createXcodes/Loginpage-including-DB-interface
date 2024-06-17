function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let p = document.forms["myForm"]["password"].value;
  let E = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;

  }
  else;

  if (p == "") {
    alert("Fill The Password First");
    return false;
  }
  else;
  if (E == "") {
    alert("Enter Your The Email");
    return false;

  }

}

function sign(){
  
}
