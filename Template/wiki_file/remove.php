<div class="page-header">
    <h2><?= t('Remove a file') ?></h2>
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to remove this file: "%s"?', $this->text->e($file['name'])) ?>
    </p>

    <?= $this->modal->confirmButtons(
        'WikiFileController',
        'remove',
        array('plugin' => 'wiki', 'wiki_id' => $wiki['id'], 'project_id' => $wiki['project_id'], 'file_id' => $file['id'])
    ) ?>
</div>
