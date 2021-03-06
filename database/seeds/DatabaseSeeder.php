<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Tables that need to be truncated.
     *
     * @var array
     */
    protected $tables = [
        'blogs',
        'comments',
        'pages',
        'users',
    ];

    /**
     * Seeders that need to be called.
     *
     * @var array
     */
    protected $seeders = [
        'BlogsTableSeeder',
        'CommentsTableSeeder',
        'PagesTableSeeder',
        'UsersTableSeeder',
    ];

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass) {
            $this->call($seedClass);
        }
    }

    /**
     * Truncate all necessary database tables.
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {
            if (Schema::hasTable($table)) {
                DB::table($table)->truncate();
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
