<h1>Add Publisher</h1>
<?php
echo $this->Form->create($publisher);
// Hard code the user for now.
echo $this->Form->control('id', ['type' => 'hidden']);
echo $this->Form->control('name');
echo $this->Form->control('publisher_name');
echo $this->Form->control('address1');
echo $this->Form->control('address2');
echo $this->Form->control('city');
echo $this->Form->control('state');
echo $this->Form->control('pincode');

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
    <?php echo $this->Form->button(__('Back'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/publishers/index";']); ?>
    <?php echo $this->Form->button(__('Save Publisher')); ?>
</div>
<?php echo $this->Form->end(); ?>