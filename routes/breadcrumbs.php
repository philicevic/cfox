<?php

// Dashboard
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Dashboard', route('home'));
});

Breadcrumbs::register('clans.create', function($breadcrumbs) {
  $breadcrumbs->push('New Clan', route('clans.create'));
});

Breadcrumbs::register('notifications', function($breadcrumbs) {
  $breadcrumbs->push('Notifications', route('notifications'));
});

// Admin-Stuff
Breadcrumbs::register('admin.users.list', function($breadcrumbs) {
    $breadcrumbs->push('Users', route('admin.users.list'));
});
Breadcrumbs::register('admin.users.activate', function($breadcrumbs) {
    $breadcrumbs->parent('admin.users.list');
    $breadcrumbs->push('Pending Users', route('admin.users.activate'));
});

Breadcrumbs::register('admin.users.invite', function($breadcrumbs) {
    $breadcrumbs->parent('admin.users.list');
    $breadcrumbs->push('Invite User', route('admin.users.invite'));
});

// Clan-Interface

Breadcrumbs::register('clan.home', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Dashboard', route('clan.home', ["clan" => $subdomain]));
});

Breadcrumbs::register('clan.member', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Member', route('clan.member', ["clan" => $subdomain]));
});

Breadcrumbs::register('clan.member.show', function($breadcrumbs, $member) {
    // dd();
    $routeData = request()->route()->parameters();
    $breadcrumbs->parent('clan.member', $routeData['clan']->subdomain);
    $breadcrumbs->push($routeData['nickname'], route('clan.member.show', ["clan" => $routeData['clan']->subdomain, "nickname" => $routeData['nickname']]));
});
