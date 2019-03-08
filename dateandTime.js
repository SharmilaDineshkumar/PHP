alert("inside dateandtime method");
function setDateandTime()
{
    alert("inside dateandtime method");
    var d = new Date();
    var dvalue=d.toUTCString();
    alert(dvalue);
    document.getElementById("dateTime").value = dvalue;
}