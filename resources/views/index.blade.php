@include('partials.head')
<body id="page-top">
    @include('partials.navbar')
    <div class="container-fluid p-0">
        @include('partials.about')
        @include('partials.experience')
        @include('partials.education')
        @include('partials.skills')
        @include('partials.interests')
        @include('partials.awards')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('tamplete/js/scripts.js') }}"></script>
</body>
</html>
