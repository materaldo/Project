<!DOCTYPE html>

<HTML>
  <HEAD>
    <meta charset = "utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  </HEAD>
<BODY>
<?php $users = User::all(); ?>
<table>
 <tbody>
  <tr>
   <td>Created At</td>
   <td>Name</td>
   <td>Email</td>
  </tr>
  @foreach($users as $user)
  <tr>
   <td>{{$user['created_at']}}</td>
   <td>{{$user['username']}}</td>
   <td>{{$user['email']}}</td>
  </tr>
  @endforeach
 </tbody>
</table>

<a href="{{URL::route('export')}}"><button>Export</button></a>
	
</BODY>
</HTML>
