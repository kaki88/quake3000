<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Users'), ['controller' => 'TypeUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type User'), ['controller' => 'TypeUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Company Name') ?></th>
            <td><?= h($user->company_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Type User') ?></th>
            <td><?= $user->has('type_user') ? $this->Html->link($user->type_user->id, ['controller' => 'TypeUsers', 'action' => 'view', $user->type_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Website Link') ?></th>
            <td><?= h($user->website_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook Link') ?></th>
            <td><?= h($user->facebook_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Twitter Link') ?></th>
            <td><?= h($user->twitter_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Linkedin Link') ?></th>
            <td><?= h($user->linkedin_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($user->zipcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $user->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is Member') ?></th>
            <td><?= $user->is_member ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is Admin') ?></th>
            <td><?= $user->is_admin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ads') ?></h4>
        <?php if (!empty($user->ads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Type Id') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('For Sale') ?></th>
                <th><?= __('For Rent') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Price Info') ?></th>
                <th><?= __('Surface') ?></th>
                <th><?= __('Is Divisible') ?></th>
                <th><?= __('Town Id') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Latitude') ?></th>
                <th><?= __('Longitude') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->ads as $ads): ?>
            <tr>
                <td><?= h($ads->id) ?></td>
                <td><?= h($ads->user_id) ?></td>
                <td><?= h($ads->type_id) ?></td>
                <td><?= h($ads->is_active) ?></td>
                <td><?= h($ads->for_sale) ?></td>
                <td><?= h($ads->for_rent) ?></td>
                <td><?= h($ads->price) ?></td>
                <td><?= h($ads->price_info) ?></td>
                <td><?= h($ads->surface) ?></td>
                <td><?= h($ads->is_divisible) ?></td>
                <td><?= h($ads->town_id) ?></td>
                <td><?= h($ads->description) ?></td>
                <td><?= h($ads->latitude) ?></td>
                <td><?= h($ads->longitude) ?></td>
                <td><?= h($ads->created) ?></td>
                <td><?= h($ads->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ads', 'action' => 'view', $ads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ads', 'action' => 'edit', $ads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ads', 'action' => 'delete', $ads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
