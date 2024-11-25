<h1>Books</h1>
<div class="text-end mb-5">
    <?php echo $this->Form->button(__('Add New Book'), ['type' => 'button', 'onclick' => 'javascript:window.location.href="/books/add";']); ?>

    <?php //$this->Button->button('Add New Book', ['controller' => 'Books', 'action' => 'add'], [], 'primary'); ?>
</div>
<table>
    <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($books->items()->isEmpty()) {
        ?>
        <tr>
            <th colspan="5" class="text-center">No Books Found</th>
        </tr>
        <?php
    } else {
        foreach ($books as $book):
            ?>
            <tr>
                <td><?= h($book->title) ?></td>
                <td>
                    <div><?= h('N: ' . $book->author->firstname . ' ' . $book->author->lastname) ?></div>
                    <div><?= h('E: ' . $book->author->email) ?></div>
                    <div><?= h('M: ' . $book->author->mobile) ?></div>
                </td>
                <td>
                    <div><?= h('N: ' . $book->publisher->publisher_name) ?></div>
                    <div>
                        <?= h('A: ' . $book->publisher->address1 . ',' . $book->publisher->address2 . ',' . $book->publisher->city . ',' . $book->publisher->state . '-' . $book->publisher->pincode) ?>
                    </div>
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