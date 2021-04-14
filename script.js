var jockey_socks=149;
var jockey_tshirt=250;
var socks_q=0;
var tshirt_q=0;
var sockspriceshow="";
var tshirtpriceshow="";

document.getElementById("socks").addEventListener("keyup",function(){
    socks_q=this.value;
    sockspriceshow="<tr><td>JOCKEY SOCKS(MEN-ANKLE)</td><td>"+jockey_socks+"</td><td>"+socks_q+"</td><td>"+jockey_socks*socks_q+"</td></tr>";
    billshow();
});
document.getElementById("tshirt").addEventListener("keyup",function(){
    tshirt_q=this.value;
    tshirtpriceshow="<tr><td>JOCKEY-TSHIRT(REGULAR FIT)</td><td>"+jockey_tshirt+"</td><td>"+tshirt_q+"</td><td>"+jockey_tshirt*tshirt_q+"</td></tr>";
    billshow();
});
function billshow(){
    document.getElementById("bill").innerHTML=sockspriceshow+tshirtpriceshow;
    document.getElementById("amount").innerHTML=socks_q*jockey_socks+tshirt_q*jockey_tshirt;
}


