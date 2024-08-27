<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
        font-family: "Poppins", sans-serif;
        margin:0;
        padding:0;
        box-sizing:border-box;
        }
        body{
            height: 100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            background:#7d2ae8;

        }
        .container{
            display:flex;
            width:420px;
            background:#fff;
            border-radius:8px;
            row-gap:30px;
            padding:50pX 0;
            flex-direction:column;
            align-items:center;
        }
        .circular-progress{
            position:relative;
            height: 250px;
            width: 250px;
            border-radius:50%;
            background-color:conic-gradient(#7d2ae8 3.6deg, #edefed 0deg);
        }

    </style>
</head>
<body>

<div class="container">
    <div class="circular-progress">
        <span class="progress-value">0%</span>
    </div>
    <span class="text">HTML & CSS</span>
</div>
    
</body>
</html>