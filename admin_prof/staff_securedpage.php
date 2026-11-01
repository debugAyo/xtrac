<?php
/**
 * Administrative dept Staff dashboard wrapper.
 * Same menu/dispatch as admin; role-based button gating is applied in
 * shared/auth_guard.php during the security hardening phase.
 */
$XTRAC_ROLE = 'staff';
require_once __DIR__ . '/../shared/dashboard.php';
