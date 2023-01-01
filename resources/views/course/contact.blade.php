@extends('course.layout.template')

@section('container')
<div class="contact-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="contactheading">
                <h3>contact Us</h3>
             </div>
          </div>
       </div>
    </div>
 </div>
       <!-- section -->
       <section class="layout_padding">
          <div class="container">
            
             
             
             <div class="row">
                <div class="col-md-12">
                   <div class="full comment_form">
                      <form action="index.html">
                         <fieldset>
                            <div class="col-md-12">
                               <div class="row">
                                  <div class="col-md-6">
                                     <input type="text" name="name" placeholder="Name" required="#" />
                                     <input type="email" name="email" placeholder="Email" required="#" />
                                      <input type="text" name="subject" placeholder="subject" required="#" />
                                  </div>
                                  <div class="col-md-6">
                                     <textarea class="wdt" placeholder="Comment"></textarea>
                                  </div>
                               </div>
                               <div class="row margin_top_30">
                                  <div class="col-md-12">
                                     <div class="center">
                                        <button>Send</button>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- end section -->
 
       <section>
          <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12" style="padding: 0;">
                    <div class="map_section">
                      <div id="map">
                      </div>
                    </div>
                 </div>
             </div>
          </div>
       </section>
 
@endsection