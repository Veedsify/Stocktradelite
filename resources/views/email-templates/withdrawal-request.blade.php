<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table class="wrapper" cellpadding="15" cellspacing="0" role="presentation" width="100%"
        style="font-family: Calibri, Verdana, Geneva, Tahoma, sans-serif;">
        <tbody>
            <tr>
                <td align="center" bgcolor="#F7FAFC">
                    <!-- 400px Container -->
                    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
                        <tbody>
                            <tr>
                                <td align="left" class="px-sm-16 py-sm-24" style="padding: 24px 0;">

                                    <!-- section : Logo -->
                                    <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 0px;">
                                                    <table cellpadding="0" cellspacing="0" role="presentation"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col px-sm-16" align="center" width="352"
                                                                    style="padding:  24px;">
                                                                    <img src="{{asset('assets/images/logo/log-footer.png')}}"
                                                                        alt="Logo" width="56px"
                                                                        style="width:120px; max-width: 150px;">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Section -->
                                    <!-- section : Banner -->
                                    <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 0px;">
                                                    <table cellpadding="0" cellspacing="0" role="presentation"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col" align="center" width="400"
                                                                    bgcolor="#fff" style="padding: 10px 0 ">
                                                                    <img src="{{asset('assets/images/mail/withdraw-request.png')}}"
                                                                        alt="" width="500" height="100%">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Section -->



                                    <!-- section : Content -->
                                    <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 0px;">
                                                    <table cellpadding="0" cellspacing="0" role="presentation"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col px-sm-16" bgcolor="#FFFFFF" align="left"
                                                                    width="352" style="padding: 48px 24px 32px 24px;">
                                                                    <h3 class="quicksand"
                                                                        style="color: #718096;font-size: 16px; font-weight: 400; line-height: 20px ;">
                                                                        Hi
                                                                        {{
                                                                        explode(' ', $withdrawal->user->name)[0] ??
                                                                        $withdrawal->user->name
                                                                        }}
                                                                    </h3>
                                                                    <h1 class="quicksand"
                                                                        style="color: #1A202C;font-size: 24px; font-weight: 700; line-height: 30px ; margin-bottom: 7px;">
                                                                        Withdrawal Request Has Been Received</h1>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        We have received your withdrawal request and our
                                                                        team is currently processing it. Your request is
                                                                        important to us, and we are working diligently
                                                                        to ensure it is completed as swiftly as
                                                                        possible.
                                                                    </p>
                                                                    <div>
                                                                        <span
                                                                            style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                            Withdrawal Amount: <strong
                                                                                style="color: #1A202C;">${{number_format($withdrawal->amount,
                                                                                2)}}</strong>
                                                                        </span>
                                                                        <br>
                                                                        <br>
                                                                        <span
                                                                            style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                            Withdrawal Method: <strong
                                                                                style="color: #1A202C;">{{ucwords($withdrawal->method)}}</strong>
                                                                        </span>
                                                                        <br>
                                                                        <br>
                                                                        <span
                                                                            style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                            Withdrawal Method: <strong
                                                                                style="color: #1A202C;">{{ucwords($withdrawal->status)}}</strong>
                                                                        </span>

                                                                    </div>

                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        You will receive a notification from us once
                                                                        your withdrawal has been successfully processed.
                                                                        If you have any questions or need further
                                                                        assistance, please feel free to reach out to our
                                                                        support team.</p>

                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        Thank you for your patience and for being a
                                                                        valued member of our community.</p>

                                                                    <h2 class="quicksand"
                                                                        style="color: #455D78;font-size: 16px; font-weight: 600; line-height: 18px;margin-bottom: 5px;">
                                                                        The StockTradeLite Team</h2>


                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Section -->


                                    <!-- section : Bottom Section -->




                                    <!-- section : Footer Section -->
                                    <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                        <tbody>
                                            <tr>
                                                <td class="px-sm-16" style="padding:0px;">
                                                    <table cellpadding="0" cellspacing="0" role="presentation"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col" align="center" width="352"
                                                                    style="padding: 24px 24px;">

                                                                    <p class="source"
                                                                        style="color: #A0AEC0;font-size: 12px; font-weight: 400; line-height: 12px;margin-bottom: 5px;">
                                                                        You are receiving this email because you signed
                                                                        up for a StockTradeLite.com account.</p>
                                                                    <p class="source"
                                                                        style="color: #A0AEC0;font-size: 12px; font-weight: 400; line-height: 12px;margin-bottom: 5px;">
                                                                        © 2024 StockTradeLite</p>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Section -->
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