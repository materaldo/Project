@extends('layouts.default')

@section('header')

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
            <td>Edycja grupy</td>
            <td>Dodaj uczestników</td>
            <td>Dodano dnia</td>
        </tr>
        <?php
        $protector = Auth::id();
        $index = 1;
        //echo $protector;
        //$group = Group::select('select * from groups where id_prot = $protector', array(1));
        $group = Group::all();

        foreach ($group as $gr) {
            if ($gr->id_prot == $protector) {
                echo "<tr>
                    <td>
                    <a href=http://zpi.dev/index.php/group/message/" . $gr->id . ">Wiadomość grupowa
</td>
<td>
$gr->number_of_people
</td>
<td>$gr->mean_of_transport</td>
<td><a href=http://zpi.dev/index.php/group/edit/" . $gr->id . ">Kliknij by edytować</td>
<td><a href=http://zpi.dev/index.php/participant/add/" . $gr->id . ">Dodaj uczestników</td>
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