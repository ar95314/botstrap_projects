<?php if(count($error) > 0): ?>

<div>

<?php foreach($errors as $error): ?>
      <p><?php echo $error ?> <p>
<?php endforeach ?>      
</div>

<?php endif ?>