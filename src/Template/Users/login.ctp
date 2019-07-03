<div class="content">
<h1>Autentication</h1>

<?php 

echo $this->Form->create();
echo $this->Form->control('username');
echo $this->Form->control('password');
echo $this->Form->button('Access');

?>

</div>