@props([
    'groupBorder'=>30,
    'hasShadow'=>true
    ])

<style>
    .btn-group-container {
        /*height: 100vh;*/
        margin: 0;
        display: grid;
        place-items: center;
        /*background: rgba(205, 207, 219, 0.2);*/
    }
    .btn-group {
        padding: 5px 8px;
        /*border-radius: 50px;*/
        background: #fefefe;
        border: 0.5px solid rgba(146, 152, 176, 0.4);

        cursor: default;
    }
    .shadow{
        box-shadow: 0 0 10px rgba(146, 152, 176, 0.2), 4px 4px 10px rgba(146, 152, 176, 0.2);
    }
    .btn-group .btn {
        border: 0 solid transparent;
        background: transparent;
        /*padding: 10px 20px;*/
        margin: 0 -2px;
        color: #273043;
        border-radius: 12px;
        cursor: pointer;
        position: relative;
        top: 0;
        left: 0;
        outline: none;
        transition: background 0.2s ease-in-out;
    }
    .btn-group button:first-child {
        border-top-left-radius: 40px;
        border-bottom-left-radius: 40px;
    }
    .btn-group button:last-child {
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;
    }
    .btn-group button div {
        position: absolute;
        top: -43px;
        left: calc(50% - 40px);
        width: 80px;
        font-size: 13px;
        color: #fff;
        background: rgba(20, 25, 36, 0.7);
        border-radius: 16px;
        line-height: 30px;
        font-family: 'Raleway', Arial, sans-serif;
        text-align: center;
        font-weight: 500;
        letter-spacing: 1px;
        box-shadow: 0 0 5px rgba(39, 48, 68, 0.3), 1px 1px 5px rgba(39, 48, 68, 0.2);
        display: none;
        cursor: pointer;
    }
    .btn-group .btn:hover {
        background: rgba(240, 241, 244, 1);
    }
    .btn-group .btn:hover div {
        display: block;
        animation: tooltip-animation-normal 0.3s ease-out forwards;
    }
    .btn-group .btn:hover div.animate-right {
        animation: tooltip-animation-right 0.3s ease-out forwards;
    }
    .btn-group .btn:hover div.animate-left {
        animation: tooltip-animation-left 0.3s ease-out forwards;
    }
    .btn-group .btn:active {
        outline: none;
        background: rgba(214, 216, 225, 1);
    }
    @keyframes tooltip-animation-right {
        0% {
            transform: translateX(-75px);
        }
        100% {
            transform: translateX(0);
        }
    }
    @keyframes tooltip-animation-left {
        0% {
            transform: translateX(75px);
        }
        100% {
            transform: translateX(0);
        }
    }
    @keyframes tooltip-animation-normal {
        0% {
            transform: translateY(-20px);
        }
        100% {
            transform: translateY(0);
        }
    }


</style>

<div class="btn-group-container">
    <div
        @class([
        'btn-group',
        'shadow'=> $hasShadow
        ])  style="border-radius: {{$groupBorder}}px" >
        {{$slot}}
    </div>
</div>

@pushOnce('scripts')
    <script>
        window.onload = () => {
            const buttons = document.querySelectorAll(".btn-group .btn");
            buttons.forEach((button, index) => {
                button.addEventListener("mouseover", () => {
                    if (index > 0) {
                        const prevTooltip = buttons[index-1].querySelector("div");
                        prevTooltip.classList.remove("animate-right");
                        prevTooltip.classList.add("animate-left");
                    }
                    if (index < buttons.length - 1) {
                        const nextTooltip = buttons[index+1].querySelector("div");
                        nextTooltip.classList.remove("animate-left");
                        nextTooltip.classList.add("animate-right");
                    }
                });
                button.addEventListener("click", ()=>{

                })
            });
        }
    </script>
@endPushOnce
