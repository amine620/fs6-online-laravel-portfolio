<section class="resume-section" id="education">
    <div class="resume-section-content">
        <h2 class="mb-5">Education</h2>

        @foreach ($educations as $education)
            
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">{{$education->school_name}}</h3>
                <div class="subheading mb-3">{{$education->degree}}</div>
                <div>{{$education->matter}}</div>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">{{ date('F j, Y', strtotime($education->start_date))}} -    {{ date('F j, Y', strtotime($education->end_date))}}</span></div>
        </div>
        @endforeach
       
    </div>
</section>