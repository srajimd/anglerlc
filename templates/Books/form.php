<h1>Add Book</h1>
<?php
echo $this->Form->create($book);
// Hard code the user for now.
echo $this->Form->control('id', ['type' => 'hidden']);
echo $this->Form->control('publisher_id');
echo $this->Form->control('author_id');
echo $this->Form->control('title');
echo $this->Form->control('published_date');

//Status Radio Button options
$statusOptions = [['text' => 'Active', 'value' => 'Y'], ['text' => 'Inactive', 'value' => 'N']];

//Status Radio Button attributes
$statusattributes = ['label' => ['class' => 'p-2 gap-col-6'], 'class' => ['class' => 'm-2']];
?>
<label>Status</label>
<div class="grid gap-3">
    <?php echo $this->Form->radio('status', $statusOptions, $statusattributes) ?>
</div>
<div class="gx-5">
    <?php echo $this->Form->button(__('Back'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/books/index";']); ?>
    <?php echo $this->Form->button(__('Save Book')); ?>
</div>
<?php echo $this->Form->end(); ?>