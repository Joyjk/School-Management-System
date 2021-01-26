function get(id)
{
    return document.getElementById(id);
}
/*
var idCheck = false;

function oldPass()
{
    var oldpassw = get("oldPass").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status == 200)
        {
            if(this.responseText == "true")
            {
                get("sms").innerHTML="ID number exists";
                get("sms").style.color="red";
                
                idCheck = true;
            }
            else
            {
                get("sms").innerHTML="ID is Ok";
                get("sms").style.color="green";

                idCheck = false;
            }
        }
    };

    xhttp.open("get","adminPassChecker_Ajax.php?id="+oldpassw,true);
    xhttp.send();


}



*/






function validateNewPass()
{
   // var oldpass = get("oldPass").value;
    var newpass = get("newPass").value;
    var repass  = get("rePass").value;

    var validate = true;

/*
    if(oldpass=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("oldPass").focus();
    }
    else if(idCheck)
    {
        validate =false;
        get("oldPass").focus();
    }*/
     if(newpass=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("newPass").focus();
    }
    else if(repass=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("rePass").focus();
    }
    else if(newpass!=repass)
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("newPass").focus();

    }

    return validate;



    
}