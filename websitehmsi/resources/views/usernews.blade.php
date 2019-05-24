@extends('usermaster')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-2" style="padding-left: 6em">
        <div class="zoom">
        <img src="/assets/save.png">
      </div>
      </div>
      <div class="col-lg-8">
        <br/>
        <h3 align-text="center">N E W S</h3>
      </div>
      <div class="col-lg-2">
        <br/>
        <p>INSTITUT <br/>TEKNOLOGI <br/> KALIMANTAN</p>
      </div>
    </div>
   </div>
    </div>
    <section>
      <br/>
          <div class="row">
            <div class="col-lg-2">
            </div>
        <div class="col-lg-8" style="background-color: white" >
          <img src="/assets/ITK.png" style="padding-left: 22em">
              <ul>
              @foreach($worldfeeds as $feed)
              <hr/>
                <div class="newwee" style="padding-left: 1em">
                  <strong style="font-size: 20px; text-align: justify">{{$feed->title}}</strong><br/>
                  <strong style="font-size: 10px">Tanggal: {{$feed->pubDate}}</strong><br/><br/>
                  <blockquote style="font-size: 15px; text-align: justify">{{ Str::limit(strip_tags($feed->description) , 350)}}</blockquote>
                  <strong style="font-size: 12px">Sumber: <a href="{{$feed->link}}">{{Str::limit($feed->link , 80)}}</a></strong>
                </div>

                @endforeach
              </ul>

          </div>
      </div>

      </section>













@endsection
