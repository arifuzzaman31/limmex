<style type="text/css">

	body{padding-top:30px;}

	.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

	small {
	display: block;
	line-height: 1.428571429;
	color: #999;
	}
</style>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="well well-sm">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="{{URL::to('images/team-member-image/'.$data->image)}}" height="100" width="90" />
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>
                        {{$data->name}}</h4>
                   <cite title="{!!strtoupper($data->designation)!!}">{{$data->designation}}</cite>
                    <p>
                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                        <br />
                        <i class="glyphicon glyphicon-globe"></i><a href="#">www.jquery2dotnet.com</a>
                        <br />
                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                            Social</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span><span class="sr-only">Social</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{$data->tw_link}}">Twitter</a></li>
                            <li><a href="{{$data->in_link}}">LinkedIn</a></li>
                            <li><a href="{{$data->fb_link}}">Facebook</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Github</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
