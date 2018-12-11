<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092300577543",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAqW2m84deLigEE2MpWfmWh3LMcFlKPyI1Fr8vmY8j9Ou5uAZp56odXOwRLcqLWaMvqeieoj6Q92MXtDGyt56+548CwHbdZJVWHohKS7VPTg2zqCx8mL0hlT5J8oJBC3kAIabC+/ZkjaPD05P9jc/pl7jLJqQRe6X3snxLjhiV6K7GAprVXPO0yJ628q5lC1A84pNgfFN728bMuiq1j8zlbUh9Xq5UjR073dZccbzxTd3uPG6tjm8u1sisUBWLebOl0yR6RQDDnFwIo8IooCpcLq6dApgAqcViTrkoyAu4SK41M+q4wCO+L9HpxE89fXe1ji+qvsu7Nl/diFywrD1rpwIDAQABAoIBADpzEqJ28722nllV30EkApMtvmuP0jZfhbMYN8KhCAWJgOOEiuqZ3FFfOznx4wsEagASuQ89yGMf82B9uKrx/+gAhTGCkDQP9MrJt9/QZ9CEl5MP7df/f2NuPrKDzw63Kp1xW1jzEpNuiLMoHdPbgzmNTcBB36opgn83tBUMVEMV4JTJiBcY1jIELDpcLPhYIVMnY2AI6douzLdYQ+/2c/IKDuHmoJcfUyTD4TfIVFk0Ug2p1FCNQCWGpziPMxye7/Gul/opp88d/+2+kOobm/J07AwjdulO/7EuxvlhL/kYyNCcDa11xnIQvixwAgXbP4+hi7Kr8ZdT4wMb0CpQB/ECgYEA0ZQg//7bBd2tx5nVqdNXhA5b3iAB1qz1GfC3w78i1yF8C+gpmT/YI7F5w9BdhXsVUfESTjgTJ0kClU283/vH0wbRovY0roZB96boW/X7eViDIszbFRKwaMA2GGBKXyUslK3Mev1IgRjNlVZstW05pS7CLNjSbZhZ3FTTHa0XoW8CgYEAzvTa6AJhrcmAGWfbMivgpzf2tqUlC6d90b39i5m4lY3eKhs6L/Eud9y//TFtmJOsZBCea1XX83VI2ZGNz+WpSJVg8SNd2qDvMn7Ayn6VfmmvtkzMBkUAyTp3yOBpF+SNu3TopYeqlcjAL4xl6uFRMemiVQgMb5sKRQOtaH0uTUkCgYEAo08GF/UDvqJq0+pvsBHbVC/MLl5KkHnd1ATbbVD3WSPigXS7VYuGZOnatFcdSPIMPvnXBdR0OFyQAr+8udx8bVgW6yFnE8fSh6Qr09ztxDTQmsF+xgD2Len5PS1rRpC1GHYFrKDJaq9lI0VhGE6waKLy8/dQoc3h1+rRR4Kls0kCgYAfg/IB+rrdOB4lwEcE8OGZFVCgp61ohO0ID6KYq6QMQjpetx65RkUJQ7iI2goSfgp2goFdXwkvreCWITAzRInu37CPiA82x+MlEWBSdcxWH8n+PNuk6MUh36F2GZZnaQqcTUVQT8SOYq/BjePHTOCMdUOfJ0adiEKcF99EVivC4QKBgCMYi+LWYBq7XnpD+PJt6gmFxdIqFT2RmIxc6BK0S4ltIIVFtyYLSH2h6JngLLi5Zf7cXHDpB/o0vZ0HM70xOz0Be/el7JTJjqqm1jPwBu9a3ayQQDSDU2iXPon6YhVe8RuTFEH2BxabU3hv9ZSqD1WGCWBBpF6gIOll0ej+EFTv",
		
		//异步通知地址
		'notify_url' => "http://demo.aliapy.chen666.top/notify_url.php",
		
		//同步跳转
		'return_url' => "http://demo.aliapy.chen666.top/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqW2m84deLigEE2MpWfmWh3LMcFlKPyI1Fr8vmY8j9Ou5uAZp56odXOwRLcqLWaMvqeieoj6Q92MXtDGyt56+548CwHbdZJVWHohKS7VPTg2zqCx8mL0hlT5J8oJBC3kAIabC+/ZkjaPD05P9jc/pl7jLJqQRe6X3snxLjhiV6K7GAprVXPO0yJ628q5lC1A84pNgfFN728bMuiq1j8zlbUh9Xq5UjR073dZccbzxTd3uPG6tjm8u1sisUBWLebOl0yR6RQDDnFwIo8IooCpcLq6dApgAqcViTrkoyAu4SK41M+q4wCO+L9HpxE89fXe1ji+qvsu7Nl/diFywrD1rpwIDAQAB",
);