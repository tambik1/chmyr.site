<?php
/** @var \Chmyr\Models\Entities\PostsEntity $posts */

?>

<div class="content_container">
	<?php foreach ($posts as $post):?>
	<div class="posts_container">
		<div class="post_container">
			<div class="post_menu">
				<div class="post_menu_author">
					<img class="post_menu_author__photo" src="/public/img/layout_img/user_photo__test.jpg" alt="author_photo">
					<div class="post_menu_author__name">
						<?= $post->getName()?>
					</div>
					<div class="post_menu_author__surname">
						<?= $post->getSurname()?>
					</div>
					<div class="post_menu_author__date">
						<?= $post->getDateUpdate() ?>
					</div>
					<div class="post_menu_settings">
						<img src="/public/img/icons/star.svg" alt="settings">
					</div>
				</div>

			</div>
			<a class="post_title__a" href="/posts">
				<div class="post_title">
					<?= $post->getTitle() ?>
				</div>
			</a>
			<div class="post_description">
				<?= $post->getDescription() ?>
			</div>
			<div class="post_tags">
				<?php  $tagsArray = explode(',',$post->getTags());
				$tagsArray;
				?>
				<?php foreach ($tagsArray as $tag):?>
					<a class="post_tags__tag_link" href="#<?php echo $tag ?>"><span class="post_tags__tag"><?php echo $tag ?></span></a>
				<?php endforeach;?>
			</div>
		</div>
		<?php endforeach;?>

	</div>
</div>