function get(id)
    {
        return document.getElementById(id);
    }


function validateNotes()
{
    var id = get("id").value;
    var name = get("name").value;
    
    var validate = true;
    if(id=="")
    {
        validate = false;
        
        
        get("id").focus();
    }

    else if(name=="")
    {
        validate = false;
        
       // get("errName").innerHTML = "Name required";
        get("name").focus();
    }
   
    
        return validate;



}