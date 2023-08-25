<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitVisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $this->truncate(VisitVisitor::class);
        $visitors = DB::table('users')->join('roles', 'roles.id', '=', 'users.role_id')->where('roles.roleName', "Visitor")->get();
    }
}
