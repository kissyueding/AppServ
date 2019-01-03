window.onload=function () {
    var img=document.getElementsByTagName('img');
    for(var i=0;i<img.length;i++){
        img[i].onclick=function(){
            _open(this.src);
            var str=this.src;
            var index = str .lastIndexOf("\/");
            str  = 'face/'+str .substring(index + 1, str .length);
            _value(str);
        }
    }
}
function _open(src) {
    //opener表示父窗口.document表示文档
    var faceming=opener.document.getElementById('faceimg');
    faceming.src=src;
}

function _value(value) {
    var face=opener.document.getElementById('faced');
    face.value=value;
}