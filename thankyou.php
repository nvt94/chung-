<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,minimum-scale=1,initial-scale=1" name="viewport">
    <meta content="index,follow,all" name="robots">
    <meta content="vi" http-equiv="content-language">
    <link rel="shortcut icon" href="assets/image/logo.ico" type = "image/x-icon"/> 

    <title>Thank you</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N7WXPN8');</script>
    <!-- End Google Tag Manager -->
</head>
<style>
    .thankyou{
        font-family: arial;
        font-size: 24px !important;
        border-radius: 4px;
        background-color: #87CEFA;
        color: #fff;
        padding: 50px 30px;
        margin: 100px auto;
        text-align: center;
        line-height: 1.8em;
    }
    .thankyou a{
        color: #5d5de6;
        text-decoration: none;
    }
    .thankyou a:hover{
        text-decoration: none;
    }
    .check{
        font-size: 2.4em;
        color: #0e8ee4;
    }
</style>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7WXPN8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="section zero">
    </section>
    <section class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12  text-center ">
                    <div class="thankyou">
                        <div class="check">
                            ✔
                        </div>
                        <p style="font-family: Pinyon Script;font-size: 2em;line-height: 1.4em;">
                            Thank you
                        </p>
                        <p>
                            Bạn đã đặt hàng thành công. Chúng tôi sẽ liên lạc với bạn qua số điện thoại trong thời gian sớm nhất. Bạn vui lòng để ý điện thoại nhé!
                        </p>
                        <a onclick="goBack()" href="#" style="font-size: 1em;">< Quay lại ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <?php
        $fbPixel = htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8');
         if (isset($fbPixel) && $fbPixel !== '') {
         echo "<script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '$fbPixel');
        fbq('track', \"PageView\");
        fbq('track', \"Purchase\");
        </script>
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
        src=\"https://www.facebook.com/tr?id=$fbPixel&ev=PageView&noscript=1\"
        /></noscript>";
         }
    ?>

    <!-- Facebook Pixel Code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/js/fbp.js"></script>
    <!-- End Facebook Pixel Code -->

</body>
</html>