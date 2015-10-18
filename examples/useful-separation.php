<?php

use MikeyMike\CliMenu\CliMenu;
use MikeyMike\CliMenu\CliMenuBuilder;
use MikeyMike\CliMenu\MenuItem\LineBreakItem;
use MikeyMike\CliMenu\MenuItem\MenuItem;
use MikeyMike\CliMenu\MenuItem\StaticItem;

require_once(__DIR__ . '/../vendor/autoload.php');

$itemCallable = function (CliMenu $menu) {
    echo $menu->getSelectedItem()->getText();
};

$menu = (new CliMenuBuilder)
    ->setTitle('Useful CLI Menu Separation')
    ->addLineBreak()
    ->addStaticItem('Section 1')
    ->addStaticItem('---------')
    ->addItem('First Item', $itemCallable)
    ->addItem('Second Item', $itemCallable)
    ->addItem('Third Item', $itemCallable)
    ->addLineBreak()
    ->addStaticItem('Section 2')
    ->addStaticItem('---------')
    ->addItem('Fourth Item', $itemCallable)
    ->addItem('Fifth Item', $itemCallable)
    ->addItem('Sixth Item', $itemCallable)
    ->addLineBreak()
    ->addStaticItem('Section 3')
    ->addStaticItem('---------')
    ->addItem('Seventh Item', $itemCallable)
    ->addItem('Eighth Item', $itemCallable)
    ->addItem('Ninth Item', $itemCallable)
    ->addLineBreak()
    ->build();

$menu->display();