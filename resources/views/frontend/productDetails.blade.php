<x-frontend.master>
  <x-slot name="title">
  </x-slot>


  <div aria-label="breadcrumb" style="background-color: rgb(212, 221, 220);">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}" style="text-decoration: none; margin-left: 30px;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Details</li>
    </ol>
  </div>

  <main>
    <div class="row m-5 px-5 bg-light">
      <div class="col-lg-4 col-md-4 col-sm-4 text-center my-4">
        <img style="height: 400px;" src="">
      </div>

      <div class="col-lg-8 col-md-8 col-sm-4 p-3">
        <h2 class="text-black"></h2>

        <h3>৳</h3>

        <div class="mb-4">
          <div class="input-group mb-3" style="max-width: 220px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-info js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-info js-btn-plus" type="button">&plus;</button>
            </div>
          </div>

        </div>
        <p>
          <a style="padding: 10px 100px;" href="{{ url('/order_cart') }}" class="btn btn-sm btn-info btn-outline-light border-info mt-3"><strong>ADD TO CART</strong></a>

        <p>
          <button class="btn btn-dark text-light px-5 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">SPECIFICATION</button>
        </p>

        <div class="row mb-5">
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <table class="table" style="width: 500px;">
                <tbody>
                  <tr>
                    <th scope="row">Medicine Category</th>
                    <td></td>
                  </tr>

                  <tr>
                    <th scope="row">Medicine Company</th>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <form action="">
        <div class="my-3">
          <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
          <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
        </div>
        <button class="btn btn-lg btn-info btn-outline-light border-info mb-3" type="submit">Comment</button>
      </form><hr>

      <div class="my-3">
        <h3>Md XYZ
          <small><mark>3 sec ago</mark></small>
        </h3>
        <h5>Good product</h5>
      </div>

      <div class="my-3">
        <h3>Md ABC
          <small><mark>5 sec ago</mark></small>
        </h3>
        <h5>Good product</h5>
      </div>
    </div>
  </main>

</x-frontend.master>
