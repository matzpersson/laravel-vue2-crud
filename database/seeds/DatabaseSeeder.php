<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeders::class);
        $this->call(JobsTableSeeders::class);
        $this->call(LookupStatusesTableSeeders::class);
    }
}
