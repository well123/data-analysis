<div id="weixindialog"></div>
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

                redirect_uri: "http://www.baidu.com",

                state: "243",

                style: "",

                href: ""

            });
        }
    })

</script>