<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) || $title ?></title>
	<link rel="stylesheet" href="css/style.css" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div>
    <?php
    NavBar::begin([
        'brandLabel' => 'Заработок в интернете',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div id="page" class="container">
	
		<div class="main group">
		
		<div class="content">
				
	
	<div class="pad group">
	
	
	
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
		
		
		
		

				
	
			
					
	</div><!--/.pad-->
	

		</div>
		
		<div class="sidebar s1">
			<div class="sidebar-content">
				
						
			<div id="alxtabs-4" class="widget widget_alx_tabs">
<ul class="alx-tabs-nav group tab-count-4"><li class="alx-tab tab-popular"><a href="#tab-popular-4" title="Popular Posts"><i class="fa fa-star"></i><span>Popular Posts</span></a></li><li class="alx-tab tab-recent"><a href="#tab-recent-4" title="Recent Posts"><i class="fa fa-clock-o"></i><span>Recent Posts</span></a></li><li class="alx-tab tab-comments"><a href="#tab-comments-4" title="Recent Comments"><i class="fa fa-comments-o"></i><span>Recent Comments</span></a></li><li class="alx-tab tab-tags"><a href="#tab-tags-4" title="Tags"><i class="fa fa-tags"></i><span>Tags</span></a></li></ul>
	<div class="alx-tabs-container">

	
					
									
			<ul id="tab-recent-4" class="alx-tab group thumbs-enabled">
								<li>
					
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/" title="Teaser of Lamborghini Aventador">
				<img src="http://placehold.it/160x160">													<span class="thumb-icon small"><i class="fa fa-play"></i></span>																				</a>
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/lifestyle/" rel="category tag">Lifestyle</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/" rel="bookmark" title="Teaser of Lamborghini Aventador">Teaser of Lamborghini Aventador</a></p>
						<p class="tab-item-date">Oct 28, 2013</p>					</div>
					
				</li>
								<li>
					
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/08/04/get-out-in-nature-to-breathe-and-relax/" title="Get Out in Nature to Breathe and Relax">
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/lifestyle/" rel="category tag">Lifestyle</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/08/04/get-out-in-nature-to-breathe-and-relax/" rel="bookmark" title="Get Out in Nature to Breathe and Relax">Get Out in Nature to Breathe and Relax</a></p>
						<p class="tab-item-date">Aug 4, 2013</p>					</div>
					
				</li>
								<li>
					
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/08/04/quote-format-post/" title="Quote Format Post">
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/post-formats/" rel="category tag">Post Formats</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/08/04/quote-format-post/" rel="bookmark" title="Quote Format Post">Quote Format Post</a></p>
						<p class="tab-item-date">Aug 4, 2013</p>					</div>
					
				</li>
								<li>
					
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/" title="Random Matches On Fire">
		<img src="http://placehold.it/160x160">																			<span class="thumb-icon small"><i class="fa fa-headphones"></i></span>													</a>
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/hot/" rel="category tag">Hot</a> / <a href="http://demo.alxmedia.se/anew/category/mixed/" rel="category tag">Mixed</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/" rel="bookmark" title="Random Matches On Fire">Random Matches On Fire</a></p>
						<p class="tab-item-date">Aug 3, 2013</p>					</div>
					
				</li>
								<li>
					
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/07/17/status-format-post/" title="Status Format Post">
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/post-formats/" rel="category tag">Post Formats</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/07/17/status-format-post/" rel="bookmark" title="Status Format Post">Status Format Post</a></p>
						<p class="tab-item-date">Jul 17, 2013</p>					</div>
					
				</li>
											</ul><!--/.alx-tab-->

		

						
						<ul id="tab-popular-4" class="alx-tab group thumbs-enabled">
				
								<li>
				
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/" title="Teaser of Lamborghini Aventador">
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/lifestyle/" rel="category tag">Lifestyle</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/" rel="bookmark" title="Teaser of Lamborghini Aventador">Teaser of Lamborghini Aventador</a></p>
						<p class="tab-item-date">Oct 28, 2013</p>					</div>
					
				</li>
								<li>
				
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/" title="Go Outside and Discover Earth&#8217;s Wonders">
															
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/lifestyle/" rel="category tag">Lifestyle</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/" rel="bookmark" title="Go Outside and Discover Earth&#8217;s Wonders">Go Outside and Discover Earth&#8217;s Wonders</a></p>
						<p class="tab-item-date">Jun 12, 2013</p>					</div>
					
				</li>
								<li>
				
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/" title="Random Matches On Fire">
															
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/hot/" rel="category tag">Hot</a> / <a href="http://demo.alxmedia.se/anew/category/mixed/" rel="category tag">Mixed</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/" rel="bookmark" title="Random Matches On Fire">Random Matches On Fire</a></p>
						<p class="tab-item-date">Aug 3, 2013</p>					</div>
					
				</li>
								<li>
				
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/08/04/get-out-in-nature-to-breathe-and-relax/" title="Get Out in Nature to Breathe and Relax">
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/lifestyle/" rel="category tag">Lifestyle</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/08/04/get-out-in-nature-to-breathe-and-relax/" rel="bookmark" title="Get Out in Nature to Breathe and Relax">Get Out in Nature to Breathe and Relax</a></p>
						<p class="tab-item-date">Aug 4, 2013</p>					</div>
					
				</li>
								<li>
				
										<div class="tab-item-thumbnail">
						<a href="http://demo.alxmedia.se/anew/2013/07/16/gallery-format-post/" title="Gallery Format Post">
															
					<img src="http://placehold.it/160x160">
					</div>
										
					<div class="tab-item-inner group">
						<p class="tab-item-category"><a href="http://demo.alxmedia.se/anew/category/post-formats/" rel="category tag">Post Formats</a></p>						<p class="tab-item-title"><a href="http://demo.alxmedia.se/anew/2013/07/16/gallery-format-post/" rel="bookmark" title="Gallery Format Post">Gallery Format Post</a></p>
						<p class="tab-item-date">Jul 16, 2013</p>					</div>
					
				</li>
											</ul><!--/.alx-tab-->
			
			

		
						
			<ul id="tab-comments-4" class="alx-tab group avatars-enabled">
								<li>
					
												<div class="tab-item-avatar">
							<a href="http://demo.alxmedia.se/anew/2013/07/16/gallery-format-post/#comment-3">
						<img src="http://placehold.it/160x160">
						</div>
												
						<div class="tab-item-inner group">
												
							<div class="tab-item-name">Sarah says:</div>
							<div class="tab-item-comment"><a href="http://demo.alxmedia.se/anew/2013/07/16/gallery-format-post/#comment-3">Such a nice slider gallery to put images in!</a></div>
							
						</div>

				</li>
								<li>
					
												<div class="tab-item-avatar">
							<a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/#comment-23">
						<img src="http://placehold.it/160x160">
						</div>
												
						<div class="tab-item-inner group">
												
							<div class="tab-item-name">Alexander says:</div>
							<div class="tab-item-comment"><a href="http://demo.alxmedia.se/anew/2013/08/03/random-matches-on-fire/#comment-23">This is a comment test to see how it looks!</a></div>
							
						</div>

				</li>
								<li>
					
												<div class="tab-item-avatar">
							<a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/#comment-38">
						<img src="http://placehold.it/160x160">
						</div>
												
						<div class="tab-item-inner group">
												
							<div class="tab-item-name">Alexander says:</div>
							<div class="tab-item-comment"><a href="http://demo.alxmedia.se/anew/2013/10/28/teaser-of-lamborghini-aventador-2/#comment-38">Yes.</a></div>
							
						</div>

				</li>
								<li>
					
												<div class="tab-item-avatar">
							<a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/#comment-19">
						<img src="http://placehold.it/160x160">
						</div>
												
						<div class="tab-item-inner group">
												
							<div class="tab-item-name">Sarah says:</div>
							<div class="tab-item-comment"><a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/#comment-19">And this is another test comment.</a></div>
							
						</div>

				</li>
								<li>
					
												<div class="tab-item-avatar">
							<a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/#comment-18">
						<img src="http://placehold.it/160x160">
						</div>
												
						<div class="tab-item-inner group">
												
							<div class="tab-item-name">Lisa says:</div>
							<div class="tab-item-comment"><a href="http://demo.alxmedia.se/anew/2013/06/12/go-outside-and-discover-earths-wonders/#comment-18">Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem...</a></div>
							
						</div>

				</li>
							</ul><!--/.alx-tab-->

		
		
			<ul id="tab-tags-4" class="alx-tab group">
				<li>
					<a href='http://demo.alxmedia.se/anew/tag/aside/' class='tag-link-9 tag-link-position-1' title='1 topic' style='font-size: 8pt;'>Aside</a>
<a href='http://demo.alxmedia.se/anew/tag/audio/' class='tag-link-10 tag-link-position-2' title='1 topic' style='font-size: 8pt;'>Audio</a>
<a href='http://demo.alxmedia.se/anew/tag/chat/' class='tag-link-11 tag-link-position-3' title='1 topic' style='font-size: 8pt;'>Chat</a>
<a href='http://demo.alxmedia.se/anew/tag/conversation/' class='tag-link-12 tag-link-position-4' title='1 topic' style='font-size: 8pt;'>Conversation</a>
<a href='http://demo.alxmedia.se/anew/tag/embed/' class='tag-link-16 tag-link-position-5' title='1 topic' style='font-size: 8pt;'>Embed</a>
<a href='http://demo.alxmedia.se/anew/tag/hueman/' class='tag-link-19 tag-link-position-6' title='1 topic' style='font-size: 8pt;'>hueman</a>
<a href='http://demo.alxmedia.se/anew/tag/link/' class='tag-link-24 tag-link-position-7' title='1 topic' style='font-size: 8pt;'>Link</a>
<a href='http://demo.alxmedia.se/anew/tag/no-title/' class='tag-link-27 tag-link-position-8' title='1 topic' style='font-size: 8pt;'>No Title</a>
<a href='http://demo.alxmedia.se/anew/tag/post-format/' class='tag-link-29 tag-link-position-9' title='2 topics' style='font-size: 22pt;'>Post Format</a>
<a href='http://demo.alxmedia.se/anew/tag/quote/' class='tag-link-30 tag-link-position-10' title='1 topic' style='font-size: 8pt;'>Quote</a>
<a href='http://demo.alxmedia.se/anew/tag/theme/' class='tag-link-35 tag-link-position-11' title='1 topic' style='font-size: 8pt;'>theme</a>
<a href='http://demo.alxmedia.se/anew/tag/video/' class='tag-link-36 tag-link-position-12' title='2 topics' style='font-size: 22pt;'>Video</a>
<a href='http://demo.alxmedia.se/anew/tag/vimeo/' class='tag-link-37 tag-link-position-13' title='1 topic' style='font-size: 8pt;'>Vimeo</a>				</li>
			</ul><!--/.alx-tab-->
				
			</div>

</div>
		
		</div><!--/.sidebar-content-->
		
		</div>
		
	</div>
		
		
		
		
		
		
		
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
