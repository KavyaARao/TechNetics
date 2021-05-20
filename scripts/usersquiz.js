var c=1;
function shuffle(array) {
  for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }

  return array;
}
	var dets=sessionStorage.getItem('Details');
	var details=JSON.parse(dets);
	var q=[];
	var a=[];
	var ans=[[],[],[],[],[],[],[],[],[],[],[]];
	var as1;
	var as2;
	var as3;
	var as4;
	var d=details[2]['date'];
	document.getElementById('due').innerHTML=d;
	var tim=details[1]['timemins'];
	document.getElementById('t').innerHTML=tim;
	var ty=details[1]['type'];
	document.getElementById('type').innerHTML=ty;
	var ct=parseInt(tim);
	for(var i=1;i<=10;i++)
	{
	q[i]=details[i]['Question'];
	a[i]=details[i]['Answer'];
	for (var j = 1; j <= 4; j++) {
		if(j==1)
		{
		ans[i][j]=details[i]['Answer'];	
		}
		else if(j==2)
		{
		ans[i][j]=details[i]['opt1'];	
		}
		else if(j==3)
		{
		ans[i][j]=details[i]['opt2'];	
		}
		else{
		ans[i][j]=details[i]['opt3'];
		}
	}
	/*var p=[as1,as2,as3,as4];
	ans[i].push(p);
	*/
	shuffle(ans[i]);
	}
	var ansq1,ansq2,ansq3,ansq4,ansq5,ansq6,ansq7,ansq8,ansq9,ansq10;
	var id=[["q1btn1","q1btn2","q1btn3","q1btn4"],["q2btn1","q2btn2","q2btn3","q2btn4"],["q3btn1","q3btn2","q3btn3","q3btn4"],["q4btn1","q4btn2","q4btn3","q4btn4"],["q5btn1","q5btn2","q5btn3","q5btn4"],["q6btn1","q6btn2","q6btn3","q6btn4"],["q7btn1","q7btn2","q7btn3","q7btn4"],["q8btn1","q8btn2","q8btn3","q8btn4"],["q9btn1","q9btn2","q9btn3","q9btn4"],["q10btn1","q10btn2","q10btn3","q10btn4"]];
	var prevq="que1";
	var l=q.length;
	var x=ans.length;
	var n=ans[1].length;
	var count=[0,0,0,0,0,0,0,0,0,0];
	for (var i=1;i<=10; i++) {
		ans[i]=ans[i].filter(function( element ) {
		   return element !== undefined;
		});	
		for (var j = 0; j< 5; j++) {
			if(ans[i][j]==null||ans[i][j]==undefined||ans[i][j]==0)
			{
				console.log("null");
			}
			else
			{
			document.getElementById(id[i-1][j]).innerHTML=ans[i][j];
			document.getElementById(id[i-1][j]).value=ans[i][j];				

			}
		}
	}
	for (var i = 1; i <=10; i++) {
	document.getElementById(i).innerHTML=q[i];
	}

	document.getElementById("prev").style.background="#FAFAFA";
	function Solveq1(x)
	{
	count[0]=count[0]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq1=document.getElementById(x).value;
	if (count[0]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq2(x)
	{
	count[1]=count[1]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq2=document.getElementById(x).value;
	if (count[1]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq3(x)
	{
	count[2]=count[2]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq3=document.getElementById(x).value;
	if (count[2]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq4(x)
	{
	count[3]=count[3]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq4=document.getElementById(x).value;
	if (count[3]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq5(x)
	{
	count[4]=count[4]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq5=document.getElementById(x).value;
	if (count[4]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq6(x)
	{
	count[5]=count[5]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq6=document.getElementById(x).value;
	if (count[5]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq7(x)
	{
	count[6]=count[6]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq7=document.getElementById(x).value;
	if (count[6]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq8(x)
	{
	count[7]=count[7]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq8=document.getElementById(x).value;
	if (count[7]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq9(x)
	{
	count[8]=count[8]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq9=document.getElementById(x).value;
	if (count[8]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function Solveq10(x)
	{
	count[9]=count[9]+1;
	document.getElementById(x).style.background="#9AD9DB";
	ansq10=document.getElementById(x).value;
	if (count[9]==1) {
		y=x
		}
	else{
		document.getElementById(y).style.background="#3498DB";
		y=x
	}
	}
	function answer() {
		// body...
		var pans=[ansq1,ansq2,ansq3,ansq4,ansq5,ansq6,ansq7,ansq8,ansq9,ansq10];
		var total=0;
		var l=a.length;
		for (var i = 1; i<=l; i++) {
			if (pans[i-1]==null||pans[i-1]==undefined||pans[i-1]==0) {
				console.log(total);
			}
			else if (a[i]==pans[i-1]) {
				total=total+1;
			}
		}
		var per=(total/10)*100;
		var d = new Date();
	  	d.setTime(d.getTime() + (2*24*60*60*1000));
	  	var expires = "expires="+ d.toUTCString();
	  	document.cookie = "total" + "=" + total+";";
	  	document.cookie=expires + ";path=/";
		document.getElementById("tot").innerHTML=per;
		document.getElementById("perc").innerHTML=per;
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

	function next() {
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
	function prev()
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
		document.getElementById("results").disabled=true;
		var sec         = ct*60,
    countDiv    = document.getElementById("timer"),
    secpass,
    countDown   = setInterval(function () {
        'use strict';
        
        secpass();
    }, 1000);
function secpass() {
    'use strict';
    
    var min     = Math.floor(sec / 60),
        remSec  = sec % 60;
    
    if (remSec < 10) {
        
        remSec = '0' + remSec;
    
    }
    if (min < 10) {
        
        min = '0' + min;
    
    }
    countDiv.innerHTML = min + ":" + remSec;
    
    if (sec > 0) {
        
        sec = sec - 1;
        
    } else {
        
        clearInterval(countDown);
        
        countDiv.innerHTML = 'Time is up';
        document.getElementById("buttn").style.background="#2B4F81";
		document.getElementById("buttn").disabled=true;
        
    }
}
document.getElementById('buttn').onclick=function(){
	var cval=confirm("Do you want to submit?");
	if (cval==true) {
	clearInterval(countDown);
	countDiv.innerHTML = 'Thank you!';
	alert("Your exam has been submitted successfully");
	answer();
	document.getElementById("results").disabled=false;
	document.getElementById("buttn").style.background="#2B4F81";
	document.getElementById("buttn").disabled=true;
	document.getElementById("container").style.display="none";
	document.getElementById("finished").style.display="block";
	window.open("http://localhost/iwp/Technetics-full/results.php","_self");
	}
};
}
