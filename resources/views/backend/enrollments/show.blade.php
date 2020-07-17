
  <div class="modal-header"
      style="
      width: 75%;
      margin: 0 auto;
      background: #fff;
      margin-top: 2%;
      ">
          <h3 class="modal-title" id="product-quickview">{{ $student->name }}</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"
        style="
        width: 75%;
        margin: 0 auto;
        background: #fff;
        ">
          <div class="card">
             <div class="card-header">
               <h5>Student Information</h5>
             </div>
             <div class="card-body">
               {{-- ----------------------------- --}}
               <div class="row">
                 <div class="col-md-2">
                  <h5>Name</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->name }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Email</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->email }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Phone</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->phone }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Occupation</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->occupation->name }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Age</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->age ?? '' }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Gender</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->gender }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Course</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->course_id }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Schedule</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->schedule->name }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Payment</h5>
                 </div>
                 <div class="col-md-10">
                   {{ $student->payment->name }}
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-2">
                  <h5>Description</h5>
                 </div>
                 <div class="col-md-10 text-justify">
                   {{ $student->description }}
                 </div>
               </div>
               {{-- ----------------------------- --}}
             </div>
            </div>
        </div>
        <div class="modal-footer"
        style="
        width: 75%;
        margin: 0 auto;
        background: #fff;
        ">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
