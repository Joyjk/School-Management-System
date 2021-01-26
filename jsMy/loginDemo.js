$("#login").click(function(){


    var name = $("#udid").val();
    var pass = $("#udpass").val();
    var count = 0;

    if(name==""&&pass=="")
    {
        alert("Please Enter User ID and Password");
    }
    else
    {
        if(name=="Joy"&&pass=="1234")
        {
            count = 1;
        }
        else if(name=="Sumon"&&pass=="9876")
        {
            count = 2;
            //window.location.replace("../Other/404page.html");
        }
        else if(name=="Durjoy"&&pass=="3333")
        {
            count = 3;
        }
        else
        {
            count=0;
        }
    }

    if(count==1)
    {
            window.location.replace("../AdminDashboard/DashboardAdminOverview.html");
    }
    else if(count==2)
    {
        window.location.replace("../StudentDashboard/Home.html");
    }
    else if(count==3)
    {
        window.location.replace("../Teacher/tem.html");
    }
    else
    {
        alert("Error User ID or Password");
    }

    
});