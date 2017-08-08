<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>testdetails </title>
    <link rel="stylesheet" href="">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
</head>
<body>
<div id="testss">
<div id="weixindialog"></div></div></body>
<script>
    var app = new Vue({
        el:"#testss",
        data:{
            checkOther:true,
            message:""
        },
        mounted() {
            var obj = new WxLogin({

                id:"weixindialog",

                appid: "wx09714e7133985d6e",

                scope: "snsapi_login",

                redirect_uri: "http://www.haitun.hk",

                state: "243",

                style: "",

                href: ""

            });
        }
    })

</script>