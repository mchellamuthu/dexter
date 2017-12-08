<?php

use Illuminate\Database\Seeder;
use App\Institute;
use Illuminate\Database\Eloquent\Model;

class InstitutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create(['institute_name'=>'Madras University',
          'institute_logo'=>'class1.png',
          'address'=>'32 East Street',
          'city'=>'Chennai',
          'state'=>'Tamilnadu',
          'country'=>'India',
          'post_code'=>'626123',
          'institute_type'=>'University',
          'user_id'=>'820b25e0-dbe6-11e7-b7c9-b1bcf2b7cd93',
        ]);
        Institute::create(['institute_name'=>'Kamarajar University',
          'institute_logo'=>'class2.png',
          'address'=>'33 West Street',
          'city'=>'Madurai',
          'state'=>'Tamilnadu',
          'country'=>'India',
          'post_code'=>'626123',
          'institute_type'=>'University',
          'user_id'=>'820b25e0-dbe6-11e7-b7c9-b1bcf2b7cd93',
        ]);
        Institute::create(['institute_name'=>'Aringar Anna Govt School',
          'institute_logo'=>'class3.png',
          'address'=>'Anna Nagar',
          'city'=>'Chennai',
          'state'=>'Tamilnadu',
          'country'=>'India',
          'post_code'=>'626123',
          'institute_type'=>'School',
          'user_id'=>'820b25e0-dbe6-11e7-b7c9-b1bcf2b7cd93',
        ]);
        Institute::create(['institute_name'=>'Panimalar Engineering & Technology',
          'institute_logo'=>'class4.png',
          'address'=>'Redhills',
          'city'=>'Chennai',
          'state'=>'Tamilnadu',
          'country'=>'India',
          'post_code'=>'626123',
          'institute_type'=>'College',
          'user_id'=>'820b25e0-dbe6-11e7-b7c9-b1bcf2b7cd93',
        ]);
    }
}
