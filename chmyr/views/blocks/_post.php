<?php
/** @var \Chmyr\Models\Entities\PostsEntity $posts */
/** @var \Chmyr\Models\Entities\CommentsEntity $comments */
?>


<div class="content_container">
	<?php foreach ($posts as $post):?>
	<div class="detailed_posts_container">
		<div class="detailed_post_container">
			<div class="detailed_post_menu">
				<div class="detailed_post_menu_author">
					<img class="detailed_post_menu_author__photo" src="/public/img/layout_img/user_photo__test.jpg" alt="author_photo">
					<div class="detailed_post_menu_author__name">
						<?= $post->getName()?>
					</div>
					<div class="detailed_post_menu_author__surname">
						<?= $post->getSurname()?>
					</div>
					<div class="detailed_post_menu_author__date">
						<?= $post->getDateUpdate() ?>
					</div>
					<div class="detailed_post_menu_settings">
						<img src="/public/img/icons/star.svg" alt="settings">
					</div>
				</div>

			</div>
			<a class="detailed_post_title__a" href="/posts">
				<div class="detailed_post_title">
					<?= $post->getTitle() ?>
				</div>
			</a>
			<div class="detailed_post_description">
				<?= $post->getDescription() ?>
			</div>
			<div class="detailed_post_tags">
				<?php  $tagsArray = explode(',',$post->getTags());?>
				<?php foreach ($tagsArray as $tag):?>
					<a class="post_tags__tag_link" href="#<?php echo $tag ?>"><span class="post_tags__tag"><?php echo $tag ?></span></a>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<div class="comments_title">
		Комментарии
	</div>
	<?php foreach ($comments as $comment):?>
	<div class="detailed_post_comments_container">
		<div class="comment_container">
			<div class="comment_author_menu">
				<img class="comment_author__photo" src="/public/img/layout_img/user_photo__test.jpg" alt="author_photo">
				<div class="comment_author_menu_fio">
					<span class="comment_author_menu_fio__name"><?= $comment->getName() ?></span>
					<span class="comment_author_menu_fio__surname"><?= $comment->getSurname() ?></span>
				</div>
				<div class="comment_author_menu_date"><?= $comment->getDateUpdate() ?></div>
			</div>
			<div class="comment_author_menu__description">
				<?= $comment->getDescription() ?>
			</div>

		</div>
	</div>
	<?php endforeach;?>
</div>