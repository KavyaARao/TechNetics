document.getElementById("timer").innerHTML="Thank You!"
document.getElementById("results").disabled=false;
document.getElementById("buttn").style.background="#2B4F81";
document.getElementById("buttn").disabled=true;
document.getElementById("finished").style.display="block";
	function Quiz(){
		document.getElementById("quiz").style.display="block";
		document.getElementById("result").style.display="none";
		
	}
	function Result(){
		document.getElementById("result").style.display="block";
		document.getElementById("quiz").style.display="none";
		
	}