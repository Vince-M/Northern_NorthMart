<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform" class="searchform" >
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
    <input type="submit" id="searchsubmit" value="Search">
	</div>
</form> 

