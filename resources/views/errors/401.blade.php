@extends('layouts.frontend.index')
@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="subpage-slide-blue">
            <div class="container">
                <h1>Уучлаарай энэ хуудас олдсонгүй</h1>
            </div>
        </div>
        <!-- banner end -->

         <!-- breadcrumb start -->
            <div class="breadcrumb-container">
                <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Нүүр хуудас</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Уучлаарай энэ хуудас олдсонгүй</li>
                  </ol>
                </div>
            </div>
        
        <!-- breadcrumb end -->
        
        
        <article class="container not-found-block">
            <div class="row">
               <div class="col-12 not-found-col">
                    <span><b>4<span class="blue">0</span>1</b></span>
                    <h3>Уучлаарай энэ хуудас олдсонгүй</h3>
                    <a href="{{ route('home') }}" class="btn btn-ulearn-cview mt-3">Нүүр хуудасруу буцах</a>
               </div>
            </div>
        </article>
    </div>    
        
    <!-- content end -->
@endsection