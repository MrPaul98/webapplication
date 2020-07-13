function validateform()
{
  
  var nam =document.getElementById("name").value;  
  var mn =document.getElementById("middlename").value;
  var pn =document.getElementById("phonenumber").value;
  var ln =document.getElementById("lastname").value;
  var mail =document.getElementById("email").value;
  var pn =document.getElementById("phonenumber").value;
  var un =document.getElementById("username").value;
  var pass =document.getElementById("password").value;
  var cpass =document.getElementById("cpassword").value;
  var address =document.getElementById("address").value;
  var pin =document.getElementById("pin").value;
 // var  sl = document.getElementById("statelist");
if(nam =="" || nam.length>=15 || ! isNaN(nam))
{
  alert("enter proper name");
   return false;
}
else if(! isNaN(mn))
{
  alert("enter proper middlename");
   return false;
}
else if(ln =="" || ln.length>=5 || ! isNaN(ln))
{
  alert("enter proper lastname");
   return false;
}
else if( mail =="" || mail.indexOf('@')<=0 ||( mail.charAt(mail.length-4)!='.' && mail.charAt(mail.length-3)!='.'))
{  
   alert("Enter a valid email ");
   return false;
}
else if(pn=="" || pn.length!=10 || isNaN(pn))
{
   alert("Entered valid number");
   return false;
}
else if(un=="" || un.length>=20 || !isNaN(un))
{
  alert("Enter username all character and it should be less 20");
  return false;
} 
else if(pass== "" || cpass=="" || pass!=cpass || pass.length<=8)
{
 alert("Enter the same password for both and not null length should be greater then 8");
 return false;
}
else if(address=="" || address.length>=30 || !isNaN(address))
{
  alert("Enter address all character and it should be less 30");
  return false;
} 
else if(pin=="" || pin.length!=6 || isNaN(pin))
{
  alert("Enter only number should be size of 6");
  return false;
} 
else if(document.statelist.selectedIndex==0) {
            
            alert("Please select an state!");
            return false;
        }

}
