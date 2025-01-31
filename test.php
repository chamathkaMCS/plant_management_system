<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Button with Animation</title>
    <style>
        .button-container {
            position: relative;
            display: inline-block;
        }

        .settings-button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .tooltip {
            position: absolute;
            top: 50%;
            left: 120%;
            transform: translateY(-50%);
            background: black;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        /* Hover Effect - Animate Left to Right */
        .button-container:hover .tooltip {
            opacity: 1;
            visibility: visible;
            animation: slideRight 0.4s ease forwards;
        }

        /* Keyframes for the sliding effect */
        @keyframes slideRight {
            from {
                transform: translateY(-50%) translateX(-10px);
                opacity: 0;
            }
            to {
                transform: translateY(-50%) translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<div class="button-container">
    <button class="settings-button">
        <img src="settings.svg" alt="Settings" width="24" height="24">
    </button>
    <span class="tooltip">Settings</span>
</div>

</body>
</html>
