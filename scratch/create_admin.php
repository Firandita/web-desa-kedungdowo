<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$user = \App\Models\User::updateOrCreate(
    ['email' => 'admin@kedungdowo.desa.id'],
    [
        'name' => 'Admin Desa Kedungdowo',
        'password' => \Illuminate\Support\Facades\Hash::make('password'),
    ]
);

echo "Admin User berhasil dibuat / diperbarui:\n";
echo "Email    : " . $user->email . "\n";
echo "Password : password\n";
