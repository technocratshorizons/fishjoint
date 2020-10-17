<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Stolve</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<!-- Favicons -->
<link href="resources/images/favicon.ico" rel="icon">
<link href="resources/images/favicon.ico" rel="apple-touch-icon">
</head>
<body>
<div style="padding: 40px 0;  box-sizing:border-box; margin: 0px; width:100%; background: #fff; color: #333; overflow-x: hidden; font-family: Verdana; ">
    <div style="width:100%; margin:0 auto;">
        <div>
            <div style="text-align:center;">
                <div style="padding-bottom:0px;"> <img src="{{ asset('img/logo.png')}}" height="100px"> </div>
            </div>
        </div>
        <div style="float:left; font-size:16px;width:100%; line-height: 26px;border-top: 1px solid #ccc;">
            <div style="font-size: 15px;color: #333; font-weight: 600;">
                <p>Hello Admin!</p>
                <p style="float:left"><strong>{{ $customer['name'] }}</strong> has sent You mail from contact us form of Fish Joint</p>
            </div>
        </div>
            <strong>Name:</strong> {{ $customer['name'] }}
            <br>
            <strong>Email:</strong> {{ $customer['email'] }}
            <br>
            <strong>Phone No.:</strong> {{ $customer['phone_no'] }}
            <br>
            <strong>Message:</strong> {{ $customer['message'] }}
        <div style="clear:both; margin-top:10px;">
            <p style="font-size:14px; line-height: 26px;"> Many Thanks,<br />
                Fish Joint Team. </p>
        </div>
    </div>
</div>
</body>
</html>
