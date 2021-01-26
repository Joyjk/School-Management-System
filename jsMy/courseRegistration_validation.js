function get(id)
{
    return document.getElementById(id);
}

var idCheck = false;

function uniqueCID()
{
    var c_id = get("cid").value;
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
                get("errsid").innerHTML="ID is Ok";
                get("errsid").style.color="green";

                idCheck = false;
            }
        }
    };

    xhttp.open("get","courseIdCheckerAjax.php?id="+c_id,true);
    xhttp.send();


}




function validateCourse()
{
    var c_id = get("cid").value;
    var cname = get("name").value;
    var t_id  = get("tid").value;

    



    var validate = true;

    if(c_id=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("cid").focus();
    }
    else if(idCheck)
    {
        validate =false;
        get("cid").focus();
    }
    else if(cname=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("name").focus();
    }
    else if(t_id=="")
    {
        validate = false;    
        //get("errID").innerHTML="Unique ID required";
        get("tid").focus();
    }



    


    return validate;



    
}



