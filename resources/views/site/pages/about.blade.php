@extends('layouts.frontend.index')
@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="subpage-slide-blue">
            <div class="container">
                <h1>Тухай</h1>
            </div>
        </div>
        <!-- banner end -->
        
        <!-- breadcrumb start -->
            <div class="breadcrumb-container">
                <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Нүүр хуудас</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Тухай</li>
                  </ol>
                </div>
            </div>
        
        <!-- breadcrumb end -->
        
        {!! Sitehelpers::get_option('pageAbout', 'content') !!}
@endsection

@section('javascript')
<script type="text/javascript">

</script>
@endsection