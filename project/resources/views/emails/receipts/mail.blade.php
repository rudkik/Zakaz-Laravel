<?php
$baseUrlFront = env('APP_URL_FRONT', 'https://ceramostone.kz/');
$baseUrl = env('APP_URL', 'https://back.ceramostone.kz');
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8"/>
    <title></title>
    <style type="text/css">
        body {
            margin: 0px;
        }

        table {
            border-collapse: separate;
        }

        a,
        a:link,
        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        h2,
        h2 a,
        h2 a:visited,
        h3,
        h3 a,
        h3 a:visited,
        h4,
        h5,
        h6,
        .t_cht {
            color: #000 !important;
        }

        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td {
            line-height: 100%;
        }

        .ExternalClass {
            width: 100%;
        }
    </style>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="0" style="font-family: arial, sans-serif;">
    <tbody>
    <tr valign="top">
        <td style="background-color: #ffffff" bgcolor="#ffffff">
            <table width="100%" height="15px" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td style="background-color: #181634" bgcolor="#181634"></td>
                </tr>
                </tbody>
            </table>
            <table width="100%" cellspacing="0" cellpadding="54" style="border-bottom: 1px solid #E5E8F1;">
                <tbody>
                <tr>
                    <td align="left">
                        <a href="http://ceramostone.kz">
                            <img src="{{$baseUrl . '/images/Logo.png'}}" alt/>
                        </a>
                    </td>
                    <td align="right">
                        <p style="color: #393083; font-size: 13px; line-height: 20px;"> Крупнейшая сеть полного цикла,
                            по поставке и обработке натурального и искусственного камня. </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color: #fff" bgcolor="#fff">
            <table width="100%" cellspacing="0" cellpadding="54">
                <tbody>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="font-weight: bold; font-size: 26px; line-height: 31px; color: #323232; margin: 10px 0 20px;">
                                        Здравствуйте, {{$order->user->name}}! </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 16px; line-height: 24px; margin: 0 0 80px;">
                                        <span style="color: #333;">Спасибо за ваш заказ! Следите за статусом в личном кабинете. Если есть вопросы, пишите в</span>
                                        <a href="//ceramostone.kz/feedback" style="color: #3072C4;">службу поддержки</a>.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-weight: bold; font-size: 22px; line-height: 26px; color: #393083; margin: 0 0 10px;">
                                        Заказ {{$order->number}} </p>
                                    <p style="font-size: 16px; line-height: 24px; color: #333; margin: 0 0 75px;"> {{ \Jenssegers\Date\Date::parse($order->created_at)->format('j F H:i:s Y')}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" cellspacing="0" cellpadding="0" style="margin-bottom: 50px;">
                                        <tbody>
                                        <tr>
                                            <td align="left"
                                                style="border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">
                                                    Товары ({{$orderProducts->sum('count')}})</p>
                                            </td>
                                            <td align="right"
                                                style="border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">{{$order->purchase_amount}}₸</p>
                                            </td>
                                        </tr>
                                        @foreach($orderProducts as $orderProduct)
                                            <tr>
                                                <td align="left" style="padding: 10px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">{{$orderProduct->product->name}} {{$orderProduct->count}} шт.</p>
                                                </td>
                                                <td align="right" style="padding: 10px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">{{$orderProduct->amount}}₸</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            @if($order->productDiscount())
                                                <td align="left"
                                                    style="border-top: 1px solid #e5e8f1; border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">
                                                        Скидка</p>
                                                </td>
                                                <td align="right"
                                                    style="border-top: 1px solid #e5e8f1; border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">
                                                        {{$order->getProductsWithDiscount()}} ₸</p>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($order->promoCodeItself)
                                                <td align="left"
                                                    style="border-top: 1px solid #e5e8f1; border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">
                                                        Скидка с промокодом</p>
                                                </td>
                                                <td align="right"
                                                    style="border-top: 1px solid #e5e8f1; border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                    <p style="font-size: 22px; line-height: 30px; color: #333; margin: 0;">
                                                        {{$order->promoCodeItself->promoCodeAmount}}
                                                        ₸</p>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td align="left"
                                                style="border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                <p style="font-weight: bold; font-size: 24px; line-height: 30px; color: #333; margin: 0;">
                                                    Общая стоимость</p>
                                            </td>
                                            <td align="right"
                                                style="border-bottom: 1px solid #e5e8f1; padding: 20px 0;">
                                                <p style="font-weight: bold; font-size: 24px; line-height: 30px; color: #333; margin: 0;">
                                                    {{$order->total_amount}}₸</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color: #181634" bgcolor="#181634">
            <table width="100%" cellspacing="0" cellpadding="0" style="margin-top: 70px;">
                <tbody>
                <tr>
                    <td align="center">
                        <table cellspacing="20" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <a href="http://www.apple.com/ru/app-store/">
                                        <img src="{{$baseUrl . '/images/apstore.png'}}" alt="appstore"/>
                                    </a>
                                </td>
                                <td>
                                    <a href="http://play.google.com/store?hl=ru&gl=US">
                                        <img src="{{$baseUrl . '/images/googleplay.png'}}" alt="googleplay"/>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div style="margin: 20px 0 40px;">
                            <a href="http://api.whatsapp.com/send/?phone=77717270700&text&app_absent=0"
                               style="margin-right: 20px;">
                                <img height="50" width="50" src="{{$baseUrl . '/images/whatsapp.png'}}" alt="whatsapp"/>
                            </a>
                            <a href="http://www.facebook.com/ceramo.stone.group" style="margin-right: 20px;">
                                <img height="50" width="50" src="{{$baseUrl . '/images/facebook.png'}}" alt="facebook"/>
                            </a>
                            <a href="http://www.instagram.com/ceramo_stone_nursultan/" style="margin-right: 20px;">
                                <img height="50" width="50" src="{{$baseUrl . '/images/instagram.png'}}"/>
                            </a>
                            <a href="http://t.me/csg_support" style="margin-right: 20px;">
                                <img height="50" width="50" src="{{$baseUrl . '/images/telegram.png'}}" alt="telegram"/>
                            </a>
                            <a href="http://vk.com/ceramostonegroup" style="margin-right: 20px;">
                                <img height="50" width="50" src="{{$baseUrl . '/images/vk.png'}}" alt="vk"/>
                            </a>
                            <a href="http://www.youtube.com/channel/UCN9ptSP8Zd6ALNoROqPikcA">
                                <img height="50" width="50" src="{{$baseUrl . '/images/youtube.png'}}" alt="youtube"/>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="//ceramostone.kz/feedback">
                            <p style="font-size: 16px; line-height: 19px; text-align: center; color: #B1AFC7;"> Обратная
                                связь </p>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <p style="font-size: 12px; line-height: 20px; text-align: center; color: #676F7C; margin: 55px 0 80px;">
                            © 1998 – 2021 «Ceramo Stone Group». Все права защищены. </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
