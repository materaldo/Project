<?php


class TestTableSeeder extends Seeder 
{

    public function run()
    {
       
		DB::table('permission_role')->delete();
		DB::table('permissions')->delete();
		DB::table('assigned_roles')->delete();
		DB::table('participants')->delete();
		DB::table('groups')->delete();
		DB::table('protectors')->delete();
		DB::table('accommodations')->delete();
		DB::table('users')->delete();
		DB::table('roles')->delete();
		
		DB::unprepared("ALTER TABLE users AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE roles AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE permissions AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE permission_role AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE assigned_roles AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE groups AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE accommodations AUTO_INCREMENT = 1;");
		
		
		//User::create(['username'=>'admin', 'email'=>'admin@testowy123.pl', 'password'=>'admin123', 'confirmation_code'=>'j89j48fj389jf398jf839jd893j', 'confirmed' => '1']);
		//User::create(['username'=>'organizer', 'email'=>'organizer@testowy123.pl', 'password'=>'organizer123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		//User::create(['username'=>'protector', 'email'=>'protector@testowy123.pl', 'password'=>'protector123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		//User::create(['username'=>'participant', 'email'=>'participant@testowy123.pl', 'password'=>'participant123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		//User::create(['username'=>'superorganizer', 'email'=>'superorganizer@testowy123.pl', 'password'=>'superorganizer123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		
		$roleAdmin = Role::create(['name'=>'Admin']);
		//$roleAdmin = new Role;
		//$roleAdmin->name = 'Admin';
		//$roleAdmin->save();
		
		$roleOrganizer = Role::create(['name'=>'Organizer']);
		$roleProtector = Role::create(['name'=>'Protector']);
		$roleParticipant = Role::create(['name'=>'Participant']);
		$roleSuperOrg = Role::create(['name'=>'SuperOrganizer']);
		
		$admin = new User;
		$admin->username = 'admin';
        $admin->email = 'mateusz_1993_11_22@o2.pl';
        $admin->password = 'admin123';
        $admin->password_confirmation = 'admin123';
        $admin->confirmation_code = md5(uniqid(mt_rand(), true));
        $admin->confirmed = 1;
		$admin->save();
		
		$organizer = new User;
		$organizer->username='organizer';
        $organizer->email = 'asiaa0393@wp.pl';
        $organizer->password = 'organizer123';
        $organizer->password_confirmation = 'organizer123';
        $organizer->confirmation_code = md5(uniqid(mt_rand(), true));
        $organizer->confirmed = 1;
		$organizer->save();
		
		$protector = new User;
		$protector->username = 'protector';
        $protector->email = 'mlteusz_711@wp.pl';
        $protector->password = 'protector123';
        $protector->password_confirmation = 'protector123';
        $protector->confirmation_code = md5(uniqid(mt_rand(), true));
        $protector->confirmed = 1;
        $protector->save();
		
		$participant = new User;
		$participant->username = 'participant';
        $participant->email = 'participant@testowyemail.pl';
        $participant->password = 'participant123';
        $participant->password_confirmation = 'participant123';
        $participant->confirmation_code = md5(uniqid(mt_rand(), true));
        $participant->confirmed = 1;
		$participant->save();
		
		$superorg = new User;
		$superorg->username = 'superorg';
        $superorg->email = 'superorg@testowyemail.pl';
        $superorg->password = 'superorg123';
        $superorg->password_confirmation = 'superorg123';
        $superorg->confirmation_code = md5(uniqid(mt_rand(), true));
        $superorg->confirmed = 1;
		$superorg->save();
		
		$protector2 = new User;
		$protector2->username = 'protector2';
        $protector2->email = 'protector2@testowyemail.pl';
        $protector2->password = 'protector123';
        $protector2->password_confirmation = 'protector123';
        $protector2->confirmation_code = md5(uniqid(mt_rand(), true));
        $protector2->confirmed = 1;
        $protector2->save();
		
		$participant2 = new User;
		$participant2->username = 'participant2';
        $participant2->email = 'participant2@testowyemail.pl';
        $participant2->password = 'participant123';
        $participant2->password_confirmation = 'participant123';
        $participant2->confirmation_code = md5(uniqid(mt_rand(), true));
        $participant2->confirmed = 1;
		$participant2->save();
		
		$participant3 = new User;
		$participant3->username = 'participant3';
        $participant3->email = 'participant3@testowyemail.pl';
        $participant3->password = 'participant123';
        $participant3->password_confirmation = 'participant123';
        $participant3->confirmation_code = md5(uniqid(mt_rand(), true));
        $participant3->confirmed = 1;
		$participant3->save();
		
		$participant4 = new User;
		$participant4->username = 'participant4';
        $participant4->email = 'participant4@testowyemail.pl';
        $participant4->password = 'participant123';
        $participant4->password_confirmation = 'participant123';
        $participant4->confirmation_code = md5(uniqid(mt_rand(), true));
        $participant4->confirmed = 1;
		$participant4->save();
			
		$admin->attachRole($roleAdmin);
		$organizer->attachRole($roleOrganizer);
		$protector->attachRole($roleProtector);
		$protector2->attachRole($roleProtector);
		$participant->attachRole($roleParticipant);
		$participant2->attachRole($roleParticipant);
		$participant3->attachRole($roleParticipant);
		$participant4->attachRole($roleParticipant);
		$superorg->attachRole($roleSuperOrg);
		
		$management = new Permission;
		$management->name = 'management';
		$management->display_name = 'Zarzadzanie';
		$management->save();
		
		$roleAdmin->perms()->sync(array($management->id));
		$roleOrganizer->perms()->sync(array($management->id));
		
		
		//kolejny seed po jezykach i krajach
		//Protector::create(['id'=>'3','first_name'=>'Michał','last_name'=>'Nowak','date_of_birth'=>'22.12.1990','phone_number'=>'38473923427','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		//Group::create(['id_coun'=>'1','id_first_lang'=>'2', 'id_prot'=>'3', 'number_of_people'=>'22', 'mean_of_transport'=>'Autobus']);
		//Participant::create(['id'=>'4','first_name'=>'Mateusz','last_name'=>'Kowalski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		

    }

}