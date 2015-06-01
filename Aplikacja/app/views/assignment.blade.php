     @extends('layouts.default')
 
@section('header')
 
        {{App::setLocale(Session::get('lang', 'pl'));}}
        <meta name="Description" content="" />
        <meta name="Keywords" content="" />
 
@stop
 
@section('content')
<h2>AKTUALNY PRZYDZIAŁ MIEJSC NOCLEGOWYCH</h2>
<table>
<?php
        $groups=Group::where('confirmed', '=', true)->get();
       
        foreach ($groups as $gr)
        {
                $country=Country::where('id', '=', $gr->id_coun)->first();
                $prot=Protector::where('id', '=', $gr->id_prot)->first();
                $participants = Participant::where('id_gr', '=', $gr->id)->get();
                $acc=Accommodation::where('id', '=', $prot->id_acco)->first();
 
                if (isset($acc)) {
                echo "<tr><td colspan=\"3\" style=\"background-color:#CCCCCC\"><h4>Grupa " . $gr->id . ", " . $country->country . ", " . $gr->number_of_people . " członków</h4></td></tr>" .
                "<tr><td style=\"min-width:35px\" align=\"center\"><b>" . $prot->id .
                                        "</td><td style=\"min-width:150px\"><b>" . $prot->first_name . " " . $prot->last_name .
                                        "</b></td><td style=\"min-width:150px\"><b>" . (isset($prot->id_acco)? Accommodation::where('id', '=', $prot->id_acco)->first()->name : "brak") . "</b></td></tr>";
               
                foreach ($participants as $part)
                {
                        $acc=Accommodation::where('id', '=', $part->id_acco)->first();
                        echo    "<tr><td style=\"min-width:35px\" align=\"center\">" . $part->id .
                                        "</td><td style=\"min-width:150px\">" . $part->first_name . " " . $part->last_name .
                                        "</td><td style=\"min-width:150px\">" . (isset($part->id_acco)? Accommodation::where('id', '=', $part->id_acco)->first()->name : "brak") . "</td></tr>";
                }
                }
        }      
?>
</table>
<a href="{{URL::to('/management')}}">Powrót</a>
 
@stop