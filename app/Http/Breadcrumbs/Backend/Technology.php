<?php

Breadcrumbs::register('admin.technologies.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.technologies.management'), route('admin.technologies.index'));
});

Breadcrumbs::register('admin.technologies.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.technologies.index');
    $breadcrumbs->push(trans('menus.backend.technologies.create'), route('admin.technologies.create'));
});

Breadcrumbs::register('admin.technologies.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.technologies.index');
    $breadcrumbs->push(trans('menus.backend.technologies.edit'), route('admin.technologies.edit', $id));
});
