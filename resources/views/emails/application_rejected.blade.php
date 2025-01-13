<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Rejected</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 20px 0;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .content h1 {
            font-size: 24px;
            color: #f44336;
            margin-bottom: 10px;
        }

        .content p {
            margin: 10px 0;
        }

        .content a {
            color: #1a73e8;
            text-decoration: none;
        }

        .support-box {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
            color: #555;
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #888;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="https://dealindia.org/storage/images/setting/1735671088.png" alt="DealIndia Logo">
        </div>

        <!-- Content -->
        <div class="content">
            <h1>📩 Application Rejected</h1>
            <p>👤 <strong>Dear {{ $user->first_name . ' ' . $user->last_name }},</strong></p>
            <p>We regret to inform you that your application has been rejected for the following reason:</p>
            <p><strong>Reason:</strong> {{ $reason }}</p>

            <p>If you have any questions or require further clarification, please feel free to reach out to our support team at
                <a href="mailto:support@dealindia.org">support@dealindia.org</a>.
            </p>

            <div class="support-box">
                <p>📞 <strong>Need Help?</strong> Contact our support team for assistance.</p>
            </div>

            <p>Thank you for your interest in our services. We appreciate the time and effort you put into your application.</p>

            <p>Regards,<br>
                <strong>DealIndia Team</strong>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} DealIndia. All rights reserved.</p>
            <p><a href="https://dealindia.org">Visit Our Website</a></p>
        </div>
    </div>
</body>

</html>
