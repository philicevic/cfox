<?php

// Dashboard
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Dashboard', route('home'));
});

Breadcrumbs::register('notifications', function($breadcrumbs) {
  $breadcrumbs->push('Notifications', route('notifications'));
});

// Clan-Interface

Breadcrumbs::register('clan.home', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Dashboard', route('clan.home', ["clan" => $subdomain]));
});

Breadcrumbs::register('clan.member', function($breadcrumbs, $subdomain) {
    $breadcrumbs->push('Member', route('clan.member', ["clan" => $subdomain]));
});
