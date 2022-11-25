<x-backend.master>
    <x-slot name="title">
        Delivery list
    </x-slot>

    <div class="my-3 mx-5 py-3 px-5">

        @if (session('message'))
        <span class="text-success h3">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Delivery List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href=""><i class="bi bi-plus"></i> Add</a>
                <a class="btn btn-outline-danger my-2 float-end mx-1" href=""> Trash </a>
                <a class="float-end" href="">
                    <button type="button" class="btn btn-outline-secondary my-2">PDF</button>
                </a>
                <a class="float-end mx-1" href="">
                    <button type="button" class="btn btn-outline-secondary my-2 float-right">Excel</button>
                </a>
            </div>
        </div>
        <hr>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Delivery Date</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Arif</td>
                    <td>44551561</td>
                    <td>10/01/11</td>
                    <td>
                        <span class="badge bg-success">Delivered</span>
                        <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mridul</td>
                    <td>44551561</td>
                    <td>25/02/11</td>
                    <td>
                        <span class="badge bg-info text-dark">Pending</span>
                        <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Oishi</td>
                    <td>86157455</td>
                    <td>08/01/22</td>
                    <td>
                        <span class="badge bg-success">Delivered</span>
                        <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                    </td>
                </tr>
        </table>
    </div>
</x-backend.master>