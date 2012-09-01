<?php 
/*
* Searchform
*/
?>
<div id="search-wrapper">
	<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
		<label class="hidden" for="s"><?php //_e('Search:'); ?></label>
		<input type="text" value="Type keywords..." onfocus="this.value==this.defaultValue?this.value='':null;" onblur="this.value==''?this.value='Type keywords...':null;" name="s" id="searchinput" size="18" />
		<input type="submit" id="searchsubmit" value=""/>
	</form>
</div>
