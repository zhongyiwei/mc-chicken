
                <?php foreach($rows as $r) : ?>

		<p><?php echo $r->reminder_frequency; ?></p>
                <p><?php echo $r->reminder_email; ?></p>
                <p><?php echo $r->reminder_sms; ?></p>

		<?php endforeach; ?>
