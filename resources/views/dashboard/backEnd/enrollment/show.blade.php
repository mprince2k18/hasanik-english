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