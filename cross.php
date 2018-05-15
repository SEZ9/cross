//跨域访问的时候才会存在此字段
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
//指定域名
$allow_origin = array(
        'http://localhost',
);

if(in_array($origin, $allow_origin)){
    header('Access-Control-Allow-Origin:'.$origin); //原始oringin
    header('Access-Control-Allow-Credentials:true');  //证书验证模式
    header('Access-Control-Allow-Headers:"Authorization,Origin, X-Requested-With, Content-Type, Accept'); //请求接收头
    header('Access-Control-Allow-Methods:*'); //允许方法
}else{
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Headers:"Authorization,Origin, X-Requested-With, Content-Type, Accept');
    header('Access-Control-Allow-Methods:*');
}
