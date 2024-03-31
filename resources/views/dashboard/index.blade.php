@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 card tale-bg ">
             <div class="justify-content-end d-flex">
                <div class="card-body">
                    <h4 class="font-weight-bold">All Live Traffic</h4>
                <iframe src="https://admin.dishacompuworld.com/public/mapshow.htm?id=2104&mapid=76E3A94B-B1FD-46A2-93AE-1BBB934DEC0B" width="1200" height="300" style="border:none;"></iframe>
                </div>
             </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

