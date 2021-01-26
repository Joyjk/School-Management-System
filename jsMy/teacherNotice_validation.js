function get(id)
    {
        return document.getElementById(id);
    }


function validate1()
{
    var id = get("id").value;
    var name = get("name").value;
    var c_id = get("inputGroupSelect01").value;
    var details = get("details").value;
    var t_id = get("t_id").value;

    var validate = true;
    if(id=="")
    {
        validate = false;
        
        
        get("id").focus();
    }

    else if(name=="")
    {
        validate = false;
        
        get("errName").innerHTML = "Name required";
        get("name").focus();
    }
    else if(c_id=="")
    {
        validate = false;
        
        get("inputGroupSelect01").focus();
    }
    else if(details=="")
    {
        validate = false;
        
        get("details").focus();
    }
    else if(t_id=="")
    {
        validate = false;
        get("errName").innerHTML = "T_id not found";
        
    }
    
        return validate;



}