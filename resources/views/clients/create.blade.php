<x-layout>
    <form action="/clients" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                Contact information
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="contact_name">
                    @error('contact_name')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="contact_email">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="contact_phone">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Company information
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="company-name" class="form-label">Company name</label>
                    <input type="text" class="form-control" id="company-name" name="company_name">
                </div>
                <div class="form-group">
                    <label for="company-vat" class="form-label">Company vat</label>
                    <input type="text" class="form-control" id="company-vat" name="company_vat">
                </div>
                <div class="form-group">
                    <label for="company-address" class="form-label">Company address</label>
                    <input type="text" class="form-control" id="company-address" name="company_address">
                </div>
                <div class="form-group">
                    <label for="company-city" class="form-label">Company city</label>
                    <input type="text" class="form-control" id="company-city" name="company_city">
                </div>
                <div class="form-group">
                    <label for="company-zip" class="form-label">Company zip</label>
                    <input type="text" class="form-control" id="company-zip" name="company_zip">
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </div>
    </form>
</x-layout>
