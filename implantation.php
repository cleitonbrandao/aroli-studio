<?php

require_once __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Migration de implatação
$migrations = [
    'database/migrations/2014_10_12_000000_create_users_table.php',
    'database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php',
    'database/migrations/2014_10_12_200000_add_two_factor_columns_to_users_table.php',
    'database/migrations/2019_08_19_000000_create_failed_jobs_table.php',
    'database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php',
    'database/migrations/2020_05_21_100000_create_teams_table.php',
    'database/migrations/2020_05_21_200000_create_team_user_table.php',
    'database/migrations/2020_05_21_300000_create_team_invitations_table.php',
    'database/migrations/2024_01_30_225216_create_sessions_table.php',
];

// Execute cada migration
foreach ($migrations as $migration) {
    $status = $kernel->call('migrate', ['--path' => $migration]);

    if ($status !== 0) {
        echo "Erro ao executar a migration: $migration\n";
        exit(1);
    }
}
exit(0);
