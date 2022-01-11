<x-layout>
    <div class="card">
        <div class="card-header">
            Create user
        </div>
        <div class="card-body">
            <form action="/users" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                    @error('address')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                    @error('phone')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</x-layout>
