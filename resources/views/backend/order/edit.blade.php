<x-backend.master>
    <div class="container">
        <form action="" style="margin: auto;width: 30vw;">
            <div class="form-group">
                <label class="form-label" for="customer_id">Customer Name</label>
                <input class="form-control" type="text" name="" id="customer_id" value="md. sojib">
            </div>
            <div class="form-group">
                <label class="form-label" for="address">Address</label>
                <input class="form-control" type="text" name="" id="address" value="gulsan,road-8,house27">
            </div>
            <div class="form-group">
                <label class="form-label" for="product_select">Select Product</label>
                <select class="form-control" name="" id="product_select" multiple>
                    <option value="1" selected>Sergel</option>
                    <option value="2">Napa</option>
                    <option value="3">Tuffnil</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="quantity">Quantity</label>
                <input class="form-control" type="number" name="" id="quantity" value="25">
            </div>
            <input type="submit" value="Update" class="btn btn-info mt-3">
        </form>
    </div>
</x-backend.master>
