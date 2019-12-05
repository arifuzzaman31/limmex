<section class="team-membar position-relative pt-125 pb-125 theme-bg" id="team">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">team member</h4>
                    <h1>Our Expert Team <br> Member </h1>
                </div>
            </div>
        </div>
        <div class="row">
        @if(count($team_members) > 0)
        @foreach($team_members as $team_member)
            <div class="col-xl-4 col-lg-4">
                <div class="single-team text-center pb-10 pt-10 pl-10 pr-10 bg-white">
                    <div class="team-bg position-relative" data-background="{{asset('images/team-member-image/'.$team_member->image)}}">
                        <div class="member-social-link">
                            <ul>
                                <li><a href="{{$team_member->fb_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="{{$team_member->tw_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="{{$team_member->in_link}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta pt-40 pb-40">
                        <h4>{{$team_member->name}}<span>{{$team_member->designation}}</span></h4>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </div>
</section>