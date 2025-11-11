<?php

// Disable encryption untuk production jika tidak diperlukan
// File ini di-load sebelum Laravel initialization

if (php_sapi_name() !== 'cli') {
    // Hanya untuk web requests, bukan CLI
    if (empty($_ENV['APP_KEY'])) {
        // Generate temporary key jika belum ada
        $_ENV['APP_KEY'] = 'base64:' . base64_encode(random_bytes(32));
    }
}
