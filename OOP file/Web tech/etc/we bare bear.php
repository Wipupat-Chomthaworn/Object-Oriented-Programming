<html>

<head>
    <title>SVG
    </title>
    <style>
        body {
            background: #666;
            margin: 0em;
            margin-top: 2em;
            font-family: sans-serif;
        }

        svg {
            transform-style: preserve-3d;
            background: hsla(50, 50%, 75%);
            width: 90vmin;
            height: 90vmin;
            display: block;
            margin: auto;
            box-shadow: 0px 0px 10px #0006;
        }

        .icebear {
            position: absolute;
            height: 100%;
            width: 100%;
            transform-origin: bottom center;

            animation: move 8s infinite;
        }

        .note {
            position: absolute;
            height: 100%;
            width: 100%;
            transform-origin: center;

            animation: n1 5s infinite;
        }

        .note2 {
            position: absolute;
            height: 100%;
            width: 100%;
            transform-origin: center;

            animation: n2 5s infinite;
        }

        .note3 {
            position: absolute;
            height: 100%;
            width: 100%;
            transform-origin: center;

            animation: n3 5s infinite;
        }

        .note4 {
            position: absolute;
            height: 100%;
            width: 100%;
            transform-origin: center;

            animation: n4 5s infinite;
        }

        .eye {
            position: absolute;
            height: 100%;
            width: 100%;
        }

        /*         #pillow{transform:rotateY(-10deg) rotatex(0deg) rotateZ(30deg);

        } */
        #w1 {
            animation: move 3s infinite alternate;

        }

        #w2 {
            animation: move 3s infinite alternate;

        }

        .overear {}

        .tree {

            transform: scale(1) translate(-12px, -30px)
                /*         transform:scale(1) translate(28px,-19px)  */
                /*         transform:scale(1) translate(28px,-19px) */
        }

        @keyframes move {
            0% {
                transform: translatex(0px) rotatez(0deg);
            }

            25% {
                transform: translatex(0px) rotatez(-20deg);
            }

            50% {
                transform: translatex(0px) rotatez(0deg);
            }

            75% {
                transform: translatex(0px) rotatez(20deg);
            }

            100% {
                transform: translatex(0px) rotatez(0deg);

            }
        }

        @keyframes n1 {
            0% {
                transform: translatex(-3px) translatey(-40px) rotatez(0deg);
            }

            25% {
                transform: translatex(-3px)translatey(-40px) rotatez(-10deg);
            }

            50% {
                transform: translatex(-3px) translatey(-40px) rotatez(0deg);
            }

            75% {
                transform: translatex(-3px) translatey(-40px) rotatez(10deg);
            }

            100% {
                transform: translatex(-3px)translatey(-40px) rotatez(0deg);

            }
        }

        @keyframes n2 {
            0% {
                transform: translatex(-3px) translatey(-10px)rotatez(0deg);
            }

            25% {
                transform: translatex(-3px) translatey(-10px) rotatez(-10deg);
            }

            50% {
                transform: translatex(-3px) translatey(-10px)rotatez(0deg);
            }

            75% {
                transform: translatex(-3px) translatey(-10px) rotatez(10deg);
            }

            100% {
                transform: translatex(-3px) translatey(-10px)rotatez(0deg);

            }
        }

        @keyframes n3 {
            0% {
                transform: translatex(78px) translatey(-40px) rotatez(0deg);
            }

            25% {
                transform: translatex(78px)translatey(-40px) rotatez(-10deg);
            }

            50% {
                transform: translatex(78px) translatey(-40px) rotatez(0deg);
            }

            75% {
                transform: translatex(78px) translatey(-40px) rotatez(10deg);
            }

            100% {
                transform: translatex(78px) translatey(-40px) rotatez(0deg);

            }
        }

        @keyframes n4 {
            0% {
                transform: translatex(78px) translatey(-10px) rotatez(0deg);
            }

            25% {
                transform: translatex(78px) translatey(-10px) rotatez(-10deg);
            }

            50% {
                transform: translatex(78px) translatey(-10px) rotatez(0deg);
            }

            75% {
                transform: translatex(78px) translatey(-10px) rotatez(10deg);
            }

            100% {
                transform: translatex(78px) translatey(-10px) rotatez(0deg);

            }
        }

        #lam {

            filter:
                drop-shadow(0 0 0.0001px #000) drop-shadow(0 0 3px #E8c26a) drop-shadow(0 0 6px #E8c26a) drop-shadow(0 0 11px #E8c26a) drop-shadow(0 0 20px #fff);
        }
    </style>
