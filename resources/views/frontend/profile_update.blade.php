<x-frontend.master>
  <x-slot name="title">
    customer profile update Home
  </x-slot>
    
    <main>            
      <div class="card-registration mx-5 mt-5 p-5">
          <div class="row mx-5 bg-light">
              
                  <div class="col-xl-4">
                  <div class="row mb-5">
                      <div class="col-md-12">
                          <div class="card-body p-md-5 text-black mt-5">
                      
                                  <h3 class="mb-5 text-uppercase text-center">UPDATE PROFILE</h3>
                                  
                                  <div class="col-md-3 border-right mb-3" style="padding-left: 50px;">
                                          <img class="rounded-circle text-center" width="150px" src="{{ url('/frontend/image/Sanny.jpg') }}">
                                      
                                  </div>

                                  <form>
                                      <div class="mx-5">
                                          <input type="file" id="myFile" name="filename">
                                      </div>
                                    </form>

                          </div>
                      </div>
                      </div>
                  </div>

              <div class="col-xl-8 col-md-6 col-sm-4">
                  <div class="card-body p-md-5 text-black">
                      
                          <div class="row">                       
                              <div class="col-lg-6 col-md-6 col-sm-4 mb-3">                        
                                  <div class="first-name">
                                  <label class="form-label" for="name">First name</label>
                                  <input type="text" id="name" placeholder="Md" class="form-control form-control-lg" />
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                                  <div class="last-name">
                                    <label class="form-label" for="name">Last name</label>
                                  <input type="text" id="name" placeholder="Saiduzzaman" class="form-control form-control-lg" />
                                  </div>
                              </div>
                          </div>
                      
                          <div class="email mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" placeholder="saiduzzamanbu@gmail.com" class="form-control form-control-lg" />
                          </div>
                          
                          <div class="address mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" id="address" placeholder="Zamzam Tower, Rasulbagh, Mohakhali, Dhaka-1212" class="form-control form-control-lg" />
                        </div>

                        <div class="row">                       
                          <div class="col-lg-6 col-md-6 col-sm-4 mb-3">  
                            <div class="phone">
                              <label class="form-label" for="phone">Phone Number</label>
                              <input type="number" id="phone" placeholder="01830913687" class="form-control form-control-lg" />
                              </div>
                          </div>                         

                          <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                            <div class="nationalId mb-4">
                              <label class="form-label" for="nationalId">National ID</label>
                              <input type="text" id="nationalId" placeholder="19891919435000071" class="form-control form-control-lg" />
                            </div>
                          </div>
                        </div>
                      
                      <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                          <div class="city">
                            <label class="form-label" for="nane">City</label>
                              <input type="text" id="name" placeholder="Dhaka" class="form-control form-control-lg" />
                          </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                              <div class="postalCode">
                                <label class="form-label" for="postalCode">Postal code</label>
                                <input type="number" id="postalCode" placeholder="Dhaka" class="form-control form-control-lg" />
                              </div>
                          </div>
                      </div>
                    
                      <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">
            
                        <h6 class="me-4">Gender: </h6>
    
                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>
    
                        <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                        </div>                        
    
                        <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                        <label class="form-check-label" for="otherGender">Other</label>
                        </div>
    
                    </div>         

                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                              <div class="password">
                                <label class="form-label" for="password">Password</label>
                                  <input type="password" id="password" placeholder="sanny" class="form-control form-control-lg" />
                                
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-4 mb-3">
                              <div class="password">
                                <label class="form-label" for="password">Confirm Password</label>
                                  <input type="password" id="password" placeholder="sanny" class="form-control form-control-lg" />
                                  
                              </div>
                          </div>
                      </div>
                      
                          <div class="comment">
                            <label class="form-label" for="comment">Massage</label>
                              <textarea name="comment" id="comment" 
                              placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit.Molestiae ex ad minus remodio voluptatem."
                               class="form-control form-control-lg"></textarea>
                            
                          </div>

                          <div class="text-center">
                              <p><a style="padding: 10px 100px;" href="{{ url('profile_details') }}" class="btn btn-sm btn-info btn-outline-light border-info mt-4"><strong>UPDATE CONFIRM</strong></a></p>
                          </div>

                  </div>
              </div>





          </div>
      </div>
  </main>

</x-frontend.master>
