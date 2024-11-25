<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Sign In</h3>
    <?= $this->Form->create() ?>
    <fieldset class="mb-3">
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Submit')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Sign Up", ['action' => 'register']) ?>
</div>