<div class="col-sm-10 col-md-7 col-lg-4">
    <div class="dashboard-widget mb-30 mb-lg-0">
        <div class="user">
            @if ($user->image)

            <div class="thumb-area">
                <div class="thumb">
                    <img src="assets/images/dashboard/user.png" alt="user">
                </div>
                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                <input type="file" id="profile-pic" class="d-none">
            </div>
            @endif
            <div class="content">
                <h5 class="title"><a href="#0">{{$user->name}}</a></h5>
                <span class="username">{{$user->email}}</span>
            </div>
        </div>
        <ul class="dashboard-menu">
            <li>
                <a href="{{route('dashboard.index')}}" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{route('profile')}}"><i class="flaticon-settings"></i>Personal Profile </a>
            </li>
            <li>
                <a href="my-bid.html"><i class="flaticon-auction"></i>My Bids</a>
            </li>
            <li>
                <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Winning Bids</a>
            </li>
            <li>
                <a href="notifications.html"><i class="flaticon-alarm"></i>My Alerts</a>
            </li>
            <li>
                <a href="my-favorites.html"><i class="flaticon-star"></i>My Favorites</a>
            </li>
            <li>
                <a href="referral.html"><i class="flaticon-shake-hand"></i>Referrals</a>
            </li>
        </ul>
    </div>
</div>
