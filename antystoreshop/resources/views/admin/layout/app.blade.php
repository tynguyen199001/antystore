@include('admin.layout.include.header')
@include('admin.layout.include.sidebar')
<section id="main-content">
	<section class="wrapper">
    @yield('content')
</section>
@include('admin.layout.include.footer')

