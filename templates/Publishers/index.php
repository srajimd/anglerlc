<h1>Publishers</h1>
<div class="text-end mb-5">
    <?php echo $this->Form->button(__('Add New Publisher'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/publishers/add";']); ?>

    <?php //$this->Button->button('Add New Publisher', ['controller' => 'Publishers', 'action' => 'add'], [], 'primary'); ?>
</div>
<table>
    <tr>
        <th>Name</th>
        <th>Publisher Name</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($publishers->isEmpty()) {
        ?>
        <tr>
            <th colspan="5" class="text-center">No Publishers Found</th>
        </tr>
        <?php
    } else {
        foreach ($publishers as $publisher): ?>
            <tr>
                <td><?= h($publisher->name) ?></td>
                <td><?= h($publisher->publisher_name) ?></td>
                <td><?= h($publisher->address1 . ', ' . $publisher->address2 . ', ' . $publisher->city . ', ' . $publisher->state . '-' . $publisher->pincode) ?>
                </td>
                <td><?= h($publisher->status == 'Y' ? 'Active' : 'Inactive') ?></td>
                <td>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $publisher->id]) ?>
                    <?= $this->Form->postLink('Delete', ['action' => 'delete', $publisher->id], ['confirm' => 'Are you sure?']) ?>
                </td>
            </tr>
        <?php endforeach;


    } ?>
</table>