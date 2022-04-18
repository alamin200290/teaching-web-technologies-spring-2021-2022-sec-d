
	//name = "alamin";
	//var name = "alamin";
	//let name = "alamin";
	//const name = "alamin";
	//let students = ['alamin', 1.2, 4, 'alamin@aiub.edu'];

	/*for (let i = 1; i >= 0; i--) {
	
	}*/

/*		if(){

	}else{

	}*/

	//console.log(name);
	//alert(name);
	//document.write('test');

	function f1(){
		let current = document.getElementById('d1').style.left;
		if(current != 0){
			let num = parseInt(current.replace('px',''));
			num += 15;
			current	= num.toString()+"px";
			document.getElementById('d1').style.left = current;
			setTimeout(f1, 500);
			
		}else{
			document.getElementById('d1').style.left = current+"10px";
			setTimeout(f1, 500);	
		}
	}

	function myName(){
		let name = document.getElementById('name').value;

		if(name == ""){
			document.getElementById('msg').innerHTML = "Null value";
		}else{
			document.getElementById('msg').innerHTML = "";
		}
	}

	function ajax(){

		let username = document.getElementById('username').value;
		let http = new XMLHttpRequest();

		let student1 = {
			'id': 11,
			'name': username,
			'email': 'alamin@aiub.edu'
		};

		let json = JSON.stringify(student1);

		//http.open('GET', 'abc.php?uname='+username, true);
		http.open('POST', 'abc.php', true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.send('data='+json);
		document.getElementById('msg').innerHTML = "<img src='download.gif' width='70px' height='70px'>";
		http.onreadystatechange = function(){

			
			if(this.readyState == 4 && this.status == 200){

				//let student = JSON.parse(this.responseText);
				alert(this.responseText);
				//document.getElementById('h1').innerHTML= student.email;
				document.getElementById('msg').innerHTML = "";
			}
		}
	}