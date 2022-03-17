<section class="resume-section" id="interests">
    <div class="resume-section-content">
        <h2 class="mb-5">Interests</h2>
        @foreach ($interests as $interest)   
        <p class="mt-2">{{$interest->content}}</p>
        @endforeach
    </div>
</section>