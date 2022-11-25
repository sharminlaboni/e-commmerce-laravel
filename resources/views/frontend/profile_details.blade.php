<x-frontend.master>
  <x-slot name="title">
    customer profile details Home
  </x-slot>
    
    <main>            
      <div class="card-registration mx-5 mt-5 p-5">
          
          <div class="row mx-5 bg-light">
            <div class="col-xl-4">
              <div class="row mb-5">
                  <div class="col-md-12" style="margin-top: 70px;">
                      <div class="card-body p-md-5 mt-5 bg-info text-light">
                        
                        <div class="col-md-4 border-right mb-3">
                            <img class="rounded-circle" width="150px" src="{{ url('/frontend/image/Sanny.jpg') }}" style="margin-left: 35px;">
                        </div>

                        <div class="m-3">
                          <h2><strong>Md Saiduzzaman</strong></h2>
                        </div>

                      </div>
                    </div>
                  </div>
              </div>

          <div class="col-xl-8">
              <div class="row mb-5">
                   <div class="col-md-12">
                      <div class="card-body p-md-5 text-black">
                              <div class="">
                                  <h3 class="mb-5 text-uppercase"><strong>Information</strong></h3>
                                  <table class="table ml-3">
                              
                                    <tbody>
                                        <tr>
                                            <td>First name</td>
                                            <td>Md</td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Last name</td>
                                          <td>Saiduzzaman</td>
                                      </tr>

                                          <tr>
                                              <td>Email</td>
                                              <td>saiduzzamanbu@gmail.com</td>
                                          </tr>

                                            <tr>
                                              <td>Address</td>
                                              <td>Zamzam Tower, Rasulbagh, <br> Mohakhali, Dhaka-1212</td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Phone No</td>
                                            <td>01830913687</td>
                                        </tr>
                                          
                                          <tr>
                                            <td>National ID</td>
                                            <td>19891919435000071</td>
                                        </tr>

                                          <tr>
                                              <td>City</td>
                                              <td>Dhaka</td>
                                          </tr>

                                        <tr>
                                          <td>Postal code</td>
                                          <td>1212</td>
                                        </tr> 

                                        <tr>
                                          <td>Gender</td>
                                          <td>Male</td>
                                      </tr>

                                        <tr>
                                          <td>Password</td>
                                          <td>12345</td>
                                      </tr>

                                        <tr>
                                          <td>Massage</td>
                                          <td>Lorem, ipsum dolor sit amet
                                            consectetur <br> adipisicing elit.
                                            Molestiae ex ad minus <br> rem
                                            odio voluptatem.</td>
                                        </tr>
                                
                                    </tbody>
                            </table>

                          </div>
                            <div class="text-center">
                              <p><a style="padding: 5px 100px;" href="{{ url('profile_update') }}" class="btn btn-lg btn-info btn-outline-light border-info mt-2"><strong>UPDATE</strong></a></p>
                          </div>

                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </main>
 
</x-frontend.master>
