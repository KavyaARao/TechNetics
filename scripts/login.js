function validate()
  {
  document.getElementById("r").innerHTML=" ";
  document.getElementById("e").innerHTML=" ";
  document.getElementById("p").innerHTML=" ";
  var email=document.getElementById("email").value;
  var dot=email.indexOf(".");
  var at=email.indexOf("@");
  var regno=document.getElementById("regno").value;
  var p=document.getElementById("password").value;
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
  }
  else
    {
     document.getElementById("password").style.borderColor="black";
     document.getElementById("p").innerHTML=" ";
    }
 if (c>=1) {
   return false;
  }
  else
  {
    return true;
  }
  }