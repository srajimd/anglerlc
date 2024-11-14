<h1>Authors</h1>
<div class="text-end mb-5">
    <?php echo $this->Form->button(__('Add New Author'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/authors/add";']); ?>

    <?php //$this->Button->button('Add New Author', ['controller' => 'Authors', 'action' => 'add'], [], 'primary'); ?>
</div>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($authors->isEmpty()) {
        ?>
        <tr>
            <th colspan="5" class="text-center">No Authors Found</th>
        </tr>
        <?php
    } else {
        foreach ($authors as $author): ?>
            <tr>
                <td><?= h($author->firstname) ?></td>
                <td><?= h($author->lastname) ?></td>
                <td>
                    <div><?= h('E: ' . $author->email) ?></div>
                    <div><?= h('M: ' . $author->mobile) ?></div>
                </td>
                <td><?= h($author->status == 'Y' ? 'Active' : 'Inactive') ?></td>
                <td>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $author->id]) ?>
                    <?= $this->Form->postLink('Delete', ['action' => 'delete', $author->id], ['confirm' => 'Are you sure?']) ?>
                </td>
            </tr>
        <?php endforeach;


    } ?>
</table>