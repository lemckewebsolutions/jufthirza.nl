<?php
/**
 * @var LWS\JufThirza\Downloads\PageView $this
 * @var string $head
 * @var string $footer
 *
 * @var \LWS\JufThirza\Downloads\Category[] $categories
 * @var \LWS\JufThirza\Downloads\Download[] $downloads
 */
echo $head;
?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Downloads</h1>
                        <p>Be Creative</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                <?php foreach ($categories as $categoryId => $category) { ?>
                    <li>
                        <a class="btn btn-default" href="#" data-filter=".category_<?php echo $categoryId?>">
                            <?php echo $category->getCategory()?>
                        </a>
                    </li>
                <?php } ?>
            </ul><!--/#portfolio-filter-->
        </div>
    </div>
</section>
<div class="portfolio-items">
    <?php foreach ($downloads as $download) { ?>
        <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item category_<?php echo $download->getCategory()->getCategoryId()?> logos">
            <div class="portfolio-wrapper">
                <div class="portfolio-single">
                    <div class="portfolio-thumb">
                        <img src="../<?php echo $download->getThumbNailLocation()?>" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-view">
                        <ul class="nav nav-pills">
                            <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                            <li><a href="../<?php echo $download->getThumbNailLocation()?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio-info ">
                    <h2><?php echo $download->getTitle()?></h2>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php
echo $footer;