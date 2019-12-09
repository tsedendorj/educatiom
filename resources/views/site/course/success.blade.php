@extends('layouts.frontend.index')
@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="subpage-slide-blue">
            <div class="container">
                <h1>Захиалгын байдал</h1>
            </div>
        </div>
        <!-- banner end -->

         <!-- breadcrumb start -->
            <div class="breadcrumb-container">
                <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Нүүр хуудас</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Захиалгын байдал</li>
                  </ol>
                </div>
            </div>
        
        <!-- breadcrumb end -->
        
        
        <article class="container not-found-block">
            <div class="row">
               <div class="col-12 not-found-col">
                    @if($status == "success")
                        <span><i class="fas fa-thumbs-up"></i></span>
                        <h6 class="my-3">Таны гүйлгээ амжилттай боллоо  @if($transId !=0){{ ' and your transaction id is '.$transId }} @endif</h6>
                        <a href="{{ route('course.learn', $course->course_slug) }}" class="btn btn-ulearn-cview mt-3">Go to course learn page</a>
                    @else
                        <span><i class="fas fa-thumbs-down"></i></span>
                        <h6 class="my-3">Уучлаарай! Таны гүйлгээ амжилтгүй боллоо ...</h6>
                        <a href="{{ route('course.view', $course->course_slug) }}" class="btn btn-ulearn-cview mt-3">Return to course</a>
                    @endif
               </div>
            </div>
        </article>
        
        
    <!-- content end -->
@endsection
