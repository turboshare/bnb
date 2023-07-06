<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="script/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet" />
    <title>BNB Crush</title>
    <link rel="stylesheet" href="script/css/fontawesome.min.css" type="text/css" />
    <link rel="stylesheet" href="script/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="script/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="script/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="script/css/fancybox/jquery.fancybox.min.css" type="text/css" />
    <link rel="stylesheet" href="script/css/slick.css" type="text/css" />
    <link rel="stylesheet" href="script/css/style.css" type="text/css" />
    <link rel="stylesheet" href="script/css/responsive.css" type="text/css" />

    <style>
        .cp-container {

            background: unset;
        }

        #loginButton {
            height: unset;
            background-color: #ffad46 !important;
            color: #000;
        }
        .cp-heading {
            margin: 55px 0 0 0;

        }
        .cp-body {
            margin-top: 5px;
   
        }
    </style>

</head>

<body>

    <div class="wrapper login-page style-3 background-color2" id="top" style="background: #1e1729; background-size: cover; background-repeat: no-repeat;">
        <!-- <canvas id="c" style="position: absolute; top: 0; left: 0; width:100%; height: 100vh;"></canvas> -->
        <div class="cp-container">
            <div class="form-part">
                <div class="cp-header text-center border-opx">
                    <div class="logo text-center m-auto">
                        <a href="index.php">
                            <img class="light mb-2" src="script/img/logowhite.png" alt="Force Tron"></a>
                    </div>
                </div>
                <div class="cp-heading text-center">
                    <h5>Welcome Back :)</h5>
                    <p class="m-0">Too keep connected with us please login with your Address.</p>
                </div>
                <div class="cp-body">
                    <div>
                        <p class="message" id="message" style="color:red; text-align:center;"></p>

                        <form name="form1">
                            <div class="form-group username-field">
                                <div class="form-group">
                                    <!-- <input type="hidden" id="textaa" readonly="true" />
                                    <input type="submit"  value="Authorized Login"
                                        class="btn btn-primary" /> -->
                                    <button type="button" class="btn btn-primary" id="loginButton" onclick="connecttron()">LOGIN AUTOMATIC<span id="lgbutton"></span></button>

                                </div>
                            </div>
                        </form>
                        
                        <!---->
                        
 <div class="form-group">

                            
                            
                       
                            <!-- <p class="text-center">If you are 1st time user
                                <a id=""
                                    href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnlinkbutton&#39;,&#39;&#39;)">Click
                                    here</a>
                            </p> -->
                            <!--<p class="text-center"><a href="view.php"> View </a>-->
                            <!--<br />-->
                            <p class="text-center">Not signed up yet ?
                                <br />
                                <a href="register.php" class="forgot-link">Register</a>
                            </p>
                        </div>
                        
                        <!---->
                        <div class="form-group">
                            <p class="text-center">If you already pay for registration and your id not login, then register with your hash!
                                <br />
                                <a href="register_hash.php" class="forgot-link">Register With Hash</a>
                            </p>
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <button class="btn" id="button">
                            Show Notification
                        </button>  -->
    
    <div id="toasts"></div>




    <script>
        const button = document.getElementById('button');
        const toasts = document.getElementById('toasts');

        var arr1 = '["Id No   : 12699 REG  : 0.008 BNB ","Id No   : 12698 REG  : 0.008 BNB ","Id No   : 12697 REG  : 0.008 BNB ","Id No   : 12696 REG  : 0.008 BNB ","Id No   : 12695 REG  : 0.008 BNB ","Id No   : 12699 Upgrade  : 0.008 BNB ","Id No   : 12698 Upgrade  : 0.008 BNB ","Id No   : 12697 Upgrade  : 0.008 BNB ","Id No   : 12696 Upgrade  : 0.008 BNB ","Id No   : 12695 Upgrade  : 0.008 BNB "]';
        // var typ222 = 'null';

        // console.log(arr);
        var av2 = ["Id No   : 12699 REG  : 0.008 BNB ", "Id No   : 12698 REG  : 0.008 BNB ", "Id No   : 12697 REG  : 0.008 BNB ", "Id No   : 12696 REG  : 0.008 BNB ", "Id No   : 12695 REG  : 0.008 BNB ", "Id No   : 12699 Upgrade  : 0.008 BNB ", "Id No   : 12698 Upgrade  : 0.008 BNB ", "Id No   : 12697 Upgrade  : 0.008 BNB ", "Id No   : 12696 Upgrade  : 0.008 BNB ", "Id No   : 12695 Upgrade  : 0.008 BNB "];
        // var typ1111 = ["Id No   : 12699 REG  : 0.008 BNB ", "Id No   : 12698 REG  : 0.008 BNB ", "Id No   : 12697 REG  : 0.008 BNB ", "Id No   : 12696 REG  : 0.008 BNB ", "Id No   : 12695 REG  : 0.008 BNB ", "Id No   : 12699 Upgrade  : 0.008 BNB ", "Id No   : 12698 Upgrade  : 0.008 BNB ", "Id No   : 12697 Upgrade  : 0.008 BNB ", "Id No   : 12696 Upgrade  : 0.008 BNB ", "Id No   : 12695 Upgrade  : 0.008 BNB "];

        // var ar2 = arr;
        // console.log(arr);

        var messages = av2;


        const types = ['success', 'success', 'success'];

        // button.addEventListener('click', () => createNotification());


        setInterval(() => {
            createNotification();
        }, 7000);


        function createNotification(message = null, type = null) {
            const notif = document.createElement('div');
            notif.classList.add('toast');
            notif.classList.add(type ? type : getRandomType());

            // var gatmsg = getRandomMessage();


            // var gatmsg2 = gatmsg.substr(14);
            // var gatmsgtype = getRandomMessagetype();

            // console.log(gatmsgtype);

            // let result = gatmsg.substr(0, 30);

            // var getm = '<a href="https://testnet.bscscan.com/tx/' + gatmsg2 + '"style="color:black">' + result + '.....' + '</a> '

            // console.log(getm);


            // console.log(gatmsg);

            notif.innerText = message ? message : getRandomMessage();

            toasts.appendChild(notif);

            setTimeout(() => {
                notif.remove();
            }, 5000);
        }

        function getRandomMessage() {
            return messages[Math.floor(Math.random() * messages.length)];
        }

        // function getRandomMessagetype() {
        //     return messagestype[Math.floor(Math.random() * messagestype.length )];
        // }

        function getRandomType() {
            return types[Math.floor(Math.random() * types.length)];
        }


        // setTimeout(function () {

        //         getInfo(_getId);
        //     }, 2000);
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

        * {
            box-sizing: border-box;
        }



        .btn {
            background-color: #5F9CFF;
            border: none;
            border-radius: 5px;
            color: #000000;
            cursor: pointer;
            font-family: inherit;
            font-weight: bold;
            padding: 1rem;
        }

        .btn:focus {
            outline: none;
        }

        .btn:active {
            transform: scale(0.98);
        }

        #toasts {
            /*align-items: flex-end;*/
            /*bottom: 10px;*/
            /*display: flex;*/
            /*flex-direction: column;*/
            /*position: fixed;*/
            /*right: 10px;*/

            align-items: center;
            top: 70px;
            flex-direction: column;
            position: fixed;
            right: 0;
            left: 0;
            display: flex;


        }

        .toast {
            border-radius: 5px;
            color: #000000;
            margin: 0.5rem;
            padding: 1rem 2rem;
        }

        .toast.info {
            background-color: #969696;
        }

        /*.toast.success {*/
        /*    background-color: #61FF8F;*/
        /*}*/
        .toast.success {
            /* background-color: #61FF8F; */
            background-color: #0a294c;
            box-shadow: 1px 1px 1px rgb(0 0 0 / 30%);
            border-radius: 8px;
            border: 1px solid #89ce31;
            color: #fff
        }


        .toast.error {
            background-color: #FF6161;
        }
    </style>



