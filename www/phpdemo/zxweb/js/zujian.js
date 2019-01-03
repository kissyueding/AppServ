/**
 * 只是很少的弹框
 * cs初始化弹框接受传参
 * Dialog初始创建弹框
 * create根据条件创建弹框
 * close关闭弹框
 **/

function cs(width,height,title,mark,dir) {
    this.Dialog(width,height,title,mark,dir)
    }
    //初始化参数
function Dialog(width,height,title,mark,dir){
    this.setting = { //配置参数
        w:width,
        h:height,
        dir:dir,
        title:title,
        mark:mark,
    }
    this.create(this.setting)
}

    //动态创建窗口
function create(a){
    // console.log(a)
    this.oBox = document.createElement('div');
    this.oBox.style.width = a.w;
    this.oBox.style.height = a.h;
    this.oBox.style.background = "#ffffff";
    this.oBox.style.lineHeight=a.h;
    this.oBox.className = "dialog1";
    this.oBox.id='divCell'
    this.oBox.innerHTML = '<div class="title"><span>'+a.title+'</span></div>'
    document.body.appendChild(this.oBox);
    }
    //关闭窗口
function close(){
    var my = document.getElementById("divCell");
    if (my != null){
        my.parentNode.removeChild(my);
    }
}
    // //加一层纱
    // Dialog.prototype.mark = function(){
    //     this.oMark = document.createElement('div');
    //     this.oMark.className = "mark";
    //     document.body.appendChild(this.oMark);
    // }
    //
    // //窗口大小和位置
    // Dialog.prototype.dir = function(){
    //     this.oBox.style.width = this.setting.w + 'px';
    //     this.oBox.style.height = this.setting.h +'px';
    //     if(this.setting.dir == 'center'){
    //         this.oBox.style.left = (vieww() - this.oBox.offsetWidth)/2 + "px";
    //         this.oBox.style.top = (viewh() - this.oBox.offsetHeight)/2 + "px";
    //     }
    //
    //     if(this.setting.dir == 'right'){
    //         this.oBox.style.left = vieww() - this.oBox.offsetWidth + "px";
    //         this.oBox.style.top = viewh() - this.oBox.offsetHeight + "px";
    //     }
    // }
    //
    // //关闭窗口
    // Dialog.prototype.close = function(){
    //     var oClose = this.oBox.getElementsByClassName('close')[0];
    //     var _this = this;
    //     oClose.onclick = function(){
    //         document.body.removeChild( _this.oBox);
    //         if(_this.setting.mark){
    //             document.body.removeChild( _this.oMark);
    //         }
    //     }
    // }
    //
    // function vieww(){
    //     return  document.documentElement.clientWidth;
    // }
    //
    // function viewh(){
    //     return   document.documentElement.clientHeight;
    // }
    // //      拷贝
    // function extend(obj1,obj2){
    //     for(var i in obj2){
    //         obj1[i] = obj2[i];
    //     }
    // }

