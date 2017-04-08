<?
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<?foreach($articles as $article):?>
<?
$h2 = Html::tag('h2', $article->title);
?>

<article id="post-<?=$article->id?>" class="group post-68 post type-post status-publish format-video has-post-thumbnail hentry category-lifestyle tag-hueman tag-theme post_format-post-format-video">
	<h2 class="post-title pad"><a href=""><?=$article->title?></a></h2>
	<ul class="post-meta pad group">
		<li><?=$article->category?></li>
		<li><?=$article->date?></li>
		<li><?=$article->hits?></li>
	</ul>
	<div class="post-inner">
		<div class="post-format image-post">
			<img src="img/<?=$article->intro_picture?>" alt="">
		</div>
		
		<div class="post-content pad">
			<div class="entry">
				<p><?=$article->text?></p>
			</div>
			<a href="" class="more-link-custom">more</a>
		</div>
	</div>
</article>



<? endforeach;?>

<?= LinkPager::widget([ 'pagination' => $pagination]);?>