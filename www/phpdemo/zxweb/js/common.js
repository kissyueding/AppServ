
function poster(type,dataType,url,async,data,successfn,errorfn){
    $.ajax({
        //几个参数需要注意一下
        type: type,//方法类型
        dataType: dataType,//预期服务器返回的数据类型
        url: 'http://localhost:8080/phpdemo/zxweb/'+url,
        async:async,//开启异步和同步请求
        data: data,
        success: function (res) {
            successfn(res)
        },
        error : function(res) {
            console.log("cuowu1")
        }
    });
}



function zk(){
    // nav收缩展开
    $('.navMenu li a').on('click',function(){
        var parent = $(this).parent().parent();//获取当前页签的父级的父级
        var labeul =$(this).parent("li").find(">ul")
        if ($(this).parent().hasClass('open') == false) {
            //展开未展开
            parent.find('ul').slideUp(300);
            parent.find("li").removeClass("open")
            parent.find('li a').removeClass("active").find(".arrow").removeClass("open")
            $(this).parent("li").addClass("open").find(labeul).slideDown(300);
            $(this).addClass("active").find(".arrow").addClass("open")
        }else{
            $(this).parent("li").removeClass("open").find(labeul).slideUp(300);
            if($(this).parent().find("ul").length>0){
                $(this).removeClass("active").find(".arrow").removeClass("open")
            }else{
                $(this).addClass("active")
            }
        }

    });
}

//给div赋值
function setValueForDiv(id,content)
{
    var element = document.getElementById(id);
    element.innerHTML = unescape(content);
    if(!element.innerHTML)
    {
        try{
            element.innerHTML = unescape(content);
        }catch(e){}
    }
}


//这是下拉窗
function  xv() {
    var current = 0;
    $(".kjright_top_right").mouseover(function(){
        $("#xla ul").show();
    });
    $(".kjright_top_right").mouseout(function(){
        $("#xla ul").hide();
    });

}

