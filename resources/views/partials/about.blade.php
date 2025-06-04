<section class="resume-section" id="about">
    <div class="resume-section-content">
        @if(isset($profile))
            <h1 class="mb-0">
                {{ $profile->name }}
                <span class="text-primary">{{ $profile->title }}</span>
            </h1>
            <div class="subheading mb-5">
                {{ $profile->address }} · {{ $profile->phone }} ·
                <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
            </div>
            <p class="lead mb-5">{{ $profile->about }}</p>
            <div class="social-icons">
                @if($profile->linkedin)
                    <a class="social-icon" href="{{ $profile->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                @endif
                @if($profile->github)
                    <a class="social-icon" href="{{ $profile->github }}"><i class="fab fa-github"></i></a>
                @endif
                @if($profile->twitter)
                    <a class="social-icon" href="{{ $profile->twitter }}"><i class="fab fa-twitter"></i></a>
                @endif
                @if($profile->instagram)
                    <a class="social-icon" href="{{ $profile->instagram }}"><i class="fab fa-instagram"></i></a>
                @endif
            </div>
        @else
            <p>Profil bilgisi bulunamadı.</p>
        @endif
    </div>
</section>
<hr class="m-0" />
