@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')
    Twoje grupy:
    <table>
        <tr>
            <td></td>
            <td>Liczba osób</td>
            <td>Środek transportu</td>
            <td>Wyślij maila</td>
            <td>Dodano dnia</td>
        </tr>
        <?php
        $protector = Auth::id();
        $index = 1;
        $group = Group::all();

        foreach ($group as $gr) {
            if ($gr->id_prot == $protector) {
                echo "<tr>
                    <td>
                    <a href=" . URL::to('/group/participantdetails') ."/" . $gr->id . ">Szczegóły
</td>
<td>
$gr->number_of_people
</td>
<td>$gr->mean_of_transport</td>
<td id = \"kopertaImage\"><a href =". URL::to('/group/message') ."/" . $gr->id . "><img style=\"margin:0px 17px\"src='/images/koperta.png'/> </td>
<td>$gr->created_at</td>
</tr>";
                //	echo ;
                //echo $gr->mean_of_transport;
            }
            $index += 1;
        }
        ?>
    </table>


@stop