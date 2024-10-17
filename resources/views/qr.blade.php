<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $user->userData->fullname }} QR Profile Card
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CSorts+Mill+Goudy&#038;display=swap"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto"
        type="text/css" media="all" />
    <style>
        :root {
            --primary-color: #003300;
            --bg-color: #f9fff9;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Rubik", sans-serif;
            user-select: none;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--bg-color);
        }

        .container {
            text-align: center;
        }

        .qrcode {
            display: grid;
            position: relative;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            filter: drop-shadow(1px 1px 3px #e4e4e487);
            justify-content: center;
            align-items: center;
            background-color: var(--bg-color);
            aspect-ratio: 16/10;
            /* height: 400px; */
            width: 100% max-width: 600px;
            margin-bottom: 20px;
            background: #fff;
        }

        .qrcode::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            height: 95%;
            border: 2px dotted green;
        }

        .qrcode>div {
            padding: 1.3rem;
        }

        .qrcode>* {
            /* width: 30%;
            max-width: 100%; */
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .qrcode>div>svg {
            width: 200px;
            height: 200px;
        }

        h2 {
            margin-top: 20px;
            font-weight: bold;
        }

        .action_buttons{
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: flex-end;
        }

        button {
            padding: 16px 28px;
            background-color: var(--primary-color);
            color: var(--bg-color);
            border: none;
            display: inline-flex;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        a {
            padding: 16px 28px;
            background-color: var(--bg-color);
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004d00;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #qrcode,
            #qrcode * {
                visibility: visible;
            }

            #qrcode {
                position: absolute;
                left: 0;
                top: 0;
            }

            /* Remove default headers and footers */
            @page {
                margin: 0;
            }

            body {
                margin: 1cm;
            }
        }

        .preloader {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            width: 100%;
            background: var(--bg-color);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.4s ease-in-out;
        }

        .preloader img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            object-position: top;
        }
    </style>
    <script defer>
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.preloader');
            setTimeout(() => {
                if (preloader) {
                    preloader.style.opacity = 0;
                    preloader.style.visibility = 'hidden';
                    preloader.style.pointerEvents = 'none';
                }
            }, 2000);
        });
    </script>
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/qrcode.webp') }}" alt="preloader">
    </div>
    <div class="container">
        <div class="qrcode" id="qrcode">
            <img src="{{ asset('storage/' . $user->userData->profile_picture) }}" alt="avatar">
            <div>
                {!! $qrCode !!}
                <h2>{{ $user->userData->fullname }}
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circles-relation"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986" />
                            <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954" />
                        </svg>
                    </span>
                </h2>
            </div>
        </div>
        <div class="action_buttons">
            <a href="{{ route('showProfile', [$user->username]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M15 6l-6 6l6 6" />
                </svg>
                Back
            </a>
            <button onclick="printDiv()">
                Print
            </button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        function printDiv() {
            window.print();
        }

        function triggerQrPrintAndDownload() {
            const qrContainer = document.querySelector('.qrcode');
            html2canvas(qrContainer).then(canvas => {
                // Convert the canvas to a data URL
                const dataURL = canvas.toDataURL('image/png');
                // Create a temporary anchor element
                const link = document.createElement('a');
                link.href = dataURL;
                link.download = 'qr_card.png';
                // Programmatically click the link to trigger the download
                link.click();
            });
        }
    </script>
</body>

</html>
