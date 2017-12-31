<?php 
	$pages = ceil($pagination['total'] / $pagination['limit']);
	$page = $this->input->get('page') ? $this->input->get('page') : 1;
?>
<?php if($pagination['total'] > $pagination['limit']): ?>
<nav aria-label="Pagination">
	<ul class="pagination">
		<li class="page-item <?php if($page == 1) echo 'disabled'?>">
			<a class="page-link" href="<?php if($page != 1) echo '?page=' . strval($page - 1) ?>" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
			<span class="sr-only">Previous</span>
			</a>
		</li>
		
		<li class="page-item <?php if($page == $pages) echo 'disabled'?>">
			<a class="page-link" href="<?php if($page != $pages) echo '?page=' . strval($page + 1) ?>" aria-label="Next">
				<span class="sr-only">Next</span>
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>
<?php endif ?>