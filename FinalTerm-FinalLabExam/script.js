function Register(){
  //alert('1');
	var Id=document.getElementById('id').value;
	var Pass = document.getElementById('pass').value;
	var Cpass = document.getElementById('cpass').value;
	var Name = document.getElementById('name').value;
	var Email = document.getElementById('email').value;
	var userType = document.getElementById('type').value;
  //var userType = tp.options[tp.selectedIndex].text;
  //alert('1');
    if(Id==""||Pass==""||Cpass==""||Name==""||Email=="")
    {
        document.getElementById('msg').innerHTML="Please Provide All Informations";
    }
    else
    {
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "regCheck.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id="+Id+"&pass="+Pass+"&name="+Name+"&email="+Email+"&type="+userType);
      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200) 
        { 
          alert(this.responseText)
          /*if(this.responseText=="true")
          {
              window.location == "login.php";
          } 
          else
            document.getElementById('msg').innerHTML="Registration Failed";*/
        }
      };
    }

}

function login()
{
	var Id = document.getElementById('id').value;
  var Pass = document.getElementById('pass').value;

  if(uname==""||pass=="")
  {
    var msg = document.getElementById('msg');
    msg.innerHTML = "Please provide valid info";
  }
  else
  {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "loginCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+Id+"&pass="+Pass);
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById('msg').innerHTML=this.responseText;
        if(this.responseText==1)
        {
          window.location = "adminDash.php";
        }
        else
        {
          document.getElementById('msg').innerHTML="Login Failed";
        }
        //alert(this.responseText);
      }
    };
  }
}


}