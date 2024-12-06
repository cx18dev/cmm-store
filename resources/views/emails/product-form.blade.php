<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>

<body
    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #ffffff; color: #718096; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">

    <table style="background-color: #edf2f7; width: 100%; margin: 0; padding: 0;" width="100%" cellpadding="0"
        cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table style="width: 100%; margin: 0; padding: 0;" class="content" width="100%" cellpadding="0"
                    cellspacing="0" role="presentation">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 25px 0; text-align: center;" class="header">
                            <a href="{{ route('index') }}">
                                <img src="https://cmmstore.com/assets/images/CMM-banner.jpg" alt="Logo"
                                    style="width: 35%; border-radius: 12px; box-shadow: 0 0.5rem 1rem rgba(33, 37, 41, 0.1);">
                            </a>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="background-color: #edf2f7; border-top: 1px solid #edf2f7; border-bottom: 1px solid #edf2f7;"
                            class="body">
                            <table
                                style="background-color: #ffffff; border-radius: 20px; margin: 0 auto; padding: 0; width: 70% !important; box-shadow: 0 0.5rem 1rem rgba(33, 37, 41, 0.15);"
                                class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation">
                                <tr>
                                    <td style="padding: 32px; text-align: left; font-size: 16px; line-height: 1.5em;"
                                        class="content-cell">
                                        <h2 style="color: black;">New Product Form Submission</h2>
                                        <p><strong>Name:</strong><br>{{ $formDetails['name'] }}</p>
                                        <p><strong>Email:</strong><br>{{ $formDetails['email'] }}</p>
                                        <p><strong>Phone:</strong><br>{{ $formDetails['phone'] }}</p>
                                        <p><strong>Message:</strong><br>{{ $formDetails['message'] }}</p>
                                        <p><strong>Selected Products:</strong><br></p>
                                        <table
                                            style="width: 100%; border-collapse: collapse; margin-top: 16px; margin-bottom: 50px; border: 1px solid lightgray !important;"
                                            class="table">
                                            <thead>
                                                <tr>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        #</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Probe</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Part Number</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Quantity</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Discount</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Renishaw List Price</th>
                                                    <th
                                                        style="border: 1px solid #ddd; padding: 8px; background-color: #f4f4f4; text-align: center; font-weight: bold;">
                                                        Our Discounted Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $totalRenishawPrice = 0;
                                                    $totalDiscountedPrice = 0;
                                                    $itemCounter = 1;
                                                @endphp

                                                @foreach ($formDetails['products'] as $productName => $product)
                                                    @foreach ($product['parts'] as $key => $part)
                                                        @php
                                                            $quantity = $part['quantity'];
                                                            $price = $part['price'];
                                                            $discount = rtrim($part['discount'], '%');
                                                            $renishawPrice = $price * $quantity;
                                                            $discountedPrice =
                                                                $renishawPrice - $renishawPrice * ($discount / 100);

                                                            $totalRenishawPrice += $renishawPrice;
                                                            $totalDiscountedPrice += $discountedPrice;
                                                        @endphp
                                                        <tr>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                {{ $itemCounter }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                {{ $productName }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                {{ $part['name'] }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                {{ $quantity }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                {{ $part['discount'] }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                ${{ number_format($renishawPrice, 2) }}</td>
                                                            <td
                                                                style="border: 1px solid #ddd; padding: 8px; text-align: center; color: green;">
                                                                ${{ number_format($discountedPrice, 2) }}</td>
                                                        </tr>
                                                        @php $itemCounter++; @endphp
                                                    @endforeach
                                                @endforeach

                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-weight: 600;"
                                                        colspan="5">Total:</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 8px; text-align: center; font-weight: 600;">
                                                        ${{ number_format($totalRenishawPrice, 2) }}</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 8px; text-align: center; font-weight: 600; color: green;">
                                                        ${{ number_format($totalDiscountedPrice, 2) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p>Thanks,<br>CMM Online Store</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td>
                            <table style="text-align: center; width: 570px; margin: 0 auto;" class="footer"
                                align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td style="padding: 32px; text-align: center;" class="content-cell" align="center">
                                        <p>© {{ date('Y') }} <b>CMM Online Store</b>. All rights reserved.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
