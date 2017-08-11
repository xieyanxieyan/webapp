/**
 * Created by Administrator on 2017/8/11.
 */
//对get的封装
var getTag=function (tag,context,results) {
    results=results||[];
    context = context||document;
    results.push.apply(results,document.getElementsByTagName(tag));
    return results;
};
var getId=function(id,results){
    results=results||[];
    results.push.call(results,document.getElementById(id));
    return results;
};
var getClass = function(className,context,results){
    results = results||[];
    context = context||document;
    var  tempArr,i;
    //首先判断系统所提供的方法是否提供该功能
    if(document.getElementsByClassName){
        results.push.apply(results,document.getElementsByClassName(className))
    }else{
        //自定义实现，首先获得所有元素，然后再元素中找到符合要求的驾到数组中
        tempArr = getTag("*",context);
        each(tempArr,function(i,v){
            if((' '+v.className+' ')
                    .indexOf(' '+className+' ') != -1){
                results.push(v);
            }
        })
    }
    return results;
};
var get=function(selector,context,results){
    results=results||[];
    context = context||document;
    var rquickExpr = /^(?:#([\w-]+)|\.([\w-]+)|([\w]+)|(\*))$/,
        m=rquickExpr.exec(selector);
    if(m){
        if(m[1]){
            results=getId(m[1],results);
        }
        else if(m[2]){
            results = getClass(m[2],context,results);
        }
        else if(m[3]) {
            results = getTag(m[3],context,results);
        }
        else if(m[4]){
            results = getTag(m[4],context,results);
        }
    }
    return results;

}
//对each方法的封装
var each = function(arr,fn){
    for( var i=0;i<arr.length;i++){
//            eval(string);
        if(fn.call(arr[i],i,arr[i])===false){
            break;
        };
    }
};
