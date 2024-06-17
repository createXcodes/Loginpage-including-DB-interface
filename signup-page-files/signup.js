function conf() {

    let U = document.forms["myForm2"]["namer"].value;
    let P = document.forms["myForm2"]["passwordr"].value;
    let E = document.forms["myForm2"]["emailr"].value;
    let N = document.forms["myForm2"]["number"].value;
    let A = document.forms["myForm2"]["age1"].value;
    if (U == "") {
        alert("Enter The Name You Cant Leave It Empty");
        return false;

    }
    else;
    if (P == "" ){
        alert("Enter The Password You Cant Leave It Empty ");
        return false;

    }
    else;
    if (E == "" ){
        alert("Enter The Email You Cant Leave It Empty ");
        return false;

    }
    else;
    if (N == "" ){
        alert("Enter The Number You Cant Leave It Empty ");
        return false;

    }
    else;
    if (A == "" ){
        alert("Enter The Age You Cant Leave It Empty ");
        return false;

    }
    
    
}