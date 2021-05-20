function validate()
  {
  document.getElementById("r").innerHTML=" ";
  document.getElementById("n").innerHTML=" ";
  document.getElementById("e").innerHTML=" ";
  document.getElementById("p").innerHTML=" ";
  document.getElementById("cp").innerHTML=" ";
  var email=document.getElementById("email").value;
  var regno=document.getElementById("regno").value;
  var name=document.getElementById("name").value;
  var p=document.getElementById("password").value;
  var cp=document.getElementById("confirmRepeat").value;
  var dot=email.indexOf(".");
  var at=email.indexOf("@");
  var c=0;
  var patt=/[0-9][0-9][A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9]/
  if (regno.length==0) {
    document.getElementById("r").innerHTML="Please enter your Registration Number !!";
    document.getElementById("regno").style.borderColor="red";
    c=c+1;
  }
  else{
     if (!patt.test(regno)) {
    document.getElementById("r").innerHTML="Please Enter Valid Registration Number";
    document.getElementById("regno").style.borderColor="red";
    c=c+1
     }
     else
     {
      document.getElementById("regno").style.borderColor="black";
      document.getElementById("r").innerHTML=" ";
     }
  }
  if (name.length==0) {
    document.getElementById("n").innerHTML="Please enter your name !!";
    document.getElementById("name").style.borderColor="red";
    c=c+1
  }
  else
  {
    document.getElementById("name").style.borderColor="black";
    document.getElementById("n").innerHTML=" ";
  }
  if (email.length==0) {
    document.getElementById("e").innerHTML="Please enter your Email Id !!";
    document.getElementById("email").style.borderColor="red";
    c=c+1
  }
  else
  {
  if (at<1||dot<at+2||dot+2>=email.length) {
    document.getElementById("e").innerHTML="Please enter a Valid Email Id !!";
    document.getElementById("email").style.borderColor="red";
    c=c+1
  }   
  else
  {
    document.getElementById("e").innerHTML=" ";
    document.getElementById("email").style.borderColor="black";
  }
  }
  if (p.length==0) {
    document.getElementById("p").innerHTML="Please enter a Password !!";
    document.getElementById("password").style.borderColor="red";
    c=c+1
    if (cp.length==0) {
    document.getElementById("cp").innerHTML="Please Repeat the password !!";
    document.getElementById("confirmRepeat").style.borderColor="red";
    c=c+1
    }
  }
  else
  {
    if (p.length<8) {
    document.getElementById("p").innerHTML="Please Enter a Stronger Password ! !";
    document.getElementById("password").style.borderColor="red";
    c=c+1
    }
    else if (cp.length==0) {
    document.getElementById("cp").innerHTML="Please Repeat the password !!";
    document.getElementById("confirmRepeat").style.borderColor="red";
    c=c+1
    }
    else if (p!==cp) {
    document.getElementById("cp").innerHTML="Password dont match ! !";
    document.getElementById("confirmRepeat").style.borderColor="red";
    c=c+1
    }
    else
    {
      document.getElementById("confirmRepeat").style.borderColor="black";
      document.getElementById("password").style.borderColor="black";
      document.getElementById("cp").innerHTML=" ";
      document.getElementById("p").innerHTML=" ";
    }
  }
 if (c>=1) {
   return false;
  }
  else
  {
    return true;
  }
  }