<?php

// Dashboard
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Dashboard', route('home'));
});

Breadcrumbs::register('notifications', function($breadcrumbs) {
  $breadcrumbs->push('Notifications', route('notifications'));
});

// Admin-Stuff
Breadcrumbs::register('admin.users.list', function($breadcrumbs) {
    $breadcrumbs->push('Active Users', route('admin.users.list'));
});
Breadcrumbs::register('admin.users.activate', function($breadcrumbs) {
    $breadcrumbs->push('Pending Users', route('admin.users.activate'));
});

// Clan-Interface

Breadcrumbs::register('clan.home', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Dashboard', route('clan.home', ["clan" => $subdomain]));
});

Breadcrumbs::register('clan.member', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Member', route('clan.member', ["clan" => $subdomain]));
});
