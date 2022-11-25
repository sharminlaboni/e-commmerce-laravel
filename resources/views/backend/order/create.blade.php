<x-backend.master>
    <div class="container">
        <form action="" style="margin: auto;width: 30vw;">
            <div class="form-group" >
                <label class="form-label" for="customer_id">Customer Name</label>
                <input class="form-control" type="text" name="" id="customer_id">
            </div>
            <div class="form-group">
                <label class="form-label" for="address">Address</label>
                <input class="form-control" type="text" name="" id="address">
            </div>
            <div class="form-group">
                <label class="form-label" for="product_select">Select Product</label>
                <select class="form-control" name="" id="product_select">
                    <option value="1">Sergel</option>
                    <option value="2">Napa</option>
                    <option value="3">Tuffnil</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="quantity">Quantity</label>
                <input class="form-control" type="number" name="" id="quantity">
            </div>
            <input type="submit" value="Save" class="btn btn-primary mt-3">
        </form>
    </div>
</x-backend.master>
