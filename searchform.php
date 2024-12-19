<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
      <label class="screen-reader-text" for="s">Search for:</label>
      <input type="text" name="s" id="s" value="<?php echo esc_attr( the_search_query() ); ?>">
      <input type="submit" id="searchsubmit" value="Search">
    </div>
    
</form>

