<html>
<head>
<meta charset="utf-8">
<title>PS4 Offline Host! V1.3 By Ali Madhi</title>
<style>
body{background-color:#2e8b57;background-size:cover;color:white;font-size:20px;text-align:center;margin:0;overflow:hidden;}
.msgs{
background-color:#2e8b57;
height:40px;
border:2px solid #839ACA;
font-size:28px;
text-align:center;
color:white;
margin:0;
padding:5px 0 5px 0;
-webkit-font-feature-settings:"tnum";
font-feature-settings:"tnum";
}
</style>
<script>
UA=navigator.userAgent.substring(navigator.userAgent.indexOf("0.00 (")+28,navigator.userAgent.indexOf(") Apple"));
if(UA!="5.05" && UA!="5.07" && UA!="6.72" && UA!="layStation 4/9.00"){alert("Your PS4 Firmware Version Is Not Supported!\n\nOnly Firmware Versions 5.05, 6.72 & 9.00 are supported.");}
var histlength=history.length;history.go(-histlength);
var req = new XMLHttpRequest();
req.open("GET", "http://127.0.0.1:9090/status");
req.send();
req.onload = function(){if (window.applicationCache.status!='0'){sessionStorage.blSERVER="yes";myredirect();}}
req.onerror = function(){if (window.applicationCache.status!='0'){myredirect();}}
function myredirect(){
  if(UA=="layStation 4/9.00"){window.location.replace("900.html");}
}
</script>
</head>
<body>
<div id=msgs class=msgs>Please Wait ...</div>
<embed id=myembed1 frameborder="0" width="100%" height="37px"></embed>
<script>
if (window.applicationCache.status=='0'){
  if(UA=="5.05" || UA=="5.07"){msgs.innerHTML="Installing 5.05 Offline Cache, Please wait ...";cacheLOC="cache505.html";installCache1();}
  if(UA=="6.72"){msgs.innerHTML="Installing 6.72 Offline Cache, Please wait ...";cacheLOC="cache672.html";installCache1();}
  if(UA=="layStation 4/9.00"){msgs.innerHTML="Installing 9.00 Offline Cache, Please wait ...";cacheLOC="cache900.html";installCache1();}
}
function installCache1(){
var Clone=myembed1.cloneNode(true);Clone.setAttribute('src',cacheLOC);myembed1.parentNode.replaceChild(Clone,myembed1);
}
</script>
</body>
</html>
