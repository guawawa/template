<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>互享后台管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
        <script type="text/javascript" src="/Public/Admin/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/Public/Admin/js/messages_zh.js"></script>

        <!--  <link rel="stylesheet" href="/Public/Admin/css/style.css"> -->
        <link rel="stylesheet" href="/Public/Admin/css/loader-style.css">
        <link rel="stylesheet" href="/Public/Admin/css/bootstrap.css">
        <link rel="stylesheet" href="/Public/Admin/css/signin.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/minus.png">
    </head>

    <body> 
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <div class="container">



            <div class="" id="login-wrapper">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div id="logo-login">
                            <h1>互享后台管理系统
                                <span>v1.0</span>
                            </h1>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="account-box"> 
                            <form role="form" id="login" action="" method="post">
                                <div class="form-group">
                                    <label for="inputUsernameEmail">用户名</label>
                                    <input type="text" id="inputUsernameEmail" name="username" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">密码</label>
                                    <input type="password" id="inputPassword" name="password" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputCode">验证码</label>
                                        <input type="text" id="inputCode" name="code"  required class="form-control">
                                        
                                </div>
                                <a href="javascript:void(change_code(this));"  style="width: 48%; display: inline-block;"><img id='code' src="<?php echo U('Login/verify');?>" ></a>
                                <button class="btn btn btn-primary pull-right" type="submit">
                                    登 录
                                </button>
                            </form>
                            <a class="forgotLnk" href="index.html"></a>

                            <div class="row-block">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>

        </div>
        <!--  END OF PAPER WRAP -->
        <!-- MAIN EFFECT -->
        <script type="text/javascript">
            var verifyURL = '<?php echo U("Admin/Login/verify","","");?>';
            function change_code(obj) {
                $("#code").attr("src", verifyURL + '/' + Math.random());
                return false;
            }
            $(function () {
                $("#login").validate({
                    rules: {
                        code: {
                            required: true,
                            remote: {
                                url: "<?php echo U('checkVerify');?>", //后台处理程序
                                type: "post", //数据发送方式
                                dataType: "json", //接受数据格式   
                            }
                        },
                    },
                });
            });
        </script>
    </body>

</html>