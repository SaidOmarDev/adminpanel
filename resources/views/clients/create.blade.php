<x-layout>
    <div class="card">
        <div class="card-header">
            Contact information
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Company information
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="company-name" class="form-label">Company name</label>
                    <input type="text" class="form-control" id="company-name" name="company-name">
                </div>
                <div class="form-group">
                    <label for="company-vat" class="form-label">Company vat</label>
                    <input type="text" class="form-control" id="company-vat" name="company-vat">
                </div>
                <div class="form-group">
                    <label for="company-address" class="form-label">Company address</label>
                    <input type="text" class="form-control" name="company-address" id="company-address">
                </div>
                <div class="form-group">
                    <label for="company-city" class="form-label">Company city</label>
                    <input type="text" class="form-control" name="company-city" id="company-city">
                </div>
                <div class="form-group">
                    <label for="company-zip" class="form-label">Company zip</label>
                    <input type="text" class="form-control" name="company-zip" id="company-zip">
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</x-layout>
