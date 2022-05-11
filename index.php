<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<!--the code in angular-->

<p>Angular</p>

<div ng-app="" ng-init="tp=690; lf=10; cl='#f00'; firstName='ntinos'; lastName='kef'; 		person={firstName:'kon',lastName:'kefal'}; points=[1,12,23,25,56]">

	<div>
		<p>Input something in the input box:</p>
		<p>First name : <input type=text ng-model="lname" placeholder="Enter your name"></p>
		<p>Last name : <input type=text ng-model="fname" placeholder="Enter your name"></p>
		<h1>Hello {{lname}} {{fname}}</h1>
	</div>


	<div>

		<p>Input your values to add the numbers through angular:</p>
		<p>Num1 : <input type=text ng-model="n1" placeholder="Enter your number"></p>
		<p>Num2 : <input type=text ng-model="n2" placeholder="Enter your number"></p>
		<h1>Add nums: {{ (n1/1) + (n2/1) }}</h1>
		<h1>/nums: {{ (n1/1) / (n2/1) }}</h1>

	</div>
	
	<select ng-model="cl">
		<option value="#f00">RED</option>
		<option value="#0f0">Green</option>
		<option value="#00f">Blue</option>
	</select>
	
	<p>Top : <input type=number ng-model="tp"></p>
	<p>left :<input type=number ng-model="lf"></p>
	
	<div style="width:100px; height:100px; background-color: {{cl}}; position:absolute; top: {{tp}}px; left: {{lf}}px;">
	
		<h2>test</h2>
	</div>
	
	<div>
		<p>The name is <span ng-bind="firstName +' '+ lastName"></span></p>
		<p>The name is <span> {{firstName + ' ' + lastName}} </span></p>
		<p>Your name is: <span>{{person.firstName + ' ' + person.lastName}}</span></p>
		<p>the second result is: <span>{{points[1] }}</span></p>
	</div>
	
</div>

<!--The same code in javascript-->
<script>

function test1()

{
	v=document.getElementById('fname').value;
	document.getElementById('dd').innerHTML=v;
	v1=document.getElementById('lname').value;
	document.getElementById('dd1').innerHTML=v1;
	
	
}

</script>
<div style="margin-top:200px;">
<p style="font-size:40pt;">JS</p>
<p>Input something in the input box:</p>
<p>First name:<input type="text" id="fname" onkeyup='test1();' placeholder='Enter your first name here'></p>
<p>Last name:<input type="text" id="lname" onkeyup='test1();' placeholder='Enter your last name here'></p>
<h1>Hello <span id="dd"></span> <span id="dd1"></span></h1>
</div>
</body>
</html>