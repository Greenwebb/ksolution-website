<div id="preloader" class="pre-outer">
    <div class="preloader">
        <div id="loader">
            <div id="shadow"></div>
            <div id="box"></div>
        </div>
        <h1 style="
            position: fixed;
            top: 25rem;
            color: #060424;
            font-size: 29px;
            text-align: center;
            ">loading<div style="margin-top: -9px;">
        {{-- <p style="
            font-size: 14px;
            font-weight: lighter;
        "><br> This might be the best time to take a break, it will take about 5mins, </p> --}}
                <div class="spinner-grow text-warning" style="color: #00b050 !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-success" style="color: #00b050 !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" style="color: #00b050 !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" style="color: #09006f !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" style="color: #09006f !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" style="color: #09006f !important;width: 10px;height: 10px;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>

            </div>
    </h1>
    </div>
    </h1>
</div>
</div>
<section class="home-section-background padding-bottom-0">
</section>
<style>
    #loader {
        /* Uncomment this to make it run! */
        /*
     animation: loader 5s linear infinite; 
  */

        position: fixed;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
    }

    @keyframes loader {
        0% {
            left: -100px
        }

        100% {
            left: 110%;
        }
    }

    #box {
        width: 50px;
        height: 50px;
        background: linear-gradient(to right, #3e4095, #00b050);
        animation: animate .5s linear infinite;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 3px;
    }

    @keyframes animate {
        17% {
            border-bottom-right-radius: 3px;
        }

        25% {
            transform: translateY(9px) rotate(22.5deg);
        }

        50% {
            transform: translateY(18px) scale(1, .9) rotate(45deg);
            border-bottom-right-radius: 40px;
        }

        75% {
            transform: translateY(9px) rotate(67.5deg);
        }

        100% {
            transform: translateY(0) rotate(90deg);
        }
    }

    #shadow {
        width: 50px;
        height: 5px;
        background: #000;
        opacity: 0.1;
        position: absolute;
        top: 59px;
        left: 0;
        border-radius: 50%;
        animation: shadow .5s linear infinite;
    }

    @keyframes shadow {
        50% {
            transform: scale(1.2, 1);
        }
    }

    .pre-outer {
        background: rgba(1, 1, 1, 1);
        width: 100%;
        z-index: 999;
        height: 100% !important;
    }

    .preloader {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        overflow-y: hidden;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;

        overflow: hidden;
        background: #fffffff8;
        width: 100%;
        position: absolute;
        z-index: 999;
        height: 100% !important;
        -webkit-animation: glow 8s both;
        animation: glow 8s both;

    }
</style>