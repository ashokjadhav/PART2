<!-- <div class="">
	<?php foreach ($items as $key => $value) {?>
			<h4><?php print $value['title']?></h4>
			<h5><?php print  date('d F Y', strtotime($value['created']));?></h5>
			<p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
	<?php }?>
</div> -->

<div class="sidebar-item recent-post">
    <!-- <h3>Recent Post</h3> -->
    <?php foreach ($items as $key => $value) {?>
	    <div class="media">
	        <!-- <div class="pull-left">
	            <a href="#"><img src="<?php print $directory;?>images/blog/post1.jpg" alt=""></a>
	        </div> -->
	        <div class="media-body">
	            <h4><a href="#"><?php print $value['title']?></a></h4>
				<p>Posted on <?php print  date('d F Y', strtotime($value['created']));?></p>
	        </div>
	    </div>
    <?php }?>
</div>