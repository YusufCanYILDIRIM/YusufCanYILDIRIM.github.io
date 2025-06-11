<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Skills</h2>
        <div class="subheading mb-3">Programming Languages & Tools</div>
        <ul class="list-inline dev-icons">
            @foreach($skills->where('type', 'language')->merge($skills->where('type', 'tool')) as $skill)
                <li class="list-inline-item"><i class="{{ $skill->icon }}"></i></li>
            @endforeach
        </ul>
        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
            @foreach($skills->where('type', 'workflow') as $skill)
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    {{ $skill->name }}
                </li>
            @endforeach
        </ul>
    </div>
</section>
<hr class="m-0" />
