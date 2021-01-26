function get(id)
{
    return document.getElementById(id);
}
function validateLogin()
{
    var userid = get("userID").value;
    var pass = get("pass").value;

    var validate = true;

    if(userid=="")
    {
        validate =false;
        get("userID").focus();
    }
    else if(pass=="")
    {
        validate =false;
        get("pass").focus();
    }


    return validate;
}