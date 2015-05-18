<?php


class OthersTableSeeder extends Seeder 
{

    public function run()
    {
        Protector::create(['id'=>'3','first_name'=>'Micha³','last_name'=>'Nowak','date_of_birth'=>'22.12.1990','phone_number'=>'38473923427','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Group::create(['id_coun'=>'1','id_first_lang'=>'2', 'id_prot'=>'3', 'number_of_people'=>'22', 'mean_of_transport'=>'Autobus']);
		Participant::create(['id'=>'4','first_name'=>'Mateusz','last_name'=>'Kowalski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'1','id_coun'=>'1','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		
		
		


    }

}