<style type="text/css">
        .spinner img {
            width: 150px;
        }

        .spinner {
            width: 150px;
            height: 150px;
            border-radius: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            animation: spin 3s infinite linear;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #loader-wrapper {
            height: 100%;
            width: 100%;
            background: rgb(76 76 76 / 79%);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 99999;
        }
    </style>
    <div id="loader-wrapper" style="display: none;">
        <div class="spinner"><img src="script/img/loader.png"></div>
    </div>
    <script src="script/js/jquery.min.js"></script>
    <script>
  
    $("#loader-wrapper").show();


    </script>

    <script src="script/js/circle-progress.js"></script>
    <script src="script/js/bootstrap.min.js"></script>
    <script src="script/js/onpagescroll.js"></script>
    <script src="script/js/wow.min.js"></script>
    <script src="script/js/jquery.countdown.js"></script>
    <script src="script/js/owl.carousel.js"></script>
    <script src="script/js/slick.min.js"></script>
    <!-- <script src="assets/js/app1.html"></script> -->

    <script src="script/js/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.html"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="script/js/script.js"></script>

    <script src="web3/dist/web3.min.js"></script>
    <script src="asseteth/webethl1.js?v=64a6d630d1450"></script>

<script>
    $( document ).ready(function() {
    console.log( "ready!" );
    $("#loader-wrapper").hide();
});

    </script>

  
</body>


</html>