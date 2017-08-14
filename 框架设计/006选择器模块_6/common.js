/**
 * Created by Administrator on 2017/8/11.
 */
//对push的封装
     var myPush = function(target,els){
         var j = target.length,i=0;
         while((target[j++]=els[i++])){}
         target.length=j-1;
};
//对get的封装
var getTag=function (tag,context,results) {
    results=results||[];
    try {
        results.push.apply(results, context.getElementsByTagName(tag));
    }
    catch(e){
        myPush(results,context.getElementsByTagName(tag));
    }
    return results;
};
var getId=function(id,results){
    results=results||[];
    results.push.call(results,document.getElementById(id));
    return results;
};
var getClass = function(className,context,results){
    results = results||[];
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
    if(m) {
        if (context.nodeType) {
            context = [context];
        }
        if(typeof context=='string'){
            context=get(context);
        }
        each(context, function (i, v) {
            if (m[1]) {
                results = getId(m[1], results);
            }
            else if (m[2]) {
                results = getClass(m[2], v, results);
            }
            else if (m[3]) {
                results = getTag(m[3], v, results);
            }
            else if (m[4]) {
                results = getTag(m[4], v, results);
            }

        })
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
