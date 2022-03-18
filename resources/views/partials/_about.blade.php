<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            {{$profile->first_name}}
            <span class="text-primary">{{$profile->last_name}}</span>
        </h1>
        <div class="subheading mb-5">
            {{$profile->address}} ·   {{$profile->phone}} ·
            <a href="mailto:name@email.com">  {{$profile->email}}</a>
        </div>
        <p class="lead mb-5">  {{$profile->bio}}</p>
        <div class="social-icons">
            <a class="social-icon" href="{{$profile->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="  {{$profile->github}}"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="  {{$profile->twitter}}"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="  {{$profile->facebook}}"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</section>