<div class="slideshow-item">
	<a href="<?php print $fields['field_link_to']->content; ?>" style="color: <?php print $fields['field_slide_text_color']->content; ?>;">
		<div class="slide-caption" style="background-color:<?php print $fields['field_slide_color']->content; ?>;">
			<h2 class="slide-title" style="color: <?php print $fields['field_slide_text_color']->content; ?>;"><?php print $fields['title']->content; ?></h2>
			<div class="slide-body" style="color: <?php print $fields['field_slide_text_color']->content; ?>;"><?php print $fields['body']->content; ?></div>
		</div>
	</a>
	<div class="slide-image">
		<a href="<?php print $fields['field_link_to']->content; ?>"><?php print $fields['field_hero_image']->content; ?></a>
		<a href="<?php print $fields['field_link_to']->content; ?>" class="slide-show-more" style="background-color:<?php print $fields['field_slide_color']->content; ?>; color: <?php print $fields['field_slide_text_color']->content; ?>;">Show Me More &raquo;</a>
	</div>
</div>