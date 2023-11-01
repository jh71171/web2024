<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go!교복</title>
    
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- CSS -->
    <?php include "../include/head.php" ?>

</head>
<body>
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->


    <main id="main">
        <div class="main_wrap wrap wrap1">
            <div class="main_visual">
                <div class="mainVisual_left">
                    <img class="i1" src="../assets/img/main_img.png" alt="">
                </div>
                <div class="mainVisual_right">
                    <h2 class="split">
                        HIGH SCHOOL 
                        UNIFORM PREVIEW
                    </h2>
                    <span class="split_span">Community for students</span>
                    <div class="mainVisual_right_blue">
                    <p>교복입는 학생들을 위한 <span>커뮤니티</span></p> 
                    </div>
                </div>
            </div>    
        </div>
        <!-- //main_wrap -->
        
        <div class="main_section">
            <section id="section01" class="wrap wrap2">
                <div class="section01_left">
                    <!-- <a href="#"><img src="assets/img/main_left.png" alt=""></a> -->

                    <article id="silder">
                        <div class="sliderWrap">
                            <div class="slider s1"></div>
                            <div class="slider s2"></div>
                            <div class="slider s3"></div>
                            <div class="slider s4"></div>
                            <div class="slider s5"></div>
                        </div>
                    </article>
                    <!-- //silder -->
                </div>
                <div class="section01_right">
                    <div class="right_tag">
                        <img src="../assets/img/logo2.png" alt="">
                        <div class="tag">Community for students</div>
                    </div>
                    <div class="right_title">
                        <span>HIGH SCHOOL </span>
                        UNIFORM PREVIEW
                    </div>
                    <div class="right_cont">
                        <ul>
                            <li><img src="../assets/img/point01.png" alt="">찐 고딩들이 평가하는 교복 순위!</li>
                            <li><img src="../assets/img/point02.png" alt="">예쁜 교복부터 난해한 교복까지 한눈에 보기!</li>
                            <li><img src="../assets/img/point03.png" alt="">대학생이 아닌 청소년을 위한 커뮤니티</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- //section01 -->

            <section id="section02">
                <div class="section02_left">
                    <img src="../assets/img/main_hover01.png" alt="">
                    <div class="section02_btn">
                        <p>전국 교복소개</p>
                        <a href="pages/introduce.html">교복소개 보러가기</a>
                    </div>
                </div>
                <div class="section02_right">
                    <img src="../assets/img/main_hover02.png" alt="">
                    <div class="section02_btn hide">
                        <p>전국 교복 인기순위</p>
                        <a href="pages/ranking.html">인기순위 보러가기</a>
                    </div>
                </div>
            </section>
            <!-- //section02 -->

            <section id="section03">
                <h3>수다방 인기 게시글</h3>
                <div class="community_suda">
                    <div class="suda_list">
                        <table>
                            <colgroup>
                                <col style="width: 5%">
                                <col>
                                <col style="width: 20%">
                                <col style="width: 13%">
                            </colgroup>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                        </table>
                    </div>
                    <div class="suda_list">
                        <table>
                            <colgroup>
                                <col style="width: 5%">
                                <col>
                                <col style="width: 20%">
                                <col style="width: 13%">
                            </colgroup>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td><a href="pages/community_view.html">고교복 커뮤니티 수다방입니다.</a></td>
                                <td class="center">2023.10.11</td>
                                <td class="center"><img src="../assets/img/read.svg" alt="">16</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <!-- //section03 -->

            <section id="section04">
                <div class="section04_wrap">
                    <div class="section04_left">
                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/6kp3_yDFPU8?autoplay=1&mute=1&controls=0&loop=1&playlist=6kp3_yDFPU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="section04_youtube">
                            <div class="youtube_box">
                                <p>
                                    <em>아현ee</em>
                                    10대 아우터 추천 [룩북]
                                </p>
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/6kp3_yDFPU8?si=16aco5uU3vi1RK-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <a href="https://www.youtube.com/watch?list=TLGGrreiE4jS7JwyMjEwMjAyMw&time_continue=20&v=6kp3_yDFPU8&embeds_referring_euri=http%3A%2F%2F127.0.0.1%3A5500%2F&source_ve_path=NzY3NTg&feature=emb_yt_watermark"><img src="assets/img/link_btn.png" alt=""></a>
                            </div>
                            <div class="line"></div>
                            <div class="youtube_box">
                                <p>
                                    <em>아현ee</em>
                                    10대 아우터 추천 [룩북]
                                </p>
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/6kp3_yDFPU8?si=16aco5uU3vi1RK-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <a href="https://www.youtube.com/watch?list=TLGGrreiE4jS7JwyMjEwMjAyMw&time_continue=20&v=6kp3_yDFPU8&embeds_referring_euri=http%3A%2F%2F127.0.0.1%3A5500%2F&source_ve_path=NzY3NTg&feature=emb_yt_watermark"><img src="assets/img/link_btn.png" alt=""></a>
                            </div>
                            <div class="line"></div>
                            <div class="youtube_box">
                                <p>
                                    <em>아현ee</em>
                                    10대 아우터 추천 [룩북]
                                </p>
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/6kp3_yDFPU8?si=16aco5uU3vi1RK-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <a href="https://www.youtube.com/watch?list=TLGGrreiE4jS7JwyMjEwMjAyMw&time_continue=20&v=6kp3_yDFPU8&embeds_referring_euri=http%3A%2F%2F127.0.0.1%3A5500%2F&source_ve_path=NzY3NTg&feature=emb_yt_watermark"><img src="assets/img/link_btn.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="section04_right">
                        <div class="media_mark">
                            <img src="../assets/img/youtube_media_text.png" alt="">
                        </div>
                        <div class="media_text">
                            <div class="logo_text">
                                <img src="../assets/img/logo3.png" alt="">추천
                            </div>
                            <h3>SCHOOL LOOK BOOK</h3>
                            <p>우리 학교 <em>교복</em>에 어울리는 <em>코디 룩북</em></p>
                            <p class="small_p">
                                요즘엔 교복도 패션!<br>
                                우리 학교 교복에는 어떤 아우터가 어울릴지, 영상으로 참고해보세요.<br>
                                어떤 영상을 참고해야할지 모르겠다면? <em>Go교복!</em>이 추천해드릴게요!
                            </p>
                            <a href="https://www.youtube.com/"><img src="../assets/img/youtube_btn.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //section04 -->
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    

    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/ScrollTrigger.min.js"></script>
   
    <script>
    const target = gsap.utils.toArray(".split");
    target.forEach(target => {
        let splitClient = new SplitType(target, {type: "char"});
        let chars = splitClient.chars;
    
        gsap.from(chars, {
            yPercent: 100,
            opacity: 0,
            rotation: 30,
            duration: 0.2,
            stagger: 0.1,
            scrollTrigger: {
                trigger: target,
                start: "top bottom",
                end: "+400",
            }
        })
    });
    </script>
    
</body>
</html>