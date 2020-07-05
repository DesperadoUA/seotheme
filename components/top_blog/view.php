<?php include $ROOT_THEME.'components/breadcrumbs/dal.php'; ?>
<img src="<?= $PATH_LAZY_LOAD; ?>"
     data-src="<?= $data['src']; ?>"
	 alt="<?= $data['alt'];?>"
	 title="<?= $data['title']; ?>"
	 class="blog_thumbnail"
/>
<h1><?= $data['h1']; ?></h1>
<?= $data['content']; ?>