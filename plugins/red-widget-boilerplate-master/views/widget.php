<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim($weekdays)) > 0 ): ?>
<p>
    <span class="business-weekdays">
      Monday - Friday :
    </span>
    <?php echo $weekdays; ?>
</p>
<?php endif; ?>

<?php if(strlen(trim($saturday)) > 0 ): ?>
<p>
<p>
    <span class="business-saturday">
       Saturday : 
    </span>
    <?php echo $saturday; ?>
</p>
<?php endif; ?>

<?php if(strlen(trim($sunday)) > 0 ): ?>
<p>
<p>
    <span class="business-sunday">
    Sunday
    </span>
    <?php echo $sunday; ?>
</p>
<?php endif; ?>
