<h1>Login</h1>

<?php 

    echo $this->Form->create('processLogin', ['type' => 'post', 'url' => '/processLogin']);
    echo $this->Form->input('email', array('label' => 'Email address:'));
    echo $this->Form->input('password', array('label' => 'Password:'));
    echo $this->Form->submit('Login');
    echo $this->Form->end();

?>
