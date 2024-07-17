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

                                                                    <img src="{{asset('assets/images/mail/kyc.png')}}"
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
                                                                        explode(' ',$user->name)[0] ?? $user->name
                                                                        }}
                                                                    </h3>
                                                                    <h1 class="quicksand"
                                                                        style="color: #1A202C;font-size: 24px; font-weight: 700; line-height: 30px ; margin-bottom: 7px; color:red;">
                                                                        KYC Validation Rejected</h1>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        Your KYC (Know Your Customer) validation was not
                                                                        successful. As a result, your account cannot be
                                                                        fully verified and cannot be used for
                                                                        transactions.
                                                                    </p>
                                                                    <h3 class="quicksand"
                                                                        style="color: #718096;font-size: 16px; font-weight: 400; line-height: 20px ;">
                                                                        Here are the reasons for the rejection:</h3>
                                                                    <div style="text-align:right; line-height:2;">
                                                                        {{
                                                                        $data['message']
                                                                        }}
                                                                    </div>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        If you have any questions or need assistance,
                                                                        our support team is here to help.</p>


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