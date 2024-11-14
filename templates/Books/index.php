<h1>Books</h1>
<div class="text-end mb-5">
    <?php echo $this->Form->button(__('Add New Book'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/books/add";']); ?>

    <?php //$this->Button->button('Add New Book', ['controller' => 'Books', 'action' => 'add'], [], 'primary'); ?>
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
    if ($books->isEmpty()) {
        ?>
        <tr>
            <th colspan="5" class="text-center">No Books Found</th>
        </tr>
        <?php
    } else {
        foreach ($books as $book): ?>
            <tr>
                <td><?= h($book->firstname) ?></td>
                <td><?= h($book->lastname) ?></td>
                <td>
                    <div><?= h('E: ' . $book->email) ?></div>
                    <div><?= h('M: ' . $book->mobile) ?></div>
                </td>
                <td><?= h($book->status == 'Y' ? 'Active' : 'Inactive') ?></td>
                <td>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $book->id]) ?>
                    <?= $this->Form->postLink('Delete', ['action' => 'delete', $book->id], ['confirm' => 'Are you sure?']) ?>
                </td>
            </tr>
        <?php endforeach;


    } ?>
</table>