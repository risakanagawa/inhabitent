<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim($phone)) > 0 ): ?>
<p>
    <span class="contact-phone">
    <i class="fas fa-phone"></i>  <span><a href="tel:<?php echo ' '.$phone; ?>"><?php echo ' '.$phone; ?></a></span>
    </span>
</p>
<?php endif; ?>

<?php if(strlen(trim($email)) > 0 ): ?>
<p>
    <span class="contact-email">
    <i class="fas fa-envelope"></i> <span><a href="mailto:<?php echo ' '.$email; ?>"><?php echo ' '.$email; ?></a></span>
    </span>
</p>
<?php endif; ?>



<?php if(strlen(trim($address)) > 0 ): ?>
<p>
    <span class="contact-phone">
    <i class="fas fa-map-marker-alt"></i>  <?php echo ' '.$address; ?>
    </span>
</p>
<?php endif; ?>

