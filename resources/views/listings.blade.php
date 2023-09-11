
{{-- PHP Template  --}}
{{-- <h1><?php echo $heading ?></h1>
<?php foreach ($listings as $listing) : ?>
    <h2><?php echo $listing['title'] ?></h2>
    <p><?php echo $listing['description'] ?></p>
<?php endforeach ?>
 --}}

{{-- Blade template --}}
<h1>{{$heading}}</h1>
@foreach($listings as $listing)
<a href="/listings/{{$listing['id']}}">{{$listing['title']}}<a>
<p>{{$listing['description']}}</p>
@endforeach