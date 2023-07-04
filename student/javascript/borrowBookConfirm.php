<script type="text/javascript">

function validation()
{
  var name= document.getElementById("name");
  var code= document.getElementById("code");
  var password= document.getElementById("date");

  //alert("hello");



if(name.value.trim()=="")
{
  document.getElementById("nameErr").innerHTML= "*Name is requied";
  return false;
}
else {

    document.getElementById("nameErr").innerHTML= "";

}

if(code.value.trim()=="")
{
  document.getElementById("codeErr").innerHTML= "*Code is requied";
  return false;
}
else {

    document.getElementById("codeErr").innerHTML= "";

}

if(date.value.trim()=="")
{
  document.getElementById("dateErr").innerHTML= "*Date is requied";
  return false;
}
else {

    document.getElementById("dateErr").innerHTML= "";

}



return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

       document.getElementById("nameErr").innerHTML= "";

  }
}



function checkCode()
{
    var code= document.getElementById("code");

    if(code.value.trim()=="")
    {
      document.getElementById("codeErr").innerHTML= "*Code is requied";
      return false;
    }
    else {

        document.getElementById("codeErr").innerHTML= "";

    }
}

function checkDate()
{

var date= document.getElementById("date");

  if(date.value.trim()=="")
  {
    document.getElementById("dateErr").innerHTML= "*Date is requied";
    return false;
  }
  else {

      document.getElementById("dateErr").innerHTML= "";

  }
}






</script>
