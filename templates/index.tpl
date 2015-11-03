<?php
/**
 * @var LWS\JufThirza\PageView $this
 * @var string $head
 * @var string $footer
 * @var string $text
 * @var string $title
 */
echo $head;
?>
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1><?php echo $title?></h1>
                        <p>
                            <?php echo $text?>
                        </p>
                    </div>
                    <img src="../images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="../images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="../images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="../images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
<?php echo $footer?>