</head>

<body>
    <svg viewBox="0 0 100 100">
        <!--    arc   -->
        <!--       body -->
        <g class="note">
            <path d="m11,70 v-5 a1 0.3 0 0 1 2 0 a0.6 0.4 0 0 0 3 -1" stroke="hsl(49,100%,78%)" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="stroke" values="
      hsl(0,100%,50%);
      hsl(230,100%,78%);
      hsl(0,100%,50%);
            " dur="2.5" repeatCount="indefinite" />
            </path>
            <circle cx="10" cy="70" r="1.5" fill="hsl(49,100%,78%)">
                <animate attributeName="fill" values="
      hsl(0,100%,50%);
      hsl(230,100%,78%);
      hsl(0,100%,50%);
            " dur="2.5" repeatCount="indefinite" />
            </circle>

        </g>
        <g class="note2">
            <path d="m11,70 v-5 a1 0.3 0 0 1 2 0 a0.6 0.4 0 0 0 3 -1" stroke="hsl(49,100%,78%)" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="stroke" values="
      hsl(0,100%,68%);
      hsl(49,100%,68%);
      hsl(89,100%,68%);
      hsl(259,100%,68%);
      hsl(360,100%,78%);
            " dur="2.5" repeatCount="indefinite" />
            </path>
            <circle cx="10" cy="70" r="1.5" fill="hsl(49,100%,78%)">
                <animate attributeName="fill" values="
      hsl(0,100%,68%);
      hsl(49,100%,68%);
      hsl(89,100%,68%);
      hsl(259,100%,68%);
      hsl(360,100%,78%);
            " dur="2.5" repeatCount="indefinite" />
            </circle>

        </g>
        <g class="note3">
            <path d="m11,70 v-5 a1 0.3 0 0 1 2 0 a0.6 0.4 0 0 0 3 -1" stroke="hsl(49,100%,78%)" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="stroke" values="
      hsl(0,100%,68%);
      hsl(230,100%,78%);
      hsl(0,100%,68%);
            " dur="2.5" repeatCount="indefinite" />
            </path>
            <circle cx="10" cy="70" r="1.5" fill="hsl(49,100%,78%)">
                <animate attributeName="fill" values="
      hsl(0,100%,68%);
      hsl(230,100%,78%);
      hsl(0,100%,68%);
            " dur="2.5" repeatCount="indefinite" />
            </circle>

        </g>
        <g class="note4">
            <path d="m11,70 v-5 a1 0.3 0 0 1 2 0 a0.6 0.4 0 0 0 3 -1" stroke="hsl(49,100%,78%)" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="stroke" values="
      hsl(0,100%,68%);
      hsl(49,100%,68%);
      hsl(89,100%,68%);
      hsl(259,100%,68%);
      hsl(360,100%,78%);
            " dur="2.5" repeatCount="indefinite" />
            </path>
            <circle cx="10" cy="70" r="1.5" fill="hsl(49,100%,78%)">
                <animate attributeName="fill" values="
      hsl(0,100%,68%);
      hsl(49,100%,68%);
      hsl(89,100%,68%);
      hsl(259,100%,68%);
      hsl(360,100%,78%);
            " dur="2.5" repeatCount="indefinite" />
            </circle>

        </g>
        <!--       <path d="m50,50 a10 5 0 1 0 30 40 " stroke="hsl(26,35%,0%)" stroke-width="1" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round"/> -->
        <g class='icebear'>
            <!--       ear -->
            <ellipse cx="38" cy="18" rx="5" ry="8" stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="ry" values="
        8;
        8;
        8;
        8;
        6;
        8;
        8;
        8;
        6;
        8;
        8;" dur="4" repeatCount="indefinite" />
            </ellipse>
            <ellipse cx="68" cy="18" rx="5" ry="8" stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round">
                <animate attributeName="ry" values="
        
        8;
        8;
        6;
        8;
        8;
        8;
        6;
        8;
        8;" dur="4" repeatCount="indefinite" />
            </ellipse>





            <!--    arc   -->

            <!--       body -->
            <g class="body">
                <!--       <ellipse cx="50" cy="45" rx="35" ry="15" stroke="hsl(26,35%,0%)" stroke-width="1" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round"/> -->
                <path d="m27,40 a1 1 0 0 1 51 0 
               a0 1 0 1 1 10 30
               a1.5 1 0 0 1 -70 -0 z" stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round" />
                <g class="lhand">
                    <path d="m40,50 a0.5 1 0 0 1 -15 20" stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="m33,71.5 a0.5 1 0 0 0 2.8 5" stroke="hsl(26,35%,0%)" stroke-width="0.3" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="m37,67.5 a0.5 1 0 0 0 2 5" stroke="hsl(26,35%,0%)" stroke-width="0.3" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <g class="rhand">
                    <path d="m81,70 a0.5 1 0 0 1 -15 -20" stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round" />
                    <!--           <path d="m70,69 a0.5 1 0 0 0 -2 5" stroke="hsl(26,35%,0%)" stroke-width="0.3" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                    <path d="m69,67.5 a0.5 1 0 0 1 -2 5" stroke="hsl(26,35%,0%)" stroke-width="0.3" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="m72,71.5 a0.5 1 0 0 1 -2 5" stroke="hsl(26,35%,0%)" stroke-width="0.3" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <!--       lowwer -->
                <!--        <path d="m28,40 a5 11 0 0 0 50 0 " stroke="hsl(26,35%,0%)" stroke-width="1" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round" /> -->

            </g>
            <g class="eye">
                <!--       <circle cx="45" cy="35" r='5' stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round"/> -->
                <ellipse cx="45" cy="35" rx="1" ry="2" stroke="hsl(26,35%,0%)" stroke-width="0" fill="hsl(26,35%,0%)" stroke-linecap="round" stroke-linejoin="round">
                    <animate attributeName="ry" values="
        2;
        2;
        0;
        2;
        2;
        2;
        0;
        2;
        2;" dur="3" repeatCount="indefinite" />
                </ellipse>
                <ellipse cx="60" cy="35" rx="1" ry="2" stroke="hsl(26,35%,0%)" stroke-width="0" fill="hsl(26,35%,0%)" stroke-linecap="round" stroke-linejoin="round">
                    <animate attributeName="ry" values="
        2;
        2;
        0;
        2;
        2;
        2;
        0;
        2;
        2;" dur="3" repeatCount="indefinite" />
                </ellipse>
            </g>

            <g class='nose'>
                <path d="m49,38 a1.5 1 0 0 1 10 5 " stroke="hsl(26,35%,0%)" stroke-width="0.5" fill="hsl(26,35%,100%)" stroke-linecap="round" stroke-linejoin="round" />
                <ellipse cx="55" cy="39" rx="2.3" ry="1" stroke="hsl(26,35%,0%)" stroke-width="0" fill="hsl(26,35%,0%)" stroke-linecap="round" stroke-linejoin="round" />
            </g>

            <!--       overear -->
            <g class='overear'>
                <!--       strin -->
                <path d="m30,25 a1 1 0 0 1 45 0 " stroke="hsl(180,4%,30%)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" />


                <path d="m30,27 a1 1 0 0 1 45 0 " stroke="hsl(180,4%,50%)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />

                <!--       left -->
                <path d="m32,24 a1 1 0 1 0 -5 15 z" stroke="hsl(180,4%,60%)" stroke-width="1" fill="hsl(180,4%,80%)" stroke-linecap="round" stroke-linejoin="round" />

                <!--         <path d="m32.6,24.5 a5 10 10 0 1 -5 15 " stroke="hsl(105,4%,0%)" stroke-width="0" fill="hsl(105,4%,60%)" stroke-linecap="round" stroke-linejoin="round"/> -->
                <!--       <path d="m33,25 a1.3 1 15 1 0 -5 15 z" stroke="hsl(180,4%,60%)" stroke-width="1.5" fill="hsl(180,4%,80%)" stroke-linecap="round" stroke-linejoin="round"/> -->

                <!--       rigth -->
                <path d="m73,25 a1 1 0 1 1 5 15 z" stroke="hsl(180,4%,60%)" stroke-width="1" fill="hsl(180,4%,80%)" stroke-linecap="round" stroke-linejoin="round" />

            </g>
        </g>
        <!--         noter -->



        <!--       <path d="m73,25 a1.3 1 -15 1 1 5 15 z" stroke="hsl(180,4%,60%)" stroke-width="1.5" fill="hsl(180,4%,80%)" stroke-linecap="round" stroke-linejoin="round"/> -->


        <!--       face -->
        <!--       eye -->
        <!--       <ellipse cx="40" cy='30' rx="2" ry="2"/> -->


        <!--        <path d="m50,10 l-40,20 l0,40 l40,-20 z" stroke="hsl(164, 82%, 0%)" stroke-width="0" fill="#d1e2e8" stroke-linecap="round" stroke-linejoin="round"/> -->



    </svg>
</body>

</html>