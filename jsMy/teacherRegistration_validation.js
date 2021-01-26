function get(id)
{
    return document.getElementById(id);
}





var idCheck = false;

function uniqueTID()
{
    var t_id = get("id").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status == 200)
        {
            if(this.responseText == "true")
            {
                get("errID").innerHTML="ID number exists";
                get("errID").style.color="red";
                
                idCheck = true;
            }
            else
            {
                get("errID").innerHTML="ID is Ok OK";
                get("errID").style.color="green";

                idCheck = false;
            }
        }
    };

    xhttp.open("get","teacheridcheckajax.php?id="+t_id,true);
    xhttp.send();



}


function validateTeacher()
{
    var tid = get("id").value;
    var firstname = get("firstname").value;
    var lastname = get("lastname").value;
    var fathername = get("fathername").value;
    var mothername = get("mothername").value;
    var email = get("email").value;
    var phnext = get("phnext").value;
    var phn = get("phn").value;
    var country = get("country").value;
    var nid = get("nid").value;
    var cpass = get("cpass").value;
    var rpass = get("rpass").value;
    var gender = get("gender").value;

    var validate = true;


    if(tid=="")
    {
        validate = false;    
        get("errID").innerHTML="Unique ID required";
        get("id").focus();
    }
    else if(idCheck)
    {
        validate =false;
        get("id").focus();
    }
    else if(firstname=="")
    {
        validate = false;    
        get("firstname").focus();
    }
    else if(lastname=="")
    {
        validate = false;    
        get("lastname").focus();
    }
    else if(gender=="")
    {
        validate = false;    
        get("gender").focus();
    }
    else if(fathername=="")
    {
        validate = false;    
        get("fathername").focus();
    }
    else if(mothername=="")
    {
        validate = false;    
        get("mothername").focus();
    }
    else if(email=="")
    {
        validate = false;    
        get("email").focus();
    }
    else if(phnext=="")
    {
        validate = false;    
        get("phnext").focus();
    }
    else if(phn=="")
    {
        validate = false;    
        get("phn").focus();
    }
    else if(country=="")
    {
        validate = false;    
        get("country").focus();
    }
    else if(nid=="")
    {
        validate = false;    
        get("nid").focus();
    }
    else if(cpass=="")
    {
        validate = false;    
        get("cpass").focus();
    }
    else if(rpass=="")
    {
        validate = false;    
        get("rpass").focus();
    }
    else if(cpass!=rpass)
    {
        validate = false;    
        get("cpass").focus();

    }

    console.log(phnext+"    "+country);







    return validate;



}