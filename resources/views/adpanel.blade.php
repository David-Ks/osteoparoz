@extends('layouts.base')

@section('content')
	<script type="text/javascript" src="js/adminPanel.js"></script>
	<div class="just-line"></div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="{{route('home')}}">Home</a>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	      </ul>
	      <div class="d-flex">
	        <a href="{{route('logout')}}"><button type="button" class="btn btn-light">Log out</button></a>
	      </div>
	    </div>
	  </div>
	</nav>

	<section class="admin-panel text-center">
		<h1><span class="admin">Ադմինիստրատորի վահանակ</span></h1>
		<hr class="w-60">
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Կոնտակտներ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Թիմ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Նորություններ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Ծառայություններ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Պատկերասրահ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6" aria-controls="offcanvasBottom">Տեսանյութեր</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom7" aria-controls="offcanvasBottom">Կարգավորումներ</button></p>
		<p><button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom8" aria-controls="offcanvasBottom">Սոց. կայքեր</button></p>
	</section>

	<div style="padding: 100px;">
		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Կոնտակտներ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small">
		    @include('forms.contact')
		  </div>
		</div>

		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Թիմ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.team')
		  </div>
		</div>

		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Նորություններ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.news')
		  </div>
		</div>
	
		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Ծառայություններ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.service')
		  </div>
		</div>

		
		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Պատկերասրահ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.gallery')
		  </div>
		</div>

		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom6" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Տեսանյութեր</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.video')
		  </div>
		</div>

		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom7" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Կարգավորումներ</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.settings')
		  </div>
		</div>

		<div class="offcanvas offcanvas-end" style="width: 70%;" tabindex="-1" id="offcanvasBottom8" aria-labelledby="offcanvasBottomLabel">
		  <div class="offcanvas-header">
		    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Սոց. կայքեր</h5>
		    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		  </div>
		  <div class="offcanvas-body small w-100" style="overflow-wrap: break-word;">
		   @include('forms.social')
		  </div>
		</div>
	</div>
@endsection