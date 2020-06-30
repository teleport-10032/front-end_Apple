<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物袋 - Peach (中国大陆)</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bag.css">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="/public/nav.js"></script>
</head>

<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];
}
?>
<body>
<div class="container_1">

    <!--        导航栏-->
    <div style="width: 100%;height: 43px;padding: 0;margin: 0;top: 0;">
        <!--            第二行-->
        <div id="nav" style="width: 100%;height: 84px;padding: 0;margin: 0;top: 0;">
            <script>
                nav_print();
            </script>
        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->

    <!--    搜索-->
    <div style="width: 100%;height: auto;display: flex;flex-direction: column;">
        <div style="height: 240px;display: flex">
        <!--            左右2 5 2-->
            <div style="flex:2;"></div>
            <div style="flex:5;text-align: center">
                <div style="font-size: 36px;padding-top: 60px">
                    你的购物袋总计 RMB 6,598。
                </div>
                <div style="font-size: 15px;margin-top: 20px">
                    所有订单均可享受免费送货和退货服务。
                </div>
                <div style="height: 30px;padding-top: 30px">
                    <a href="/checkOut">
                        <button type="button" class="btn btn-default" style="width: 200px">
                            结账
                        </button>
                    </a>
                </div>
            </div>
            <div style="flex:2;"></div>
        </div>

        <div style="display: flex;">
            <!--            左右-->
            <div style="flex: 1"></div>
            <div style="flex: 8;padding-top: 25px">
                <div style="width: 100%;height: 1px;background: #d1d1d6"></div>
                <!--                商品列表-->
                <div class="goods">
                    <!--    左右-->
                    <div style="flex: 2;padding-left: 20px">
                        <img src="/assets/img/search/iphonese.jpeg" width="220px" height="265px">
                    </div>
                    <div style="flex: 8;display: flex;flex-direction: column">
                    <!--上下-->
                        <div style="flex: 2;display: flex;">
                            <!--    左右-->
                            <div style="flex:5;padding-top: 30px;padding-left: 50px;">
                                <!--    左右-->
                                <div style="font-size: 26px;">
                                    iPhone SE
                                </div>
                            </div>
                            <div style="flex:5;font-size: 26px;padding-top: 30px;text-align: right">
                                RMB 3,299起
                            </div>
                        </div>
                        <div style="flex: 5">
                            <div style="font-size: 13px;padding-left: 50px;line-height: 23px">
                                红色<br>
                                64GB<br>
                                AppleCare+ 服务计划 (适用于 iPhone SE) - RMB 749<br>
                            </div>
                            <div style="height: 10px">
                                <div style="padding-top: 4px">
                                    <div style="width: 100%;height: 1px;background: #d1d1d6;"></div>
                                </div>
                            </div>
                            <div style="font-size: 13px;padding-left: 50px;line-height: 23px;
                            ">
                                <span style="bottom: 0px;">
                                下午 3:00 前订购，预计送达日期：6月29日 - 免费<br>
                                送货至： 历城区
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="goods">
                    <!--    左右-->
                    <div style="flex: 2;padding-left: 20px">
                        <img src="/assets/img/search/iphonese.jpeg" width="220px" height="265px">
                    </div>
                    <div style="flex: 8;display: flex;flex-direction: column">
                        <!--上下-->
                        <div style="flex: 2;display: flex;">
                            <!--    左右-->
                            <div style="flex:5;padding-top: 30px;padding-left: 50px;">
                                <!--    左右-->
                                <div style="font-size: 26px;">
                                    iPhone SE
                                </div>
                            </div>
                            <div style="flex:5;font-size: 26px;padding-top: 30px;text-align: right">
                                RMB 3,299起
                            </div>
                        </div>
                        <div style="flex: 5">
                            <div style="font-size: 13px;padding-left: 50px;line-height: 23px">
                                红色<br>
                                64GB<br>
                                AppleCare+ 服务计划 (适用于 iPhone SE) - RMB 749<br>
                            </div>
                            <div style="height: 10px">
                                <div style="padding-top: 4px">
                                    <div style="width: 100%;height: 1px;background: #d1d1d6;"></div>
                                </div>
                            </div>
                            <div style="font-size: 13px;padding-left: 50px;line-height: 23px;
                            ">
                                <span style="bottom: 0px;">
                                下午 3:00 前订购，预计送达日期：6月29日 - 免费<br>
                                送货至： 历城区
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <!--                商品列表-->
            </div>
            <div style="flex: 1"></div>
        </div>

    </div>
    <!--    搜索-->

    <!--        白条-->
    <div style="width: 100%;height: 30px;background: white"></div>
    <!--        白条-->
    <!--        最下边灰白色-->
    <div style="width: 100%;height: 390px;background: #f2f2f5;display: flex">
        <!--            左中右三列-->
        <div style="flex:2;"></div>
        <div style="flex:15;font-size: 10px;display: flex;flex-direction: column">

            <!--                五列-->
            <div style="flex:6;display: flex;">
                <script>
                    bottom_print();
                </script>
            </div>
            <br>
            <div style="width: 100%;height: 10px;font-size: 12px;color: #77777a;">
                更多选购方式：查找你附近的 Apple Store 零售店及更多门店，或者致电 400-666-8800
            </div>
            <br>
            <!--                分割线-->
            <div style="width:100%;height:1px;background: #cbcacd;"></div>
            <!--                分割线-->
            <p style="width: 100%;color: #8f8f8f;">
                Copyright © 2020 Peach Inc. 保留所有权利。
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color: #7b7b7b">
                        隐私政策 | 使用条款 | 销售政策 | 法律信息 | 网站地图
                    </span>
            </p>
            <span style="color: #7b7b7b;line-height: 12px">
                    京ICP备1021xxxx 营业执照 无线电发射设备销售备案编号112019xxxxxxxx
                </span>
            <!--                五列-->
            <div style="flex:3"></div>
        </div>
        <div style="flex:2;"></div>

    </div>
    <!--        最下边灰白色结束-->
</div>
</body>
<script type="text/javascript">
    function onKeyDown(event) {
        var e = event || window.event || arguments.callee.caller.arguments[0];
        var key = document.getElementById("key").value;
        if (e && e.keyCode == 13) {
            window.location.href="index.php?key="+key;
        }
    }
</script>
</html>