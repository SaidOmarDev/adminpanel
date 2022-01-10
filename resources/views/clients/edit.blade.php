<x-layout>
    <form action="/clients/{{ $client->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                Contact information
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="contact_name" value="{{ $client->contact_name }}">
                    @error('contact_name')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="contact_email" value="{{ $client->contact_email }}">
                    @error('contact_email')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="contact_phone" value="{{ $client->contact_phone }}">
                    @error('contact_phone')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
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
                    <input type="text" class="form-control" id="company-name" name="company_name" value="{{ $client->company_name }}">
                    @error('company_name')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company-vat" class="form-label">Company vat</label>
                    <input type="text" class="form-control" id="company-vat" name="company_vat" value="{{ $client->company_vat }}">
                    @error('vompany_vat')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company-address" class="form-label">Company address</label>
                    <input type="text" class="form-control" id="company-address" name="company_address" value="{{ $client->company_address }}">
                    @error('company_address')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company-city" class="form-label">Company city</label>
                    <input type="text" class="form-control" id="company-city" name="company_city" value="{{ $client->company_city }}">
                    @error('company_city')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company-zip" class="form-label">Company zip</label>
                    <input type="text" class="form-control" id="company-zip" name="company_zip" value="{{ $client->company_zip }}">
                    @error('company_zip')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </div>
    </form>
</x-layout>
