//等网页加载完毕执行
window.onload=function () {
    var faceming=document.getElementById('faceimg');
    faceming.onclick=function () {
        window.open('face.php','face','width=400,height=400,scrollbars=1')
    };
}