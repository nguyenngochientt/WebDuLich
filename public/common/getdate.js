function getdate_(){
    var d=new Date();
    return d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear();
}

document.getElementById("pageheader").innerHTML = "Trang quản trị của admin ";
document.getElementById("date").innerHTML = getdate_();
