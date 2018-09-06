// 创建XMLHTTPRequest对象
function getXMLHttpRequest(){
    var xmlhttp = null;
    try {
        xmlhttp= new XMLHttpRequest();
    } catch (e) {
    }
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    return xmlhttp;
}