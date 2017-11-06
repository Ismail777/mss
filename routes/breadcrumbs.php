<?php
Use App\User;

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('home'));
});

// Home > Users
Breadcrumbs::register('users', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Users', route('users.index'));
});

// Home > Users > User
Breadcrumbs::register('user', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('users');
    $breadcrumbs->push($user->name, route('users.edit', $user->id));
});

// Home > Roles
Breadcrumbs::register('roles', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Roles', route('roles.index'));
});

// Home > Roles > Role
Breadcrumbs::register('role', function ($breadcrumbs, $role) {
    $breadcrumbs->parent('roles');
    $breadcrumbs->push($role->display_name, route('roles.edit', $role->id));
});

// Home > Permissions
Breadcrumbs::register('permissions', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Permissions', route('permissions.index'));
});

// Home > Roles > Role
Breadcrumbs::register('permission', function ($breadcrumbs, $permission) {
    $breadcrumbs->parent('permissions');
    $breadcrumbs->push($permission->display_name, route('permissions.edit', $permission->id));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('category', $post->category);
    $breadcrumbs->push($post->title, route('post', $post));
});
