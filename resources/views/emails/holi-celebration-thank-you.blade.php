<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Holi Celebration 2026</title>
</head>
<body style="margin:0;padding:0;background:#f6f8fc;font-family:Arial,sans-serif;color:#1f2940;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f6f8fc;padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:620px;background:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #e6ebf5;">
                    <tr>
                        <td style="padding:22px 24px;background:linear-gradient(90deg,#ff5b95,#ff8b3d,#2aa9ff);color:#fff;">
                            <h1 style="margin:0;font-size:24px;line-height:1.2;">Holi Celebration 2026</h1>
                            <p style="margin:8px 0 0;font-size:14px;opacity:.95;">Veena Smart Homes</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px;">
                            <h2 style="margin:0 0 10px;font-size:20px;color:#1b2340;">Thank You, {{ $name }}!</h2>
                            <p style="margin:0 0 14px;font-size:14px;line-height:1.7;">
                                Your Holi registration is confirmed. We are excited to celebrate with you.
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:8px 0 18px;">
                                <tr>
                                    <td style="padding:8px 0;font-size:14px;color:#58627b;">Wing / Flat</td>
                                    <td style="padding:8px 0;font-size:14px;font-weight:700;color:#1f2940;text-align:right;">{{ $wing }} - {{ $flatNumber }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;font-size:14px;color:#58627b;">Coupons</td>
                                    <td style="padding:8px 0;font-size:14px;font-weight:700;color:#1f2940;text-align:right;">{{ $coupons }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;font-size:14px;color:#58627b;">Total Amount</td>
                                    <td style="padding:8px 0;font-size:14px;font-weight:700;color:#1f2940;text-align:right;">Rs. {{ number_format($totalAmount) }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;font-size:14px;color:#58627b;">Payment Mode</td>
                                    <td style="padding:8px 0;font-size:14px;font-weight:700;color:#1f2940;text-align:right;">{{ $paymentMode }}</td>
                                </tr>
                            </table>

                            <p style="margin:0;font-size:14px;line-height:1.7;">
                                See you at the event. Have a colorful and joyful Holi!
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:14px 24px;background:#f2f5fb;font-size:12px;color:#6d7690;text-align:center;">
                            This is an automated confirmation email from Veena Smart Homes.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
