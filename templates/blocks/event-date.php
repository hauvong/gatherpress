<?php
/**
 * Placeholder for Event Date block.
 *
 * @package GatherPress
 * @subpackage Core
 * @since 1.0.0
 */

$gatherpress_event = new GatherPress\Core\Event( get_the_ID() );
?>
<div class="gp-event-date">
	<div class="gp-event-date__row">
		<div class="gp-event-date__item">
			<div class="gp-event-date__icon">
				<div class="dashicons dashicons-clock"></div>
			</div>
			<div class="gp-event-date__text">
				<?php echo esc_html( $gatherpress_event->get_display_datetime() ); ?>
			</div>
		</div>
	</div>
</div>
