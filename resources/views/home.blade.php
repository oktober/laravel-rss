@extends ('template')


@section ('content')
<!-- Header -->
    <header id="header">
        <a href="index.html" class="logo">intensify</a>
    </header>

<!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="actions vertical">
            <li><a href="#" class="button fit">Login</a></li>
        </ul>
    </nav>

<!-- Three 
    Use this section to pull in feed and show
-->
    <section id="three" class="wrapper">
        <div class="inner">
            <h1>Blog Feed</h1>
            <h2>{{ $rss_feed->title }}</h2>
        </div>
        <div class="inner flex flex-3">
            <?php $i=0; ?>
            @foreach ($rss_feed->entry as $entry)
                <div class="flex-item box">
                    <div class="content">
                        <h3><a href="{{ $entry->id }}" target="_blank">{{ $entry->title }}</a></h3>
                        <!-- TODO: Reduce summary to only a certain size -->
                        <p>{{ $entry->summary }}</p>
                    </div>
                </div>
            <?php
                $i++;
                if ($i>=3) break;
            ?>
            @endforeach
        </div>
    </section>


<!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2>Get In Touch</h2>
            <ul class="actions">
                <li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
                <li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
                <li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
            </ul>
        </div>
        <div class="copyright">
            &copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
        </div>
    </footer>

<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    @endsection