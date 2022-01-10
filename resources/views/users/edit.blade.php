<x-layout>
    <div class="card">
        <div class="card-header">
            Update user
        </div>
        <div class="card-body">
            <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    @error('name')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" {{ $user->address }}>
                    @error('address')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone }}">
                    @error('phone')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</x-layout>
