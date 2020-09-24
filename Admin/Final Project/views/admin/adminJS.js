if ((typeof(document.getElementById('s_list')) != 'undefined' && document.getElementById('s_list') != null) && (typeof(document.getElementById('s_list')) != 'undefined' && document.getElementById('s_list') != null)){
document.getElementById('s_list').style.display = "none";
document.getElementById('t_list').style.display = "none";
}
if (typeof(document.getElementById('full')) != 'undefined' && document.getElementById('full') != null){
	document.getElementById('full').style.display = "none";
}
if (typeof(document.getElementById('notice')) != 'undefined' && document.getElementById('notice') != null){
	document.getElementById('notice').style.display = "none";
}

if (typeof(document.getElementById('sres')) != 'undefined' && document.getElementById('sres') != null){
	document.getElementById('sres').style.display = "none";
}



function openStudentList(){
	document.getElementById('t_list').style.display = "none";


	        var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../../php/joinlistController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('stat=yes');

			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('s_list').style.display = "block";
					document.getElementById('s_list').innerHTML =  this.responseText;

				}
			}


}

function openTeacherList(){
	document.getElementById('s_list').style.display = "none";

	        var xhttp2 = new XMLHttpRequest();
			xhttp2.open('POST', '../../php/joinlistController.php', true);
			xhttp2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp2.send('tstat=yes');

			xhttp2.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('t_list').style.display = "block";
					document.getElementById('t_list').innerHTML =  this.responseText;

				}
			}

}

function createClass(){
	//document.getElementById('sres').innerHTML.style.display = "none";
	var s = 'yes';
	error =  false;

	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;

	if((c=="")){
		document.getElementById('ci_c').innerHTML= "Class cannot be empty";
		error = true;

	}
	if(session==""){
		document.getElementById('ci_ses').innerHTML= "Session cannot be empty";
		error = true;
	}
	if(section==""){
		document.getElementById('ci_sec').innerHTML= "Section cannot be empty";
		error = true;
	}
	if(subject==""){
		document.getElementById('ci_sub').innerHTML= "Session cannot be empty";
		error = true;
	}
	if(error){

	}else{


		    var xhttp3 = new XMLHttpRequest();
			xhttp3.open('POST', '../../php/classController.php', true);
			xhttp3.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp3.send('stat='+s+'&class='+c+'&session='+session+'&section='+section+'&subject='+subject);

			xhttp3.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('res').innerHTML =  this.responseText;

				}
			}
		}

}

function deleteClass(){
	//document.getElementById('sres').innerHTML.style.display = "none";
	error =  false;
	var s = 'yes';
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;

	if((c=="")){
		document.getElementById('ci_c').innerHTML= "Class cannot be empty";
		error = true;

	}
	if(session==""){
		document.getElementById('ci_ses').innerHTML= "Session cannot be empty";
		error = true;
	}
	if(section==""){
		document.getElementById('ci_sec').innerHTML= "Section cannot be empty";
		error = true;
	}
	if(subject==""){
		document.getElementById('ci_sub').innerHTML= "Session cannot be empty";
		error = true;
	}
	if(error){
	}else{

			    var xhttp4 = new XMLHttpRequest();
			xhttp4.open('POST', '../../php/classController.php', true);
			xhttp4.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp4.send('stat1='+s+'&class='+c+'&session='+session+'&section='+section+'&subject='+subject);

			xhttp4.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('res').innerHTML =  this.responseText;

				}
			}
		}
		}
function editClass(){
	var s = 'yes';
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;

			    var xhttp5 = new XMLHttpRequest();
			xhttp5.open('POST', '../../php/classController.php', true);
			xhttp5.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp5.send('stat2='+s+'&class='+c+'&session='+session+'&section='+section+'&subject='+subject);

			xhttp5.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('res').innerHTML =  this.responseText;

				}
			}
}

