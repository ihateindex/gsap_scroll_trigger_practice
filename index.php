<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./lib/jquery-3.3.1.min.js"></script>
    <script src="./lib/gsap.min.js"></script>
    <script src="./lib/ScrollTrigger.min.js"></script>
    <title>GSAP ScrollTrigger</title>
</head>

<body>
    <div class="container">
        <div class="inner">
            <section class="section-scrollTrigger">
                <div class="step-01">
                    <div class="step-01-title-wrap">
                        <h3 class="step-01-sub-title">2마리 중 하나는</h3>
                        <h2 class="step-01-title">체중 관리가 필요해요</h2>
                    </div>
                    <img class="step-01-cat1 step-01-cat" src="./image/cat.png" alt="">
                    <img class="step-01-cat2 step-01-cat" src="./image/cat.png" alt="">
                    <img class="step-01-cat3 step-01-cat" src="./image/cat.png" alt="">
                    <img class="step-01-cat4 step-01-cat" src="./image/cat.png" alt="">
                    <img class="step-01-cat5 step-01-cat" src="./image/cat.png" alt="">
                    <img class="step-01-cat6 step-01-cat" src="./image/cat.png" alt="">
                    <div class="circle-red"></div>
                </div>
                <div class="step-02">
                    <div class="step-02-title-wrap">
                        <h3 class="step-02-sub-title">그동안 잘못된 체중 관리로</h3>
                        <h2 class="step-02-title ">우리 댕냥이가 비만이<br>되었는지 몰라요</h2>
                    </div>
                    <div class="step-02-obesity-percent">
                        <p class="obesity-percent-title">전세계 반려동물 비만율</p>
                        <div class="obesity-percent-animal-wrap">
                            <div class="obesity-percent-cat-wrap">
                                <img class="obesity-percent-cat" src="./image/cat.png" alt="">
                                <p class="obesity-percent-count">0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="section2">
            </section> -->
        </div>
    </div>
    <script>
        var sec1Timeline = gsap.timeline({
            scrollTrigger: {
                trigger: ".section-scrollTrigger",
                pin: true,
                scrub: true,
                start: "top top",
                // 스크롤 트리거가 움직일 길이?
                end: "1500"
            }
        })

        var obesityPercent = 0;
        var obesityCounter = $('.obesity-percent-count');

        sec1Timeline
            .from('.step-01-sub-title', {
                y: 10,
                autoAlpha: 0
            })
            .from('.step-01-title', {
                y: 10,
                autoAlpha: 0
            })
            .from('.step-01-cat2', {
                y: 20,
                autoAlpha: 0
            })
            .from('.step-01-cat3', {
                y: 20,
                autoAlpha: 0
            })
            .from('.step-01-cat4', {
                y: 80,
                autoAlpha: 0
            })
            .from('.step-01-cat5', {
                y: 80,
                autoAlpha: 0
            })
            .from('.step-01-cat6', {
                y: 80,
                autoAlpha: 0
            })
            .from('.circle-red', {
                width: 0,
                height: 0
            })
            .from('.step-02-sub-title', {
                autoAlpha: 0,
                y: 10
            })
            .from('.step-02-title', {
                autoAlpha: 0,
                y: 10
            })
            .from('.step-02-obesity-percent', {
                autoAlpha: 0,
                y: 10,
                // onEnter: () => console.log("hi")
            })
            .call(count)
        // .to('.sub-title1', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.title1', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.section1-cat2', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.section1-cat3', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.section1-cat4', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.section1-cat5', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.section1-cat6', {
        //     y: 0,
        //     autoAlpha: 1
        // })
        // .to('.circle-red', {
        //     width: 1000,
        //     height: 1000,
        //     autoAlpha: 1,
        // })
        // .to('.sub-title2', {
        //     autoAlpha: 1,
        //     y: 0,
        // })
        // .to('.title2', {
        //     autoAlpha: 1,
        //     y: 0
        // })

        function count() {

            if (obesityPercent < 22) {
                timer = setTimeout(function () {
                    obesityPercent++;
                    obesityCounter.text(obesityPercent + '%')
                    count();
                }, 30)
            }
            // if (obesityPercent >= 22) {
            //     obesityPercent = 0;
            // }
        }
    </script>
</body>

</html>