@extends('master')

@section('judul_halaman')


@section('konten')

<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-2" >

      </div>
      <div class="col-lg-8">
        <h3 align-text="center" style="font-size: 32px">Kalender Kegiatan Kemahasiswaan <br/> Himpunan Mahasiswa Sistem Informasi </h3>
      </div>
      <div class="col-lg-2">
      </div>
    </div>
   </div>
     </div>
<br/>
<div id='calendar'>
<br/>
<a class="btn btn-primary" href="/calendar/tambah"> + Data Kegiatan Baru</a>
</div>
<br/>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->name }}',
                    start : '{{ $task->task_date }}',
                     url : "/calendar/edit/{{ $task->id }}"

                },
                @endforeach
            ]
        })
    });
</script>






@endsection
