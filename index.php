<?php 
$charge = round(1*0.01,2);//手续费
echo $charge;die;

//99乘法表
for ($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$j*$i=".$i*$j." ";
    }
    echo '<br>';
}
die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> 网银在支付测试 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="editplus" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- 引入css文件 -->
    <link rel="stylesheet" type="text/css" href="" />
    <!-- 引入js文件 -->
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>

    <!-- css代码 -->
    <style type="text/css">
    input{ width:500px;}
    </style>
</head>

<!--  include_once './AesMcrypt.php';
$partner_id = '1818001000003453';//合作伙伴ID
$method = 'yumei.trade.create.partner.by.web';//API接口名称
$v = '1.1';//API协议版本，固定值：1.1
$timestamp = date('Y-m-d H:i:s',time());//时间
$secretkey = 'MIICXAIBAAKBgQCFHLF+sXfuilAJfUZJBcbertc10OnpbVJ/vGTsPevUp8mI5QfN'
.'/29Q7w37VWef+DD12MoDlrLfATuZKYUZvdtbGh91EYk0KTGq2ua+fvrPzWDw2a9J'
.'o7H00RBqYPpKu4WlkHxyrsir191OT6ZOG79lCPfYo5Cf8B1QPGfD0LN+2QIDAQAB'
.'AoGACwqCPnwB8qtOUDsv5UaxZC8kcrZNcKs8uJOr21yXfyAbu1sj9pZFaXUqt7ox'
.'yjcP+JRuzTVmyNCVXPLws13oH9olU5fOaXoPhVznhYRrVkZwmYTXN+J932H7tAI6'
.'IMpA3wK1Kc58vcQC4FboXKwWkjLmglA25YrA6Xq0+WSqGAECQQCFyJ4HC/yFFMdr'
.'1ViVTKVt8crqn432hakvBCUXWhHEpmKJ0f9pwXrR4IoqjiAfGUQLtPYJDbZlspW3'
.'NpD9UWkZAkEA/rcEYr31H3NhDyTf+1jkx3gxKx40J7i76Rufnbpz6EoCnz2LxlIn'
.'AQ811rKqexVZntpH0gZQgOH1T5QXDr67wQJAG60zNBYAua9gyigq2Ugv+RzKc9tq'
.'TRO9umJLIheaEWqye/ybsE88j2q6aq9YadaaQym+tITHtSZK3spFGILdEQJBAMGe'
.'KxZH4QF0Og5B8IRmERnTMkTdY7XiBezvU4iZB6xGPfH/3bT2E7IJdtpp249OLl7C'
.'/B8ZL66YlFlWb6SEtcECQCXU1aWzO9j4AHVyn6C1GFP731Oa4MPQzh2o3rHITNaN'
.'wj4Yf6KslJp3UeK6tbQcN2qNCE7XBkBN4e5FK4xPong=';//签名密钥
$publickey = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCOxOjh/1dxibWJumJThn8OkrKgTWMsCpy/5tLQ52oDyahvbLu2e7eNOj4+06clOKJReE7touHsTpNxh7ZCNCUEhRxQbsBF0KELjhaRHs2QGVtI4KDofsFhHG/6zHnNo1RP6jsfBFnZENo3PCbT6O0wdOyS1Yg6vYJJM7LIaiT5gQIDAQAB';//公钥
$random_key = mt_rand(10000000,99999999).mt_rand(10000000,99999999);//随机16位

$outtradeno = date('YmdHis');//外部订单号
$totalfee = '10';//交易金额
$selleruserid = '1818001000003453';
$buyeruserid = '15680015972';
$outtradecreated = date('YmdHis');
$isnewbuyer = false;
$title = 'hahah';
$memo = 'lala';
$detailurl = './detail.php';//商户系统订单详情地址
$returnurl = './return.php';//完成支付后，收银台跳转地址
$notifyurl = './notify.php';//异步通知地址
$jumptyoe = 'WEB';//页面跳转方式
$content = "{
                'randomKey':$random_key,
                'outTradeNo':$outtradeno,
                'totalFee':$totalfee,
                'sellerUserId':$selleruserid,
                'buyerUserId':$buyeruserid,
                'outTradeCreated':$outtradecreated,
                'isNewBuyer':$isnewbuyer,
                'title':$title,
                'memo':$memo,
                'detailUrl':$detailurl,
                'returnUrl':$returnurl,
                'notifyUrl':$notifyurl,
                'jumpType':$jumptyoe,
           }";
// $aes = new AESMcrypt(true);
$aes = new AESMcrypt($bit = 128, $key = 'abcdef1234567890', $iv = '0987654321fedcba', $mode = 'cbc');
$biz_content = $aes->encrypt($content,$random_key);//加密内容
$sign_method = 'md5';
$v_md5info = md5('secretbiz_content'.$biz_content.'partner_id' . $partner_id.'random_key' . $random_key .'secret');
$sign = strtoupper($v_md5info);//签名
echo 'md5值：' . $sign;  -->

<body>
<form action="http://gw.yumeitech.com.cn/mapi/gateway.htm" method="post">
  <!--   版本：<input type="text" name="v" value="<?php echo $v;?>" /><br />
   签名方法： <input type="text" name="sign_method" value="<?php echo $sign_method;?>" /><br />
  时间戳：  <input type="text" name="timestamp" value="<?php echo $timestamp;?>" /><br />
  合作伙伴号：  <input type="text" name="partner_id" value="<?php echo $partner_id;?>" /><br />
 签名值：   <input type="text" name="sign" value="<?php echo $sign;?>" /><br />
  签名秘钥：  <input type="hidden" name="secretKey" value="<?php echo $secretkey;?>" /><br />
    公钥： <input type="text" name="publicKey" value="<?php echo $publickey;?>" /><br />
   biz_content：  <input type="text" name="biz_content" value="<?php echo $biz_content;?>" /><br />
  接口名称：   <input type="text" name="method" value="<?php echo $method;?>" /><br />
      -->
    <input type="submit" value="立即支付" />
</form>

</body>
<!-- javascript代码 -->
<script type="text/javascript">

</script>
</html>
