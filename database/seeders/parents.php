<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModeloParent;
use Illuminate\Support\Facades\Hash;

class parents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $smP = new User; 
        $smP->name = "Richard Parker";
        $smP->gender = "Male";
        $smP->save();
    
        $smM = new User; 
        $smM->name = "Mary Parker";
        $smM->gender = "Female";
        $smM->save();

        $batmanM = new User; 
        $batmanM->name = "Martha Wayne";
        $batmanM->gender = "Female";
        $batmanM->save();

        $batmanP = new User; 
        $batmanP->name = "Martha Wayne";
        $batmanP->gender = "Female";
        $batmanP->save();
     

        $IMP = new User; 
        $IMP->name = "Howard Stark";
        $IMP->gender = "Male";
        $IMP->save();

        $IMM = new User; 
        $IMM->name = "Maria Stark";
        $IMM->gender = "Female";
        $IMM->save();

        $CKP = new User; 
        $CKP->name = "Jonathan Kent";
        $CKP->gender = "Male";
        $CKP->save();

        $CKM = new User; 
        $CKM->name = "Martha Kent";
        $CKM->gender = "Female";
        $CKM->save();
    }
}
