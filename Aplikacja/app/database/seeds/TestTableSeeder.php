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
		
		$perm1 = new Permission; //admin, org
		$perm1->name = 'perm1';
		$perm1->display_name = 'AdminOrg';
		$perm1->save();
		
		$perm2 = new Permission; //admin
		$perm2->name = 'perm2';
		$perm2->display_name = 'Admin';
		$perm2->save();
		
		$perm3 = new Permission; //protector
		$perm3->name = 'perm3';
		$perm3->display_name = 'Protector';
		$perm3->save();
		
		$perm4 = new Permission; //participant
		$perm4->name = 'perm4';
		$perm4->display_name = 'Participant';
		$perm4->save();
		
		$roleOrganizer->perms()->sync(array($perm1->id));
		$roleAdmin->perms()->sync(array($perm2->id, $perm1->id));
		$roleProtector->perms()->sync(array($perm3->id));
		$roleParticipant->perms()->sync(array($perm4->id));

    }

}