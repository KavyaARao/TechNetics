var prevq='que1';
var c=1;
document.getElementById("prev").style.disabled="true";
document.getElementById("prev").style.background="#FAFAFA";
var count=0;	
var qans=new Array();
function add1(){
	var q1=document.getElementById('question1').value;
	var ans=document.getElementById('q1ans').value;
	var opt2=document.getElementById('q1opt2').value;
	var opt3=document.getElementById('q1opt3').value;
	var opt4=document.getElementById('q1opt4').value;
	var x=1;
	if(x in qans)
	{
	qans[1]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[1]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
	var m=qans[1];
	var ctr=m.length;
	while(ctr>0)
	{
		index=Math.floor(Math.random()*ctr);
		ctr--;
		temp=m[ctr];
		m[ctr]=m[index];
		m[index]=temp;
	}
	console.log(m);
}
function add2(){
	var q1=document.getElementById('question2').value;
	var ans=document.getElementById('q2ans').value;
	var opt2=document.getElementById('q2opt2').value;
	var opt3=document.getElementById('q2opt3').value;
	var opt4=document.getElementById('q2opt4').value;
	var x=2;
	if(x in qans)
	{
	qans[2]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[2]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
	console.log(qans);
}
function add3(){
	var q1=document.getElementById('question3').value;
	var ans=document.getElementById('q3ans').value;
	var opt2=document.getElementById('q3opt2').value;
	var opt3=document.getElementById('q3opt3').value;
	var opt4=document.getElementById('q3opt4').value;
	var x=3;
	if(x in qans)
	{
	qans[3]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[3]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add4(){
	var q1=document.getElementById('question4').value;
	var ans=document.getElementById('q4ans').value;
	var opt2=document.getElementById('q4opt2').value;
	var opt3=document.getElementById('q4opt3').value;
	var opt4=document.getElementById('q4opt4').value;
	var x=4;
	if(x in qans)
	{
	qans[4]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[4]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add5(){
	var q1=document.getElementById('question5').value;
	var ans=document.getElementById('q5ans').value;
	var opt2=document.getElementById('q5opt2').value;
	var opt3=document.getElementById('q5opt3').value;
	var opt4=document.getElementById('q5opt4').value;
	var x=5;
	if(x in qans)
	{
	qans[5]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[5]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add6(){
	var q1=document.getElementById('question6').value;
	var ans=document.getElementById('q6ans').value;
	var opt2=document.getElementById('q6opt2').value;
	var opt3=document.getElementById('q6opt3').value;
	var opt4=document.getElementById('q6opt4').value;
	var x=6;
	if(x in qans)
	{
	qans[6]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[6]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add7(){
	var q1=document.getElementById('question7').value;
	var ans=document.getElementById('q7ans').value;
	var opt2=document.getElementById('q7opt2').value;
	var opt3=document.getElementById('q7opt3').value;
	var opt4=document.getElementById('q7opt4').value;
	var x=7;
	if(x in qans)
	{
	qans[7]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[7]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add8(){
	var q1=document.getElementById('question8').value;
	var ans=document.getElementById('q8ans').value;
	var opt2=document.getElementById('q8opt2').value;
	var opt3=document.getElementById('q8opt3').value;
	var opt4=document.getElementById('q8opt4').value;
	var x=8
	if(x in qans)
	{
	qans[8]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[8]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add9(){
	var q1=document.getElementById('question9').value;
	var ans=document.getElementById('q9ans').value;
	var opt2=document.getElementById('q9opt2').value;
	var opt3=document.getElementById('q9opt3').value;
	var opt4=document.getElementById('q9opt4').value;
	var x=9
	if(x in qans)
	{
	qans[9]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[9]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function add10(){
	var q1=document.getElementById('question10').value;
	var ans=document.getElementById('q10ans').value;
	var opt2=document.getElementById('q10opt2').value;
	var opt3=document.getElementById('q10opt3').value;
	var opt4=document.getElementById('q10opt4').value;
	var x=10
	if(x in qans)
	{
	qans[10]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);	
	}
	else
	{
	qans[10]={Question:q1,Answer:ans,opt1:opt2,opt2:opt3,opt3:opt4};
	console.log(qans);
	count=count+1;
	document.getElementById('No').innerHTML=count;
	}
}
function navque(x)
	{
			if (x=='que1') {
			document.getElementById(x).style.display="block";
			document.getElementById(prevq).style.display="none";
			document.getElementById("prev").style.disabled="true";
			document.getElementById("prev").style.background="#FAFAFA";	
			document.getElementById("next").style.background="#3498DB";
			prevq=x;
			c=0;
			}
			else if (x=='que10') {
			document.getElementById(x).style.display="block";
			document.getElementById(prevq).style.display="none";
			document.getElementById("next").style.disabled="true";
			document.getElementById("next").style.background="#FAFAFA";
			document.getElementById("prev").style.background="#3498DB";
			prevq=x;
			c=10;
			}		
			else {
				document.getElementById(x).style.display="block";
				document.getElementById(prevq).style.display="none";
				document.getElementById("next").style.background="#3498DB";
				document.getElementById("prev").style.background="#3498DB";
				prevq=x;
				res=x.split("");
				c=parseInt(res[3]);
			}	
	}

	function nextquestion() {
		// body...
		c=c+1;
		if (c==1) {
			document.getElementById("que1").style.display="block";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("prev").style.disabled="true";
			document.getElementById("prev").style.background="#FAFAFA";
			prevq="que1";
		}
		if (c==2) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="block";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			//document.getElementById("prev").disable=true;
			prevq="que2";
		}
		else if (c==3) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="block";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que3";
			//document.getElementById("prev").disable=true;
		}
		else if (c==4) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="block";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que4";
			//document.getElementById("prev").disable=true;
		}
		else if (c==5) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="block";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que5";
			//document.getElementById("prev").disable=true;
		}
		else if (c==6) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="block";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que6";
			//document.getElementById("prev").disable=true;
		}
		else if (c==7) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="block";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que7";
			//document.getElementById("prev").disable=true;
		}
		else if (c==8) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="block";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que8";
			//document.getElementById("prev").disable=true;
		}
		else if (c==9) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="block";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que9";
			//document.getElementById("prev").disable=true;
		}
		else if (c==10) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="block";
			//document.getElementById("next").disabled=true;
			document.getElementById("next").style.background="#FAFAFA";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que10";
			/*document.getElementById("next").disabled=true;	*/
		}
	}
	function prevquestion()
	{
		c=c-1;
		if (c==1) {
			document.getElementById("que1").style.display="block";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("prev").style.disabled="true";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#FAFAFA";
			c=1
			prevq="que1";
		}
		if (c==2) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="block";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que2";
			//document.getElementById("prev").disable=true;
		}
		else if (c==3) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="block";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que3";
			//document.getElementById("prev").disable=true;
		}
		else if (c==4) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="block";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que4";
			//document.getElementById("prev").disable=true;
		}
		else if (c==5) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="block";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que5";
			//document.getElementById("prev").disable=true;
		}
		else if (c==6) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="block";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que6";
			//document.getElementById("prev").disable=true;
		}
		else if (c==7) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="block";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que7";
			//document.getElementById("prev").disable=true;
		}
		else if (c==8) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="block";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que8";
			//document.getElementById("prev").disable=true;
		}
		else if (c==9) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="block";
			document.getElementById("que10").style.display="none";
			document.getElementById("next").style.background="#3498DB";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que9";
			//document.getElementById("prev").disable=true;
		}
		else if (c==10) {
			document.getElementById("que1").style.display="none";
			document.getElementById("que2").style.display="none";
			document.getElementById("que3").style.display="none";
			document.getElementById("que4").style.display="none";
			document.getElementById("que5").style.display="none";
			document.getElementById("que6").style.display="none";
			document.getElementById("que7").style.display="none";
			document.getElementById("que8").style.display="none";
			document.getElementById("que9").style.display="none";
			document.getElementById("que10").style.display="block";
			document.getElementById("prev").style.background="#3498DB";
			prevq="que10";
			//document.getElementById("prev").disable=true;
		}
	}
	function Quiz(){
		document.getElementById("quiz").style.display="block";
		document.getElementById("result").style.display="none";
		
	}
	function Result(){
		document.getElementById("result").style.display="block";
		document.getElementById("quiz").style.display="none";
		
	}
	function start()
	{
		document.getElementById("start").style.display="none";
		document.getElementById("container").style.display="block";
		document.getElementById("navigation").style.display="block";
		document.getElementById("que1").style.display="block";
		document.getElementById("buttn").style.display="block";
		document.getElementById('buttn').onclick=function(){
			console.log(qans);
		sessionStorage.setItem('q',JSON.stringify(qans));
        };
}
