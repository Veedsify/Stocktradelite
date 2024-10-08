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
                                                                    <img src="{{asset('assets/images/mail/welcome-email.png')}}"
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
                                                                        explode(' ', $user->name)[0] ?? $user->name
                                                                        }}
                                                                    </h3>
                                                                    <h1 class="quicksand"
                                                                        style="color: #1A202C;font-size: 24px; font-weight: 700; line-height: 30px ; margin-bottom: 7px;">
                                                                        Welcome to Stocklitetrade!</h1>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        We are happy to welcome you to our expanding
                                                                        network of traders, investors, and
                                                                        cryptocurrency lovers. Our goal at
                                                                        Stocklitetrade is to give you the most
                                                                        up-to-date information, perspectives, and
                                                                        resources to help you successfully
                                                                        navigate the fascinating world of
                                                                        cryptocurrency.
                                                                    </p>


                                                                    <h2 class="quicksand"
                                                                        style="color: #455D78;font-size: 16px; font-weight: 600; line-height: 18px; margin-bottom: 5px;">
                                                                        Get started</h2>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        To ensure the highest level of security and
                                                                        compliance with regulations, we require all
                                                                        users to complete a Know Your
                                                                        Customer (KYC) verification. This process is
                                                                        quick and straightforward:</p>
                                                                    <ul>

                                                                        <li>

                                                                            Log in to your account.
                                                                        </li>
                                                                        <li>

                                                                            Navigate to the 'KYC Verification' section.
                                                                        </li>
                                                                        <li>

                                                                            Follow the instructions to upload your
                                                                            identification documents.
                                                                        </li>
                                                                    </ul>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ; margin-bottom: 25px;">
                                                                        Completing your KYC verification will enable you
                                                                        to fully access all our features and start
                                                                        trading with confidence.</p>


                                                                    <h2 class="quicksand"
                                                                        style="color: #455D78;font-size: 16px; font-weight: 600; line-height: 18px;margin-bottom: 5px;">
                                                                        Learn more</h2>
                                                                    <p class="source"
                                                                        style="color: #718096;font-size: 16px; font-weight: 300; line-height: 21px ;">
                                                                        Find out about our most popular features like
                                                                        live presenting, private sharing and working
                                                                        together as a team in our knowledge base <span
                                                                            style="font-weight: 400; color: #F8444F ;">help@Stocklitetrade.com</span>.
                                                                    </p>

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
                                                                        up for a Stocklitetrade.com account.</p>
                                                                    <p class="source"
                                                                        style="color: #A0AEC0;font-size: 12px; font-weight: 400; line-height: 12px;margin-bottom: 5px;">
                                                                        © 2024 Stocklitetrade</p>

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
