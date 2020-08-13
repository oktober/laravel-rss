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
        </div>
        @foreach ($feeds as $feed)
        <div class="inner">
            <h2><a href="{{ $feed->site_url }}" target="_blank">{{ $feed->site_title }}</a></h2>
        </div>
        <div class="inner flex flex-3">
            @foreach ($feed->entries as $entry)
                <div class="flex-item box">
                    <div class="content">
                        <h3><a href="{{ $entry->entry_url }}" target="_blank">{{ $entry->entry_title }}</a></h3>
                        <p>{{ $entry->entry_teaser }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </section>

<!-- Original HTML for this section - remove when done setting up home page -->
    <section id="three" class="wrapper">
        <div class="inner flex flex-3">
            <div class="flex-item box">
                <div class="image fit">
                    <img src="images/pic02.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>Consequat</h3>
                    <p>Placerat ornare. Pellentesque od sed euismod in, pharetra ltricies edarcu cas consequat.</p>
                </div>
            </div>
            <div class="flex-item box">
                <div class="image fit">
                    <img src="images/pic03.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>Adipiscing</h3>
                    <p>Morbi in sem quis dui placerat Pellentesque odio nisi, euismod pharetra lorem ipsum.</p>
                </div>
            </div>
            <div class="flex-item box">
                <div class="image fit">
                    <img src="images/pic04.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>Malesuada</h3>
                    <p>Nam dui mi, tincidunt quis, accu an porttitor, facilisis luctus que metus vulputate sem magna.</p>
                </div>
            </div>
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