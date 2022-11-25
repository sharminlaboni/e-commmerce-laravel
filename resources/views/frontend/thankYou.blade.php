<x-frontend.master>
  <x-slot name="title">
    Thank You Home
  </x-slot>

  <main>
    <div class="thank" style="text-align: center; margin: 100px; padding: 30px;">
      <i class="fa-solid fa-check bg-success p-3 text-light" style="border-radius: 50%; font-size: 60px;"></i>
      <h1 class="m-3" style="font-size: 60px;">Thank You!</h1>
      <p>Your order was successfully completed.</p>
      <a href="{{ url('/home') }}" class="btn btn-md btn-info btn-outline-light border-info px-5 py-2 mt-2">CONTINUE SHOPPING</a>

    </div>
  </main>

</x-frontend.master>