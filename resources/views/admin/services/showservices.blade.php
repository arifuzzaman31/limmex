<div class="row clearfix">
    <div class="col-md-12">
        <p class="align-left font-24">
            <b>{{$data->sort_description}}</b>
        </p>
        <div class="align-left">
            {{$data->description}}
        </div>
    </div>
</div>
<p class="font-bold m-t-35">fb-link</label>
@if($data->service_link)
	<p class="font-underline">{{$data->service_link}}</p>
@endif
