<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <style>
        .box {
            background-color: #3498DB;
            width: 200px;
            height: 200px;
            overflow: hidden;
    position: relative;
            }
            /* .box{
    background: #074b7e;
    width: 300px;
    height: 150px;
    overflow: hidden;
    position: relative;
 } */

 .box:before{
    content: '';
    width: 141px;
    height: 151px;
    background: #fff;
    position: absolute;
    top: -44px;
    left: -78px;
    border-radius: 50%;
 }
 
 .box:after{
    content: '';
    width: 141px;
    height: 151px;
    background: #fff;
    position: absolute;
    top: -44px;
    right: -78px;
    border-radius: 50%;
 }
    </style>
    <section>
        <div class="box">

        </div>
    </section>
</body>
</html>