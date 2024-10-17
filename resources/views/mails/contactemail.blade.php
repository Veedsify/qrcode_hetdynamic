<!doctype html>
<html ⚡4email data-css-strict>

<head>
    <meta charset="utf-8">
    <style amp4email-boilerplate>
        body {
            visibility: hidden
        }
    </style>
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <style amp-custom>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            width: 100%;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        .es-wrapper {
            width: 100%;
            height: 100%;
            background-color: #f4f7f6;
            padding: 30px 0;
        }

        .es-content {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .es-content-body {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #38A3A5;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 600;
            margin: 0;
        }

        .content {
            padding: 30px;
        }

        .message {
            background-color: #f9f9f9;
            border-radius: 6px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .message p {
            color: #333333;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        .contact-info {
            display: flex;
            align-items: center;
            background-color: #f0f8ff;
            border-radius: 6px;
            padding: 20px;
        }

        .contact-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .contact-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-details h3 {
            color: #22577A;
            font-size: 20px;
            font-weight: 600;
            margin: 0 0 5px 0;
        }

        .contact-details p {
            color: #666666;
            font-size: 14px;
            margin: 0;
        }

        @media only screen and (max-width: 600px) {
            .es-content-body {
                width: 100% !important;
            }
            .contact-info {
                flex-direction: column;
                text-align: center;
            }
            .contact-avatar {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="es-wrapper">
        <table class="es-content" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">
                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="header">
                                <h1>New Contact Request</h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="content">
                                <div class="message">
                                    <p>{!! $contact['message'] !!}</p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-avatar">
                                        <img src="https://goyyhv.stripocdn.email/content/guids/bc2abf65-dcf4-44ee-8847-a6cbb7493e8c/images/6106104451_imageplaceholderpnguserprofileplaceholderimagepng1.jpg" alt="Contact Avatar">
                                    </div>
                                    <div class="contact-details">
                                        <h3>{{ $contact['name'] }}</h3>
                                        <p>{{ $contact['email_address'] }}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>