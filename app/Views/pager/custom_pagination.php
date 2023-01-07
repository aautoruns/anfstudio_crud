<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pagination">
        <?php if ($pager->hasPrevious()) : ?>
            <li>
                <a class="btn btn-dark" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                </a>
            </li>
            &nbsp&nbsp
            <li>
                <a class="btn btn-secondary" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
                </a>
            </li>&nbsp
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li <?= $link['active'] ? 'class="active"' : '' ?>>
                <a class="btn btn-danger" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>&nbsp
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li>
                <a class="btn btn-secondary" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
                </a>
            </li>&nbsp&nbsp
            <li>
                <a class="btn btn-dark" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>