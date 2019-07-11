@extends('layouts.admin')
@section('content')

    <h1><center>Input Permasalahan</center></h1>

{!! Form::label('keterangan', 'Keterangan:') !!}


    <html>
    <body>
       <form action="" method="post" enctype="multipart/form-data">

         <table>
          <tr>
            <td>
              <input type="checkbox" name="techno[]" value="Aplikasi/sistem informasi"> Aplikasi/sistem informasi <br/>
              <input type="checkbox" name="techno[]" value="Perangkat lunak"> Perangkat lunak <br/>
              <input type="checkbox" name="techno[]" value="Perangkat keras"> Perangkat keras <br/>
              <input type="checkbox" name="techno[]" value="Jaringan komunikasi data"> Jaringan komunikasi data <br/>
            </td>
          </tr>
        </table>
       <tr>
          <td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>
       </tr>

    </div>
    </form>
    <?php
    if(isset($_POST['sub']))
    {
    $host="localhost";//host name
    $username="root"; //database username
    $word="";//database word
    $db_name="gilang2";//datanyaa
    $tbl_name="permasalahan"; //table name
    $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
    $checkbox1=$_POST['techno'];
    $chk="";
    foreach($checkbox1 as $chk1)
       {
          $chk .= $chk1.",";
       }
    $in_ch=mysqli_query($con,"insert into permasalahan(pilih) values ('$chk')");

    }
    ?>
    </body>
    </html>

    {!! Form::open(['method'=>'POST', 'action'=>'PermasalahanController@store','files'=>true]) !!}
    <div class = "form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.form-error')

@stop
