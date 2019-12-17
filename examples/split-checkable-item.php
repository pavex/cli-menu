<?php

use PhpSchool\CliMenu\Builder\SplitItemBuilder;
use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use PhpSchool\CliMenu\MenuItem\CheckableItem;

require_once(__DIR__ . '/../vendor/autoload.php');

$itemCallable = function (CliMenu $menu) {
    /** @var CheckableItem $item */
    $item = $menu->getSelectedItem();

    $item->toggle();

    $menu->redraw();
};

$menu = (new CliMenuBuilder)
    ->setTitle('Select a Language')
    ->addSplitItem(function (SplitItemBuilder $b) use ($itemCallable) {
        $b->setGutter(5)
            ->addCheckableItem('Rust', $itemCallable)
            ->addCheckableItem('C++', $itemCallable)
            ->addCheckableItem('Go', $itemCallable)
            ->addCheckableItem('Java', $itemCallable)
            ->addCheckableItem('C', $itemCallable)
        ;
    })
    ->build();

$menu->open();