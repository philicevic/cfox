<?php

// Dashboard
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Dashboard', route('home'));
});

Breadcrumbs::register('notifications', function($breadcrumbs) {
  $breadcrumbs->push('Notifications', route('notifications'));
});
