<?php


class TestTableSeeder extends Seeder 
{

    public function run()
    {
       
		DB::table('assigned_roles')->delete();
		DB::table('participants')->delete();
		DB::table('groups')->delete();
		DB::table('protectors')->delete();
		DB::table('users')->delete();
		DB::table('roles')->delete();
		
		DB::unprepared("ALTER TABLE users AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE roles AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE assigned_roles AUTO_INCREMENT = 1;");
		DB::unprepared("ALTER TABLE groups AUTO_INCREMENT = 1;");
		
		User::create(['username'=>'admin', 'email'=>'admin@testowy123.pl', 'password'=>'admin123', 'confirmation_code'=>'j89j48fj389jf398jf839jd893j', 'confirmed' => '1']);
		 User::create(['username'=>'organizer', 'email'=>'organizer@testowy123.pl', 'password'=>'organizer123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		 User::create(['username'=>'protector', 'email'=>'protector@testowy123.pl', 'password'=>'protector123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		 User::create(['username'=>'participant', 'email'=>'participant@testowy123.pl', 'password'=>'participant123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		 User::create(['username'=>'superorganizer', 'email'=>'superorganizer@testowy123.pl', 'password'=>'superorganizer123', 'confirmation_code'=>md5(uniqid(mt_rand(), true)), 'confirmed' => '1']);
		
		$role1 = Role::create(['name'=>'Admin']);
		$role2 = Role::create(['name'=>'Organizer']);
		$role3 = Role::create(['name'=>'Protector']);
		$role4 = Role::create(['name'=>'Participant']);
		$role5 = Role::create(['name'=>'SuperOrganizer']);
		
	/*	
		$user1->attachRole($role1);
		$user2->attachRole($role2);
		$user3->attachRole($role3);
		$user4->attachRole($role4);
		$user5->attachRole($role5);
	
		Protector::create(['id'=>'3','first_name'=>'Michał','last_name'=>'Nowak','date_of_birth'=>'22.12.1990','phone_number'=>'38473923427','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Group::create(['id_coun'=>'1','id_first_lang'=>'2', 'id_prot'=>'3', 'number_of_people'=>'22', 'mean_of_transport'=>'Autobus']);
		Participant::create(['id'=>'4','first_name'=>'Mateusz','last_name'=>'Kowalski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
	*/	

    }

}