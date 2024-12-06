<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card p-5">
                <h3>EDIT CONTACT</h3>
                <hr>
                <form wire:submit="edit" novalidate>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" wire:model="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="email">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" wire:model="phone">
                        @error('phone')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button class="btn btn-success px-5">Save</button>
                        <a href="{{ route('home') }}" class="btn btn-danger px-5">Cancel</a>
                    </div>

                </form>
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center mt-3">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