function searchClass(){
	//document.getElementById('sres').style.display.innerHTML = "none";
	var s = 'yes';
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;

			var xhttp6 = new XMLHttpRequest();
			xhttp6.open('POST', '../../php/classController.php', true);
			xhttp6.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp6.send('stat3='+s+'&class='+c+'&session='+session+'&section='+section+'&subject='+subject);

			xhttp6.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('res').innerHTML =  this.responseText;
					if(document.getElementById('res').innerHTML=="Class exists. Successfully found."){
					document.getElementById('sres').style.display = "block";
				}

				}
			}
}

function findTeacher(){

	var xhttp7 = new XMLHttpRequest();
			xhttp7.open('POST', '../../php/classController.php', true);
			xhttp7.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp7.send('stat4=yes');

			xhttp7.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('tlist').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}

}

function addTeacherToClass(){
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;
	var t = document.getElementById('tid').value;
		var xhttp8 = new XMLHttpRequest();
			xhttp8.open('POST', '../../php/classController.php', true);
			xhttp8.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp8.send('stat5=yes&class='+c+"&session="+session+"&section="+section+"&subject="+subject
				+'&tid='+t);

			xhttp8.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('ans').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}

}

function findStudent(){
		var xhttp9 = new XMLHttpRequest();
			xhttp9.open('POST', '../../php/classController.php', true);
			xhttp9.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp9.send('stat6=yes');
			xhttp9.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('slist').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}

}

function addStudentToClass(){
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;
	var s = document.getElementById('sid').value;
		var xhttp8 = new XMLHttpRequest();
			xhttp8.open('POST', '../../php/classController.php', true);
			xhttp8.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp8.send('stat7='+'yes'+'&class='+c+"&session="+session+"&section="+section+"&subject="+subject
				+'&sid='+s);

			xhttp8.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('sans').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}
}

function openClass(){
	var xhttp9 = new XMLHttpRequest();
			xhttp9.open('POST', '../../php/classController.php', true);
			xhttp9.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp9.send('stat8='+'yes');

			xhttp9.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('full').style.display = "block";
					document.getElementById('clist').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}
}

function openNotice(){
	document.getElementById('clist').style.display = "none";
	var cid =  document.getElementById('c_id').value;
	document.getElementById('notice').style.display = "block";
}

function sendNotice(){
	var cid =  document.getElementById('c_id').value;
	var d = document.getElementById('date').value;
	var f = document.getElementById('from').value;
	var s =document.getElementById('subject').value;
	var n = document.getElementById('msgforg').value;
	//document.getElementById('c_id').value;
		var xhttp10 = new XMLHttpRequest();
			xhttp10.open('POST', '../../php/classController.php', true);
			xhttp10.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp10.send('stat9='+'yes'+'&cid='+cid+'&date='+d+'&from='+f+'&sub='+s+'&notice='+n);

			xhttp10.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('full').style.display = "block";
					document.getElementById('msgreply').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}

}

function removeStudent(){
	var c = document.getElementById('s_class').value;
	var session = document.getElementById('s_session').value;
	var section = document.getElementById('s_section').value;
	var subject = document.getElementById('s_subject').value;
	var s = document.getElementById('sid').value;
		var xhttp11 = new XMLHttpRequest();
			xhttp11.open('POST', '../../php/classController.php', true);
			xhttp11.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp11.send('stat10='+'yes'+'&class='+c+"&session="+session+"&section="+section+"&subject="+subject
				+'&sid='+s);

			xhttp11.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('t_list').style.display = "block";
					document.getElementById('sans').innerHTML =  this.responseText;
					//document.getElementById('sres').style.display = "block";


				}
			}
}



function removeValidation(){
	var error = false;
	if((document.getElementById('s_id').value == "")||(document.getElementById('s_id').value == "0")){
		document.getElementById('remove').innerHTML = "Id cannot be empty or zero";
		error = true;
	}
	if((typeof (document.getElementById('s_id').value) != 'number')){
		document.getElementById('remove').innerHTML = "Id must be numeric";
		error = true;
	}
	if(error){
		return false;
	}else{
		return true;
	}
}


	
	
