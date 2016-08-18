<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Ads'), ['controller' => 'TypeAds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Ad'), ['controller' => 'TypeAds', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ads view large-9 medium-8 columns content">
    <h3><?= h($ad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $ad->has('user') ? $this->Html->link($ad->user->id, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type Ad') ?></th>
            <td><?= $ad->has('type_ad') ? $this->Html->link($ad->type_ad->type_name, ['controller' => 'TypeAds', 'action' => 'view', $ad->type_ad->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Price Info') ?></th>
            <td><?= h($ad->price_info) ?></td>
        </tr>
        <tr>
            <th><?= __('Town') ?></th>
            <td><?= $ad->has('town') ? $this->Html->link($ad->town->town_name, ['controller' => 'Towns', 'action' => 'view', $ad->town->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ad->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($ad->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Surface') ?></th>
            <td><?= $this->Number->format($ad->surface) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($ad->latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($ad->longitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ad->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ad->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $ad->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('For Sale') ?></th>
            <td><?= $ad->for_sale ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('For Rent') ?></th>
            <td><?= $ad->for_rent ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is Divisible') ?></th>
            <td><?= $ad->is_divisible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ad->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Images') ?></h4>
        <?php if (!empty($ad->images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ad Id') ?></th>
                <th><?= __('Is Presentation') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ad->images as $images): ?>
            <tr>
                <td><?= h($images->id) ?></td>
                <td><?= h($images->ad_id) ?></td>
                <td><?= h($images->is_presentation) ?></td>
                <td><?= h($images->description) ?></td>
                <td><?= h($images->created) ?></td>
                <td><?= h($images->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($ad->messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ad Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Message') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ad->messages as $messages): ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->ad_id) ?></td>
                <td><?= h($messages->name) ?></td>
                <td><?= h($messages->email) ?></td>
                <td><?= h($messages->message) ?></td>
                <td><?= h($messages->created) ?></td>
                <td><?= h($messages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
