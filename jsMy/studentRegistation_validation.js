function get(id)
{
    return document.getElementById(id);
}

var idCheck = false;

function uniqueID()
{
    var s_id = get("sid").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status == 200)
        {
            if(this.responseText == "true")
            {
                get("errsid").innerHTML="ID number exists";
                get("errsid").style.color="red";
                
                idCheck = true;
            }
            else
            {
                get("errsid").innerHTML="ID is Ok OK";
                get("errsid").style.color="green";

                idCheck = false;
            }
        }
    };

    xhttp.open("get","studentidcheckajax.php?id="+s_id,true);
    xhttp.send();



}











function validateStudent()
{
    var sid = get("sid").value;
    var firstname = get("firstname").value;
    var lastname = get("lastname").value;
    var fathername = get("fathername").value;
    var mothername = get("mothername").value;
    var email = get("email").value;
    var fatherphnext = get("fatherphnext").value;
    var fatherphone = get("fatherphn").value;
    var motherphnext = get("motherphnext").value;
    var motherphone = get("motherphn").value;
    var country = get("country").value;
    var birthno = get("birthno").value;
    var cpass = get("cpass").value;
    var rpass = get("rpass").value;
    var gender = get("gender").value;

    var validate = true;

    if(sid=="")
    {
        validate =false;
        get("sid").focus();
       // get("errsid").innerHTML="Unique id required";
    }
    else if(idCheck)
    {
        validate =false;
        get("sid").focus();
    }
    else if(firstname=="")
    {
        validate =false;
        get("firstname").focus();

    }
    else if(lastname=="")
    {
        validate =false;
        get("lastname").focus();
    }
    else if(gender=="")
    {
        validate =false;
        get("gender").focus();
    }
    else if(fathername=="")
    {
        validate =false;
        get("fathername").focus();
    }
    else if(mothername=="")
    {
        validate =false;
        get("mothername").focus();
    }
    else if(email=="")
    {
        validate =false;
        get("email").focus();
    }
    else if(fatherphnext=="")
    {
        validate =false;
        get("fatherphnext").focus();
    }
    else if(fatherphone=="")
    {
        validate =false;
        get("fatherphn").focus();
    }
    else if(motherphnext=="")
    {
        validate =false;
        get("motherphnext").focus();
    }
    else if(motherphone=="")
    {
        validate =false;
        get("motherphn").focus();
    }
    else if(country=="")
    {
        validate =false;
        get("country").focus();

    }
    else if(birthno=="")
    {
        validate =false;
        get("birthno").focus();
    }
    else if(cpass=="")
    {
        validate =false;
        get("cpass").focus();

    }
    else if(rpass=="")
    {
        validate =false;
        get("rpass").focus();
    }
    else if(cpass!=rpass)
    {
        validate =false;
        get("cpass").focus();

    }
























    return validate;
}